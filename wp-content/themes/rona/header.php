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
        <section class="heading container">
            <div class="contacts">
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <a href="<?php the_field('instagram-link'); ?>" class="contacts__link">
                            <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/instagram.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/instagram.svg" alt="instagram"></picture>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="<?php the_field('vk-link'); ?>" class="contacts__link">
                            <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/stroke.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/stroke.svg" alt="stroke"></picture>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="<?php the_field('whatsApp-link'); ?>" class="contacts__link">
                            <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/whatsUp.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/whatsUp.svg" alt="whatsUp"></picture>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="mailto:<?php the_field('email-link'); ?>" class="contacts__link">
                            <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/mail.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/mail.svg" alt="mail"></picture>
                        </a>
                    </li>
                </ul>
                <div class="telephone">
                    <div class="telephone__icon">
                        <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/phone.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/phone.svg" alt="phone"></picture>
                    </div>
                    <a href="tel:<?php the_field('clean-phone'); ?>" class="telephone__number text-sm100">
                        <?php the_field('phone'); ?>
                    </a>
                </div>
            </div>
            <nav class="navigation">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="#" class="navigation__link text-sm100">
                            О нас
                        </a>
                    </li>
                    <li class="navigation__item">
                        <a href="#" class="navigation__link text-sm100">
                            Доставка и возврат
                        </a>
                    </li>
                    <li class="navigation__item">
                        <a href="#" class="navigation__link text-sm100">
                            Вызов замерщика
                        </a>
                    </li>
                    <li class="navigation__item">
                        <a href="#" class="navigation__link text-sm100">
                            Гипермаркет “РоНа”
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="user">
                <p class="user__text text-sm100">Петенков Д. А.</p>
                <div class="user__arrow">
                    <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/down.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/down.svg" alt="down"></picture>
                </div>
            </div>
        </section>
        <section class="header__wrapper container">
            <?php the_custom_logo(); ?>
            <form action="#" class="searсh">
                <button class="button searсh__button">
                    <p class="searсh__catalog">Каталог</p>
                    <div class="searсh__burger">
                        <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/burger.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/burger.svg" alt="burger"></picture>
                    </div>
                </button>
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
                <div class="info__heart active info_icon">
                    <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/heart.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/heart.svg" alt="heart"></picture>
                </div>
                <div class="info__basket active info_icon">
                    <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/basket.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/basket.svg" alt="basket"></picture>
                </div>
                <div class="info__score">
                    <p class="text-base100 text-base100_medium">456 000</p>
                    <div class="info__rub">
                        <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/rub.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/rub.svg" alt="rub"></picture>
                    </div>
                </div>
            </div>
        </section>
    </header>