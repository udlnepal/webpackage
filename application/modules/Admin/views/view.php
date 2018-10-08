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
                            <tr><td><?php echo $count; ?></td><td><?php echo $ps['package_name']; ?></td><td><?php echo $ps['package_features']; ?></td><td><?php echo $ps['package_price']; ?></td><td><?php echo $ps['package_offer_price']; ?></td><td><?php echo $ps['best_for'] ?></td><td><a class="btn btn-warning">Edit</a>&nbsp;<a href="<?php echo base_url('admin/package_setup/delete/'.$ps['package_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td></tr>
                            <?php $count++; }endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>