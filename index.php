<?php
setcookie("eShopHasCookie", "Yes");
include('header.php')
?>
<script type="text/javascript">
  function sendPost(itemId) {
    eItemId = document.getElementById("itemId");
    eForm = document.getElementById("myForm")
    if(eItemId)
    {
      eItemId.value = itemId;
    }

    if(eForm){
      eForm.submit();
    }
  }
</script>
<form action="detail.php" method="post" id="myForm">
  <input type="hidden" value="" name="itemId" id="itemId" />
</form>
<?php
if(isset($_GET['Msg'])){
  echo "<div>" . stripslashes($_GET['Msg']) . "</div>";
}
 ?>
  <div class="row">
        <div class="card col-md-6 col-lg-4">
          <div class="card-body">
            <a href="javascript:sendPost(1);">
              <img class="card-img-top" src="img/pic1.jpg" alt="">
            </a>
            <h5 class="card-text text-center">和果子</h5>
          </div>
        </div>

        <div class="card col-md-6 col-lg-4">
          <div class="card-body">
            <a href="javascript:sendPost(2);">
            <img class="card-img-top" src="img/pic2.jpg" alt="">
            </a>
            <h5 class="card-text text-center">和果子</h5>
          </div>
        </div>

        <div class="card col-md-6 col-lg-4">
          <div class="card-body">
            <a href="javascript:sendPost(3);">
            <img class="card-img-top" src="img/pic3.jpg" alt="">
            </a>
            <h5 class="card-text text-center">和果子</h5>
          </div>
        </div>

        <div class="card col-md-6 col-lg-4">
          <div class="card-body">
            <a href="javascript:sendPost(4);">
            <img class="card-img-top" src="img/pic4.jpg" alt="">
            </a>
            <h5 class="card-text text-center">和果子</h5>
          </div>
        </div>

        <div class="card col-md-6 col-lg-4">
          <div class="card-body">
            <a href="javascript:sendPost(5);">
            <img class="card-img-top" src="img/pic5.jpg" alt="">
            </a>
            <h5 class="card-text text-center">和果子</h5>
          </div>
        </div>

        <div class="card col-md-6 col-lg-4">
          <div class="card-body">
            <a href="javascript:sendPost(6);">
            <img class="card-img-top" src="img/pic6.jpg" alt="">
          </a>
            <h5 class="card-text text-center">和果子</h5>
          </div>
        </div>
  </div>


<?php
include('footer.php');
 ?>
