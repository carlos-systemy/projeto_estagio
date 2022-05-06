<?php

class cursoModel{


    public $id, $nome_curso, $professor, $descricao;
    public $rows_cursos;
    
    public function getAllRows()
    {
        include'model/cursodbModel.php';

        $db = new cursodbModel();

        $this->rows = $db->select();
    }


}




?>