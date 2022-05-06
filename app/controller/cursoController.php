<?php



class cursoController{



    public static function index_curso(){
        include'model/alunoModel.php';
        
        $model = new alunoModel();
        $model->getAllRows();
        include 'views/mod/curso/listCurso.php';
    }
    
}





?>