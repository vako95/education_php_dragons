<?php $this->load->view('admin/login_page/visitor_portal/visitor_header'); ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
        <div class="col-md-offset-2">
            <div class="row">
                <div class="col-xs-8 col-lg-8">
                    <h1 class="page-header">Programming Skills - Edit</h1>

                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close alert-dismissible" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><?php echo $this->session->flashdata('success'); ?></strong>
                        </div>
                    <?php } ?>

                    <?php
                    if ($this->session->flashdata('submit_succes')) {
                    ?>
                        <?php if ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close alert-dismissible" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                            </div>
                        <?php } ?>
                    <?php
                    } elseif ($this->session->flashdata('submit_error')) {
                    ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close alert-dismissible" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;

                                </span></button>
                            <?php echo $this->session->flasdata('submit_error'); ?>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (!empty(validation_errors())) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close alert-dismissible" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php
                    } ?>

                    <form action="<?php echo base_url('admin_programming_skills_edit'); ?>" method="post" enctype="multipart/form-data" class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="panel panel-default ">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Programing Languages:</label>
                                    <textarea name="prog_languages" class="form-control" ><?php echo set_value('prog_languages', $skills->prog_languages); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Backend Frameworks:</label>
                                    <textarea name="backend_frameworks" class="form-control" ><?php echo set_value('backend_frameworks', $skills->backend_frameworks); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Frontend Frameworks:</label>
                                    <textarea name="frontend_frameworks" class="form-control"><?php echo set_value('frontend_frameworks', $skills->frontend_frameworks); ?></textarea>
                                </div>
                                <div class="panel-footer">
                                    <input type="submit" name="submit" value="Save" class="btn btn-success btn-lg btn-login">
                                    <a class="btn btn-default btn-lg" href="<?php echo base_url(' programming_skills'); ?>">Cancel</a>
                                </div>
                            </div>
                            <input id="form_id" type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" class="btn btn-success btn-lg  btn-login">
                        </div>
                </div>
            </div>
            </form>



            <?php $this->load->view('admin/login_page/visitor_portal/visitor_footer'); ?>