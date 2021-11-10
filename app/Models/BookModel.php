<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table      = 'books';
    protected $allowedFields = ['number', 'name', 'slug', 'checkin', 'checkout'];
    protected $useTimestamps = true;

    public function getBook($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
