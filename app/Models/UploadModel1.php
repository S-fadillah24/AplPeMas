<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UploadModel1 extends Model
{
    protected $table;
 
    public function __construct() {
 
        parent::__construct();
        $db = \Config\Database::connect();
        $this->table = $this->db->table('pengaduan');
    }
 
    public function get_uploads1()
    {
        return $this->table->get()->getResultArray();
    }
    public function insert_gambar($data)
    {
        return $this->table->insert($data);
    }
} 