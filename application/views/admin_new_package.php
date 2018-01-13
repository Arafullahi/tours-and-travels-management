<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMIN || DashBoard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>admindash/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>admindash/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>admindash/css/plugins/morris.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admindash/css/style.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>admindash/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ADMIN :: Packages</a>
            </div>
            <!-- Top Menu Items -->
           <!-- <center>
            <form class="navbar-form navbar-fixed-top" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
                </center>-->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('Fistname');?> <?php echo $this->session->userdata('lastname');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i><?php echo $this->session->userdata('Fistname');?> <?php echo $this->session->userdata('lastname');?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url()?>login_controller/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url().'admin/dashboard';?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url().'admin/place_info';?>"><i class="fa fa-fw fa-table"></i>Place Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/user_list"><i class="fa fa-fw fa-edit"></i> User List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/dynamic_combobox';?>"><i class="fa fa-fw fa-desktop"></i>Create Package</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/ad_new_user'?>"><i class="fa fa-fw fa-wrench"></i>New User</a>
                    </li>
                   <li>
                        <a href="<?php echo base_url().'admin/banners'?>"><i class="fa fa-fw fa-wrench"></i>Banner</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/new_package'?>"><i class="fa fa-fw fa-wrench"></i>New Package</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/package_lists'?>"><i class="fa fa-fw fa-wrench"></i>Pckage List</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Package Creation
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Package 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               

               <!-- <div class="row">
                    <form action="<?php echo base_url().'admin/search_pack';?>" method="post">
                         <center>
                         <table>
                             <tr><td><input type="text" class="form-control" name="search" id="search" placeholder="Search by Package Name"></td>&nbsp;&nbsp;
 
                <td> <button type="submit" class="btn btn-info">Search</button></td></tr>
                         </table>
                         </center>
                    </form>
                </div>
                <!-- /.row -->


                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                      <div class="panel panel-info">
                           <div class="panel-heading">
                         <h3 class="panel-title">Pckages</h3>
                             </div>
                <!-- <div class="panel-body">
                    
                   
                 </div>
                 <div class="panel-footer"></div>
                </div> -->
                <div class="container">
                <div class="row">
    <div class="col-sm-6">
  <form action="" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Package Name:</label>
      <input type="text" class="form-control" placeholder="Name" name="package_name" value="<?php echo set_value('package_name'); ?>">
      <span class="error"><?php echo form_error('package_name'); ?></span>
    </div>
    <div class="form-group">
      <label for="email">Package Details:</label>
      <textarea class="form-control" placeholder="Package Details" name="package_details" ><?php echo set_value('package_details'); ?></textarea> 
       <span class="error"><?php echo form_error('package_details'); ?></span>
    </div>
    <div class="form-group">
      <label for="email">Location:</label>
      <input type="text" class="form-control" placeholder="Location" name="location" value="<?php echo set_value('location'); ?>">
      <span class="error"><?php echo form_error('location'); ?></span>
    </div>
    <div class="form-group">
      <label for="email">Days:</label>
      <input type="text" class="form-control" placeholder="Days" name="days" value="<?php echo set_value('days'); ?>">
      <span class="error"><?php echo form_error('days'); ?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Package Picture1</label>
      <input type="file" class="form-control" id="" placeholder="Image" name="image1" required="">
      <span class="error"><?php echo $image_error1; ?><?php echo form_error('image1'); ?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Package Picture2</label>
      <input type="file" class="form-control" id="" placeholder="Image" name="image2" required="">
       <span class="error"><?php echo $image_error2; ?><?php echo form_error('image2'); ?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Package Picture3</label>
      <input type="file" class="form-control" id="" placeholder="Image" name="image3">
      <?php echo $image_error3; ?>
    </div>
    <div class="form-group">
      <label for="pwd">Package Picture4</label>
      <input type="file" class="form-control" id="" placeholder="Image" name="image4">
      <?php echo $image_error4; ?>
    </div>
    <button type="submit" class="btn btn-default" name="create_package">Submit</button>
    <div style="color:green;">
    <?php
     echo  $this->session->flashdata('message');
    ?>
    </div>
  </form>
  </div>
  </div>
</div>
<br>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>admindash/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>admindash/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>admindash/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>admindash/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>admindash/js/plugins/morris/morris-data.js"></script>

</body>

</html>
