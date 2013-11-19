<script type="text/javascript" >
    $(document).ready(function() {
        $('#list_setup_box').dataTable( {
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "bProcessing": true,
            'iDisplayLength': 10,
            "aoColumns":[
                {"sClass":""},{"sClass":""}
            ],
            "sAjaxSource": "<?php echo ADMIN_BASE_URL . "monthly/getJson/"; ?>" + document.getElementById("memorial_member_list").value +"/" + document.getElementById("memorial_member_list").value
        } );
    } );
    
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
    <div class="row add_button pull-left col-md-6">
        <a href="<?php echo ADMIN_BASE_URL . 'monthly/add'; ?>" class="btn btn-default">
            <?php echo $this->lang->line('add') . ' ' . $this->lang->line('menu_monthly'); ?>
        </a>
    </div>

    <div class="add_button pull-right form-horizontal col-md-6">
        <div class="form-group">
            <div class="col-md-3">
                <select id="pay_year" name="pay_year" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>
            <div class="col-md-3">
                <select id="pay_month" name="pay_month" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
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
            <table class="display" id="list_setup_box" cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr align="left">
                        <th><?php echo $this->lang->line('name'); ?></th>
                        <th width="25">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>