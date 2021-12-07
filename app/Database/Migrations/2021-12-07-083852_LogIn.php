<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LogIn extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'=>[
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
                ],
            'password'=>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ]]);
        $this->forge->addKey('id');
        $this->forge->createTable('login_users');
    }

    public function down()
    {
        $this->forge->dropTable('login_users');
    }
}
