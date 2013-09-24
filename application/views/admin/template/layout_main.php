<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $page_title; ?></title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1 class="pull-left">S C <span  class="glyphicon glyphicon-star-empty"></span> Cable</h1>

            </div>
            <div class="clearfix"></div>
            <div class="navbar navbar-default">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span  class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="text-danger"><a href="#"><span  class="glyphicon glyphicon-off"></span></a></li>
                    </ul>
                </div>
            </div>

            <div>
                <?php echo $content_for_layout; ?>    
            </div>

        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    </body>
</html>