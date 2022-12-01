
    <?php 
    /*  
    Template Name: home
    */
    ?>

    <?php get_header(); ?>

    <main>
        <section class="intro container">
            <div class="swiper intro-swiper">
                <div class="swiper-wrapper">       
                <?php
                global $post;

                $myposts = get_posts([ 
                'numberposts' => -1,
                'category_name' => 'main-slider',
                'order' => 'ASC',
                'orderby'   => 'date',
                'suppres_filter' => true,   
                ]);

                if( $myposts ){
                foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>

                <div class="swiper-slide intro-slider__item">
                        <div class="intro__wrapper container">
                            <div class="intro__block">
                                <h1 class="intro__title">
                                    <?php the_field('intro-title'); ?>    
                                    <span><?php the_field('intro-title-green'); ?></span>
                                </h1>
                                <p class="intro__description"><?php the_field('intro-description'); ?></p>
                                <a href="<?php the_field('intro-button-link'); ?>" class="intro__button button-green">
                                    <?php the_field('intro-button-text'); ?>
                                </a>
                            </div>
                        </div>
                        <img src="<?php the_field('slider-main-image'); ?>" alt="sofa">
                    </div>

                <?php }} wp_reset_postdata();?>
                </div>
                <button class="swiper-button-prev intro-button-prev slider-button-left">
                    <svg class="icon">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg>
                </button>
                <button class="swiper-button-next intro-button-next slider-button-right">
                    <svg class="icon"> 
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg> 
                </button>
                <div class="intro__buttons container">
                    <div class="intro-pagination-wrapper">
                        <div class="swiper-pagination intro-pagination"></div>
                    </div>
                </div> 
            </div>
        </section>
        <section class="furniture container">
            <div class="furniture__wrapper">
                <div class="inverted inverted_furniture">
                    <div class="inverted__line"></div>
                    <p class="inverted__text">Популярное</p>
                </div>
                <h2 class="furniture__title title">
                    <?php the_field('popular-product-title'); ?>
                </h2>
                <div class="swiper furniture__swiper">
                    <div class="swiper-wrapper swiper-wrapper_furniture">
    
                        <?php
                        global $post;

                        $myposts = get_posts([ 
                        'numberposts' => -1,
                        'category_name' => 'popular-slider',
                        ]);

                        if( $myposts ){
                        foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>

                        <div class="swiper-slide furniture__item">
                            <a href="#">
                                <div class="furniture__photo">
                                    <img src="<?php the_field('popular-slider-image'); ?>" alt="furniture">
                                    <button class="furniture__heart">
                                        <svg class="icon">
                                            <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#heart"></use>
                                        </svg> 
                                    </button>
                                </div>
                                <h3 class="furniture__heading">
                                    <?php the_field('description-product'); ?>
                                </h3>
                                <span class="furniture__new">
                                    <?php the_field('popular-slider-price'); ?>
                                    <svg class="icon-new-ruble">
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#ruble"></use>
                                    </svg>
                                </span>
                                <span class="furniture__old">
                                    <?php the_field('popular-slider-old-price'); ?>
                                    <svg class="icon-old-ruble">
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#ruble"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <?php }} wp_reset_postdata();?>
                            
                    </div>
                    <div class="furniture__buttons">
                        <button class="swiper-button-prev slider-button-left swiper-button-prev_furniture">
                            <svg class="icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                            </svg> 
                        </button>
                        <div class="swiper-pagination-furniture"></div>
                        <button class="swiper-button-next slider-button-right swiper-button-next_furniture">
                            <svg class="icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                            </svg> 
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="about container">
            <div class="about__wrapper">
                <div class="inverted inverted_about">
                    <p class="inverted__text">О нас</p>
                </div>
                <div class="about__info">
                    <div class="about__text">
                        <h2 class="about__title title"><?php the_field('about-title'); ?></h2>
                        <p class="about__description"><?php the_field('about-description'); ?></p>
                    </div>
                    <ul class="progress">
                        <li>
                            <span class="progress__number">
                                <?php the_field('about-experience'); ?>
                            </span>
                            <p class="progress__text">Лет работы магазина</p>
                        </li>
                        <li>
                            <span class="progress__number">
                                <?php the_field('about-customers'); ?>
                            </span>
                            <p class="progress__text">Довольных клиентов</p>
                        </li>
                        <li>
                            <span class="progress__number">
                                <?php the_field('about-product'); ?>
                            </span>
                            <p class="progress__text">Товаров в каталоге</p>
                        </li>
                    </ul>
                </div>
                <img src="<?php the_field('about-image'); ?>" class="about__photo" alt="about">
            </div>
        </section>
        <section class="catalog container">
            <div class="catalog__wrapper">
                <div class="inverted inverted_catalog">
                    <p class="inverted__text">Каталог</p>
                </div>
                <ul class="catalog__list">
                
                <?php
                global $post;

                $myposts = get_posts([ 
                'numberposts' => -1,
                'category_name' => 'catalog',
                ]);

                if( $myposts ){
                foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>

                <li class="catalog__item">
                    <a href="#">
                        <img src="<?php the_field('catalog-image'); ?>" alt="<?php the_field('catalog-title');?>">
                        <div class="catalog__text">
                            <span class="catalog__title"><?php the_field('catalog-title');?></span>
                            <span class="catalog__link">Подробнее</span>
                        </div>
                    </a>
                </li>

                <?php }} wp_reset_postdata();?>

            </ul>
            </div>
        </section>
        <section class="connection container">
            <div class="connection__wrapper">
                <div class="inverted inverted_connection">
                    <p class="inverted__text">Контакты</p>
                </div>
                <div class="connection__map"></div>
                <div class="connection__cover">
                    <div class="connection__info">
                        <h2 class="connection__title title">Остались вопросы?</h2>
                        <p class="connection__description">
                            Вы можете связаться с нам, позвонив по номеру или написав нам на электронную почту.
                        </p>
                        <ul class="connection__list">
                            <li class="connection__item">
                                <address class="connection__link"><?php the_field('address');?></address>
                            </li>
                            <li class="connection__item">
                                <a href="tel:+<?php the_field('clean-phone');?>" class="connection__link"><?php the_field('phone');?></a>
                            </li>
                            <li class="connection__item">
                                <a href="mailto:<?php the_field('email-link');?>" class="connection__link"><?php the_field('email-link');?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="connection__links">
                        <ul class="social">
                            <li class="social__item">
                                <a href="<?php the_field('instagram-link');?>" class="social__link">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#instagram"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="<?php the_field('vk-link');?>" class="social__link">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#vk"></use>
                                    </svg>                                       
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="<?php the_field('whatsApp-link');?>" class="social__link">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#whatsApp"></use>
                                    </svg>                                        
                                </a>
                            </li>
                        </ul>
                        <a href="<?php bloginfo('template_url');?>/contacts" class="connection__write">Написать нам</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>