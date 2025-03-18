<?php

namespace App\Controllers;
use App\Models\AnggotaModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function cekStatus()
    {
        $nik = $this->request->getPost('nik');
        
        // Validasi input NIK
        if (!$nik) {
            return redirect()->to('/')->with('error', 'Harap masukkan NIK.');
        }

        $model = new AnggotaModel();
        $anggota = $model->where('nik', $nik)->first();

        if ($anggota) {
            return redirect()->to('/ktam/detail/' . $nik);
        } else {
            return redirect()->to('/')->with('error', 'NIK tidak ditemukan.');
        }
    }

    public function detail($nik)
    {
        $model = new AnggotaModel();
        $anggota = $model->where('nik', $nik)->first();

        if (!$anggota) {
            return redirect()->to('/')->with('error', 'Data anggota tidak ditemukan.');
        }

        return view('detail_status', ['anggota' => $anggota]);
    }
}
