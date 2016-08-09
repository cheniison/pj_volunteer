<<<<<<< HEAD
=======
<link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/plugins/datepicker/datepicker3.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?php echo base_url();?>AdminLTE2/plugins/iCheck/all.css">
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29

<div class="box">
    <div class="box-header with-border">
        <?php if(isset($message)):?>
        <div class="callout callout-danger">
            <p><?=$message?></p>
        </div>
        <?php endif?>
    </div>
<<<<<<< HEAD
	<form>
	<div class="box-body">
		<div class="form-group col-md-12">
=======
	<?php echo form_open('school/store', 'class="form-horizontal" id="school_add"');?>
	<div class="box-body">
		<div class="form-group">
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
			<label class="col-sm-2 control-label" for="entrance">入学年份</label>
			<div class="col-sm-5">
				<input id="entrance" type="text" name="entrance" class="form-control" placeholder="入学年份" value="<?=$school->entrance?>" />
			</div>
		</div>
<<<<<<< HEAD
		<div class="form-group col-md-12">
=======
		<div class="form-group">
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
			<label class="col-sm-2 control-label" for="class_num">班级数</label>
			<div class="col-sm-5">
				<input id="class_num" type="text" name="class_num" class="form-control" placeholder="班级数" value="<?=$school->class_num?>" />
			</div>
		</div>
	</div>
	<div class="box-footer">
<<<<<<< HEAD
		<a onclick="gotoUrl('<?php echo site_url('school/index');?>')" href="#"><i class="fa fa-reply">&nbsp;返回</i></a>
		<button class="btn btn-info pull-right" type="button" onclick="save('<?php echo site_url('school/store')?>')"><i class="fa fa-save">&nbsp;保存</i></button>
	</div>
	</form>
</div>
=======
		<a href="<?php echo site_url('school/index');?>"><i class="fa fa-reply">&nbsp;返回</i></a>
		<button class="btn btn-info pull-right" type="submit"><i class="fa fa-save">&nbsp;保存</i></button>
	</div>
	<?php echo form_close();?>
</div>

<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>AdminLTE2/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>AdminLTE2/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js" charset="UTF-8"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url();?>AdminLTE2/plugins/iCheck/icheck.min.js"></script>

<script type="text/javascript">

//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
});

$('#datepicker').datepicker({
    language:"zh-CN",
    format:"yyyy-mm-dd",
    showInputs: false,
    endDate: "+0d",
});
</script>
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
