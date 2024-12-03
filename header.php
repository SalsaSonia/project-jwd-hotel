<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style.css" />
    <title>Wisata Aloha</title>
  </head>
  <body>
    <?php
        function renderAktifMenu($val1, $val2){
            $result = "";
            if($val1 == $val2){
                $result="active-menu";
            }
            return $result;
        }
    ?>
    <div class="main-container">
      <div class="img-header">
        <div class="brand-container">
          <h1>Objek Wisata Jakarta</h1>
          <h2>Pantai Pasir Putih Pik 2</h2>

          <img src="images/aloha_logo.png" alt="" />
          <!-- end brand-container -->
        </div>

        <img src="images/aloha_playground.jpg" alt="aloha1" />
        <img src="images/aloha_pasir pantai2.jpg" alt="pasir putih2" />
        <img src="images/aloha_papan_dekat3.jpg" alt="papan pantai dekat3" />
        <img src="images/aloha_tempat_duduk_pantai4.jpg" alt="tempat duduk4" />
        <img src="images/aloha_monsieur5.jpg" alt="monsieur5" />
        <img src="images/aloha_pasir6.jpg" alt="pasir6" />
        <img src="images/aloha_tempat_duduk7.jpg" alt="tempat duduk7" />
        <img src="images/aloha_tempat_duduk8.jpg" alt="tempat duduk8" />
        <img src="images/aloha_papan9.jpg" alt="papan9" />
        <img src="images/aloha10.jpeg" alt="aloha10" />

        <!-- end img-header -->
      </div>
      <div class="menu-header">
        <a class="<?php echo renderAktifMenu($aktif_menu, "beranda") ?>" href="index.php">Beranda</a>

        <a class="<?php echo renderAktifMenu($aktif_menu, "form_pendaftaran") ?>" href="form_pendaftaran.php">Daftar Paket Wisata</a>
        
        <a class="<?php echo renderAktifMenu($aktif_menu, "list_pendaftaran") ?>" href="list_pemesanan.php">Modifikasi Pesanan</a>
      </div>
        <!-- end menu-header -->