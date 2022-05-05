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

    public function select()
    {
        $sql = "SELECT * FROM  aluno";
        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    public function selectByid(int $id)
    {
        include_once'model/alunoModel.php';
        
        $sql = "SELECT * FROM  aluno WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("alunoModel");

    }

    public function delete(int $id)
    {
        $sql = "DELETE * FROM  aluno WHERE id =?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }

 }

?>