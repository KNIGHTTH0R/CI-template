<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $page_title; ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://codenolimit.com">CODE NO LIMIT</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <?php
                        if(!empty($navbar_menu)):
                    ?>
                    <ul class="nav navbar-nav">
                        <?php
                            foreach($navbar_menu as $menu):
                                $active = ($menu['active']) ? 'active' : '';
                        ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a></li>
                        <?php
                            endforeach;
                        ?>
                    </ul>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </nav>
        <?php echo $body; ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('assets/jquery/jquery-3.2.1.min.js'); ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js'); ?>"></script>
    </body>
</html>
