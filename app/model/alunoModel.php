<?php

class alunoModel
{

    public $id, $nome, $cpf, $idade, $endereco, $cod_curso;
    public $rows;

    public function save()
    {
        include'model/databaseModel.php';

        $db = new databaseModel();
        
        if(empty($this->id)){
        
            $db->insert($this);
        }else{
            $db->update($this);
        }

    }

    public function getAllRows()
    {
        include'model/databaseModel.php';

        $db = new databaseModel();

        $this->rows = $db->select();
    }

    public function getById(int $id)
    {
        include'model/databaseModel.php';

        $db = new databaseModel();

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
        include 'model/databaseModel.php';
        $db = new databaseModel;
        $db->delete($id);
    }


}

?>