<script type="text/javascript">
  function SendPost(productId) {
    ProductId = document.getElementById("ProductId");
    ProductForm = document.getElementById("ProductForm");
    //console.log(ProductId);
    if(ProductId)
    {
      ProductId.value = productId;
    }

    if(ProductForm){
      ProductForm.submit();
    }
  }
</script>

<form action="detail" method="post" id="ProductForm">
  <input type="hidden" value="" name="ProductId" id="ProductId" />
</form>

<div style="width:98%;">
	<div class="row">
		<?php foreach($_data as $selectedProduct) { ?>
			<div class="card col-md-6 col-lg-4" style="border:0;">
				<div class="card-body">
					<a  class="blacklink" href="javascript:SendPost('<?=$selectedProduct['ProductId']?>');">
					
						<img class="card-img-top mb-2" src="upload/<?=$selectedProduct['Picture']?>" alt="">
						</img>
						<div class="text-center mb-2" style="font-size:1 rem;">
							<?=$selectedProduct['ProductName']?>
						</div>
						<div class="text-center">
							<input type="button" class="btn btn-outline-warning" value="訂購去" />
						</div>
						
					</a>
				</div> 
			</div>
		<?php }	?>
	</div>
</div>