<?php $this->load->view('admin/includes/headerStyle') ?>

<?php $this->load->view('admin/includes/preloader') ?>

<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/left_menu'); ?>



<?php $this->load->view('admin/includes/counter'); ?>


<h1 style="color:green;">View</h1>
<div class="row">
    <!-- <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12"> -->
    <div class="white-box">

        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible">
                <a href="" class="close" data-dismiss="alert" aria-label="close"></a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php } ?>


        <form action="<?php echo base_url('admin_creat_news_act'); ?>" method="post" enctype="multipart/form-data" class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <label for="title">Title</label>
            <p><?php echo $get_single_news['n_title']; ?></p>
    </div>
    <br>
    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
        <label for="mytextarea">Description</label>

        <p><?php echo $get_single_news['n_description']; ?></p>
        <!-- <button id="mytextarea" class="get-editor-data">Get data</button> -->

    </div>


    <br>
    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left;">
        <label for="date">Date</label>
        <p><?php echo $get_single_news['n_date']; ?></p>

    </div>
    <div class="col-xs-6 col-md-3 col-lg-3 col-sm-3" style="float: left; margin:0px 25px;">
        <label for="cate">Category</label>
        <p><?php echo $get_single_news['n_category']; ?></p>
    </div>
    <div class="col-xs-6 col-md-3 col-lg-3 col-sm-3" style="float: left;">
        <div class="row">
            <label for="status">Status</label>
            <p><?php echo $get_single_news['n_status']; ?></p>
        </div>
    </div>

    <div class="col-xs-6 col-md-2 col-lg-2 col-sm-2" style="float: left; margin:0px 25px; margin-top:5px;">

        <label for="image">Image</label>
        <?php if ($get_single_news['n_img']) { ?>
    <img class="img-fluid img_slider " src="<?php echo base_url('uploads/news/' . $get_single_news['n_img']); ?>" alt="">
<?php } else { ?>
    <img class="img-fluid img_slider" src="<?php echo base_url('public/user/'); ?>img/aviable.png" alt="">
<?php } ?>
        


        <br>
        <br>
        <br>
    </div>

    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style="float:left;">
        <div class="row">
            <br>
            <br>
            <a href="<?php echo base_url('admin_news'); ?>">
                <button type="button" class="btn btn-primary btn-block"><U>Back</U></button>
            </a>
        </div>
    </div>
    </form>



</div>

</div>




<?php $this->load->view('admin/includes/footer'); ?>

<?php $this->load->view('admin/includes/footer_script'); ?>