<?php
 

class cursodbModel{
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
    public function insert_curso(cursoModel $model_curso)
    {
        
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare


        $sql ="INSERT INTO cursos(nome_curso, professor, descricao) VALUES (?,?,?)";
         // Declaração da variável stmt que conterá a montagem da consulta.
         //acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
        $stmt_curso = $this->conexao->prepare($sql);
         //  os bindValue são responsáveis por receber um valor e trocar em uma 
        // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
        // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
        // via seta qual dado do model queremos pegar para a posição em questão.
        $stmt_curso->bindValue(1, $model_curso->nome_curso);
        $stmt_curso->bindValue(2, $model_curso->professor);
        $stmt_curso->bindValue(3, $model_curso->descricao);
        

        $stmt_curso->execute();
        header("Location: /cursos");
    }

    /**
     * Método que recebe o Model preenchido e atualiza no banco de dados.
     * Note que neste model é necessário ter a propriedade id preenchida.
     */
    public function update_curso(cursoModel $model_curso)
    {
        $sql ="UPDATE cursos SET nome_curso=?, professor=?, descricao=? WHERE id=?";
        $stmt_curso = $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $model_curso->nome_curso);
        $stmt_curso->bindValue(2, $model_curso->professor);
        $stmt_curso->bindValue(3, $model_curso->descricao);
        $stmt_curso->bindValue(4, $model_curso->id);
        $stmt_curso->execute();
 
    }
    /**
     * Método que retorna todas os registros da tabela pessoa no banco de dados.
     */
    public function select_curso()
    {
        // Retorna um array com as linhas retornadas da consulta. 
        // o array é um array de objetos.  
        // foram criados automaticamente pelo método fetchAll do PDO.
        $sql = "SELECT * FROM  cursos";
        $stmt_curso = $this->conexao->prepare($sql);

        $stmt_curso->execute();

        return $stmt_curso->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Retorna um registro específico da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function selectByid_curso(int $id)
    {
        include_once'model/rdn/CursoModel.php';
        
        $sql = "SELECT * FROM  cursos WHERE id=?";
        $stmt_curso = $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $id);
        $stmt_curso->execute();

        return $stmt_curso->fetchObject("cursoModel");// Retornando um objeto específico cursoModel

    }
    /**
     * Remove um registro da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function delete_curso(int $id)
    {
        $sql = "DELETE FROM cursos WHERE id = ?";
        $stmt_curso = $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $id);
        $stmt_curso->execute();

    }

 }

?>