<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Praktikum extends BaseController
{
    public function pretest()
    {
        return "Pretest Web Programming";
    }

    public function profil()
    {
        return view('profil');
    }

    public function simpan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');

        $builder->insert([
            'nim'  => '32602300021',
            'nama' => 'Faishal Anwar Hasyim',
            'prodi'=> 'Teknik Informatika'
        ]);

        return "Data berhasil dimasukkan.";
    }

    public function tampil()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $data['mahasiswa'] = $builder->get()->getResultArray();

        return view('tampil_mahasiswa', $data);
    }
}
