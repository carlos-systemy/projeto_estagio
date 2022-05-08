<?php
include_once'model/rdn/CursoModel.php';



    class cursoController
{
 


    public static function list_curso(){
        
        
        $model_curso = new cursoModel();
        $model_curso->getAllRows();
        include 'views/curso/listCurso.php';
    }
    public static function form_curso()
    {
        
        $model_curso = new cursoModel();
        if(isset($_GET['id']))
        $model_curso = $model_curso->getById((int) $_GET['id']);
        
        include 'views/curso/formCurso.php';
        
    }
    public static function save_curso(){
        
        
        $model_curso = new cursoModel();

        $model_curso->id= $_POST['id'];
        $model_curso->nome_curso = $_POST['nome_curso'];
        $model_curso->professor = $_POST['professor'];
        $model_curso->descricao = $_POST['descricao'];
       

        $model_curso->save();
        header("Location:/cursos");
    }
    public static function delete_curso(){
        
        $model_curso = new cursoModel();
        $model_curso->delete((int)$_GET['id']);
        header("Location:/cursos");

    }




}
?>


