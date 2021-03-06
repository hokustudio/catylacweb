<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'dashboard/bower_components/metisMenu/dist/metisMenu.min.css' ?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url().'dashboard/dist/css/timeline.css' ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'dashboard/dist/css/sb-admin-2.css' ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url().'dashboard/bower_components/morrisjs/morris.css' ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'dashboard/bower_components/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url().'assets/js/tinymce/tinymce.min.js'?>"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Catylac CMS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('user_name');?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('catylacadmin2015/adminlogout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'home' ?>"><i class="fa fa-files-o fa-fw"></i> Visit Home Page</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'catylacadmin2015/home' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'catylacadmin2015/addpost' ?>"><i class="fa fa-edit fa-fw"></i> New Post</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'catylacadmin2015/allpost' ?>"><i class="fa fa-files-o fa-fw"></i> Posts <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'catylacadmin2015/allpost' ?>">All(<?php echo $allpost ?>)</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'catylacadmin2015/draftpost' ?>">Draft(<?php echo $draft ?>)</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'catylacadmin2015/publishedpost' ?>">Published(<?php echo $published ?>)</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'catylacadmin2015/addcategory' ?>">Category</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">