<?php

class alunoModel
{

    public $id, $nome, $cpf, $idade, $endereco, $cod_curso;
    public $rows;

    public function save()
    {
        include'model/alunodbModel.php';

        $db = new alunodbModel();
        
        if(empty($this->id)){
        
            $db->insert($this);
        }else{
            $db->update($this);
        }

    }

    public function getAllRows()
    {
        include'model/alunodbModel.php';

        $db = new alunodbModel();

        $this->rows = $db->select();
    }

    public function getById(int $id)
    {
        include'model/alunodbModel.php';

        $db = new alunodbModel();

        $obj =$db->selectByid($id);

            if($obj)
            {
                    return $obj;
            }else{
                return new alunoModel;
            }
        
    }
    public function delete(int $id)
    {
        include 'model/alunodbModel.php';
        
        $db = new alunodbModel;
        $db->delete($id);
    }


}

?>