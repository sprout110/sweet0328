<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>紹光有點甜</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="sweet.css" />
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <?php
  include('Config.php');
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
