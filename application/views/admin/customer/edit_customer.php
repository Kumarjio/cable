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
        <form action="<?php echo ADMIN_BASE_URL . 'customer/update/' . $this->encrypt->encode($customer_details->customerid, $this->config->item('my_encrypt_key')) ?>" method="post" id="add_customer" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('firstname'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="firstname" required="required" value="<?php echo $customer_details->firstname; ?>" class="form-control"/>
                    <?php echo form_error('firstname'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('middlename'); ?>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="middlename" value="<?php echo $customer_details->middlename; ?>" class="form-control"/>
                    <?php echo form_error('middlename'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('lastname'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="lastname" required="required" value="<?php echo $customer_details->lastname; ?>" class="form-control"/>
                    <?php echo form_error('lastname'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('extra_info'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <textarea class="form-control" name="note"><?php echo $customer_details->note; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('housenumber'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="housenumber" required="required" value="<?php echo $customer_details->housenumber; ?>" class="form-control"/>
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
                            <option value="<?php echo $society->societyid; ?>" <?php if($customer_details->society == $society->societyid) { echo 'selected="selected"';} ?>><?php echo $society->name; ?></option>
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
                    <input type="text" name="email" value="<?php echo $customer_details->email; ?>" class="form-control"/>
                    <?php echo form_error('email'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('date_of_reg'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="date_of_reg" required="required" value="<?php echo date('d-m-Y', strtotime($customer_details->date_of_reg)); ?>" class="form-control"/>
                    <?php echo form_error('date_of_reg'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-6 control-label">
                    <?php echo $this->lang->line('mobileno'); ?>
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <input type="text" name="mobileno" required="required" value="<?php echo $customer_details->mobileno; ?>" class="form-control"/>
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
                        <input name="language" value="1" type="radio" <?php if($customer_details->language == '1') { echo 'checked="checked"';} ?>>
                        <?php echo $this->lang->line('english'); ?>
                    </label>
                    <label class="radio-inline">
                        <input name="language" value="2" type="radio" <?php if($customer_details->language == '2') { echo 'checked="checked"';} ?>>
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
                        <option value="<?php echo $current_box_details[0]->setup_box_id; ?>" selected="selected"><?php echo $current_box_details[0]->stb_no; ?></option>
                        <?php if(count($setupbox_details) >0 ) { foreach ($setupbox_details as $setupbox) { ?>
                            <option value="<?php echo $setupbox->setup_box_id; ?>"><?php echo $setupbox->stb_no; ?></option>
                        <?php } } else { echo '<option value="">No box Avaiable</option>'; }?>
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
                    <input type="text" name="monthly_rate"  value="<?php echo $monthly_rate[0]->rate; ?>" class="form-control"/>
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