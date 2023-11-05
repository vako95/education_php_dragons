<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="<?php echo base_url('public/user/'); ?>css/post-detail.css" rel="stylesheet">
</head>

<body>
  <style>
    .postimg {
      object-fit: cover;
      width: 100%;
      height: 600px;
    }

    .postetxt {
      text-decoration: none;
    }

    .postetxtp {
      color: black;

      font-style: italic;

    }
  </style>
  <header class="header">
    <ul>
      <li class="cor-1"></li>
      <li class="cor-2"></li>
      <li class="cor-3"></li>
      <li class="cor-4"></li>
      <li class="cor-5"></li>
    </ul>
  </header>
  <div class="wrap">
    <nav class="menu">
      <ul>
        <li>
          <a href="<?php echo base_url('index'); ?>">Home</a>
        </li>
        <li>
          <a href="<?php echo base_url('about'); ?>">About me</a>
        </li>
        <li>
          <a href="<?php echo base_url('contact'); ?>">Contact</a>
        </li>
      </ul>
    </nav>

    <aside class="sidebar">
      <div class="widget">
        <?php foreach ($all_skilled as $all_skilled_key) { ?>
          <a class="postetxt" href="<?php echo base_url('news_single/' . $all_skilled_key['s_id']); ?>">
            <h2><?php echo  $all_skilled_key['s_title']; ?></h2>
            <p class="postetxtp"><?php echo  $all_skilled_key['s_description']; ?></p>
          </a>

        <?php } ?>
      </div>
      <div class="widget">
        <?php foreach ($all_skilled2 as $all_skilled_key2) { ?>
          <a class="postetxt" href="<?php echo base_url('news_single/' . $all_skilled_key2['s_id']); ?>">
            <h2><?php echo  $all_skilled_key2['s_title']; ?></h2>
            <p class="postetxtp"><?php echo  $all_skilled_key2['s_description'][12]; ?></p>
          </a>
        <?php } ?>
      </div>
      <div class="widget">
        <?php foreach ($all_skilled3 as $all_skilled_key3) { ?>
          <a class="postetxt" href="<?php echo base_url('news_single/' . $all_skilled_key3['s_id']); ?>">
            <h2><?php echo  $all_skilled_key3['s_title']; ?></h2>
            <p class="postetxtp"><?php echo  $all_skilled_key3['s_description']; ?></p>
          </a>
        <?php } ?>
      </div>
    </aside>
    

    <div class="blog">
      <div class="conteudo">
        <div class="post-info">
      
        </div>
        <?php if ($get_single_news['s_img']) { ?>
          <img class="img-fluid img_student rounded-circle p-2 mx-auto mb-3 postimg" src="<?php echo base_url('uploads/news/' . $get_single_news['s_img']); ?>" alt="">
        <?php } else { ?>
          <img class="img-fluid postimg" src="<?php echo base_url('public/user/'); ?>img/aviable.png" alt="">
        <?php  } ?>
        <h1><?php echo $get_single_news['s_title']; ?></h1>
        <hr>
        <p><?php echo $get_single_news['s_description']; ?> </p>

        <?php echo date("d-M-Y", strtotime($get_single_news['s_date']));  ?>
        </p>

      </div>
    </div>
    
  </div>

</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</html>