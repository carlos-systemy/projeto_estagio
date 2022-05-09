<?php
 

class cursodbModel{
    private $conexao;

    public function __construct()
    {
       $dsn="mysql:host=localhost:3306; dbname=estagio"; 

       $this->conexao = new PDO($dsn, 'root','');
    }
    public function insert_curso(cursoModel $model_curso)
    {
        $sql ="INSERT INTO cursos(nome_curso, professor, descricao) VALUES (?,?,?)";
        $stmt_curso = $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $model_curso->nome_curso);
        $stmt_curso->bindValue(2, $model_curso->professor);
        $stmt_curso->bindValue(3, $model_curso->descricao);
        

        $stmt_curso->execute();
        header("Location: /cursos");
    }


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

    public function select_curso()
    {
        $sql = "SELECT * FROM  cursos";
        $stmt_curso = $this->conexao->prepare($sql);

        $stmt_curso->execute();

        return $stmt_curso->fetchAll(PDO::FETCH_CLASS);
    }


    public function selectByid_curso(int $id)
    {
        include_once'model/rdn/CursoModel.php';
        
        $sql = "SELECT * FROM  cursos WHERE id=?";
        $stmt_curso = $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $id);
        $stmt_curso->execute();

        return $stmt_curso->fetchObject("cursoModel");

    }

    public function delete_curso(int $id)
    {
        $sql = "DELETE FROM cursos WHERE id = ?";
        $stmt_curso = $this->conexao->prepare($sql);
        $stmt_curso->bindValue(1, $id);
        $stmt_curso->execute();

    }

 }

?>