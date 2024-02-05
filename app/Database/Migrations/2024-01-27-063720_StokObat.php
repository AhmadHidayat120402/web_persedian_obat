<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StokObat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],

            'no'       => [
                'type'           => 'INT',
            ],

            'nama_obat'       => [
                'type'           => 'VARCHAR',
                'constraint' => 255,

            ],
            'satuan'     => [
                'type'           => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga_jual'     => [
                'type'           => 'INT'
            ],
            'tanggal_masuk'     => [
                'type'           => 'DATETIME'
            ],
            'stok'     => [
                'type'           => 'INT'
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('stok_obat');
    }

    public function down()
    {
        $this->forge->dropTable('stok_obat');
    }
}
