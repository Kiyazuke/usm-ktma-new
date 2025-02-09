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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title><?= isset($title) ? $title : 'My Website'; ?></title>

    <!-- vendor css -->
    <link href="<?= base_url('lib/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('lib/prismjs/themes/prism-tomorrow.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/datatables.net-dt/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/select2/css/select2.min.css'); ?>" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/cassie.css'); ?>">
  </head>
  <body>
  <?= $this->include('layout/sidebar'); ?>
