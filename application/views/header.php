<!DOCTYPE HTML>
<html>

<head>
    <title>F5buddy | Custom Website Development Web App Development company</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="shortcut icon" href="https://www.f5buddy.com/wp-content/themes/f5buddy/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/bootstrap.min.css" />
</head>

<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <a href="https://www.f5buddy.com/" title="F5buddy" target="_blank"><img src="<?php echo base_url('public/images/logo.png')?>" alt="F5buddy"></a>
                
            </div>
            <div id="menubar">
                <ul id="menu">
                  <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                    <li class="<?=$home_class;?>" ><a href="<?=base_url()?>index.php/blog/">Home</a></li>
                    <?php if($this->session->userdata('user_id'))
                    {?>
                          <li class="<?=$login_class;?>" ><a href="<?=  base_url()?>index.php/users/logout">(<?=$this->session->userdata['username']?>)Logout</a></li>
                    <?php
                    } 
                    else{ ?>
                        <li class="<?=$login_class;?>" ><a href="<?=  base_url()?>index.php/users/login">Login</a></li>
                    <?php } ?>

                    <li class="<?=$register_class;?>" ><a href="<?=  base_url()?>index.php/users/register/">Register</a></li>
<!--                    <li class="<?=$upload_class;?>" ><a href="<?=  base_url()?>upload/">Upload Photo</a></li>-->
                </ul>
            </div>
        </div>