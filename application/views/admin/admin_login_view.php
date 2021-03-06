<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>S C STAR CABLE</title>
        <link href="<?php echo CSS_URL; ?>bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo CSS_URL; ?>custom.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo JS_URL; ?>html5shiv.js"></script>
          <script src="<?php echo JS_URL; ?>respond.min.js"></script>
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

                <form action="<?php echo ADMIN_BASE_URL . 'validateadmin'; ?>" method="post" class="form">
                    <div class="form-group">
                        <input type="email" name="admin_mail_address" value="<?php echo set_value('admin_mail_address'); ?>" class="form-control" placeholder="E-Mail Address"/>
                        <span class="text-danger"><?php echo form_error('admin_mail_address'); ?></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="admin_password" placeholder="Password">
                        <span class="text-danger"><?php echo form_error('admin_password'); ?></span>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-default">Login</button>
                        &nbsp;
                        <a href="<?php echo ADMIN_BASE_URL . 'forgot_password'; ?>"><button type="button" class="btn btn-default">Forgot Password ?</button></a>
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