<?php namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    public function getData() {
        $result = $this->db->query('SELECT * FROM projekte');
        return $result->getResultArray();
    }
}