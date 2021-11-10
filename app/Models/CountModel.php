<?php



namespace App\Models;



use CodeIgniter\Model;



class CountModel extends Model

{

    public function tot_book()

    {
        return $this->db->table('books')->countAll();
    }
    public function tot_room()

    {
        return $this->db->table('rooms')->countAll();
    }
}
