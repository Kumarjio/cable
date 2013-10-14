<script type="text/javascript">
//<![CDATA[
        jQuery(document).ready(function($){
            $("#editAdminDetails").validate({
                rules: {
                    name:{required:true},
                    mail_address:{required:true}
                },messages:{
                    name:{required:'* Name is reqired'},
                    mail_address:{required:'* Email is reqired'}
                },
                highlight: function(element) {
                    $(element).parent().removeClass("error");
                },
                unhighlight: function(element) {
                    $(element).parent().removeClass("error");
                }
            });
        });
        //]]>
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <legend>Edit your detail</legend>
    <?php if ($this->session->flashdata('error') != '') { ?>
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert" href="#">x</a>
            <strong><?php echo $this->session->flashdata('error'); ?></strong>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata('success') != '') { ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">x</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php } ?>

        <form action="#" method="post" class="form-horizontal" role="form" id="editAdminDetails">       
        <div class="form-group">
            <label class="col-sm-1 control-label">Name &nbsp;:&nbsp;<span class="text-danger">*</span> </label>
            <div class="col-lg-3">
                <input type="text" name="name" class="form-control" id="name">
                <?php echo form_error("last_name"); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1 control-label">Email &nbsp;:&nbsp;<span class="text-danger">*</span> </label>
            <div class="col-lg-3">
                <input type="text" name="mail_address"  class="form-control"  id="mail_address">
                <div id="emailInfo" align="left" style="color:red"></div><?php echo form_error("mail_address"); ?>
            </div>				
        </div>

        <div class="form-group">
            <label class="col-sm-1 control-label">&nbsp;</label>
            <div class="col-lg-3">
                <input name="submit" type="submit" value="Update" class="btn btn-default"  />
                <a href="<?php echo base_url() . 'admin/dashboard'; ?>">
                    <input type="button" value="Cancel" class="btn btn-default" />
                </a>
            </div>            
        </div>
    </form>
</div>