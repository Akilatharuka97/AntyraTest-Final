<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antyra Solutions</title>
    <?php
    $style_css_url = get_stylesheet_uri();
    ?>
    <link rel="stylesheet" href="<?php echo $style_css_url; ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img class="logo"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/header-logo.png' ); ?>"
                        alt="Header Logo"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li>
                        <p>CALL US ON &nbsp;</p>
                    </li>
                    <li><a href="tel:+94777999994">+94 777 999 994</a></li>
                    <li class="mm">&nbsp;|&nbsp;</li>
                    <li><a href="tel:+94777428313">+94 777 428 313</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>