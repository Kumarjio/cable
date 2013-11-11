<script>
    //<![CDATA[
    $(document).ready(function(){
        $("#edit_setup_box").validate({
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
        <form action="<?php echo ADMIN_BASE_URL . 'setup_box/update/' . $setup_box_details->setup_box_id ?>" method="post" id="edit_setup_box" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('model'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="model" required="required" value="<?php echo htmlentities(set_value('model') !== '' ? set_value('model') : isset($setup_box_details->model) ? $setup_box_details->model : ''); ?>" class="form-control"/>
                    <?php echo form_error('model'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('type'); ?>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <label class="radio-inline">
                        <input name="type" value="NR" type="radio" <?php if($setup_box_details->type == 'NR') {echo 'checked=checked';} ?>>
                        <?php echo $this->lang->line('normal'); ?>
                    </label>
                    <label class="radio-inline">
                        <input name="type" value="HD" type="radio" <?php if($setup_box_details->type == 'HD') {echo 'checked=checked';} ?>>
                        <?php echo $this->lang->line('hd'); ?>
                    </label>
                </div>				
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('stb_no'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="stb_no" required="required" value="<?php echo htmlentities(set_value('stb_no') !== '' ? set_value('stb_no') : isset($setup_box_details->stb_no) ? $setup_box_details->stb_no : ''); ?>" class="form-control"/>
                    <?php echo form_error('stb_no'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('cfa_no'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="cfa_no" required="required" value="<?php echo htmlentities(set_value('cfa_no') !== '' ? set_value('cfa_no') : isset($setup_box_details->cfa_no) ? $setup_box_details->cfa_no : ''); ?>" class="form-control"/>
                    <?php echo form_error('cfa_no'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('date_of_purchase'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="date_of_purchase" required="required" value="<?php echo htmlentities(set_value('date_of_purchase') !== '' ? set_value('date_of_purchase') : isset($setup_box_details->date_of_purchase) ? date('d-m-Y',strtotime($setup_box_details->date_of_purchase)) : ''); ?>" class="form-control"/>
                    <?php echo form_error('date_of_purchase'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">&nbsp;</label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <button type="submit" class="btn btn-default"><?php echo $this->lang->line('update'); ?></button>
                    <a href="<?php echo ADMIN_BASE_URL . 'setup_box' ?>" class="btn btn-default"><?php echo $this->lang->line('cancel'); ?></a>
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