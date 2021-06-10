<?php
namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model{

    public function listar(){
        $model = $this->db->query('SELECT * FROM registros');
        return $model->getResult();
    }
}