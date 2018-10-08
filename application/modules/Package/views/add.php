
<section class=" main_body">
<div class="container">
<div class="row">
<div class="col-lg-12">
 
<div class="row justify-content-md-center">
	<div class="col-md-auto">
		<div class="col-lg-12">
			<?php echo form_open('package/confirm_book'); ?>
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
			 <?php if(!empty(validation_errors())){?>
                                    <div class="alert alert-danger col-lg-12"> <?php echo validation_errors(); ?></div>
                                   <?php }?>	
                                  <h4 class="text-danger">  <?php echo $this->session->flashdata('Error'); ?> </h4>
			<input type="text" class="d-none" value="<?php echo $user_book_id?>" name="pack_id">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Name:
				</span>
				</div>
				<input class="form-control" type="text" name="name">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Phone:
				</span>
			</div>
				<input class="form-control" type="text" name="phone">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Email:
				</span>
			</div>
				<input class="form-control" type="text" name="email">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Requirements:
				</span>
			</div>
				<textarea name=""  class="form-control" name="requirements" ></textarea>
			</div>

			<div class="col-lg-12 text-right pad_fix">
				<button type="submit" href="" class="btn btn-success">Send</button>
			</div>

			</div>
			<?php echo form_close(); ?>
		</div>
		</div>
	</div>
</div>

</div>
</div>
</section>