<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/bootstrap/offline/font-awesome-4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/bootstrap/offline/ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/dist/css/skins/skin-blue.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- jQuery 2.2.0 -->
    <script src="<?php echo base_url();?>AdminLTE2/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url();?>AdminLTE2/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>AdminLTE2/dist/js/app.min.js"></script>

    <script>
      
      function table_info(url)
      {
        if (window.XMLHttpRequest)
        {
        xmlhttp=new XMLHttpRequest();
        }
        else
        {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("a").innerHTML=xmlhttp.responseText;
            $('#shit').DataTable({
                        "padding": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "select": true,
                        "order": [[1,"desc"]]
                    });

            $(".select2").select2();
            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
      }

    </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">志愿</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">家长志愿者</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
            <!-- Menu Toggle Button -->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $this->session->username?></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo site_url('login/logout');?>"><i class="fa fa-power-off"></i>&nbsp;退出</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <!-- search form (Optional) -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">菜单</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="#"><i class="fa fa-link"></i><span onclick='table_info("<?php echo base_url();?>index.php/form/index")'>表格填写情况</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span >基本信息设置</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#" onclick='table_info("<?php echo base_url();?>index.php/school/index")'>班级信息</a></li>
            <li><a href="#" onclick='table_info("<?php echo base_url();?>index.php/student/index")'>学生管理</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>平台管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#" onclick='table_info("<?php echo base_url();?>index.php/user/index")'>用户管理</a></li>
           <!-- <li><a href="#">日志</a></li>
            <li><a href="#">基本设置</a></li>-->
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="AJAX">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="a">

      <!-- Your Page Content Here -->
       <?php echo $this->load->view($url);?> 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
    <script src="<?php echo base_url();?>AdminLTE2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>AdminLTE2/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>AdminLTE2/plugins/select2/select2.full.min.js"></script>
<script>

</script>
</body>
</html>
