<?php $this->load->view('admin/includes/headerStyle') ?>

<?php $this->load->view('admin/includes/preloader') ?>

<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/left_menu'); ?>

<?php $this->load->view('admin/includes/left_logo'); ?>

<?php $this->load->view('admin/includes/counter'); ?>


</style>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 style="color:red;" class="box-title mb-0">User Reguest</h3>

                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <a href="<?php echo base_url('admin_creat_news'); ?>">
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
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">Email</th>
                            <th class="border-top-0">Date</th>
                            <th class="border-top-0">Subject</th>
                            <th class="border-top-0">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $say = 0; foreach ($get_all as $all_data_key) { $say ++; ?>

                            <tr>
                                <td><?php echo $say ?></td>


                                <td><?php echo $all_data_key['u_name']; ?></td>
                                <td><?php echo $all_data_key['u_email']; ?></td>
                                <td  style="width:120px!important;;"> <?php echo $all_data_key['u_date']; ?></td>
                                <td> <?php echo $all_data_key['u_subject']; ?></td>


                                <td> <?php echo $all_data_key['u_message']; ?></td>


                                <td>

                                    <a class="btn-hapus" href="<?php echo base_url('admin_delete_message/' .$all_data_key['u_id']) ?>">
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