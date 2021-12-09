<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;


class AddNews extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'null' => false,
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'null' => false,
            ],
            'body'       => [
                'type'       => 'TEXT',
                'null' => false,
            ],
            'user_id'=>[
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'status'=>[
                'type'=>'ENUM',
                'constraint'=>['published','pending'],
                'null'=>true
            ],
            'created_at'=>[
                'type'=>'datetime',
            ],
            'updated_at'=>[
                'type'=>'datetime'
            ],
            'image'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('slug', false);
        $this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }

}
