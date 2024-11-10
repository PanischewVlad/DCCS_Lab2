<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> <html>
    <head>
        <meta content="charset=<?php bloginfo ('charset'); ?>"> 
        <title><?php bloginfo ('name'); ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo ('stylesheet_url'); ?>"> 
        <?php wp_head(); ?>
    </head> 
    <body>
        <div id="header">
            <div id="header_center">
                <div id="header_center_img">
                    <div id="menu_sidebar">
                        <?php
                            dynamic_sidebar ('menu-sidebar');
                        ?>
                    </div>
                </div>
            </div>
        </div>