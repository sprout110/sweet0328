<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?= $_data['Title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="source/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/sweet.css" />
  <script type="text/javascript" src="source/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="source/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="m-0 p-0 b-0">

  <nav class="navbar navbar-expand-lg
    navbar-light
    bg-myyellow
    border-bottom
    box-shadow
    mb-3 pt-2 pb-3" style="background-color:<?= $_data['Navbar-BackgroundColor'] ?>">

      <a class="navbar-brand text-myorange" href="<?= $_data['BASE_URL'] ?>">
        <div class="mb-1">
        <?= $_data['Navbar-Brand']; ?>
      </div>
      <div style="font-size:12px;">
        <?= $_data['Navbar-SubTitle']; ?>
        </div>
      </a>

    <button class="navbar-toggler" type="button"
        data-toggle="collapse"
        data-target=".navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
	

    <div class="navbar-collapse collapse ">
      <ul class="navbar-nav ml-auto">
          <!--<li class="nav-item">
              <a class="nav-link text-myorange" href="<?= $_data['BASE_URL'] ?>">和菓子</a>
          </li>-->
          <li class="nav-item">
              <a class="nav-link text-myorange" href="<?= $_data['BASE_URL'] ?>contact">聯絡我們</a>
          </li>
      </ul>
    </div>
  </nav>
