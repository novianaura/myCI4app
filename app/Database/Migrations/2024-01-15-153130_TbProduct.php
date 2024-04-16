<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbProduct extends Migration
{
    public function up()
    {
        //list field
        $this->forge->addField([
            'kd_product'        =>[
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'auto_increment' => TRUE
            ],
            'name'        =>[
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'price'        =>[
                'type'           => 'float',
            ],
            'created_at'        =>[
                'type'           => 'DATETIME',
            ],
            'updated_at'        =>[
                'type'           => 'DATETIME',
            ],
            'deleted_at'        =>[
                'type'           => 'DATETIME',
            ],
        ]);
        //primary key
        $this->forge->addKey('kd_product', TRUE);
        //nama tabel
        $this->forge->createTable('tb_product');
        }

    public function down()
    {
        $this ->forge->dropTable('tb_product');
    }
}
