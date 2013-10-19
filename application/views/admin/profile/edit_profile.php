<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function($){
        $("#editAdminDetails").validate({
            rules: {
                name:{required:true},
                mail_address:{required:true},
                language:{required:true}
            },messages:{
                name:{required:'* Name is reqired'},
                mail_address:{required:'* Email is reqired'},
                language:{required:'* language is reqired'}
            }
        });
    });
    //]]>
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <legend>
        <?php echo $this->lang->line('edit_your_details'); ?>
    </legend>
    <?php $session_data = $this->session->userdata('admin_details'); ?>
    <?php if ($this->session->flashdata('error') != '') { ?>
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert" href="<?php echo current_url(); ?>">x</a>
            <strong><?php echo $this->session->flashdata('error'); ?></strong>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata('success') != '') { ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="<?php echo current_url(); ?>">x</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php } ?>

    <form action="<?php echo base_url() . 'admin/proflie/update'; ?>" method="post" class="form-horizontal" id="editAdminDetails">       
        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $this->lang->line('name'); ?> &nbsp;:&nbsp;<span class="text-danger">*</span> </label>
            <div class="col-lg-3">
                <input type="text" name="name" class="form-control" id="name" value="<?php echo set_value('name') != '' ? set_value('name') : $admin_details[0]->username; ?>">
                <?php echo form_error("name"); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $this->lang->line('email'); ?> &nbsp;:&nbsp;<span class="text-danger">*</span> </label>
            <div class="col-lg-3">
                <input type="text" name="mail_address"  class="form-control"  id="mail_address" value="<?php echo set_value('mail_address') != '' ? set_value('mail_address') : $admin_details[0]->email; ?>">
                <div id="emailInfo" align="left" style="color:red"></div><?php echo form_error("mail_address"); ?>
            </div>				
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $this->lang->line('language'); ?> &nbsp;:&nbsp;<span class="text-danger">*</span> </label>
            <div class="col-lg-3">
                <label class="radio-inline">
                    <input name="language" value="1" type="radio" <?php echo $admin_details[0]->language == 1 ? 'checked=checked' : ''; ?>>
                    <?php echo $this->lang->line('english'); ?>
                </label>
                <label class="radio-inline">
                    <input name="language" value="2" type="radio" <?php echo $admin_details[0]->language == 2 ? 'checked=checked' : ''; ?>>
                    <?php echo $this->lang->line('gujarati'); ?>
                </label>
            </div>				
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $this->lang->line('old') . ' ' . $this->lang->line('avtar'); ?> &nbsp;:&nbsp;<span class="text-danger">*</span> </label>
            <div class="col-lg-3">
                <img src="<?php echo base_url() . 'assets/admin_images/' . $session_data['session_admin_avtar']; ?>" class="col-lg-6 img-thumbnail"/>
            </div>				
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $this->lang->line('new') . ' ' . $this->lang->line('avtar'); ?> &nbsp;:&nbsp;&nbsp;</label>
            <div class="col-lg-3">
                <input type="file" name="admin_image"  class="file-input" id="admin_image" autocomplete>
                <div id="imageInfo" align="left" style="color:red"></div><?php echo form_error("admin_image"); ?>
            </div>				
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $this->lang->line('new') . ' ' . $this->lang->line('password'); ?> &nbsp;:&nbsp;&nbsp; </label>
            <div class="col-lg-3">
                <input type="password" name="new_password" class="form-control" id="password">
                <?php echo form_error("new_password"); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $this->lang->line('confirm') . ' ' . $this->lang->line('password'); ?> &nbsp;:&nbsp;&nbsp; </label>
            <div class="col-lg-3">
                <input type="password" name="confirm_password" class="form-control" id="password">
                <?php echo form_error("confirm_password"); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-lg-3">
                <strong><span class="text-danger">* <?php echo $this->lang->line('marked_filed_compulsory'); ?> </span></strong>
            </div>            
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-lg-3">
                <input name="submit" type="submit" value="Update" class="btn btn-default"  />
                <a href="<?php echo base_url() . 'admin/dashboard'; ?>">
                    <input type="button" value="Cancel" class="btn btn-default" />
                </a>
            </div>            
        </div>
    </form>
</div>