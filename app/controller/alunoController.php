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
        
        $model = new alunoModel();

        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->endereco = $_POST['endereco'];
        $model->idade = $_POST['idade'];
        $model->cod_curso = $_POST['cod_curso'];

        $model->save();
    }
    public static function delete(){
        include'model/alunoModel.php';

    }




}
?>