<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ObatMasuk extends Migration
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
            'tanggal_masuk'     => [
                'type'           => 'DATETIME'
            ],
            'harga_beli'     => [
                'type'           => 'INT'
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('obat_masuk');
    }

    public function down()
    {
        $this->forge->dropTable('obat_masuk');
    }
}
