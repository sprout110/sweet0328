<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

if(!isset($_COOKIE['eShopHasCookie']) or $_COOKIE['eShopHasCookie'] <> "Yes") {
  $Msg = urlencode("本網頁須使用 Cookie 功能，請先開啟 Cookie 功能！");
  header("Location: index.php?Msg=$Msg");
}

include('./config/MySQL.php');
include('header.php');
include('libraries/DatabaseAccessObject.php');
include('libraries/Database.php');
?>

<?php
if(isset($_POST['itemId'])) {
  $id = $_POST['itemId'];
  //echo $id;
  $data_array = Database::get()->execute("Select * From food where id='" . $id . "'");

  //echo count($data_array);
  //echo $data_array[0]['foodname'];
}


 ?>
<div class="card">

  <div class="card-body">
    <div class="row">
  <div class="col-md-6">
    <img class="card-img-top" src="img/<?= $data_array[0]['picname'] ?>" alt="">
  </div>

  <div class="col-md-6">
    <p class="card-text text-left">
      <?= $data_array[0]['description'] ?>
    </p>

    <form action="check.php" method="POST">
      <select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>盒

      <input type="submit" value="確認">
    </form>

  </div>
</div>
</div>
</div>

<?php
include('footer.php');
 ?>
