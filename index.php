
<?php @session_start(); 
if (isset($_POST["out"])) {
  unset($_SESSION["user"]);

}
if (!isset($_SESSION['user'])) {
  header("Location: ../../login.php");
}

?>
<?php $connect = mysqli_connect("localhost","root","","banhang"); ?>
<?php
$sqll = mysqli_query($connect,"SELECT * FROM cart_sum");
$data_ar ='';
while ($roww = mysqli_fetch_array($sqll)) {
 $data_ar .= "{id:'".$roww['ID']."',gia:".$roww['TongTien']." }, ";
}
$data_ar = substr($data_ar,0, -2) ; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../css/bootstrap1.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../css/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../css/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../css/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../../css/dist/css/skins/_all-skins.min.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="../../css/bower_components/morris.js/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="../../css/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="../../css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="../../css/bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <script src="../../css/bower_components/chart.js/Chart.min.js"></script>

   <!-- Google Font -->
   <link rel="stylesheet"
   href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <!-- header top -->
    <?php require'headerAdmin/headerTop.php'; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../images/11.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php 
            if (isset($_SESSION["user"])) {
             echo $_SESSION["user"] ;
           } 
           ?></p>
           <!-- Status -->
           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
       </div>

       <!-- search form (Optional) -->
       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <!-- header menu left -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class=" treeview">
          <a href="mathang/index.php"><i class="fa fa-link"></i> <span>Mặt Hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mathang/index.php">Mat Hang</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>

        <!-- <li class="treeview">
          <a href="../mathang/index.php"><i class="fa fa-link"></i> <span>Sản Phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->

        <li class="treeview">
          <a href="loaisanpham/index.php"><i class="fa fa-link"></i> <span>Loại Sản Phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="loaisanpham/index1.php">Product</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="giohang/quanly.php"><i class="fa fa-link"></i> <span>Người dùng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="giohang/quanly.php">Giỏ hàng</a></li>
            
          </ul>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="hv">
       Thong ke doanh thu
       <small>... </small>
     </h1>
     <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
    <!-- <section class="content container-fluid">
      <div class="row"> -->
        <!-- map -->
        <section  class="col-lg-12 connectedSortable">

          <!-- /.nav-tabs-custom -->
           <div class="nav-tabs-custom">
           <!--  <canvas id="buyers" class="col-lg-6" style="margin-left: 10px" width="1074px" height="300px"></canvas> -->
            
          
            <div id="chatr"></div>

            </div>


            </section>
            <!-- end map -->
          </div>  
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="pull-right-container">
                      <span class="label label-danger pull-right">70%</span>
                    </span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Some information about this general settings option
                </p>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <script src="../../css/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="../../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../css/bower_components/raphael/raphael.min.js"></script>
  <script src="../../css/bower_components/morris.js/morris.min.js"></script>
  <!-- jQuery 3 -->
  <!--   <script src="../../css/bower_components/jquery/dist/jquery.min.js"></script> -->
  <!-- Bootstrap 3.3.7 -->
  
  <!-- AdminLTE App -->
  <script src="../../css/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
   </body>
   </html>

   <script>
    $(document).ready(function(){
      $("#hv").hover(function(){
        $.ajax({
          url:"test.php",
          success:function(data){
            $("#chatr").html(data);
          }
        });
      });
    });
  </script>

  <!-- <script>
          // line chart data
          var buyerData = {
                // xkey:'id',
                // ykeys:['name'],
                labels : ["1","2","3","4"],
                datasets : [
                {
                  fillColor : "rgba(172,194,132,0.2)",
                  strokeColor : "#3c8dbc",
                  pointColor : "#fff",
                  pointStrokeColor : "#9DB86D",
                  data : ['100','200','300','400']
                }
                ]
              }
              var buyers = document.getElementById('buyers').getContext('2d');
              new Chart(buyers).Line(buyerData);

              // Morris.Line({
              //     element :'chatr',
              //     data:[<?php echo $data_ar; ?>],
              //     xkey:'id',
              //     ykey:['id','gia'],
              //     labels:['ID','TongTien'],
              //     hideHover:'auto',
              //     stacked:true
              // });
            </script> -->