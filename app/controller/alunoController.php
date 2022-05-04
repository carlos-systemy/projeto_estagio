<?php




    class alunoController
{



    public static function index(){

        include 'views/mod/aluno/listAluno.php';
    }
    public static function form(){

        include 'views/mod/aluno/formAluno.php';
    }
    public static function save(){
        include'model/alunoModel.php';
        var_dump($_POST);

    }public static function delete(){
        include'model/alunoModel.php';

    }




}
?>