<?php

namespace App\Controllers;

use App\Models\KtamModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class Ktam extends BaseController
{
    public function index(): string
    {
        return view('ktam/ktam_list');
    }

    public function getData()
    {
        $model = new KtamModel();
        $data = $model->findAll();
        return $this->response
                ->setHeader('Content-Type', 'application/json')
                ->setJSON(['data' => $data]);
    }

    public function store()
    {
        $model = new KtamModel();
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang	' => $this->request->getPost('gelar_belakang'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'alamat' => $this->request->getPost('alamat'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kota' => $this->request->getPost('kota'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'daerah' => $this->request->getPost('daerah'),
            'cabang' => $this->request->getPost('cabang'),
            'email' => $this->request->getPost('email'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'profesi' => $this->request->getPost('profesi'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'riwayat_sd' => $this->request->getPost('riwayat_sd'),
            'riwayat_smp' => $this->request->getPost('riwayat_smp'),
            'riwayat_sma' => $this->request->getPost('riwayat_sma'),
            'riwayat_diploma' => $this->request->getPost('riwayat_diploma'),
            'riwayat_s1' => $this->request->getPost('riwayat_s1'),
            'riwayat_s2' => $this->request->getPost('riwayat_s2'),
            'riwayat_s3' => $this->request->getPost('riwayat_s3'),
            'pernah_belajar_ponpes' => $this->request->getPost('pernah_belajar_ponpes'),
            'bahasa_indonesia' => $this->request->getPost('bahasa_indonesia'),
            'bahasa_arab' => $this->request->getPost('bahasa_arab'),
            'bahasa_inggris' => $this->request->getPost('bahasa_inggris'),
            'bahasa_lainnya' => $this->request->getPost('bahasa_lainnya'),
            'organisasi_dikuti' => $this->request->getPost('organisasi_dikuti'),
            'pas_foto' => $this->request->getPost('pas_foto'),
            'bukti_bayar' => $this->request->getPost('bukti_bayar'),
            'surat_rekomendasi' => $this->request->getPost('surat_rekomendasi'),
            'status_bayar' => $this->request->getPost('status_bayar'),
            'status_approve' => $this->request->getPost('status_approve'),
            'approve_by' => $this->request->getPost('approve_by'),
            'created_at' => $this->request->getPost('created_at'),
        ];
        $model->insert($data);
        return $this->response->setJSON(['status' => 'success']);
    }

    public function delete($nik)
    {
        $model = new KtamModel();
        $model->delete($nik);
        return $this->response->setJSON(['status' => 'deleted']);
    }

    
}

