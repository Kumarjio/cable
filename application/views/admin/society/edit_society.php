<script>
    //<![CDATA[
    $(document).ready(function(){
        $("#edit_society").validate({
        });
    });
    //]]>
</script>
<div class="container row">
    <h3><?php echo $this->lang->line('edit') . ' ' . $this->lang->line('menu_setup_box'); ?></h3>
    <hr>
</div>

<div class="container row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form action="<?php echo ADMIN_BASE_URL . 'society/update/' . $society_details->societyid ?>" method="post" id="edit_society" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('name'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="name" required="required" value="<?php echo htmlentities(set_value('name') !== '' ? set_value('name') : isset($society_details->name) ? $society_details->name : ''); ?>" class="form-control"/>
                    <?php echo form_error('name'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">&nbsp;</label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <button type="submit" class="btn btn-default"><?php echo $this->lang->line('update'); ?></button>
                    <a href="<?php echo ADMIN_BASE_URL . 'society' ?>" class="btn btn-default"><?php echo $this->lang->line('cancel'); ?></a>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">&nbsp;</label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    Fields marked with  <span class="text-danger">*</span>  are mandatory.
                </div>
            </div>
        </form>
    </div>
</div>