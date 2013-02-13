<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php 
            print $head;
        ?>
        <title><?php print $head_title; ?></title>
        <?php 
            print $styles; 
            print $scripts; 
        ?>
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes;?>>
        <?php 
            print $page_top;
            print $page; 
            print $page_bottom;
        ?>
    </body>
</html>
