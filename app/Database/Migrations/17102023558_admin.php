<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class Admim extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'user_type' => [
                'type' => 'ENUM("admin","user")',
                "default"=> "user",
                'null' => false,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}