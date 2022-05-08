<?php
include_once 'model/CursodbModel.php';
class cursoModel
{

    public $id, $nome_curso, $professor, $descricao;
    public $rows;
    
    public function save()
    {
        

        $db = new cursodbModel();
        
        if(empty($this->id)){
        
            $db->insert_curso($this);
        }else{
            $db->update_curso($this);
        }

    }

    public function getAllRows()
    {
        

        $db = new cursodbModel();

        $this->rows = $db->select_curso();
    }

    public function getById(int $id)
    {
        

        $db = new cursodbModel();

        $obj =$db->selectByid_curso($id);

            if($obj)
            {
                    return $obj;
            }else{
                return new cursoModel;
            }
        
    }
    public function delete(int $id)
    {
        
        $db = new cursodbModel;
        $db->delete_curso($id);
    }


}

?>