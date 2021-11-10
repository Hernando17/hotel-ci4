<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Books extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'number'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'checkin'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'checkout'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
