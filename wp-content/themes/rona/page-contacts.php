
     <?php 
    /*  
    Template Name: contacts
    */
    ?>

    <?php get_header(); ?>

    <main>
        <nav class="way container">
            <ul class="way__list">
                <li class="way__item">
                    <a href="index.html" class="way__link">
                        Главная 
                    </a>
                    <svg class="icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg>
                </li>
                <li class="way__item">
                    <a href="#" class="way__link way__active">
                        Контакты 
                    </a>
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
                <div class="bond">
                    <h1 class="bond__title"><?php the_field('contacts-title');?></h1>
                    <p class="bond__description"><?php the_field('contacts-description');?></p>
                    <ul class="bond__list">
                        <li class="bond__item">
                            <svg class="icon-bond">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                            </svg>
                            <a href="tel:<?php the_field('clean-phone');?>" class="bond__link"><?php the_field('phone');?></a>
                        </li>
                        <li class="bond__item">
                            <svg class="icon-bond">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                            </svg>
                            <a href="mailto:<?php the_field('email-link');?>" class="bond__link"><?php the_field('email-link');?></a>
                        </li>
                        <li class="bond__item">
                            <svg class="icon-bond">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#location"></use>
                            </svg>
                            <address class="bond__link"><?php the_field('address');?></address>
                        </li>
                    </ul>
                    <ul class="social social_bond">
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
                        <form action="#" class="form__wrapper">
                            <?php echo do_shortcode('[contact-form-7 id="277" title="Contact form"]') ?>
                        </form>
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