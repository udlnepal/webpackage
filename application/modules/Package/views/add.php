
<section class=" main_body">
<div class="container">
<div class="row">
<div class="col-lg-12">
	
<div class="row justify-content-md-center">
	<div class="col-md-auto">
		<div class="col-lg-12">
			<div class="img-thumbnail box-form">
			<div class="input-group mb-3">
				<span class="input-group-addon">
					Package Selected: 
				</span>
				<h5 class="input-group-addon text-success" ><?php foreach($package_setup as $key=>$ps): ?>
		<?php if($ps['package_id']==$user_book_id){ ?>
			<?php echo $ps['package_name'];} ?>
	<?php endforeach; ?></h5>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Name:
				</span>
				</div>
				<input class="form-control" type="text">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Phone:
				</span>
			</div>
				<input class="form-control" type="text">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Email:
				</span>
			</div>
				<input class="form-control" type="text">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Requirements:
				</span>
			</div>
				<textarea name=""  class="form-control" ></textarea>
			</div>

			<div class="col-lg-12 text-right pad_fix">
				<a href="" class="btn btn-success">Send</a>
			</div>

			</div>
		</div>
		</div>
	</div>
</div>

</div>
</div>
</section>