<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.png'); ?>">

    <title>Pendaftaran KTMA Universitas Saintek Muhamadiyah</title>

    <!-- vendor css -->
    <link href="<?= base_url('lib/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/prismjs/themes/prism-tomorrow.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/select2/css/select2.min.css'); ?>" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/cassie.css'); ?>">
    <style type="text/css">
        .page-center {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }

        .select2-container{
            display: block;
        }

        .status-badge {
            background-color: #f5a623;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }
        .profile-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 15px;
        }
        .btn-custom {
            font-size: 12px;
            width: 120px;
        }
    </style>
  </head>
  <body class="bg-gray-100">
    <nav class="navbar bg-white shadow-base">
      <a class="navbar-brand tx-bold tx-spacing--2 tx-color-01" href="#">LOGO</a>
    </nav>

    
      <div class="container mt-5">
        <div class="card bg-white">
            <div class="card-body">
                <h2>Pendaftar</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-start">
                                    <img src="<?= base_url('assets/img/avatar-150.png'); ?>" alt="Profile" class="profile-img me-2">
                                    <div>
                                        <h5><?= $anggota['nama_lengkap'] ?></h5>
                                        <p><?= $anggota['nik'] ?> <?= $anggota['email'] ?></p>
                                        <p><?= $anggota['kota'] ?> - <?= $anggota['kecamatan'] ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="status-badge">BELUM DIPROSES</span>
                            </td>
                            <td>
                                <button class="btn btn-secondary btn-sm btn-custom">
                                    <i class="bi bi-file-earmark-text"></i> CETAK BERKAS
                                </button>
                                <button class="btn btn-secondary btn-sm btn-custom" disabled>
                                    <i class="bi bi-cloud-upload"></i> UPLOAD DOKUMEN
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <p><strong>NIK:</strong> </p>
                <p><strong>Nama:</strong> </p>
                <p><strong>email:</strong> </p>
                <p><strong>surat_rekomendasi:</strong> <?= $anggota['surat_rekomendasi'] ?></p>
                <p><strong>Tanggal Daftar:</strong> <?= $anggota['created_at'] ?></p>

                <a href="<?= base_url('/') ?>">Kembali</a>
            </div>
        </div>
    
    <script src="<?= base_url('lib/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('lib/feather-icons/feather.min.js'); ?>"></script>
    <script>
      $(function(){

        'use strict'

        feather.replace();

      })
    </script>
</body>
</html>