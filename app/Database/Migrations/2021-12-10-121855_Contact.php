<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>false,
                'auto_increment'=>true
            ],
            'fname'=>[
                'type'=>'VARCHAR',
                'constraint'=>50,
                'null'=>false,
            ],
            'lname'=>[
                'type'=>'VARCHAR',
                'constraint'=>10,
                'null'=>true,
            ],
            'country'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>false,
            ],
            'contact'=>[
                'type'=>'VARCHAR',
                'constraint'=>10,
                'null'=>false,
            ],
            'subject'=>[
                'type'=>'VARCHAR',
                'constraint'=>200,
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

        $this->forge->addKey('id','true');
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}
