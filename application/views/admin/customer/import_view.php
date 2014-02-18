<script>
    //<![CDATA[
    $(document).ready(function(){
        $("#import_customer").validate({
            rules:  {
                user_file :{
                    required : true,
                    accept : 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel,text/comma-separated-values, text/csv, application/csv'
                }
            },
                messages: {
                    user_file: {accept: 'Not an Excel or CSV File!'}
                }
        });
    });

    jQuery.validator.addMethod("accept", function(value, element, param) {
        var typeParam = typeof param === "string" ? param.replace(/\s/g, '').replace(/,/g, '|') : "image/*",
        optionalValue = this.optional(element),
        i, file;

            // Element is optional
            if (optionalValue) {
                return optionalValue;
            }

            if ($(element).attr("type") === "file") {
                typeParam = typeParam.replace(/\*/g, ".*");
                if (element.files && element.files.length) {
                    for (i = 0; i < element.files.length; i++) {
                        file = element.files[i];
                        if (!file.type.match(new RegExp( ".?(" + typeParam + ")$", "i"))) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }, jQuery.format("Please Upload Only Image file"));
    
    //]]>
    </script>
    <div class="container row">
        <h3><?php echo $this->lang->line('menu_import_customer'); ?></h3>
        <hr>
    </div>

    <div class="container row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="<?php echo ADMIN_BASE_URL . 'customer/import_file' ?>" method="post" id="import_customer" class="form-horizontal" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">
                        <?php echo $this->lang->line('excel_file'); ?>
                    </label>
                    <div class="col-lg-4 col-sm-4 col-xs-6">
                        <input type="file" name="user_file" class="form-control"/>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 col-xs-6 control-label">&nbsp;</label>
                    <div class="col-lg-4 col-sm-4 col-xs-6">
                        <button type="submit" class="btn btn-default"><?php echo $this->lang->line('import'); ?></button>
                        <a href="<?php echo ADMIN_BASE_URL . 'customer' ?>" class="btn btn-default"><?php echo $this->lang->line('cancel'); ?></a>
                    </div>
                </div>
            </form>
        </div>
    </div>