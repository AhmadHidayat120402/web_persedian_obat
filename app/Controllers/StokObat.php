<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StokObat as ModelsStokObat;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Validation;

class StokObat extends BaseController
{
    public function index()
    {
        $stokObat = new ModelsStokObat();
        $data['stok_obat'] = $stokObat->findAll();
        echo view('stok_obat/index', $data);
    }

    public function create()
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules(['no' => 'required', 'nama_obat' => 'required', 'satuan' => 'required', 'harga_jual' => 'required', 'tanggal_masuk' => 'required', 'stok' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid maka simpan ke dalam database
        if ($isDataValid) {
            $stokObat = new ModelsStokObat();
            $stokObat->insert([
                "no" => $this->request->getPost('no'),
                "nama_obat" => $this->request->getPost('nama_obat'),
                "satuan" => $this->request->getPost('satuan'),
                "harga_jual" => $this->request->getPost('harga_jual'),
                "tanggal_masuk" => $this->request->getPost('tanggal_masuk'),
                "stok" => $this->request->getPost('stok'),
            ]);

            return redirect('admin/stok-obat');
        }

        echo view('stok-obat/create');
    }


    public function edit($id)
    {
        $stok_obat = new ModelsStokObat();
        $data['stok_obat'] = $stok_obat->where('id', $id)->first();

        // lakukan validasi datanya
        $validation = \Config\Services::validation();
        $validation->setRules(['no' => 'required', 'nama_obat' => 'required', 'satuan' => 'required', 'harga_jual' => 'required', 'tanggal_masuk' => 'required', 'stok' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, maka simpan ke dalam database
        if ($isDataValid) {
            $stok_obat->update($id, [
                "no" => $this->request->getPost('no'),
                "nama_obat" => $this->request->getPost('nama_obat'),
                "satuan" => $this->request->getPost('satuan'),
                "harga_jual" => $this->request->getPost('harga_jual'),
                "tanggal_masuk" => $this->request->getPost('tanggal_masuk'),
                "stok" => $this->request->getPost('stok'),
            ]);
            return redirect('admin/stok-obat');
        }

        // tampilkan form edit
        echo view('stok-obat/edit', $data);
    }

    public function delete($id)
    {
        $stokObat = new ModelsStokObat();
        $stokObat->delete();
        return redirect('admin/stok-obat');
    }
}
