<?php
include_once 'model/AlunodbModel.php';
class alunoModel
{

    public $id, $nome, $cpf, $idade, $endereco, $cod_curso;
    /**
     * Propriedade que armazenará o array retornado do alunodbModel com a listagem dos alunos.
     */
    public $rows;

    public function save()
    {
       

        $db = new alunodbModel();

        if (empty($this->id)) {

            $db->insert($this);
        } else {
            $db->update($this);
        }
    }
   /* $rows será acessado e possibilitará listar os registros vindos do banco de dados*/
   public function getAllRows()
   {
   // Instância do objeto e conexão no banco de dados via construtor
       $db = new alunodbModel();
   // Abastecimento da propriedade $rows com as "linhas" vindas do MySQL
       $this->rows = $db->select();
   }
/**
     * esse é o metodo que encapsula o acesso ao método selectById da do Alunodbmodel
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * um ser recuperador do MySQL.
     */
    public function getById(int $id)
    {
        

        $db = new alunodbModel(); // Obtendo um model preenchido da camada alunodbModel

        $obj = $db->selectByid($id);

        if ($obj) {
            return $obj;
        } else {
            return new alunoModel; // Retornando um objeto específico AlunoModel
        }
    }

    public function delete(int $id)
    {
        
        $db = new alunodbModel;
        $db->delete($id);
    }
}
