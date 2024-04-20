<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChangeStokObatTable extends Migration
{
    public function up()
    {
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
