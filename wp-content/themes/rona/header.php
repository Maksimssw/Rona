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
            <div class="contacts">
                <ul class="contacts__list">
                    <li>
                        <a href="<?php the_field('instagram-link'); ?>">
                            <svg class="icon-middle contacts__icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('vk-link'); ?>">
                            <svg class="icon-middle contacts__icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#vk"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('whatsApp-link'); ?>">
                            <svg class="icon-middle contacts__icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#whatsApp"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?php the_field('email-link'); ?>">
                            <svg class="icon-middle contacts__icon"> 
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="telephone">
                    <svg class="icon-middle telephone__icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                    </svg>
                    <a href="tel:<?php the_field('clean-phone'); ?>" class="telephone__number">
                        <?php the_field('phone'); ?>
                    </a>
                </div>
            </div>
            <nav class="navigation">
                <ul class="navigation__list">
                    <li>
                        <a href="#" class="navigation__link">
                            О нас
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation__link">
                            Доставка и возврат
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation__link">
                            Вызов замерщика
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation__link">
                            Гипермаркет “РоНа”
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="user">
                <p class="user__text">Петенков Д. А.</p>
                <svg class="icon-little user__icon">
                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                </svg>
            </div>
        </div>
        <div class="header__wrapper container">
            <div class="hamburger">
                <svg class="icon">
                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#hamburger"></use>
                </svg>                    
            </div>
            <?php the_custom_logo(); ?>
            <div class="searсh">
                <button class="button button_catalog">
                    <span>Каталог</span>
                    <svg class="icon-big catalog-icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#hamburger"></use>
                    </svg> 
                </button>
                <form action="#" class="searсh__wrapper">
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
            <div class="info">
                <svg class="icon-big info__icon">
                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#heart"></use>
                </svg>  
                <svg class="icon-big info__icon">
                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#basket"></use>
                </svg>
                <div class="info__score">
                    <p>456 000</p>
                    <div class="info__rub">
                        <svg class="icon">
                            <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#ruble"></use>
                        </svg> 
                    </div>
                </div>
            </div>
        </div>
    </header>