
    <?php 
    /*  
    Template Name: home
    */
    ?>

    <?php get_header(); ?>

    <main>
        <section class="hero container">
            <div class="swiper hero-swiper">
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

                <div class="swiper-slide hero-slider__item">
                        <div class="hero__wrapper container">
                            <div class="hero__block">
                                <h1 class="hero__title">
                                    <?php the_field('hero-title'); ?>    
                                    <span><?php the_field('hero-title-green'); ?></span>
                                </h1>
                                <p class="hero__description"><?php the_field('hero-description'); ?></p>
                                <a href="<?php the_field('hero-button-link'); ?>" class="hero__link button-green">
                                    <?php the_field('hero-button-text'); ?>
                                </a>
                            </div>
                        </div>
                        <img src="<?php the_field('slider-main-image'); ?>" alt="sofa">
                    </div>

                <?php }} wp_reset_postdata();?>
                </div>
                <button class="hero__button hero__button_left slider-button-prev">
                    <svg class="icon-large">
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg>
                </button>
                <button class="hero__button hero__button_right slider-button-next">
                    <svg class="icon-large"> 
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg> 
                </button>
                <div class="hero__buttons container">
                    <div class="hero-pagination-wrapper">
                        <div class="swiper-pagination hero-pagination"></div>
                    </div>
                </div> 
            </div>
        </section>
        <section class="furniture container">
            <div class="furniture__wrapper grid-row">
                <div class="inverted inverted_furniture">
                    <div class="inverted__line"></div>
                    <p class="inverted__text">????????????????????</p>
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

                        <div class="swiper-slide card">
                            <a href="#">
                                <div class="card__photo">
                                    <img src="<?php the_field('popular-slider-image'); ?>" alt="card">
                                    <button class="card__heart">
                                        <svg class="icon-small">
                                            <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#heart"></use>
                                        </svg> 
                                    </button>
                                </div>
                                <h3 class="card__heading">
                                    <?php the_field('description-product'); ?>
                                </h3>
                                <span class="card__discount grid-row">
                                    <?php the_field('popular-slider-price'); ?>
                                    <svg class="icon-card-discount">
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#ruble"></use>
                                    </svg>
                                </span>
                                <span class="card__price grid-row">
                                <?php the_field('popular-slider-old-price'); ?>
                                <svg class="icon-card-price">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#ruble"></use>
                                </svg>
                            </span>
                            </a>
                        </div>

                        <?php }} wp_reset_postdata();?>
                            
                    </div>
                    <div class="furniture__buttons grid-row">
                        <button class="slider-button-prev furniture__button">
                            <svg class="icon-large">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                            </svg> 
                        </button>
                        <div class="swiper-pagination-furniture"></div>
                        <button class="slider-button-next furniture__button">
                            <svg class="icon-large">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                            </svg> 
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="about container">
            <div class="about__wrapper grid-row">
                <div class="inverted inverted_about">
                    <p class="inverted__text">?? ??????</p>
                </div>
                <div class="about__info grid-row">
                    <div class="about__text">
                        <h2 class="about__title title"><?php the_field('about-title'); ?></h2>
                        <p class="about__description"><?php the_field('about-description'); ?></p>
                    </div>
                    <ul class="progress">
                        <li>
                            <span class="progress__number">
                                <?php the_field('about-experience'); ?>
                            </span>
                            <p class="progress__text">?????? ???????????? ????????????????</p>
                        </li>
                        <li>
                            <span class="progress__number">
                                <?php the_field('about-customers'); ?>
                            </span>
                            <p class="progress__text">?????????????????? ????????????????</p>
                        </li>
                        <li>
                            <span class="progress__number">
                                <?php the_field('about-product'); ?>
                            </span>
                            <p class="progress__text">?????????????? ?? ????????????????</p>
                        </li>
                    </ul>
                </div>
                <img src="<?php the_field('about-image'); ?>" class="about__photo" alt="about">
            </div>
        </section>
        <section class="catalog container">
            <h2 class="visually-hidden">??????????????</h2>
            <div class="catalog__wrapper">
                <div class="inverted inverted_catalog">
                    <p class="inverted__text">??????????????</p>
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
                            <span class="catalog__link grid-row">
                                ??????????????????
                                <svg class="icon-catalog">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#arrow"></use>
                                </svg>
                            </span>
                        </div>
                    </a>
                </li>

                <?php }} wp_reset_postdata();?>

            </ul>
            </div>
        </section>
        <section class="connection container">
            <div class="connection__wrapper grid-row">
                <div class="inverted inverted_connection">
                    <p class="inverted__text">????????????????</p>
                </div>
                <div id="map" class="connection__map"></div>
                <div class="connection__cover">
                    <div class="connection__info">
                        <h2 class="connection__title title">???????????????? ???????????????</h2>
                        <p class="connection__description">
                            ???? ???????????? ?????????????????? ?? ??????, ???????????????? ???? ???????????? ?????? ?????????????? ?????? ???? ?????????????????????? ??????????.
                        </p>
                        <ul class="connection__list">
                            <li class="connection__item grid-row">
                                <svg class="icon-large icon-connection">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#location"></use>
                                </svg>
                                <address class="connection__link"><?php the_field('address');?></address>
                            </li>
                            <li class="connection__item grid-row">
                                <svg class="icon-large icon-connection">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                                </svg>
                                <a href="tel:+<?php the_field('clean-phone');?>" class="connection__link"><?php the_field('phone');?></a>
                            </li>
                            <li class="connection__item grid-row">
                                <svg class="icon-large icon-connection">
                                    <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                                </svg>
                                <a href="mailto:<?php the_field('email-link');?>" class="connection__link"><?php the_field('email-link');?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="connection__links grid-row">
                        <ul class="social grid-row">
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
                        <a href="<?php bloginfo('template_url');?>/contacts" class="connection__write grid-row">
                            ???????????????? ??????
                            <svg class="icon-medium icon-arrow">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#arrow"></use>
                            </svg>  
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>