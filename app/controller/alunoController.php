<?php


include_once'model/rdn/AlunoModel.php';
/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 */
    class alunoController
{
    
    

    public static function home(){
        
        include 'views/index.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }


    public static function list(){
        
        
        $model = new alunoModel();
        $model->getAllRows();
        include 'views/aluno/listAluno.php';
    }
     /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
        
        $model = new alunoModel();
        if(isset($_GET['id']))// Verificando se existe uma variável $_GET
        $model = $model->getById((int) $_GET['id']); // Typecast e obtendo o model preenchido vindo do alunodbModel
        //var_dump($model);
        include 'views/aluno/formAluno.php';
        
    }
       /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save(){
        
         // objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
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
    /**
     * Método para tratar a rota delete. 
     */
    public static function delete(){
        
        $model = new alunoModel();
        $model->delete((int)$_GET['id']); // Enviando a variável $_GET como inteiro para o método delete

        header("Location:/aluno"); // redirecionando o usuário para outra rota.
    

    }




}
?>



