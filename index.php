<?php
/*
* This template for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    
    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href=""><img src="<?php echo get_theme_mod('ar_logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <ul id="nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Media</a></li>
                        <li><a href="">Download</a></li>
                        <li><a href="">Projects</a></li>
                        <li><a href="">Service</a>
                            <ul>
                                <li><a href="">Dropdown Menu</a></li>
                                <li><a href="">Dropdown Menu</a></li>
                                <li><a href="">Dropdown Menu</a>
                                    <ul>
                                        <li><a href="">Dropdown Menu</a></li>
                                        <li><a href="">Dropdown Menu</a></li>
                                        <li><a href="">Dropdown Menu</a></li>
                                        <li><a href="">Dropdown Menu</a></li>
                                        <li><a href="">Dropdown Menu</a></li>
                                        <li><a href="">Dropdown Menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Dropdown Menu</a></li>
                                <li><a href="">Dropdown Menu</a></li>
                                <li><a href="">Dropdown Menu</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="">FQA</a></li>
                        <li><a href="">Contact Us</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- get_theme_mod('ar_logo') -->
<?php wp_footer() ?>
</body>
</html>