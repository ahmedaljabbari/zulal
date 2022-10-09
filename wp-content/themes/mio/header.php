<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/25c99b48fa.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="wide-screen-header">
            <a href="<?php echo site_url('/'); ?>">
                <img src="<?php echo get_theme_file_uri('/imgs/mainLogo.png'); ?>" alt="mio">
            </a>          
            <h1 style="margin: 0">Alzulal Pharma</h1>    
        </div>
        <div class="navbar">
            <a href="<?php echo site_url('/why-biowash'); ?>">لماذا بايو ووش</a>
            <a href="<?php echo site_url('/what-is-biowash'); ?>">ما هو بايو ووش</a>
        </div>
        <div class="burger">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="expander">
        <section>
            <a href="<?php echo site_url('/what-is-biowash'); ?>">ما هو بايو ووش</a>
            <a href="<?php echo site_url('/why-biowash'); ?>">لماذا بايو ووش</a>
        <hr>
        </section>
    </div>
    <div class="master-container" >
