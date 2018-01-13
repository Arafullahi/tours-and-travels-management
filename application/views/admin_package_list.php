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
                <a class="navbar-brand" href="<?php echo base_url().'admin/dashboard';?>">ADMIN :: DashBoard</a>
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
                        <a href="<?php echo base_url().'admin/new_package'?>"><i class="fa fa-fw fa-wrench"></i>New Package</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/package_lists'?>"><i class="fa fa-fw fa-wrench"></i>Package List</a>
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
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               

                <div class="row">
                    <form action="<?php echo base_url().'admin/search_usr';?>" method="post">
                         <center>
                         <table>
                             <tr><td><input type="text" class="form-control" name="search" id="search" placeholder="Search by firstname"></td>&nbsp;&nbsp;
 
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
                           <div class="panel-heading" style="background-color: #1a237e">
                               <h3 class="panel-title" style="color:#CCC">User List</h3>
                             </div>
                <div class="panel-body">
                    
                    <table class="table table-condensed">
                <tr class="info">
                    <td><b>Name</b></td>
                     <td><b>Package Details</b></td>
                      <td><b>Email</b></td>
                       <td><b>Password</b></td>
                        <td><b>Phone</b></td>
                        <td><b>Address</b></td>
                        <td><b>Gender</b></td>
                        <td><b>Role</b></td>
                         <td><b>Action</b></td>
                </tr>
                <?php
                  foreach ($user as $row){
                ?>
                <tr class="success">
                    <td><?php echo $row->Firstname; ?></td>
                     <td><?php echo $row->Lastname; ?></td>
                      <td><?php echo $row->Email; ?></td>
                       <td><?php echo $row->Password; ?></td>
                        <td><?php echo $row->Phoneno; ?></td>
                        <td><?php echo $row->Address; ?></td>
                        <td><?php echo $row->Gender; ?></td>
                        <td><?php echo $row->Role; ?></td>
                        <td><a href="<?php echo base_url().'admin/edit_user/'.$row->uid;?>" class="btn btn-primary btn-success active" role="button">EDIT</a>|<a href="<?php echo base_url().'admin/con_del/'.$row->uid;?>" class="btn btn-default btn-danger active" role="button">Delete</a></td>
                    
                </tr>
                  <?php }?>
                
            </table>
            
            <?php echo $links; ?>
                 </div>
                 <div class="panel-footer">Panel footer</div>
                </div>
                        <div class="panel panel-default">
                <div class="panel-body">
                     Panel content
                 </div>
                 <div class="panel-footer">Panel footer</div>
                </div>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

            </div>
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
