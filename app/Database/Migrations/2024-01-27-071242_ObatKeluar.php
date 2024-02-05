<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ObatKeluar extends Migration
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
            'jumlah'     => [
                'type'           => 'INT'
            ],
            'tanggal_keluar'     => [
                'type'           => 'DATETIME'
            ],
            'harga_jual'     => [
                'type'           => 'INT'
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('obat_keluar');
    }

    public function down()
    {
        $this->forge->dropTable('obat_keluar');
    }
}
