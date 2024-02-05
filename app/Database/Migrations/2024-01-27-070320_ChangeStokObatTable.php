<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChangeStokObatTable extends Migration
{
    public function up()
    {
        // Hapus kolom no terlebih dahulu
        $this->forge->dropColumn('stok_obat', 'no');

        // Tambahkan kembali kolom no setelah id
        $this->forge->addColumn('stok_obat', [
            'no' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'id',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('stok_obat', 'no');
    }
}
