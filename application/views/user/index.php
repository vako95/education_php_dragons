<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/navbar'); ?>
<!-- Navbar End -->
<style>
.img_slider {
width: 100%;
height: 700px;
object-fit: cover;
}

.img_expert {
width: 100%;
height: 300px;
object-fit: cover;
}

.img_cate {
width: 100%;
height: 300px;
object-fit: contain;
}

.imgexp {
width: 100%;
height: 295px;
object-fit: cover;
}

.popimg {
width: 100%;
height: 268px;
object-fit: cover;
}
</style>

<!-- Carousel Start -->

<div class="container-fluid p-0 mb-5">
<div class="owl-carousel header-carousel position-relative">
<?php foreach ($get_all_news as $get_all_news_key) { ?>
<div class="owl-carousel-item position-relative">
<?php if ($get_all_news_key['n_img']) { ?>
    <img class="img-fluid img_slider " src="<?php echo base_url('uploads/news/' . $get_all_news_key['n_img']); ?>" alt="">
<?php } else { ?>
    <img class="img-fluid img_slider" src="<?php echo base_url('public/user/'); ?>img/carousel-2.jpg" alt="">
<?php } ?>
<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown"><?php echo $get_all_news_key['n_category']; ?></h5>
                <h1 class="display-3 text-white animated slideInDown"><?php echo $get_all_news_key['n_title']; ?></h1>
                <p class="fs-5 text-white mb-4 pb-2"><?php echo $get_all_news_key['n_description']; ?></p>
                <p class="fs-5 text-white mb-4 pb-2"><?php echo date("d-M-Y", strtotime($get_all_news_key['n_date']));  ?></p>
                <a href="<?php echo base_url('news_single/' .$get_all_news_key['n_id']); ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                <a href="<?php echo base_url('contact'); ?>" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
            </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
</div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="row g-4">
<?php foreach ($get_all_news as $get_all_news_key) { ?>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item text-center pt-3">
        <div class="p-4">
            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
            <h5 class="mb-3"><?php echo $get_all_news_key['n_title']; ?></h5>
            <p><?php echo $get_all_news_key['n_description']; ?></p>
        </div>
    </div>
</div>
<?php } ?>
</div>
</div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="row g-5">
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
<div class="position-relative h-100">
    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo base_url('public/user/'); ?>img/about.jpg" alt="" style="object-fit: cover;">
</div>
</div>
<?php foreach ($all_about as $all_about_key) { ?>
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
    <h1 class="mb-4"><?php echo $all_about_key['b_title']; ?></h1>
    <p class="mb-4"><?php echo $all_about_key['b_description']; ?></p>
    <br>
    <br>
    <div class="row gy-2 gx-4 mb-4">
        <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $all_about_key['b_category']; ?></p>
        </div>
        <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $all_about_key['b_category']; ?></p>
        </div>
        <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $all_about_key['b_status']; ?></p>
        </div>
        <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $all_about_key['b_category']; ?></p>
        </div>
        <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $all_about_key['b_category']; ?></p>
        </div>
        <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $all_about_key['b_status']; ?></p>
        </div>
        <br><br><br>
        <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo base_url('about'); ?>">Read More</a>
    </div>
<?php } ?>
</div>
</div>
</div>
<!-- About End -->


<!-- Categories Start -->
<div class="container-xxl py-5 category">
<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
<h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
<h1 class="mb-5">Courses Categories</h1>
</div>
<div class="row g-3">
<div class="col-lg-7 col-md-6">
    <div class="row g-3">
        <?php foreach ($all_skilled as $all_skilled_key) { ?>
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <a class="position-relative d-block overflow-hidden" href="<?php echo base_url('news_single/' . $all_skilled_key['s_id']); ?>">
                    <?php if ($all_skilled_key['s_img']) { ?>
                        <img class="img-fluid " src="<?php echo base_url('uploads/news/' . $all_skilled_key['s_img']); ?>" alt="">
                    <?php } else { ?>
                        <img class="img-fluid  " src="<?php echo base_url('public/user/'); ?>img/cat-1.jpg" alt="">
                    <?php  } ?>

                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <small class="text-primary"><?php echo $all_skilled_key['s_title']; ?></small>
                        <h5 class="m-0"><?php echo $all_skilled_key['s_category']; ?> </h5>
                    </div>
                </a>
            </div>
        <?php } ?>
        <?php foreach ($all_skilled2 as $all_skilled_key2) { ?>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                <a class="position-relative d-block overflow-hidden" href="<?php echo base_url('news_single/' . $all_skilled_key2['s_id']); ?>">
                    <?php if ($all_skilled_key2['s_img']) { ?>
                        <img class="img-fluid  " src="<?php echo base_url('uploads/news/' . $all_skilled_key2['s_img']); ?>" alt="">
                    <?php } else { ?>
                        <img class="img-fluid " src="<?php echo base_url('public/user/'); ?>img/cat-2.jpg" alt="">
                    <?php  } ?>

                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <small class="text-primary"><?php echo $all_skilled_key2['s_title']; ?></small>
                        <h5 class="m-0"><?php echo $all_skilled_key2['s_category']; ?></h5>
                    </div>
                </a>
            </div>
        <?php } ?>
        <?php foreach ($all_skilled3 as $all_skilled_key3) { ?>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                <a class="position-relative d-block overflow-hidden" href="<?php echo base_url('news_single/' . $all_skilled_key3['s_id']); ?>">
                    <?php if ($all_skilled_key3['s_img']) { ?>
                        <img class="img-fluid  " src="<?php echo base_url('uploads/news/' . $all_skilled_key3['s_img']); ?>" alt="">
                    <?php } else { ?>
                        <img class="img-fluid  " src="<?php echo base_url('public/user/'); ?>img/cat-3.jpg" alt="">
                    <?php  } ?> <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <h5 class="m-0"><?php echo $all_skilled_key3['s_title']; ?></h5>
                        <small class="text-primary"><?php echo $all_skilled_key3['s_category']; ?></small>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php foreach ($all_skilled4 as $all_skilled_key4) { ?>
    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
        <a class="position-relative d-block h-100 overflow-hidden" href="<?php echo base_url('news_single/' . $all_skilled_key4['s_id']); ?>">
            <?php if ($all_skilled_key4['s_img']) { ?>
                <img class="img-fluid position-absolute w-100 h-100 " src="<?php echo base_url('uploads/news/' . $all_skilled_key4['s_img']); ?>" alt="">
            <?php } else { ?>
                <img class="img-fluid position-absolute w-100 h-100" src="<?php echo base_url('public/user/'); ?>img/cat-4.jpg" alt="" style="object-fit: cover;">
            <?php  } ?>
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                <h5 class="m-0"><?php echo $all_skilled_key4['s_title']; ?></h5>
                <small class="text-primary"><?php echo $all_skilled_key4['s_category']; ?></small>
            </div>
        </a>
    </div>
<?php } ?>
</div>

</div>
</div>
<!-- Categories Start -->

<!-- Courses Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
<h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
<h1 class="mb-5">Popular Courses</h1>
</div>
<div class="row g-4 justify-content-center">
<?php foreach ($all_popular as $all_popular_key) { ?>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative overflow-hidden">
            <?php if ($all_popular_key['p_img']) { ?>
                <img class="img-fluid popimg" src="<?php echo base_url('uploads/news/' . $all_popular_key['p_img']); ?> " alt="">
            <?php } else { ?>
                <img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/course-2.jpg" alt="">
            <?php   } ?>
            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
            </div>
        </div>
        <div class="course-item bg-light">
            <div class="text-center p-4 pb-0">
                <h3 class="mb-0"><?php echo $all_popular_key['p_price']; ?></h3>
                <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small>(123)</small>
                </div>
                <h5 class="mb-4"><?php echo $all_popular_key['p_description']; ?></h5>
            </div>
            <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i><?php echo $all_popular_key['p_name']; ?></small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i><?php echo $all_popular_key['p_student']; ?></small>
            </div>
        </div>
    </div>
<?php  } ?>
</div>
</div>
</div>
<!-- Courses End -->


<!-- Team Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
<h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
<h1 class="mb-5">Expert Instructors</h1>
</div>
<div class="row g-4">
<?php foreach ($get_all_news as $get_all_news_key) { ?>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item bg-light">
            <div class="overflow-hidden">
                <?php if ($get_all_news_key['n_img']) { ?>
                    <img class="img-fluid imgexp" src="<?php echo base_url('uploads/news/' . $get_all_news_key['n_img']); ?>" alt="">
                <?php } else { ?>
                    <img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/team-1.jpg" alt="">
                <?php  } ?>
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="text-center p-4">
                <h5 class="mb-0"><?php echo  $get_all_news_key['n_title']; ?></h5>
                <small><?php echo  $get_all_news_key['n_category']; ?></small>
            </div>
        </div>
    </div>
<?php } ?>
</div>
</div>
</div>
<!-- Team End -->
<!-- Service Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
<h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
<h1 class="mb-5">Expert Categories</h1>
</div>
<div class="row g-4">
<?php foreach ($get_category as $get_category_key) { ?>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item text-center pt-3">
            <div class="p-4">
                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                <h5 class="mb-3"><?php echo $get_category_key['c_name']; ?></h5>
                <p></p>
            </div>
        </div>
    </div>
<?php } ?>
</div>
</div>
</div>
<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
<div class="text-center">
<h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
<h1 class="mb-5">Our Students Say!</h1>
</div>
<div class="owl-carousel testimonial-carousel position-relative">
<?php foreach ($get_all_news as $get_all_news_key) { ?>
    <div class="testimonial-item text-center">
        <?php if ($get_all_news_key['n_img']) { ?>
            <img style="width: 80px; height: 80px;" class="border rounded-circle p-2 mx-auto " src="<?php echo base_url('uploads/news/' .  $get_all_news_key['n_img']); ?>">
        <?php } else { ?>
            <img class="border rounded-circle p-2 mx-auto  img_student" src="<?php echo base_url('public/user/'); ?>img/testimonial-1.jpg" style="width: 80px; height: 80px;">
        <?php  } ?>
        <h5 class="mb-0"><?php echo  $get_all_news_key['n_title']; ?></h5>
        <p><?php echo $get_all_news_key['n_category']; ?></p>
        <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0"><?php echo  $get_all_news_key['n_description']; ?></p>
        </div>
    </div>
<?php } ?>
</div>
</div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<?php $this->load->view('user/includes/footer'); ?>

<?php $this->load->view('user/includes/footer_script'); ?>


<!-- JavaScript Libraries -->