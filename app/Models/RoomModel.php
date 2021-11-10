<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table      = 'rooms';
    protected $allowedFields = ['number', 'class', 'slug', 'floor', 'status'];
    protected $useTimestamps = true;

    public function getRoom($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
