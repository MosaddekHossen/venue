<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <?php endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 flex justify-between">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a class="flex" href="index.html">
                            <div class="logo">
                                <?php venue_logo() ?>
                            </div>
                        </a>
                        <nav id="primary-nav" class="dropdown cf">
                            <?php venue_menu(); ?>
                            <!-- <ul class="dropdown menu">
                                <li class='active'><a href="#">Popular</a></li>
                                <li><a href="#">Most Visited</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Most Visited 1</a>
                                        </li>
                                        <li><a href="#">Most Visited 2</a>
                                        </li>
                                        <li><a href="#">Most Visited 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="#">Blog Entries</a></li>
                                <li><a class="scrollTo" data-scrollTo="services" href="#">Our Services</a></li>
                                <li><a class="scrollTo" data-scrollTo="contact" href="#">Contact Us</a></li>
                            </ul> -->
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>

    