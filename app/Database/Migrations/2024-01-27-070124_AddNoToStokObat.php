<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNoToStokObat extends Migration
{
    public function up()
    {
        $this->forge->addColumn('stok_obat', [
            'no' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('stok_obat', 'no');
    }
}
