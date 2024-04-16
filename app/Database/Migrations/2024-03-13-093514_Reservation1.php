<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reservation1 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
            'type'      => 'INT',
            'constraint'=> 11,
            'unsigned'  => true,
            'auto_increment' => true,
            ],

            'nama' =>[
                'type' => 'VARCHAR',
                'constraint' =>'200',
            ],

            'no_telp' =>[
                'type' => 'VARCHAR',
                'constraint' =>'50',
            ],

            'jumblah_orang' =>[
                'type' => 'INT',
                'constraint' =>'11',
            ],

            'tgl_reservasi' =>[
                'type' => 'DATE',
            ],

            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ]
            ]);
            
        $this->forge->addPrimaryKey('id');
        
        $this->forge->createTable('reservation1');
    }

    public function down()
    {
        $this->forge->dropTable('reservation1');
    }
}
