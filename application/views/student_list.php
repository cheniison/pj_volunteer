<link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE2/plugins/datatables/dataTables.bootstrap.css">

<div class="box">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-sm-11">
                <?php if(isset($message)):?>
                <div class="callout callout-info">
                    <p><?=$message?></p>
                </div>
                <?php endif?>
            </div>
            <div class="col-sm-1">
<<<<<<< HEAD
                <a class="btn btn-info pull-right" type="button" onclick="gotoUrl('<?php echo site_url('student/add')?>')" href="#"><i class="fa fa-plus"></i></a>
=======
                <a class="btn btn-info pull-right" type="button" href="add"><i class="fa fa-plus"></i></a>
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
            </div>
        </div>
    </div>
    <div class="box-body">
        <table id="shit" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>入学年份</th>
                    <th>年级</th>
                    <th>班级</th>
                    <th>生日</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $key => $student):?>
                <tr>
                    <td><?=$student->child_id;?></td>
                    <td><?=$student->name;?></td>
                    <td><?=$student->sex == 1 ? '女' : '男';?></td>
                    <td><?=$student->entrance;?></td>
                    <td><?=$student->grade;?></td>                  <td><?=$student->class;?></td>
                    <td><?=$student->birthday;?></td>
                    <td>
<<<<<<< HEAD
                        <a onclick="gotoUrl('<?php echo site_url("student/edit/$student->child_id")?>')" href="#"><i class="fa fa-edit">修改</i></a>&nbsp;
                        <a onclick="delete_info('<?php echo site_url("student/delete/$student->child_id")?>')" href="#"><i class="fa fa-remove">删除</i></a>
=======
                        <a onclick='table_info("<?php echo base_url();?>index.php/student/edit/<?= $student->child_id ?>")' href="#"><i class="fa fa-edit">修改</i></a>&nbsp;
                        <a onclick='table_info("<?php echo base_url();?>index.php/student/delete/<?= $student->child_id ?>")' href="#"><i class="fa fa-remove">删除</i></a>
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<!-- DataTables -->
<script src="<?php echo base_url();?>AdminLTE2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>AdminLTE2/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
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

function delete_student(id) {
    if (confirm("确定删除改学生信息吗？")) {
        var url = "<?php echo base_url('student/delete');?>";
        $.post(url+ '/' + id)
            .fail(function(data) {
                alert('删除失败');
            }).done(function(data) {
                alert('删除成功');
                location.href = "<?php echo base_url('student/index');?>";
            });
    }
}
</script>
