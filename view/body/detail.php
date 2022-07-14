<div class="card" style="border:0;">
  <div class="card-body">
    <div class="row">

      <div class="col-md-6">
        <img class="card-img-top" src="upload/<?= $_data['Picture'] ?>" alt="">
      </div>

      <div class="col-md-6">
        <div class="card-text text-left mb-3" style="font-size:1.5rem;">
          <?= $_data['ProductName'] ?>
        </div>
        <div class="card-text text-left">
          <?= $_data['Description'] ?>
        </div>
        <div class="mb-4" style="font-family:'Times New Roman';font-size:1.5rem;color:#933;">
          NT$<?= $_data['Price'] ?>元
        </div>
        <div class="mb-2">
          若想購買，請按下方按鈕，Line聯絡。
        </div>
    		<div>
    			<a href="https://lin.ee/9ObnAkq"><button class="btn btn-success">Line聯絡</button></a>
          <input type="button" class="btn btn-outline-warning" value="回上頁" onclick="javascript:history.back();"/>
    		</div>
      </div>

    </div>
  </div>
</div>