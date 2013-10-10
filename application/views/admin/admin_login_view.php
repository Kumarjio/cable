<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>S C STAR CABLE</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container text-center">
            <h1 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">S C <span  class="glyphicon glyphicon-star-empty"></span> Cable</h1>
            <br />
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                <legend>Please Provide the credentials</legend>
                <?php if ($this->session->flashdata('login_error') != '') { ?>
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#">x</a>
                        <strong><?php echo $this->session->flashdata('login_error'); ?></strong>
                    </div>
                <?php } ?>

                <?php if ($this->session->flashdata('success') != '') { ?>
                    <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" href="#">x</a>
                            <strong><?php echo $this->session->flashdata('success'); ?></strong>
                    </div>
                <?php } ?>

                <form action="<?php echo base_url() . 'admin/validateadmin'; ?>" method="post" class="form">
                    <div class="form-group">
                        <input type="email" name="admin_mail_address" value="<?php echo set_value('admin_mail_address'); ?>" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="E-Mail Address"/>
                        <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-danger"><?php echo form_error('admin_mail_address'); ?></span>
                    </div>

                    <div class="form-group">
                        <input type="password" id="admin_password" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12" name="admin_password" placeholder="Password">
                        <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-danger"><?php echo form_error('admin_password'); ?></span>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn-sm btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Login</button>
                    </div>

                    <div class="form-group">
                        <a href="<?php echo base_url() . 'admin/forgot_password'; ?>"><button type="button" class="btn-sm btn-inverse col-xs-12 col-sm-12 col-md-12 col-lg-12">Forgot Password ?</button></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="mar-10"></div>
        <div id="footer">
            <div class="container">
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <span class="text-muted pull-left">
                        All right are reserved by &copy;
                        <a href="#">S C <span  class="glyphicon glyphicon-star-empty"></span> Cable</a>
                    </span> 
                </span>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <span class="text-muted pull-right">
                        Design and Developed by : 
                        <a href="#">Rana</a>
                    </span>
                </span>
            </div>
        </div>
    </body>
</html>