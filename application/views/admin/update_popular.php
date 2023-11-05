<?php $this->load->view('admin/includes/headerStyle') ?>

<?php $this->load->view('admin/includes/preloader') ?>

<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/left_menu'); ?>

<?php $this->load->view('admin/includes/left_logo'); ?>

<?php $this->load->view('admin/includes/counter'); ?>


<div class="row">
    <!-- <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12"> -->
    <div class="white-box">
        <h1 style="color:red;">Update</h1>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="" class="close" data-dismiss="alert" aria-label="close"></a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('update_popular_act/' . $get_single_popular['p_id']); ?>" method="post" enctype="multipart/form-data" class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="<?php echo $get_single_popular['p_title']; ?>">
    </div>
    <br>
    <div class="form-row">
        <label for="price">Price</label>
        <input class="input-suma-credit form-control" id="price" type="text" name="price" inputmode="decimal" autocomplete="off" value="<?php echo $get_single_popular['p_price']; ?>">
    </div>
    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left;">
        <label for="student">Students</label>
        <input name="student" type="number" class="form-control" id="student" value="<?php echo $get_single_popular['p_student']; ?>">
    </div>

    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left;">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter title" value="<?php echo $get_single_popular['p_name']; ?>">
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
        <label for="mytextarea">Description</label>

        <textarea name="descr" class="form-control" cols="30" rows="10" id="mytextarea"><?php echo $get_single_popular['p_description']; ?></textarea>
        <!-- <button id="mytextarea" class="get-editor-data">Get data</button> -->

    </div>


    <br>
    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left;">
        <label for="date">Date</label>
        <input name="date" type="date" class="form-control" id="date" value="<?php echo $get_single_popular['p_date']; ?>">

    </div>
    <div class="col-xs-6 col-md-3 col-lg-3 col-sm-3" style="float: left; margin:0px 25px;">
        <label for="cate">Category</label>
        <select name="cate" class="form-control" id="cate">
            <option <?php if ($get_single_popular['p_category'] == "") {
                        echo "SELECTED";
                    } ?> value="">-Select-</option>
            <option <?php if ($get_single_popular['p_category'] == "Web") {
                        echo "SELECTED";
                    } ?> value="Web">Web Desing</option>
            <option <?php if ($get_single_popular['p_category'] == "Craphic") {
                        echo "SELECTED";
                    } ?> value="Craphic">Craphic Design</option>
            <option <?php if ($get_single_popular['p_category'] == "Video") {
                        echo "SELECTED";
                    } ?> value="Video">Video Editing</option>
            <option <?php if ($get_single_popular['p_category'] == "Online") {
                        echo "SELECTED";
                    } ?> value="Online">Online Marketing</option>
        </select>
    </div>
    <div class="col-xs-6 col-md-3 col-lg-3 col-sm-3" style="float: left;">
        <div class="row">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
                <option <?php if ($get_single_popular['p_status'] == "") {
                            echo "SELECTED";
                        } ?> value="">-Select-</option>
                <option <?php if ($get_single_popular['p_status'] == "Active") {
                            echo "SELECTED";
                        } ?> value="Active">Active</option>
                <option <?php if ($get_single_popular['p_status'] == "Deactive") {
                            echo "SELECTED";
                        } ?> value="Deactive">Deactive</option>
            </select>
        </div>
    </div>

    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left; margin:0px 25px; margin-top:5px;">

        <label for="image">Image <br>
            <img style="width: 40px; height:40px; object-fit:cover; cursor:pointer;" src="<?php echo base_url('public/admin/assets/img/folder.gif'); ?>" alt="" style="cursor:pointer;">
            <?php if ($get_single_popular['p_img']) { ?>
                <img style="width: 40px; height:40px; object-fit:cover; cursor:pointer;" src="<?php echo base_url('uploads/news/' . $get_single_popular['p_img']) ?>" alt="">
            <?php } ?>
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
            <button type="submit" class="btn btn-primary btn-block"><U>Update</U></button>

        </div>
    </div>
    <?php form_close() ?>
    </form>

</div>

</div>




<?php $this->load->view('admin/includes/footer'); ?>

<?php $this->load->view('admin/includes/footer_script'); ?>