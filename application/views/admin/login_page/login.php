<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/'); ?>css/login.css">
</head>
<style>


</style>
<body>
    



<div class="login-box">
  <h2>EDU AZ</h2>
  <h3>Admin</h3>
  <form action="<?php echo base_url('admin_index_act'); ?>" method="POST">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <a  href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button type="submit" class="myBut">Submit</button>
    </a>
  </form>
  <?php if($this->session->flashdata('err')){ ?>
    <p style="color:red;text-align:center;"><?php echo $this->session->flashdata('err'); ?></p>
 <?php } ?>
  <?php if($this->session->flashdata('success')){ ?>
    <p style="color:green;text-align:center;"><?php echo $this->session->flashdata('success'); ?></p>
 <?php } ?>
</div>





</body>
</html>