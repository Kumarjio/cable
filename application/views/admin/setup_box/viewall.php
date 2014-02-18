<script type="text/javascript" >
    $(document).ready(function() {
        $('#list_setup_box').dataTable( {
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "bProcessing": true,
            'iDisplayLength': 10,
            "aoColumns":[
                {"sClass":""},{"sClass":""},
                {"sClass":""},{"sClass":""},
                {"sClass":""},{"sClass":""}
            ],
            "sAjaxSource": "<?php echo ADMIN_BASE_URL . "setup_box/getJson"; ?>"
        } );
    } );
    
    function deleteRow(ele){
        var current_id = $(ele).attr('id');
        var parent = $(ele).parent().parent();
        $.confirm({
            'title' : '<?php echo $this->lang->line('delete') . ' ' . $this->lang->line('menu_setup_box'); ?>',
            'message'	: '<?php echo $this->lang->line('do_u_really');?>',
            'buttons'	: {
                '<?php echo $this->lang->line('yes');?>'	: {'class'	: 'btn btn-default',
                    'action': function(){
                        $.ajax({
                            type : 'POST',
                            url : http_host_js+'setup_box/delete/'+current_id,
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
                '<?php echo $this->lang->line('no');?>'	: {
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
        <h3><?php echo $this->lang->line('maintain') . ' ' . $this->lang->line('menu_setup_box'); ?></h3>
        <hr>
    </div>
    <div class="row add_button">
        <a href="<?php echo ADMIN_BASE_URL . 'setup_box/add'; ?>" class="btn btn-default">
            <?php echo $this->lang->line('add') . ' ' . $this->lang->line('menu_setup_box'); ?>
        </a>
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
            <table id="list_setup_box" class="table table-bordered table-hover">
                <thead>
                    <tr align="left">
                        <th><?php echo $this->lang->line('model'); ?></th>
                        <th><?php echo $this->lang->line('type'); ?></th>
                        <th><?php echo $this->lang->line('stb_no'); ?></th>
                        <th><?php echo $this->lang->line('cfa_no'); ?></th>
                        <th><?php echo $this->lang->line('date_of_purchase'); ?></th>
                        <th width="25">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

