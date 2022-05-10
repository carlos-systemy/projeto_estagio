<?php
include_once 'model/CursodbModel.php';
class cursoModel
{

    public $id, $nome_curso, $professor, $descricao;
    /**
     * Propriedade que armazenará o array retornado do alunodbModel com a listagem dos cursos.
     */
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
/* $rows será acessado e possibilitará listar os registros vindos do banco de dados*/
    public function getAllRows()
    {
        

        $db = new cursodbModel();

        $this->rows = $db->select_curso();
    }
/**
     * esse é o metodo que encapsula o acesso ao método selectById da do cursodbmodel
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * um ser recuperador do MySQL.
     */
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