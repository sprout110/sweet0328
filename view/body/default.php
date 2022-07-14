<div style="width:98%;">
	<div class="row">
		<?php foreach($Choices as $key => $value) { ?>
			<div class="card col-md-6 col-lg-4" style="border: 0;">
				<div class="card-body">
					<a href="javascript:SendPost('<?=$value['ProductId'];?>');" class="blacklink">
						<img class="card-img-top mb-2" src="upload/<?= $Products[$value['ProductId']]['Picture']; ?>" alt="<?= $Products[$value['ProductId']]['ProductName']; ?>" />
						
						<div class="text-center mb-2" style="font-size:1 rem;">
							<?= $Products[$value['ProductId']]['ProductName']; ?>
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