<?php


include_once'model/rdn/AlunoModel.php';

    class alunoController
{
    
    

    public static function home(){
        
        include 'views/index.php';
    }


    public static function list(){
        
        
        $model = new alunoModel();
        $model->getAllRows();
        include 'views/aluno/listAluno.php';
    }
    public static function form()
    {
        
        $model = new alunoModel();
        if(isset($_GET['id']))
        $model = $model->getById((int) $_GET['id']);
        //var_dump($model);
        include 'views/aluno/formAluno.php';
        
    }
    public static function save(){
        
        
        $model = new alunoModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->endereco = $_POST['endereco'];
        $model->idade = $_POST['idade'];
        $model->cod_curso = $_POST['cod_curso'];

        $model->save();
        header("Location:/aluno");
    }
    public static function delete(){
        
        $model = new alunoModel();
        $model->delete((int)$_GET['id']);
        header("Location:/aluno");

    }




}
?>



