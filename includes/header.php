<?php 

require('../dbconn.php');

if (!isset($_SESSION['RollNo'])) {
  # code...
  header('location:../index.php');
}

  date_default_timezone_set("GMT"); 
  $Nowdate = date('Y-M-d H:i:s A');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($_SESSION['pageTitle']) ? $_SESSION['pageTitle'] : 'Page'?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/css/all.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/css/tempusdominus-bootstrap-4.min.css">
   <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/css/OverlayScrollbars.min.css">
  <!-- <script type="text/javascript" src="../assets/js/jquery.js"></script>   -->
    <script type="text/javascript" src="../assets/js/sweetalert2@11.js"></script>  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">