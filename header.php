<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-theme
 */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="<?php the_field('site_title') ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title><?php the_field('site_title') ?></title>
    <meta name="google-site-verification" content="2VJC4CvLdnEX3rDa03ZNAs5h9KayFutP6PEe8dRW--g" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>
    <div class="pop-overlay">
        <div id="popup-window" class="popup-window">
            <div class="inner">
                <form id="contact" action="<?php echo get_template_directory_uri()?>/mail.php" method="post">
					<a href="javascript:void(0);" class="btn-close">Х</a>
                    <h3 id="title"><?php the_field('form_header') ?></h3>
                    <div id="note"></div>
                    <div class="form-head" id="fields">
                        <input type="text" name="name" placeholder="<?php the_field('placeholder_field_name') ?>" required>
                        <input type="text" name="tel" placeholder="<?php the_field('placeholder_field_telephone') ?>" required>
                        <textarea name="message" placeholder="<?php the_field('placeholder_field_message') ?>" style="height:150px" required></textarea>
                        <button type="submit" class="bt-popup-send-mail"
                            style="vertical-align:middle"><?php the_field('submit_button_text') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <header>
        <nav class="nav_header-menu">
            <div class="container">
                <div class="row">
                    <img src="<?php the_field('logo-header') ?>" alt="logo">
                    <ul class="menu-main col-9">
                        <?php                           
// параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => -1,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'menu',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                        <li><a href="<?php the_field('href') ?>"><?php the_field('menu_name') ?></a></li>
                        <?php
}

wp_reset_postdata(); // сброс
	?>
                    </ul>
                    <!-- Collapse button -->
                    <button class="navbar-toggler second-button col-2 ml-auto mt-auto mb-auto align-self-end"
                        type="button" data-toggle="collapse" data-target="#navbarSupportedContent23"
                        aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent23">
                        <ul class="navbar-nav mr-auto">
                            <?php                           
// параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => -1,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'menu',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                            <li class="nav-item"><a class="nav-link"
                                    href="<?php the_field('href') ?>"><?php the_field('menu_name') ?></a></li>
                            <?php
}
wp_reset_postdata(); // сброс
	?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>