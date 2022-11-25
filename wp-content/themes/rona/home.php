
    <?php 
    /*  
    Template Name: home
    */
    ?>

    <?php get_header(); ?>

    <main>
        <section class="intro container">
            <div class="intro__wrapper">
                <h1 class="intro__title">
                    <?php the_field('title-head-screen'); ?>
                    <span><?php the_field('title-head-screen-green'); ?></span>
                </h1>
                <p class="intro__description"><?php the_field('subtitle-main-screen'); ?></p>
                <a href="#" class="intro__button button-green">Перейти в каталог</a>
                <div>
                <div class="swiper-pagination intro-pagination"></div> 
                </div>
            </div>
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
                    <img src="<?php the_field('slider-main-image'); ?>" alt="sofa">
                </div>

                <?php }} wp_reset_postdata();?>
                </div>
                <button class="swiper-button-prev intro-button-prev">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg>
                </button>
                <button class="swiper-button-next intro-button-next">
                    <svg>
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                    </svg> 
                </button>
            </div>
        </section>
        <section class="furniture container">
            <div class="furniture__wrapper">
                <div class="inverted inverted_furniture">
                    <div class="inverted__line"></div>
                    <p class="inverted__text">Популярное</p>
                </div>
                <h2 class="furniture__title">
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
                                        <svg>
                                            <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#heart"></use>
                                        </svg> 
                                    </div>
                                </div>
                                <h3 class="furniture__heading">
                                    <?php the_field('description-product'); ?>
                                </h3>
                                <span class="furniture__new">
                                    <?php the_field('popular-slider-price'); ?>
                                </span>
                                <span class="furniture__old">
                                    <?php the_field('popular-slider-old-price'); ?>
                                </span>
                            </a>
                        </div>

                        <?php }} wp_reset_postdata();?>
                            
                    </div>
                    <div class="furniture__buttons">
                        <button class="swiper-button-prev swiper-button-prev_furniture">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#downArrow"></use>
                            </svg> 
                        </button>
                        <div class="swiper-pagination-furniture"></div>
                        <button class="swiper-button-next swiper-button-next_furniture">
                            <svg>
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
                        <h2 class="about__title"><?php the_field('about-title'); ?></h2>
                        <p class="about__description"><?php the_field('about-description'); ?></p>
                    </div>
                    <ul class="progress">
                        <li class="progress__item">
                            <h3 class="progress__number">
                                <?php the_field('about-experience'); ?>
                            </h3>
                            <p class="progress__text">Лет работы магазина</p>
                        </li>
                        <li class="progress__item">
                            <h3 class="progress__number">
                                <?php the_field('about-customers'); ?>
                            </h3>
                            <p class="progress__text">Довольных клиентов</p>
                        </li>
                        <li class="progress__item">
                            <h3 class="progress__number">
                                <?php the_field('about-product'); ?>
                            </h3>
                            <p class="progress__text">Товаров в каталоге</p>
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
                        <h4 class="catalog__title"><?php the_field('catalog-title');?></h4>
                        <a href="<?php the_field('catalog-link');?>" class="catalog__link text-base100 text-base100_medium">Подробнее</a>
                    </div>
                </li>

                <?php }} wp_reset_postdata();?>

                <div class="inverted inverted_catalog">
                    <p class="inverted__text">Каталог</p>
                </div>
            </ul>
        </section>
        <section class="connection container">
            <div class="connection__wrapper">
                <div class="inverted inverted_connection">
                    <p class="inverted__text">Контакты</p>
                </div>
                <div class="connection__map"></div>
                <div class="connection__text">
                    <div class="connection__info">
                        <h2 class="connection__title">Остались вопросы?</h2>
                        <p class="connection__description">
                            Вы можете связаться с нам, позвонив по номеру или написав нам на электронную почту.
                        </p>
                        <ul class="connection__list">
                            <li class="connection__item">
                                <address class="connection__link">ул. Подвойского, 30А, Тихорецк, Россия</address>
                            </li>
                            <li class="connection__item">
                                <a href="tel:+89898549917" class="connection__link">8 (989) 854-99-17</a>
                            </li>
                            <li class="connection__item">
                                <a href="mailto:rona.mebel.ru@gmail.com" class="connection__link">rona.mebel.ru@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="connection__links">
                        <ul class="social">
                            <li class="social__item">
                                <a href="#" class="social__link">
                                    <svg>
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#instagram"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link">
                                    <svg>
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#vk"></use>
                                    </svg>                                       
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link">
                                    <svg>
                                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#whatsApp"></use>
                                    </svg>                                        
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="connection__write">Написать нам</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>