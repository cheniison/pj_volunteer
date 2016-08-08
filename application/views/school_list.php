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
                <a class="btn btn-info pull-right" type="button" href="add"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="box-body">
        <table id="shit" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>入学年份</th>
                    <th>年级</th>
                    <th>班级数</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($school as $key => $school):?>
                <tr>
                    <td><?=$school->entrance?></td>
                    <td><?=$school->grade?></td>
                    <td><?=$school->class_num?></td>
                    <td>
                        <a onclick='table_info("<?php echo base_url();?>index.php/school/edit/<?= $school->id ?>")' href="#"><i class="fa fa-edit">修改</i></a>&nbsp;
                        <a onclick="delete_class(<?=$school->id?>)"><i class="fa fa-remove">删除</i></a>
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
<script>

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

function delete_class(id){
    if(confirm("确定删除该班级信息吗？")){
        var url = "<?php echo base_url('school/delete');?>" ;
        $.post(url+ '/' + id)
            .fail(function(data){
                alert("删除失败");
            }).done(function(data){
                alert("删除成功");
                location.href = "<?php echo base_url('school/index');?>";
            });
    }
}
</script>
