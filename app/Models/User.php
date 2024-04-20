<?php

namespace App\Models;

use CodeIgniter\Model;

// class User extends Model
// {
//     protected $table            = 'users';
//     protected $primaryKey       = 'id';
//     protected $useAutoIncrement = true;
//     protected $returnType       = 'array';
//     protected $useSoftDeletes   = false;
//     protected $protectFields    = true;
//     protected $allowedFields    = ['username', 'password'];

//     protected bool $allowEmptyInserts = false;

//     // Dates
//     protected $useTimestamps = false;
//     protected $dateFormat    = 'datetime';
//     protected $createdField  = 'created_at';
//     protected $updatedField  = 'updated_at';
//     protected $deletedField  = 'deleted_at';

//     // Validation
//     protected $validationRules      = [];
//     protected $validationMessages   = [];
//     protected $skipValidation       = false;
//     protected $cleanValidationRules = true;

//     // Callbacks
//     protected $allowCallbacks = true;
//     protected $beforeInsert   = [];
//     protected $afterInsert    = [];
//     protected $beforeUpdate   = [];
//     protected $afterUpdate    = [];
//     protected $beforeFind     = [];
//     protected $afterFind      = [];
//     protected $beforeDelete   = [];
//     protected $afterDelete    = [];
// }


class User extends Model
{
    public function get_data($username, $password)
    {
        $user = $this->db->table('users')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();

        // Periksa apakah data pengguna ditemukan
        if ($user) {
            // Periksa peran pengguna
            if ($user['role'] == 'admin' || $user['role'] == 'pemilik') {
                return $user; // Pengguna valid, kembalikan data pengguna
            } else {
                return null; // Peran pengguna tidak valid
            }
        } else {
            return null; // Data pengguna tidak ditemukan
        }
    }
    //--------------------------------------------------------------------

}
