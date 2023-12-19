<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
<header class="header">
        <div id="navbar">
            <nav>
                <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
               <img  class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" >
                </a>
            </nav>
            <?php wp_nav_menu(['theme_location' => 'header',
             'container' => false ,
             'menu_class' => 'nav justify-content-end'
             ]) ?>
           
    </header>

    <?php wp_body_open(); ?>