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
                    <li class="contacts__item">
                        <a href="<?php the_field('instagram-link'); ?>" class="contacts__link">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="<?php the_field('vk-link'); ?>" class="contacts__link">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#vk"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="<?php the_field('whatsApp-link'); ?>" class="contacts__link">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#whatsApp"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="mailto:<?php the_field('email-link'); ?>" class="contacts__link">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="telephone">
                    <div class="telephone__icon">
                        <svg>
                            <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                        </svg>
                    </div>
                    <a href="tel:<?php the_field('clean-phone'); ?>" class="telephone__number text-sm100">
                        <?php the_field('phone'); ?>
                    </a>
                </div>
            </div>
            <nav class="navigation">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="#" class="navigation__link">
                            О нас
                        </a>
                    </li>
                    <li class="navigation__item">
                        <a href="#" class="navigation__link">
                            Доставка и возврат
                        </a>
                    </li>
                    <li class="navigation__item">
                        <a href="#" class="navigation__link">
                            Вызов замерщика
                        </a>
                    </li>
                    <li class="navigation__item">
                        <a href="#" class="navigation__link">
                            Гипермаркет “РоНа”
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="user">
                <p class="user__text">Петенков Д. А.</p>
                <div class="user__arrow">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg>
                </div>
            </div>
            <p class="heading__time">9:41</p>
            <ul class="iphone__list">
                <li class="iphone__item">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#connection"></use>
                    </svg>
                </li>
                <li class="iphone__item">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#wifi"></use>
                    </svg>
                </li>
                <li class="iphone__item">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#battery"></use>
                    </svg>
                </li>
            </ul>
        </div>
        <div class="header__wrapper container">
            <?php the_custom_logo(); ?>
            <button class="button button_catalog">
                <span class="searсh__catalog">Каталог</span>
                <span class="searсh__burger">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#hamburger"></use>
                    </svg>  
                </span>
            </button>
            <form action="#" class="searсh">
                <div class="searсh__wrapper">
                    <div class="search__block">
                        <input type="text" name="search" placeholder="Введите название товара" class="search__input">
                    </div>
                    <button class="button searсh__find">
                        Найти
                    </button>
                </div>
            </form>
            <div class="info">
                <div class="info__heart active info-icon">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#heart"></use>
                    </svg>  
                </div>
                <div class="info__basket active info-icon">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#basket"></use>
                    </svg>
                </div>
                <div class="info__score">
                    <p>456 000</p>
                    <div class="info__rub">
                        <svg>
                            <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#ruble"></use>
                        </svg> 
                    </div>
                </div>
            </div>
        </div>
    </header>