<?php




    class alunoController
{



    public static function index(){
        include'model/alunoModel.php';
        
        $model = new alunoModel();
        $model->getAllRows();
        include 'views/mod/aluno/listAluno.php';
    }
    public static function form()
    {
        include 'model/alunoModel.php';
        $model = new alunoModel();
        if(isset($_GET['id']))
        $model = $model->getById((int) $_GET['id']);
        //var_dump($model);
        include 'views/mod/aluno/formAluno.php';
        
    }
    public static function save(){
        include 'model/alunoModel.php';
        
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
        include'model/alunoModel.php';
        $model = new alunoModel();
        $model->delete((int)$_GET['id']);
        header("Location:/aluno");

    }




}
?>