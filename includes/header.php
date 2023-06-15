<?php
$url = "http://localhost:3000/";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
  <title>Hostel management system</title>

  <!-- Required CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap">
  <link rel="stylesheet" href="<?php echo $url ?>assets/css/simplebar.min.css">
  <link rel="stylesheet" href="<?php echo $url ?>assets/css/style.min.css">
  <link rel="stylesheet" href="<?php echo $url ?>assets/css/sidebar-dark.min.css" id="sidebar-theme"> 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="preloading">