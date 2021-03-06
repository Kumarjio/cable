<script type="text/javascript" >
    $(document).ready(function() {
        $('#list_customer').dataTable( {
            "bProcessing": true,
            "bInfo" : false,
            "bPaginate" : true,
            "bFilter": true,
            "bSort" : false,
            "iDisplayLength": 25,
            "bServerSide": true,
            "aoColumns":[
                {"sClass":""},{"sClass":"text-center"},{"sClass":"text-center"},
                {"sClass":"text-center"},{"sClass":"text-center"},{"sClass":"text-center"},
                {"sClass":"text-center"}
            ],
            "sAjaxSource": "<?php echo ADMIN_BASE_URL . "customer/getJson"; ?>"
        } );
    } );
    
    function deleteRow(ele){
        var current_id = $(ele).attr('id');
        var parent = $(ele).parent().parent();
        $.confirm({
            'title' : '<?php echo $this->lang->line('delete') . ' ' . $this->lang->line('menu_customer'); ?>',
            'message'	: '<?php echo $this->lang->line('do_u_really'); ?>',
            'buttons'	: {
                '<?php echo $this->lang->line('yes'); ?>'	: {'class'	: 'btn btn-default',
                    'action': function(){
                        $.ajax({
                            type : 'POST',
                            url : http_host_js+'customer/delete/'+current_id,
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
                    'action': function(){}
                }
            }
        });		
        return false;
    }
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <h3><?php echo $this->lang->line('maintain') . ' ' . $this->lang->line('menu_customer'); ?></h3>
        <hr>
    </div>
    <div class="row add_button">
        <a href="<?php echo ADMIN_BASE_URL . 'customer/add'; ?>" class="btn btn-default">
            <?php echo $this->lang->line('add') . ' ' . $this->lang->line('menu_customer'); ?>
        </a>
        <a href="<?php echo ADMIN_BASE_URL . 'customer/import'; ?>" class="btn btn-default">
            <?php echo $this->lang->line('menu_import_customer'); ?>
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
            <table class="table table-bordered table-hover" id="list_customer">
                <thead>
                    <tr align="left">
                        <th><?php echo $this->lang->line('name'); ?></th>
                        <th width="125"><?php echo $this->lang->line('housenumber'); ?></th>
                        <th width="150"><?php echo $this->lang->line('mobileno'); ?></th>
                        <th width="125"><?php echo $this->lang->line('setup_box'); ?></th>
                        <th width="125"><?php echo $this->lang->line('society'); ?></th>
                        <th width="125"><?php echo $this->lang->line('history'); ?></th>
                        <th width="25">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

