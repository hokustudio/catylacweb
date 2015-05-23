<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catylac | Warna-warni Indonesia</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/portfolio-item.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/freelancer.css' ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/css/bootstrap-social.css' ?>" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="scndline navbar navbar-default navbar-fixed-top headerColor">
        <div class="topline"></div>
        <div class="container">
            
           <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand hidden-sm hidden-xs" href="<?php echo base_url().'home' ?>"><img class="img-brand" src="<?php echo base_url().'assets/images/logo.png'?>"/></a>
                <a class="navbar-brand hidden-lg hidden-md" href="<?php echo base_url().'home' ?>"><img class="img-brand-sm" src="<?php echo base_url().'assets/images/logo.png'?>"/></a>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <nav class="navbar navbar-default navbar-fixed-top-menu">
        <div class="container" style="padding-left:0px; padding-right:0px;">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a style="color:#fff; background-color:#ca3959;" href="<?php echo base_url().'home' ?>">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a style="color:#fff; background-color:#ed944d;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inspirasi <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a style="color:#fff; background-color:#46b872;" href="<?php echo base_url().'inspirasi/wwfi' ?>">Warna Warni Favorit Indonesia</a></li>
                          <li><a style="color:#fff; background-color:#aa81ad;" href="<?php echo base_url().'inspirasi/tipstrik' ?>">Tips & Trik</a></li>
                          <li><a style="color:#fff; background-color:#ed954d;" href="<?php echo base_url().'inspirasi/katalog' ?>">Katalog Warna</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="color:#fff; background-color:#f1c143;" href="<?php echo base_url().'product' ?>">Produk</a>
                    </li>
                    <li>
                        <a style="color:#fff; background-color:#81c360" href="<?php echo base_url().'pengecatan' ?>">Cara Pengecatan</a>
                    </li>

                    
                    
                    <!-- <li>
                        <a style="color:#fff; background-color:#1c74bb;" href="#">Acara & Promosi</a>
                    </li> -->
                </ul>

                <ul class="nav navbar-nav" style="float: right">
                    <li><a href="#contact" class="navbar-nav pull-right" style="color:#fff; background-color:#c4df9b;">Contact</a></li>
                    <li style="background-color:#ed9979;"><!--<a href="<?php if ($this->session->userdata('logged_in') && $this->session->userdata('user_role') == 2) {
                        echo base_url().'logout';
                    } 
                    else {
                        echo base_url().'login';
                    } ?>" class="navbar-nav pull-right" style="color:#fff; background-color:#ed9979;"></a>
                        <?php 
                            if($this->session->userdata('logged_in') && $this->session->userdata('user_role') == 2)
                                echo "Logout";
                            else { ?> 
                                <a href="<?php echo base_url().'login' ?>">Login<a><a href="<?php echo base_url().'login' ?>">Register<a>
                            <?php echo "<a href=".base_url()."login>Login</a>";}
                        ?>-->
                    <?php if ($this->session->userdata('logged_in') && $this->session->userdata('user_role') == 2) 
                    { ?>
                        <a href="<?php echo base_url().'logout';?>" class="navbar-nav pull-right" style="color:#fff; background-color:#ed9979;">Logout</a>
                    <?php } 
                        else { ?>
                        <div class="meta" style="background-color:#ed9979;">
                            <a href="<?php echo base_url().'login';?>"  style="color:#fff;">Login</a>
                            <span style="color:#fff;"> | </span>
                            <a href="<?php echo base_url().'register';?>" style="color:#fff;"> Register</a>
                        </div>
                        
                    <?php }?>
                    </li>
                </ul>
            </div>
                <!-- /.navbar-collapse -->
        </div>
    </nav>
   <div class="container" style="margin-top:120px;">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="switchCol">    
                    <ul>
                        <li id="blueS" class="btn-switch"></li> 
                        <li id="greenS" class="btn-switch"></li>
                        <li id="redS" class="btn-switch"></li>
                        <li id="yellowS" class="btn-switch"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>