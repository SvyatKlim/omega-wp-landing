<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel='stylesheet' href='/wp-content/themes/twentynineteen/dist/style.css'>
    <title>WP test task</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="container">
        <a  class="header__logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>" alt="Omega">
        </a>

        <nav class="header__nav header__nav__overlay js-nav-overlay">
            <ul class="header__nav__ul header__nav__aside js-nav-aside">
                <li class="header__nav__item"><a class="header__nav__link">What we do</a></li>
                <li class="header__nav__item"><a class="header__nav__link">Our work</a></li>
                <li class="header__nav__item"><a class="header__nav__link">Seo insights</a></li>
                <li class="header__nav__item"><a class="header__nav__link">About us</a></li>
            </ul>
        </nav>
        <div class="header__nav__icon js-nav">
    </div>
</header>

<main>


