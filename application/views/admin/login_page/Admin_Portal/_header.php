<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">

    <title>Profile Management System</title>

    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="<?php echo base_url('public/admin/assets/'); ?>css/loginCss/cover_login.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/'); ?>css/loginCss/adminstyle.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="admin-portal-container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Profile Management System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><?php echo creat_fullname(
                                        $profile->fname,
                                        $profile->fname,
                                        $profile->mname,
                                        $profile->lname,
                                        $profile->xname
                                    ); ?> &nbsp; <span class="badge"><?php echo ucfirst($profile->role); ?></span></a></li>
                    <li><a href="<?php echo base_url('admin_logout'); ?>">Logout</a></li>
                </ul>
                <form class="navbar-form navbar-right f2">
                    <input type="text" class="form-control .f2" placeholder="Search...">
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <?php
                    if ($profile->role == USER_ROLE_ADMIN) {
                    ?>
                        <li class="active"><a href="#"><strong>Users</strong></a></li>
                        <li><a href="<?php echo base_url('admin_users_list'); ?>">Active Users</a></li>
                        <li><a href="<?php echo base_url('admin_users_list_deactivated'); ?>">Deactivated Users</a></li>
                        <li><a href="<?php echo base_url('admin_add_user'); ?>">Add New User</a></li>
                     <?php
                    }
                    ?>

                    <li class="active"><a href="#"><strong>Visitors Account</strong></a></li>
                    <li><a href="<?php echo base_url('admin_visitors_list'); ?>">Active Accounts</a></li>
                    <li><a href="<?php echo base_url('admin_visitors_list_deactivated'); ?>">Deactivated Accounts</a></li>
                </ul>
            </div>