<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <title>Уютный интерьер вместе с РоНа</title>
</head>
<body>
    <header class="header">
        <div class="heading container">
            <div class="grid-row">
                <ul class="contacts grid-row">
                    <li>
                        <a href="<?php the_field('instagram-link'); ?>" class="contacts__link">
                            <svg class="icon-medium contacts__icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('vk-link'); ?>" class="contacts__link">
                            <svg class="icon-medium contacts__icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#vk"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('whatsApp-link'); ?>" class="contacts__link">
                            <svg class="icon-medium contacts__icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#whatsApp"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?php the_field('email-link'); ?>" class="contacts__link">
                            <svg class="icon-medium contacts__icon"> 
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="telephone grid-row">
                    <svg class="icon-medium telephone__icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                    </svg>
                    <a href="tel:<?php the_field('clean-phone'); ?>" class="telephone__number header__text">
                        <?php the_field('phone'); ?>
                    </a>
                </div>
            </div>
            <nav>
                <ul class="navigation grid-row">
                    <li>
                        <a href="#" class="navigation__link header__text">
                            О нас
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation__link header__text">
                            Доставка и возврат
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation__link header__text">
                            Вызов замерщика
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation__link header__text">
                            Гипермаркет “РоНа”
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="user grid-row">
                <p class="header__text">Петенков Д. А.</p>
                <svg class="icon-small user__icon">
                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                </svg>
            </div>
        </div>
        <div class="header__wrapper grid-row container">
            <div class="hamburger">
                <svg class="icon">
                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#hamburger"></use>
                </svg>                    
            </div>
            <?php the_custom_logo(); ?>
            <div class="searсh grid-row">
                <button class="button button_catalog grid-row">
                    <span>Каталог</span>
                    <svg class="icon-large catalog-icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#hamburger"></use>
                    </svg> 
                </button>
                <form action="#" class="grid-row">
                    <div class="search__block">
                        <input type="text" name="search" placeholder="Введите название товара" class="search__input">
                        <svg class="searсh__icon">
                            <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#searсh"></use>
                        </svg> 
                    </div>
                    <button class="button searсh__find">
                        Найти
                    </button>
                </form>
            </div>
            <div class="info grid-row">
                <svg class="icon-large info__icon">
                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#heart"></use>
                </svg>  
                <div class="cart grid-row">
                    <svg class="icon-large cart__icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#basket"></use>
                    </svg>
                    <span class="cart__text">456 000</span>
                    <svg class="cart__ruble">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#ruble"></use>
                    </svg> 
                </div>
            </div>
        </div>
    </header>