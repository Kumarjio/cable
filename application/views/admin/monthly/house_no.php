<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function($){
        jQuery( "#tags" ).autocomplete({
            source: '<?php echo ADMIN_BASE_URL . 'customer/get' ?>',
            select: function( event, ui ) {
                $("#tags").val(ui.item.label);
                location.href="<?php echo ADMIN_BASE_URL . 'monthly/check_history/' ?>"+ui.item.value
                return false;
            },
            focus: function(event, ui) {
                 $( "#tags" ).val( ui.item.label );
                    return false;  
            } 
        });
    });
    //]]>
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <h3><?php echo$this->lang->line('menu_monthly'); ?></h3>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if ($this->session->flashdata('error') != '' || $this->session->flashdata('success') != '') { ?>
                <?php
                if ($this->session->flashdata('error') != '') {
                    echo '<div class="alert alert-danger"><a href="' . current_url() . '" class="close" data-dismiss="alert">&times;</a>' . $this->session->flashdata('error') . '</div>';
                }
                ?>

                <?php
                if ($this->session->flashdata('success') != '') {
                    echo '<div class="alert alert-success"><a href="' . current_url() . '" class="close" data-dismiss="alert">&times;</a>' . $this->session->flashdata('success') . '</div>';
                }
                ?>
            <?php } ?>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">
                        <?php echo $this->lang->line('housenumber'); ?>
                    </label>
                    <div class="col-lg-4 col-sm-4 col-xs-6 ui-widget">
                        <input id="tags" type="text" name="housenumber" required="required" value="<?php echo set_value('housenumber'); ?>" class="form-control"/>
                        <?php echo form_error('housenumber'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">&nbsp;</label>
                    <div class="col-lg-4 col-sm-4 col-xs-6">
                        <a href="<?php echo ADMIN_BASE_URL . 'monthly/' . date('Y') . '/' . date('m'); ?>" class="btn btn-default"><?php echo $this->lang->line('cancel'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>