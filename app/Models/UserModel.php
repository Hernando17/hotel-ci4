<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $allowedFields = ['username', 'password', 'jenis_kelamin', 'nik', 'slug', 'level'];
    protected $useTimestamps = true;

    public function getUser($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
