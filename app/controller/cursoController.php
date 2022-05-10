<?php
include_once'model/rdn/CursoModel.php';



    class cursoController
{
 


    public static function list_curso(){
        
        
        $model_curso = new cursoModel();
        $model_curso->getAllRows();
        include 'views/curso/listCurso.php';
    }
     /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form_curso()
    {
        
        $model_curso = new cursoModel();
        if(isset($_GET['id']))// Verificando se existe uma variável $_GET
        $model_curso = $model_curso->getById((int) $_GET['id']);// Typecast e obtendo o model preenchido vindo do alunodbModel
        
        include 'views/curso/formCurso.php';
        
    }
     /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save_curso(){
          // objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
        
        $model_curso = new cursoModel();

        $model_curso->id= $_POST['id'];
        $model_curso->nome_curso = $_POST['nome_curso'];
        $model_curso->professor = $_POST['professor'];
        $model_curso->descricao = $_POST['descricao'];
       

        $model_curso->save();
        header("Location:/cursos");
    }
     /**
     * Método para tratar a rota delete. 
     */
    public static function delete_curso(){
        
        $model_curso = new cursoModel();
        $model_curso->delete((int)$_GET['id']); // Enviando a variável $_GET como inteiro para o método delete
        header("Location:/cursos");// redirecionando o usuário para outra rota.

    }




}
?>


