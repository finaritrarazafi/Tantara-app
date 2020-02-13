<html>
    <head>
        <title> Application Tantara </title>
        <link href='<?php echo base_url();?>assets/css/bootstrap.css' rel='stylesheet' type='text/css' media='all' />
        <link href='<?php echo base_url();?>assets/css/style.css' rel='stylesheet' type='text/css' media='all' />
        <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    </head>
    <body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand " href="<?php echo base_url(); ?>"> <strong> Application Tantara </strong></a>
            </div>
            <!-- Menus en-tete -->
            <div id="navbar" >
                <ul class="nav navbar-nav">
                    <li ><a href="<?php echo base_url(); ?>"> <i class="fa fa-home" aria-hidden="true"></i> Accueil </a></li>
                    <li ><a href="<?php echo base_url(); ?>posts"> <i class="fa fa-list-alt" aria-hidden="true"></i> Lire Tantara </a></li>   
                    <!-- seulement s'inscrire si l'utilsateur n'est pas encore connecté -->
                    <?php if(!$this->session->userdata('logged_in')): ?>
                        <li ><a href="<?php echo base_url(); ?>users/register"> <i class="fa fa-sign-in" aria-hidden="true"></i> S'inscrire </a></li>
                    <?php endif; ?>

                    <?php if($this->session->userdata('logged_in')): ?>
                        <li ><a href="<?php echo base_url(); ?>posts/create"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ecrire Tantara </a></li>            
                    <?php endif; ?>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Cacher le menu : se déconnecter si l'utilisateur n'est pas encore connecté -->
                    <?php if(!$this->session->userdata('logged_in')): ?>
                        <li ><a href="<?php echo base_url(); ?>users/login"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> Se Connecter </a></li>
                    <?php endif; ?>

                    <!-- Cacher le menu se connecter si l'utilisateur est connecté -->   
                    <?php if($this->session->userdata('logged_in')): ?>                   
                        <li ><a href="<?php echo base_url(); ?>users/logout"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> Se Déconnecter </a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>