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

    <!-- template css -->
    <link rel="stylesheet" href="assets/css/cassie.css">
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
    </style>
  </head>
  <body class="bg-gray-100">

    <div class="page-center">
      <div class="container">
        <div class="card card-body">
          <div class="d-flex bg-white">
            <div class="flex-1">
              <img src="<?= base_url('assets/img/logo_usm.png'); ?>" class="wd-100 mb-3">
              <h5>Selamat Datang di layanan KTA Muhammadiyah Online</h5>
              <ul class="list-unstyled">
                  <li><i class="fa fa-caret-right"></i> <em class="fs-12">Layanan ini hanya berlaku untuk pemohon</em> <em class="fw-600">NBM baru</em>.</li> 
                  <li><i class="fa fa-caret-right"></i><em class="fs-12"> Permohonan akan <span class="fw-600">diproses</span> setelah melengkapi <span class="fw-600">upload blanko pengesahan, pas foto, dan bukti transfer</span></em></li>
               </ul>
              <a href="formKtam" class="btn btn-dark">DAFTAR KTMA</a>
            </div>
            <div class="divider-text divider-vertical"></div>
            <div class="flex-1">
              <h5 class="mb-3">Cek Status Pendaftaran</h5>
              <form action="<?= base_url('/ktam/cek-status') ?>" method="post">
                <!-- <div class="form-group mb-3">
                  <label>Email: </label>
                  <input type="email" name="email" class="form-control" placeholder="Email Terdaftar" required="">
                </div> -->
                <div class="form-group mb-3">
                  <label>NIK: </label>
                  <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK Terdaftar" required="">
                </div>
                <div class="mg-t-20">
                  <button type="submit" class="btn btn-primary btn-block">Cari</button>
                </div>
              </form>
            </div>
          </div>
        </div>
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
