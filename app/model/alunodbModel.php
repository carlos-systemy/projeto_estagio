<?php
 

class alunodbModel{
    private $conexao;

    public function __construct()
    {
       $dsn="mysql:host=localhost:3306; dbname=estagio"; 

       $this->conexao = new PDO($dsn, 'root','');
    }
    public function insert(alunoModel $model)
    {
        $sql ="INSERT INTO aluno(nome, cpf, endereco, idade,cod_curso) VALUES (?,?,?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->endereco);
        $stmt->bindValue(4, $model->idade);
        $stmt->bindValue(5, $model->cod_curso);

        $stmt->execute();
        header("Location: /aluno");
    }


    public function update()
    {

    }


    public function select()
    {

    }


 }

?>