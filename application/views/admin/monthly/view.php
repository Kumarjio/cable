<script type="text/javascript" >
$(document).ready(function() {
    $('#list_monthly_payment').dataTable( {
        "bProcessing": true,
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "bProcessing": true,
        'iDisplayLength': 25,
        'bServerSide' : true,
        "sAjaxSource": "<?php echo ADMIN_BASE_URL . "monthly/getJson/"; ?>" +  document.getElementById("month").value + "/"+  document.getElementById("year").value
    } );
} );

function change_month(){
    var oTable1 = $('#list_monthly_payment').dataTable();
    oTable1.fnDestroy();

    var oTable = $('#list_monthly_payment').dataTable( {
        "bProcessing": true,
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "bProcessing": true,
        'iDisplayLength': 25,
        'bServerSide' : true,
        "sAjaxSource": "<?php echo ADMIN_BASE_URL . "monthly/getJson/"; ?>" +  document.getElementById("month").value + "/"+  document.getElementById("year").value
    } );
}

function change_year(){
    var oTable1 = $('#list_monthly_payment').dataTable();
    oTable1.fnDestroy();

    var oTable = $('#list_invoice').dataTable( {
        "bProcessing": true,
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "bProcessing": true,
        'iDisplayLength': 25,
        'bServerSide' : true,
        "sAjaxSource": "<?php echo ADMIN_BASE_URL . "monthly/getJson/"; ?>" +  document.getElementById("month").value + "/"+  document.getElementById("year").value
    } );
}

function deleteRow(ele){
    var current_id = $(ele).attr('id');
    var parent = $(ele).parent().parent();
    $.confirm({
        'title' : '<?php echo $this->lang->line('delete') . ' ' . $this->lang->line('menu_setup_box'); ?>',
        'message'	: '<?php echo $this->lang->line('do_u_really'); ?>',
        'buttons'	: {
            '<?php echo $this->lang->line('yes'); ?>'	: {'class'	: 'btn btn-default',
            'action': function(){
                $.ajax({
                    type : 'POST',
                    url : http_host_js+'society/delete/'+current_id,
                    data: id =current_id,
                    beforeSend: function() {
                        parent.animate({'backgroundColor':'#fb6c6c'},500);
                    },
                    success: function() {
                        window.location.reload();
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                        alert('error');
                    }
                });
            }
        },
        '<?php echo $this->lang->line('no'); ?>'	: {
            'class'	: 'btn btn-default',
                    'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
                }
            }
        });		
return false;
}
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <h3><?php echo $this->lang->line('maintain') . ' ' . $this->lang->line('menu_monthly'); ?></h3>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row add_button pull-left col-md-6" style="z-index: 9999">
                <a href="<?php echo ADMIN_BASE_URL . 'monthly/view'; ?>" class="btn btn-default">
                    <?php echo $this->lang->line('add') . ' ' . $this->lang->line('menu_monthly'); ?>
                </a>
            </div>

            <div class="form-horizontal col-md-6">
                <div class="form-group">
                    <?php if (isset($years) && is_array($years)) { ?>
                    <div class="col-md-3 mar-lt-10 pull-right" style="z-index: 9999">
                        <select name="year" id="year" onchange="change_year()" class="form-control">
                            <?php foreach ($years as $year) { ?>
                            <option value="<?php echo $year->year; ?>" <?php
                            if ($sel_year == $year->year) {
                                echo 'selected=selected';
                            }
                            ?>><?php echo $year->year; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php } ?>
                    <div class="col-md-3 pull-right" style="z-index: 9999">
                        <select name="month" id="month" onchange="change_month()" class="form-control">
                            <option value="1"  <?php
                            if (isset($sel_month) && $sel_month == 1) {
                                echo 'selected=selected';
                            }
                            ?>>January</option>
                            <option value="2"  <?php
                            if (isset($sel_month) && $sel_month == 2) {
                                echo 'selected=selected';
                            }
                            ?>>February</option>
                            <option value="3"  <?php
                            if (isset($sel_month) && $sel_month == 3) {
                                echo 'selected=selected';
                            }
                            ?>>March</option>
                            <option value="4"  <?php
                            if (isset($sel_month) && $sel_month == 4) {
                                echo 'selected=selected';
                            }
                            ?>>April</option>
                            <option value="5"  <?php
                            if (isset($sel_month) && $sel_month == 5) {
                                echo 'selected=selected';
                            }
                            ?>>May</option>
                            <option value="6"  <?php
                            if (isset($sel_month) && $sel_month == 6) {
                                echo 'selected=selected';
                            }
                            ?>>June</option>
                            <option value="7"  <?php
                            if (isset($sel_month) && $sel_month == 7) {
                                echo 'selected=selected';
                            }
                            ?>>July</option>
                            <option value="8"  <?php
                            if (isset($sel_month) && $sel_month == 8) {
                                echo 'selected=selected';
                            }
                            ?>>August</option>
                            <option value="9"  <?php
                            if (isset($sel_month) && $sel_month == 9) {
                                echo 'selected=selected';
                            }
                            ?>>September</option>
                            <option value="10" <?php
                            if (isset($sel_month) && $sel_month == 10) {
                                echo 'selected=selected';
                            }
                            ?>>October</option>
                            <option value="11" <?php
                            if (isset($sel_month) && $sel_month == 11) {
                                echo 'selected=selected';
                            }
                            ?>>November</option>
                            <option value="12" <?php
                            if (isset($sel_month) && $sel_month == 12) {
                                echo 'selected=selected';
                            }
                            ?>>December</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="display" id="list_monthly_payment" cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr align="left">
                        <th><?php echo $this->lang->line('name'); ?></th>
                        <th width="200"><?php echo $this->lang->line('amount'); ?></th>
                        <th width="200"><?php echo $this->lang->line('society'); ?></th>
                        <th width="200"><?php echo $this->lang->line('date_time'); ?></th>
                        <th width="150"><?php echo $this->lang->line('collect_by'); ?></th>
                        <th width="25">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>