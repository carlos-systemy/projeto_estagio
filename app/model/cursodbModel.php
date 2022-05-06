<?php

class cursodbModel{
    private $conexao_curso;
    public function __construct()
    {
       $dsn="mysql:host=localhost:3306; dbname=estagio"; 

       $this->conexao = new PDO($dsn, 'root','');
    }
    public function insert(cursodbModel $model_curso)
    {
        $sql ="INSERT INTO cursos (nome_curso, professor, descricao) VALUES (?,?,?)";
        $stmt_curso = $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $model_curso->nome_curso);
        $stmt_curso->bindValue(2, $model_curso->professor);
        $stmt_curso->bindValue(3, $model_curso->descricao);
        
        $stmt_curso->execute();
        header("Location: /aluno");
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM cursos WHERE id = ?";
        $stmt_curso= $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $id);
        $stmt_curso->execute();

    }
}




?>