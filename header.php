<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory')."/style.css"?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class()?>>
  <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list d-flex justify-content-around">
                        <li><a class="Home" href="index.html">Home</a></li>
                        <li><a class="Work" href="work.html">Work.</a></li>
                        <li><a href="#"><i class="fleche bi bi-arrow-up-circle"></i></a></li>
                        <li><a class="About" href="about.html">About.</a></li>
                        <li><a class="Contact" href="contact.html">Contact.</a></li>
                        <nav id="site-navigation" class="main-navigation">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-menu',
                                            'menu_id'     => 'primary-menu',
                                        )
                                    );
                                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>