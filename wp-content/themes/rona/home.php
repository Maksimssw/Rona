
    <?php 
    /*  
    Template Name: home
    */
    ?>

    <?php get_header(); ?>

    <main>
        <section class="intro container">
            <div class="intro__wrapper">
                <h1 class="intro__title title-5xl130">
                    <?php the_field('title-head-screen'); ?>
                    <span><?php the_field('title-head-screen-green'); ?></span>
                </h1>
                <p class="intro__description text-xl130"><?php the_field('subtitle-main-screen'); ?></p>
                <a href="#" class="intro__button button-green">Перейти в каталог</a>
                <div class="swiper-pagination swiper-pagination_intro"></div> 
            </div>
            <div class="swiper mySwiper">
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
                    <img src="<?php the_field('slider-main-image'); ?>" alt="sofa">
                </div>

                <?php }} wp_reset_postdata();?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section class="furniture container">
            <div class="furniture__background">
                <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/images/furniture/background.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/images/furniture/background.svg" alt="background"></picture>
            </div>
            <div class="furniture__wrapper">
                <h2 class="furniture__title title-4xl130">
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
                                    <div class="furniture__heart">
                                        <picture><source srcset="<?php bloginfo('template_url');?>/assets/dist/static/icons/heart.svg" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/dist/static/icons/heart.svg" alt="heart"></picture>
                                    </div>
                                </div>
                                <h3 class="furniture__heading text-base130">
                                    <?php the_field('description-product'); ?>
                                </h3>
                                <span class="furniture__new__price text-2xl100">
                                    <?php the_field('popular-slider-price'); ?>
                                </span>
                                <span class="furniture__old__price text-sm">
                                    <?php the_field('popular-slider-old-price'); ?>
                                </span>
                            </a>
                        </div>

                        <?php }} wp_reset_postdata();?>

                    </div>
                    <div class="furniture__buttons">
                        <div class="swiper-button-prev swiper-button-prev_furniture"></div>
                        <div class="swiper-pagination-furniture"></div>
                        <div class="swiper-button-next swiper-button-next_furniture"></div>
                    </div>
                </div>
                <div class="inverted inverted_furniture">
                    <div class="inverted__line"></div>
                    <p class="inverted__text">Популярное</p>
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
                        <h2 class="about__title title-4xl130"><?php the_field('about-title'); ?></h2>
                        <p class="about__description text-xl130 text-xl130_medium"><?php the_field('about-description'); ?></p>
                    </div>
                    <ul class="progress">
                        <li class="progress__item">
                            <h3 class="progress__number title-4xl130 title-4xl130_bold">
                                <?php the_field('about-experience'); ?>
                            </h3>
                            <p class="progress__text text-base130 text-base130_semi">Лет работы магазина</p>
                        </li>
                        <li class="progress__item">
                            <h3 class="progress__number title-4xl130 title-4xl130_bold">
                                <?php the_field('about-customers'); ?>
                            </h3>
                            <p class="progress__text text-base130 text-base130_semi">Довольных клиентов</p>
                        </li>
                        <li class="progress__item">
                            <h3 class="progress__number title-4xl130 title-4xl130_bold">
                                <?php the_field('about-product'); ?>
                            </h3>
                            <p class="progress__text text-base130 text-base130_semi">Товаров в каталоге</p>
                        </li>
                    </ul>
                </div>
                <div class="about__photo">
                    <img src="<?php the_field('about-image'); ?>" alt="about">
                </div>
            </div>
        </section>
        <section class="catalog container">
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
                    <img src="<?php the_field('catalog-image'); ?>" alt="<?php the_field('catalog-title');?>">
                    <div class="catalog__text">
                        <h4 class="catalog__title text-xl100"><?php the_field('catalog-title');?></h4>
                        <a href="<?php the_field('catalog-link');?>" class="catalog__link text-base100 text-base100_medium">Подробнее</a>
                    </div>
                </li>

                <?php }} wp_reset_postdata();?>

                <div class="inverted inverted_catalog">
                    <p class="inverted__text">Каталог</p>
                </div>
            </ul>
        </section>
    </main>

    <?php get_footer(); ?>