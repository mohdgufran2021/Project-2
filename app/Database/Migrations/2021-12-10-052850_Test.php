<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Test extends Migration
{
    public function up()
    {
        $this->forge->addField
        ([
           'id'=>[
               'type'=>'INT',
               'constraint'=>50,
               'null'=>false,
               'auto_increment'=>true,
               'unsigned'=>true
           ],
            'name'=>[
                'type'=>'VARCHAR',
                'constraint'=>2,
                'null'=> false
            ],
            'image'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>true
            ],
            'created_at'=>[
                'type'=>'datetime',
                'null'=>true
            ],
            'updated_at'=>[
                'type'=>'datetime',
                'null'=>true
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('testusers');
    }

    public function down()
    {
        $this->forge->dropTable('testusers');
    }
}
