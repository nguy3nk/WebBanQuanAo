<?php 
ob_start();
session_start();
include '../database/connect.php';

if (!isset($_SESSION['admin_login1'])) {
  header('location: login.php');
}else{
  $admin = $_SESSION['admin_login1'];
}

 $donhang0 =$conn->query("SELECT COUNT(*) FROM OrderProduct b JOIN (SELECT ord_id, COUNT(*) as 'dem' FROM Order_detail group by ord_id) s on b.id = s.ord_id WHERE b.status =3");  
 $don0 = $donhang0->fetch();
 $donhang1 =$conn->query("SELECT COUNT(*) FROM OrderProduct b JOIN (SELECT ord_id, COUNT(*) as 'dem' FROM Order_detail group by ord_id) s on b.id = s.ord_id WHERE b.status =1");  
 $don1 = $donhang1->fetch();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trang quản trị</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/AdminLTE.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/select2.min.css">
  <script src="js/angular.min.js"></script>
  <script src="js/app.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Quản trị</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
          
            <!-- Tasks: style can be found in dropdown.less -->
            
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>

                <span class="label label-danger"><?php echo $don0->{'COUNT(*)'}; ?></span>
              </a>
              
              <ul class="dropdown-menu">
                <li class="header">Bạn có <?php echo $don0->{'COUNT(*)'}; ?> đơn hàng mới </li>
                <li>
                   <li class="header">Bạn đang xử lý <?php echo $don1->{'COUNT(*)'}; ?> đơn hàng</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- Task item -->
                     <!--  <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                          aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Hoàn thành</span>
                        </div>
                      </div>
                    </a> -->
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="index.php?module=order">Xem tất cả đơn hàng</a>
              </li>
            </ul>
          
          </li>
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../uploads/<?php echo $admin->Admin_img; ?>" class="user-image">
              <span class="hidden-xs"><?php echo $admin->full_name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../uploads/<?php echo $admin->Admin_img; ?>" class="img-circle">

                <p>
                  <?php echo $admin->email; ?>
                  <small>Thành viên kể từ tháng <?php echo date('m',strtotime($admin->created)); ?> năm <?php echo date('Y',strtotime($admin->created)); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?module=admin&action=sua&id=<?php echo $admin->id; ?>" class="btn btn-default btn-flat">Hồ sơ</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../uploads/<?php echo $admin->Admin_img; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $admin->full_name; ?></p>

        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="index.php">
            <i class="fa fa-street-view"></i>
            <span>Trang chủ quản trị</span>
            <span class="pull-right-container">

            </a>
          </li>
          <li>
            <a href="../">
              <i class="fa fa-home"></i>
              <span>Trang web</span>
              <span class="pull-right-container">

              </a>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-cart-plus"></i> <span>Quản lý sản phẩm</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=category"><i class="fa fa-circle-o"></i> Danh mục</a></li>
                  <li><a href="index.php?module=product"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
                  <li><a href="index.php?module=product&action=khohang"><i class="fa fa-circle-o"></i> Kho sản phẩm</a></li>
                </ul>
              </li>
              <li><a href="index.php?module=news"><i class="fa fa-window-maximize"></i><span>Tin tức</span> </a></li>
              <li><a href="index.php?module=Banner"><i class="fa fa-picture-o"></i><span>Banner</span> </a></li>
              
              
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-address-book-o"></i> <span>Quản lý khách hàng</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                 <li><a href="index.php?module=customer"><i class="fa fa-circle-o"></i> Danh sách khách hàng</a></li>
                 <li><a href="index.php?module=order"><i class="fa fa-circle-o"></i> Đơn hàng</a></li>
                <li><a href="index.php?module=contact"><i class="fa fa-circle-o"></i> Liên hệ</a></li>
                </ul>
              </li>
           <!--    <li>
                <a href="">
                  <i class="fa fa-th"></i> <span>Tiện ích</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-green">Hot</small>
                  </span>
                </a>
              </li> -->
              <li>
                <a href="index.php?module=admin">
                  <i class="glyphicon glyphicon-user"></i> <span>Admin</span>

                </a>
              </li>
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

