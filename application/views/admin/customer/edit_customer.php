<script>
    //<![CDATA[
    $(document).ready(function(){
        $("#add_customer").validate({
        });
    });
    //]]>
</script>
<div class="container row">
    <h3><?php echo $this->lang->line('add') . ' ' . $this->lang->line('menu_customer'); ?></h3>
    <hr>
</div>

<div class="container row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form action="<?php echo ADMIN_BASE_URL . 'customer/update' ?>" method="post" id="add_customer" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('firstname'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="firstname" required="required" value="<?php echo set_value('firstname'); ?>" class="form-control"/>
                    <?php echo form_error('firstname'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('middlename'); ?>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="middlename" value="<?php echo set_value('middlename'); ?>" class="form-control"/>
                    <?php echo form_error('middlename'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('lastname'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="lastname" required="required" value="<?php echo set_value('lastname'); ?>" class="form-control"/>
                    <?php echo form_error('lastname'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('housenumber'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="housenumber" required="required" value="<?php echo set_value('housenumber'); ?>" class="form-control"/>
                    <?php echo form_error('housenumber'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('society'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <select name="society" required="required" class="form-control">
                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                        <?php foreach ($society_details as $society) { ?>
                            <option value="<?php echo $society->societyid; ?>"><?php echo $society->name; ?></option>
                        <?php } ?>
                    </select>
                    <?php echo form_error('society'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('email'); ?>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control"/>
                    <?php echo form_error('email'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('date_of_reg'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="date_of_reg" required="required" value="<?php echo set_value('date_of_reg'); ?>" class="form-control"/>
                    <?php echo form_error('date_of_reg'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('mobileno'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="mobileno" required="required" value="<?php echo set_value('mobileno'); ?>" class="form-control"/>
                    <?php echo form_error('mobileno'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('avtar'); ?>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="file" name="avtar" class="form-control"/>
                    <?php echo form_error('avtar'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('language'); ?>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <label class="radio-inline">
                        <input name="language" value="1" type="radio" checked="checked">
                        <?php echo $this->lang->line('english'); ?>
                    </label>
                    <label class="radio-inline">
                        <input name="language" value="2" type="radio">
                        <?php echo $this->lang->line('gujarati'); ?>
                    </label>
                </div>				
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('setup_box'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <select name="setup_box_id" required="required" class="form-control">
                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                        <?php foreach ($setupbox_details as $setupbox) { ?>
                            <option value="<?php echo $setupbox->setup_box_id; ?>"><?php echo $setupbox->stb_no; ?></option>
                        
                        <?php var_dump($setupbox); } ?>
                    </select>
                    <?php echo form_error('setup_box_id'); ?>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('monthly_rate'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="monthly_rate" required="required" value="<?php echo set_value('monthly_rate'); ?>" class="form-control"/>
                    <?php echo form_error('monthly_rate'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">&nbsp;</label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <button type="submit" class="btn btn-default"><?php echo $this->lang->line('update'); ?></button>
                    <a href="<?php echo ADMIN_BASE_URL . 'customer' ?>" class="btn btn-default"><?php echo $this->lang->line('cancel'); ?></a>
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