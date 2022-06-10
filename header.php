<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>韶光微甜</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="https://bootstrap5.hexschool.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://bootstrap5.hexschool.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://bootstrap5.hexschool.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://bootstrap5.hexschool.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://bootstrap5.hexschool.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://bootstrap5.hexschool.com/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
  
  <link rel="stylesheet" type="text/css" href="css/sweet.css" />
  <script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
  <?php
  include('config/Config.php');
   ?>
</head>
<body>

  <nav class="navbar navbar-expand-lg
    navbar-light
    bg-myyellow
    border-bottom
    box-shadow
    mb-3">

    <a class="navbar-brand text-myorange" href="<?=Config::BASE_URL?>">紹光有點甜</a>

    <button class="navbar-toggler" type="button"
        data-toggle="collapse"
        data-target=".navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse ">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link text-myorange" href="<?=Config::BASE_URL?>">和果子</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-myorange" href="<?=Config::BASE_URL?>check.php">選購清單</a>
          </li>
      </ul>
    </div>
  </nav>
