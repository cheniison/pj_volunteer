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
        <input type="hidden" name="useraccount" value="<?=$account?>"/>
        <div class="form-group col-md-12">
=======
    <?php echo form_open('user/store_pw', 'class="form-horizontal" id="user_add"');?>
    <div class="box-body">
        <input type="hidden" name="useraccount" value="<?=$account?>"/>
        <div class="form-group">
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
            <label class="col-sm-2 control-label" for="password">密码</label>
            <div class="col-sm-5">
                <input id="password" name="password" class="form-control" type="text" value="" placeholder="密码"/>
            </div>
        </div>
<<<<<<< HEAD

        <div class="form-group col-md-12">
=======
        <div class="form-group">
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
        <label class="col-sm-2 control-label" for="password">确认密码</label>
            <div class="col-sm-5">
                <input id="passconf" name="passconf" class="form-control" type="text" value="" placeholder="确认密码"/>
            </div>
        </div>
    </div>
    <div class="box-footer">
<<<<<<< HEAD
        <a onclick="gotoUrl('<?php echo site_url('user/index')?>')" href="#"><i class="fa fa-reply">&nbsp;返回</i></a>
        <button class="btn btn-info pull-right" type="button" onclick="save('<?php echo site_url('user/store_pw')?>')"><i class="fa fa-save">&nbsp;保存</i></button>
    </div>
    </form>
=======
        <a href="<?php echo site_url('user/index')?>"><i class="fa fa-reply">&nbsp;返回</i></a>
        <button class="btn btn-info pull-right" type="submit"><i class="fa fa-save">&nbsp;保存</i></button>
    </div>
    <?php echo form_close();?>
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
</div>
