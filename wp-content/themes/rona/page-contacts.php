
     <?php 
    /*  
    Template Name: contacts
    */
    ?>

    <?php get_header(); ?>

    <main>
        <nav class="breadcrumb container">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a href="/rona" class="breadcrumb__link">
                        Главная 
                    </a>
                    <svg class="icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg>
                </li>
                <li class="breadcrumb__item">
                    <span href="#" class="breadcrumb__link breadcrumb__active">
                        Контакты 
                    </span>
                </li>
            </ul>
        </nav>
        <section class="hero container">
            <div class="hero__wrapper">
                <aside class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                <svg class="icon-menu">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#people"></use>
                                </svg>
                                <p href="#" class="menu__text">
                                    О нас
                                </p>
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                <svg class="icon-menu">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#truck"></use>
                                </svg>
                                <p href="#" class="menu__text">
                                    Доставка и возврат
                                </p>
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                <svg class="icon-menu">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#workman"></use>
                                </svg>
                                <p href="#" class="menu__text">
                                    Вызов замерщика
                                </p>
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link active" href="#">
                                <svg class="icon-menu">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#contacts"></use>
                                </svg>
                                <p href="#" class="menu__text">
                                    Контакты
                                </p>
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                <svg class="icon-menu">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#shield"></use>
                                </svg>
                                <p href="#" class="menu__text">
                                    Политика конфиденциальности
                                </p>
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                <svg class="icon-menu">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#document"></use>
                                </svg>
                                <p href="#" class="menu__text">
                                    Договор оферты
                                </p>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class="feedback">
                    <h1 class="feedback__title"><?php the_field('contacts-title');?></h1>
                    <p class="feedback__description"><?php the_field('contacts-description');?></p>
                    <ul class="feedback__list">
                        <li class="feedback__item">
                            <svg class="icon-feedback">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                            </svg>
                            <a href="tel:<?php the_field('clean-phone');?>" class="feedback__link"><?php the_field('phone');?></a>
                        </li>
                        <li class="feedback__item">
                            <svg class="icon-feedback">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                            </svg>
                            <a href="mailto:<?php the_field('email-link');?>" class="feedback__link"><?php the_field('email-link');?></a>
                        </li>
                        <li class="feedback__item">
                            <svg class="icon-feedback">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#location"></use>
                            </svg>
                            <address class="feedback__link"><?php the_field('address');?></address>
                        </li>
                    </ul>
                    <ul class="social social_feedback">
                        <li class="social__item">
                            <a href="<?php the_field('instagram-link');?>" class="social__link social__link_footer">
                                <svg class="icon icon_green">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="<?php the_field('vk-link');?>" class="social__link social__link_footer">
                                <svg class="icon icon_green">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#vk"></use>
                                </svg>                                       
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="<?php the_field('whatsApp-link');?>" class="social__link social__link_footer">
                                <svg class="icon icon_green">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#whatsApp"></use>
                                </svg>                                      
                            </a>
                        </li>
                    </ul>
                    <div class="form">
                        <h2 class="form__title">Связаться с нами</h2>
                        <?php echo do_shortcode('[contact-form-7 id="277" title="Contact form"]') ?>
                    </div>
                </div>
                <div id="map" class="hero__map">
                    <div class="hero__hidden">
                        <div class="hero__location">
                            <svg class="icon-location">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#location"></use>
                            </svg> 
                            <span class="hero__we">Мы на карте</span>
                        </div>
                        <a href="#" class="map-link">Перейти</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>