<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Make sure the path to CKEditor is correct. -->
    <script src="<?php echo base_url(); ?>vendor/backend/assets/ckeditor/ckeditor.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/assets/fontawesome-free-6.1.0-web/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/backend/css/main.css">

    <title>Eunoia | Backend</title>
</head>
<body>

    <!-- MAIN  SCRIPT -->

    <!-- navbar knob -->
    <span id="navbar-knob" class="navbar_knob"><i class="fa-solid fa-bars"></i></span>

    <!-- nav -->
    <nav class="navbar">
        <div class="navbar-header">
            <span class="title-navbar"><a href="<?php echo base_url('backend'); ?>"><i class="fa-solid fa-screwdriver-wrench"></i> eunoia backend</a></span>
        </div>

        <div class="domain">
            <span class="domain-name">
                <a href="<?php echo base_url(); ?>"><i class="fa-solid fa-square-up-right"></i> Eunoia.com</a>
            </span>
        </div>

        <div class="navbar-body">

            <div class="navbar-menu">
                <span class="title-menu">main menu</span>
                <ul>
                    <li><a href="<?php echo base_url('backend'); ?>"><i class="fa-solid fa-gauge"></i> dashboard</a></li>
                    <li><a href="<?php echo base_url('backend/home/comment'); ?>"><i class="fa-solid fa-comments"></i> comments</a></li>
                    <li><a href="<?php echo base_url('backend/posting'); ?>"><i class="fa-solid fa-table"></i> posting</a></li>
                </ul>
            </div>

            <br><br>
            <div class="navbar-menu">
                <span class="title-menu">main user</span>
                <ul>
                    <li><a href="<?php echo base_url('backend/user'); ?>"><i class="fa-solid fa-user"></i> user</a></li>
                    <li><a href="<?php echo base_url('backend/database'); ?>"><i class="fa-solid fa-database"></i> database</a></li>
                  
                </ul>
            </div>

            <br><br>
            <div class="navbar-menu">
                <span class="title-menu">sheet</span>
                <ul>
                    <li><a href="<?php echo base_url('backend/auth'); ?>"><i class="fa-solid fa-file"></i> login</a></li>
                    <li><a href="<?php echo base_url('backend/auth/registrasi'); ?>"><i class="fa-solid fa-file"></i> Registration</a></li>
                    <!-- <hr>
                    <hr> -->
                    <li><a href=""><i class="fa-solid fa-square-full"></i> blank</a></li>
                </ul>
            </div>

        </div>

        <!-- navbar footer -->
        <div class="navbar_footer">
            <span class="out"><a href="<?php echo base_url('backend/home/logout'); ?>">logout <i class="fa-solid fa-right-from-bracket"></i></a></span>
        </div>
    </nav>
    <!-- end nav -->

    <!-- wrapping -->
        <div class="wrapping">