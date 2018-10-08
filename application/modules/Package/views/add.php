
<section class=" main_body">
<div class="container">
<div class="row">
<div class="col-lg-12">
	
<div class="row justify-content-md-center">
	<div class="col-md-auto">
		<div class="col-lg-12">
			<div class="input-group">
				<span class="input-group-addon">
					Package Selected: 
				</span>
				<span class="input-group-addon" ><?php foreach($package_setup as $key=>$ps): ?>
		<?php if($ps['package_id']==$user_book_id){ ?>
			<?php echo $ps['package_name'];} ?>
	<?php endforeach; ?></span>
			</div>
			</div>
		</div>
	</div>
</div>

</div>
</div>
</section>