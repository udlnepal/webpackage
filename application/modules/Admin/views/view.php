<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    <?php if(!empty($this->session->flashdata('Success'))){ ?>
                 <div class="alert alert-success">   <?php echo $this->session->flashdata('Success'); ?> </div>
                 <?php }?>
                    <div class="col-lg-12">
                        <table class="table table-bordered table-striped">
                            <tr><th>S.N.</th><th>Package</th><th>Features</th><th>Price</th><th>Offer Price</th><th>Best For</th><th>Action</th></tr>
                            <?php $count=1; foreach($package_setup as $key=>$ps):{  ?>
                            <tr><td><?php echo $count; ?></td><td><?php echo $ps['package_name']; ?></td><td><?php echo $ps['package_features']; ?></td><td><?php echo $ps['package_price']; ?></td><td><?php echo $ps['package_offer_price']; ?></td><td><?php echo $ps['best_for'] ?></td><td><a class="btn btn-warning" data-toggle="modal" data-target="#editPackage">Edit</a>&nbsp;<a href="<?php echo base_url('admin/package_setup/delete/'.$ps['package_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td></tr>
                            <?php $count++; }endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>



 
                                    <?php echo form_open_multipart(); ?>
<div class="modal fade" id="editPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php if(!empty(validation_errors())){?>
                                    <div class="alert alert-danger"> <?php echo validation_errors(); ?></div>
                                   <?php }?>
                                    <div class="form-group row">
                                        <label for="package_name" class="col-sm-3 text-left control-label col-form-label">Package Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Package Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package_features" class="col-sm-3 text-left control-label col-form-label">Package_features</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control ckeditor" id="package_features" name="package_features"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package_price" class="col-sm-3 text-left control-label col-form-label">Package Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="package_price" id="package_price" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package_offer_price" class="col-sm-3 text-left control-label col-form-label">Package Offer Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="package_offer_price" id="package_offer_price" placeholder="Offer Price">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="best_for" class="col-sm-3 text-left control-label col-form-label">Best For</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="best_for" id="best_for" placeholder="Best For">
                                        </div>
                                    </div>
                                    
                                    
                                  
                                </div>
                             
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>            
      </div>
      
    </div>
  </div>
</div>
<?php echo form_close(); ?>