<?php $this->load->view('admin/includes/headerStyle') ?>

<?php $this->load->view('admin/includes/preloader') ?>

<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/left_menu'); ?>

<?php $this->load->view('admin/includes/left_logo'); ?>

<?php $this->load->view('admin/includes/counter'); ?>

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 style="color:red;" class="box-title mb-0">News</h3>

                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <a href="<?php echo base_url('admin_creat_about'); ?>">
                        <button class="btn btn-success" style="float:right; margin-right:15px; ">Creat</button>
                    </a>
                    <br>
                    <br>

                </div>
            </div>
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="" class="close" data-dismiss="alert" aria-label="close"></a>
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php } ?> 
       
           
            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Title</th>
                            <th class="border-top-0">Description</th>
                            <th class="border-top-0">Date</th>
                            <th class="border-top-0">Category</th>
                            <th class="border-top-0">img</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_about as $all_about_key) { ?>

                            <tr>
                                <td>1</td>


                                <td><?php echo $all_about_key['b_title']; ?></td>
                                <td><?php echo $all_about_key['b_description']; ?></td>
                                <td><?php echo $all_about_key['b_date']; ?></td>
                                <td><?php echo $all_about_key['b_category']; ?></td>
                                <td><?php  if ($all_about_key['b_img']) { ?>
                                        <img style="width: 50px; height:50px; object-fit:cover;" src="<?php echo base_url('uploads/news/' . $all_about_key['b_img']); ?>" alt="">
                                    <?php  } else { ?>
                                        <img style="width: 50px; height:50px; object-fit:cover;" src="public/admin/assets/img/aviable.png" alt="">
                                    <?php } ?>
                                </td>

                                <td> <?php echo $all_about_key['b_status']; ?></td>


                                <td>
                                    <a href="<?php echo base_url('update_skilled/' . $all_about_key['b_id']) ?>">
                                    
                                        <button type="button" class="btn btn-warning">
                                            <i style="color:white; font-size:10px;" class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    <a class="btn-hapus"  href="<?php echo base_url('delete_skilled/' . $all_about_key['b_id']) ?>">
                                    
                                        <button type="button" class="btn btn-danger">
                                            <i style="color:white;font-size:10px;" class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </a>



                                </td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>





<?php $this->load->view('admin/includes/footer_script'); ?>