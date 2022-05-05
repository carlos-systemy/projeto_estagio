<?php

class alunoModel
{

    public $id, $nome, $cpf, $idade, $endereco, $cod_curso;
    public $rows;

    public function save()
    {
        include'/projeto/proj_estagio/app/model/alunodbModel.php';

        $db = new alunodbModel();

        $db->insert($this);
    }

    public function getAllRows()
    {
        include'model/alunodbModel.php';

        $db = new alunodbModel();

        $this->rows = $db->select();
    }




}

?>