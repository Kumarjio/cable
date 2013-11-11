<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $page_title; ?></title>

        <link rel="icon" type="image/png" href="<?php echo ASSETS_URL; ?>img/favicon.png">

        <!-- Bootstrap -->
        <link href="<?php echo CSS_URL . 'bootstrap.css'; ?>" rel="stylesheet" media="screen">
        <link href="<?php echo CSS_URL . 'custom.css'; ?>" rel="stylesheet" media="screen">
        <link href="<?php echo CSS_URL; ?>demo_table_jui.css" rel="stylesheet" />
        <link href="<?php echo CSS_URL; ?>jquery-ui.css" rel="stylesheet" />
        <link href="<?php echo CSS_URL; ?>jquery.confirm.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo JS_URL; ?>html5shiv.js"></script>
          <script src="<?php echo JS_URL; ?>respond.min.js"></script>
        <![endif]-->
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="<?php echo JS_URL; ?>jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="<?php echo JS_URL; ?>jquery.validate.js" type="text/javascript"></script>
        <script src="<?php echo JS_URL; ?>jquery.confirm.js" type="text/javascript"></script>
        <script src="<?php echo JS_URL; ?>jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var http_host_js = '<?php echo ADMIN_BASE_URL; ?>';
        </script>
    </head>
    <body>
        <?php $session_data = $this->session->userdata('admin_details'); ?>
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                <div class="page-header">
                    <h1 class="pull-left">S C <span  class="glyphicon glyphicon-star-empty"></span> Cable</h1>
                </div>    
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="pull-right">
                    <img src="<?php echo ASSETS_URL . 'admin_images/' . $session_data['session_admin_avtar']; ?>" class="img-circle admin-img"/>
                </div> 
                <div class="pull-right">
                    <h1>
                        <h6 class=""><?php echo 'Last login details : ' . date('dS F Y h:i:s A', strtotime($session_data['session_last_login_details'])); ?></h6>
                        <h4 class="pull-right"><?php echo $session_data['session_admin_name']; ?></h4>
                    </h1>
                </div>  

            </div>
            <div class="clearfix"></div>
            <div class="navbar navbar-default">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?php echo ADMIN_BASE_URL . 'dashboard'; ?>">
                                <span  class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo ADMIN_BASE_URL . 'setup_box'; ?>">
                                <?php echo $this->lang->line('menu_setup_box'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo ADMIN_BASE_URL . 'customer'; ?>">
                                <?php echo $this->lang->line('menu_customer'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo ADMIN_BASE_URL . 'society'; ?>">
                                <?php echo $this->lang->line('menu_society'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo ADMIN_BASE_URL . 'profile'; ?>">
                                <?php echo $this->lang->line('menu_change_details'); ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="text-danger"><a href="<?php echo ADMIN_BASE_URL . 'logout' ?>"><span  class="glyphicon glyphicon-off"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <?php echo $content_for_layout; ?>    
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
        </div>
        <script src="<?php echo JS_URL; ?>bootstrap.js"></script>
    </body>
</html>