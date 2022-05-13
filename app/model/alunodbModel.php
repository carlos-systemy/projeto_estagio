<?php
 

class alunodbModel{
     /**
     *  Propriedade da classe destinado a armazenar o link 
     * de conexão com o banco de dados.
     */
    private $conexao;
        /**
        *O function_construct abre uma conexão com o MySQL (Banco de dados)
        * A conexão é aberta via PDO (PHP Data Object) que é um recurso da linguagem para
        * acesso a diversos SGBDs.
        */
    public function __construct()
    {
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        // (host) em qual porta o MySQL está operado e qual o nome do banco pretendido
       $dsn="mysql:host=localhost:3306; dbname=projeto"; 
         // Criando a conexão e armazenado na propriedade definida para tal
       $this->conexao = new PDO($dsn, 'root','');
    }
        /**
        * Método que recebe um model e extrai os dados do model para realizar o insert
        * na tabela correspondente ao model. 
        */
    public function insert(alunoModel $model)
    { 
        
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare

        $sql ="INSERT INTO aluno(nome, cpf, endereco, idade,cod_curso) VALUES (?,?,?,?,?)";

        // Declaração da variável stmt que conterá a montagem da consulta.
        //acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.

        $stmt = $this->conexao->prepare($sql);

        //  os bindValue são responsáveis por receber um valor e trocar em uma 
        // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
        // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
        // via seta qual dado do model queremos pegar para a posição em questão.

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->endereco);
        $stmt->bindValue(4, $model->idade);
        $stmt->bindValue(5, $model->cod_curso);

        $stmt->execute();
        header("Location: /aluno");
    }

        /**
         * Método que recebe o Model preenchido e atualiza no banco de dados.
         * Note que neste model é necessário ter a propriedade id preenchida.
         */
    public function update(alunoModel $model)
    {
        $sql ="UPDATE aluno SET nome=?, cpf=?, endereco=?, idade=?,cod_curso=? WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->endereco);
        $stmt->bindValue(4, $model->idade);
        $stmt->bindValue(5, $model->cod_curso);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();

    }
        /**
         * Método que retorna todas os registros da tabela pessoa no banco de dados.
         */
    public function select()
    {
        $sql = "SELECT * FROM  aluno";
        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();
        // Retorna um array com as linhas retornadas da consulta

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
        /**
         * Retorna um registro específico da tabela pessoa do banco de dados.
         * o método exige um parâmetro $id do tipo inteiro.
         */

    public function selectByid(int $id)
    {
        include_once'model/rdn/AlunoModel.php';
        
        $sql = "SELECT * FROM  aluno WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("alunoModel");// Retornando um objeto específico alunoModel

    }
        /**
         * Remove um registro da tabela pessoa do banco de dados.
         * Note que o método exige um parâmetro $id do tipo inteiro.
         */
        
    public function delete(int $id)
    {
        $sql = "DELETE FROM aluno WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }

 }
