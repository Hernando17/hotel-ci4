<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table      = 'messages';
    protected $allowedFields = ['name', 'phone', 'email', 'message', 'slug'];
    protected $useTimestamps = true;

    public function getMessage($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
