<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function($){
        $('#add_payment').validate();
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
               <form action="<?php echo ADMIN_BASE_URL . 'monthly/save' ?>" method="post" id="add_payment" class="form-horizontal">
                <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"/>
                <?php if($last_year_payment > 0) { ?>
                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">
                        <?php echo $this->lang->line('last_year_amount'); ?>
                    </label>
                    <div class="col-lg-4 col-sm-4 col-xs-6 ui-widget">
                        <input type="text" value="<?php echo $last_year_payment; ?>" class="form-control" readonly="readonly"/>
                    </div>
                </div>
                <?php } ?>

                 <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">
                        <?php echo $this->lang->line('previous_amount'); ?>
                    </label>
                    <div class="col-lg-4 col-sm-4 col-xs-6 ui-widget">
                        <input type="text" value="<?php echo $current_year_payment; ?>" class="form-control" readonly="readonly"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">
                        <?php echo $this->lang->line('current_amount'); ?>
                    </label>
                    <div class="col-lg-4 col-sm-4 col-xs-6 ui-widget">
                        <input type="text" value="<?php echo floatval($current_year_rate); ?>" class="form-control" readonly="readonly"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">
                        <?php echo $this->lang->line('total_amount'); ?>
                    </label>
                    <div class="col-lg-4 col-sm-4 col-xs-6 ui-widget">
                        <input type="text" value="<?php echo $totla_payment; ?>" class="form-control" readonly="readonly"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">
                        <?php echo $this->lang->line('amount'); ?>
                    </label>
                    <div class="col-lg-4 col-sm-4 col-xs-6 ui-widget">
                        <input type="text" class="form-control required" name="monthly_payment"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">&nbsp;</label>
                    <div class="col-lg-4 col-sm-4 col-xs-6">
                       <button class="btn btn-default" type="submit"><?php echo $this->lang->line('save'); ?></button>
                        <a href="<?php echo ADMIN_BASE_URL . 'monthly/' . date('Y') . '/' . date('m'); ?>" class="btn btn-default"><?php echo $this->lang->line('cancel'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>