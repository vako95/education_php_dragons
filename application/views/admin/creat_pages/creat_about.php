<?php $this->load->view('admin/includes/headerStyle') ?>

<?php $this->load->view('admin/includes/preloader') ?>

<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/left_menu'); ?>



<?php $this->load->view('admin/includes/counter'); ?>


<h1 style="color:green;">Creat</h1>
<div class="row">
    <!-- <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12"> -->
    <div class="white-box">

    <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="" class="close" data-dismiss="alert" aria-label="close"></a>
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php } ?> 
       

        <form action="<?php echo base_url('admin_about_act'); ?>" method="post" enctype="multipart/form-data" class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
    </div>
    <br>
    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
        <label for="mytextarea">Description</label>

        <textarea name="descr" class="form-control" cols="30" rows="10" id="mytextarea"></textarea>
        <!-- <button id="mytextarea" class="get-editor-data">Get data</button> -->

    </div>


    <br>
    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left;">
        <label for="date">Date</label>
        <input name="date" type="date" class="form-control" id="date">

    </div>
    <div class="col-xs-6 col-md-3 col-lg-3 col-sm-3" style="float: left; margin:0px 25px;">
        <label for="cate">Category</label>
        <select name="cate" class="form-control" id="cate">
            <option value="">-Select-</option>
            <option value="Web Desing">Web Desing</option>
            <option value="Craphic Design">Craphic Design</option>
            <option value="Video Editing">Video Editing</option>
            <option value="Online Marketing">Online Marketing</option>
        </select>
    </div>
    <div class="col-xs-6 col-md-3 col-lg-3 col-sm-3" style="float: left;">
        <div class="row">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
                <option value="">-Select-</option>
                <option value="Active">Active</option>
                <option value="Deactive">Deactive</option>
            </select>
        </div>
    </div>

    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left; margin:0px 25px; margin-top:5px;">

        <label for="image">Image <br>
            <img src="<?php echo base_url('public/admin/assets/img/folder.gif'); ?>" alt="" style="cursor:pointer; width:50px;">
        </label>
        <input type="file" name="image" id="image" alt="image" hidden>
        <br>
        <br>
        <br>
    </div>

    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style="float:left;">
        <div class="row">
            <br>
            <br>
            <?php form_open('sweat_alert/prosses') ?>
            <button type="submit" class="btn btn-primary btn-block"><U>Send</U></button>
            <?php form_close() ?>
        </div>
    </div>
    </form>



</div>

</div>




<?php $this->load->view('admin/includes/footer'); ?>

<?php $this->load->view('admin/includes/footer_script'); ?>