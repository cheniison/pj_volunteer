<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>苏州市平江实验学校“家长志愿者”填写平台后台管理</title>
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

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.2.0 -->
        <script src="<?php echo base_url();?>AdminLTE2/plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url();?>AdminLTE2/bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url();?>AdminLTE2/dist/js/app.min.js"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
            Both of these plugins are recommended to enhance the
            user experience. Slimscroll is required when using the
            fixed layout. -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body class="hold-transition skin-blue" style="background-color:#ECF0F5">

  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box" style="height:300px; width:400px; margin-top:16%; margin-left:32%">
            <div class="box-header with-border" align="center" style="margin-bottom:4%">
                <h3 class="box-title">苏州市平江实验小学“家长志愿者”填写平台后台管理</h3>
            </div>
            <?php echo form_open('login/check', 'class="form-horizontal" id="login"');?>
                <div class="box-body">
                    <?php if(isset($message)):?>
                    <div class="callout callout-danger">
                        <p><?=$message?></p>
                    </div>
                    <?php endif?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="username">用户名</label>
                        <div class="col-sm-8">
                            <input id="username" name="username" class="form-control" type="text" placeholder="用户名" value="<?=$username?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="password">密码</label>
                        <div class="col-sm-8">
                            <input id="password" name="password" class="form-control" type="password" placeholder="密码"/>
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <button class="btn btn-info" type="submit">登录</button>
                    </div>
                </div>
            <?php echo form_close();?>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
  </footer>

</body>
</html>
