<footer class="footer container">
        <div class="footer__wrapper grid-row">
            <div class="footer__block">
                <a href="/rona" class="footer__logo">
                    <svg class="icon"> 
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#logo"></use>
                    </svg>
                </a>
                <p class="footer__copyright footer__text footer__text_white">© 2012 - 2021 РоНа Мебель</p>
                <a href="#" class="footer__privacy footer__text footer__text_gray">Политика конфиденциальности</a>
                <ul class="social grid-row">
                    <li class="social__item">
                        <a href="<?php the_field('instagram-link');?>" class="social__link social__link_footer">
                            <svg class="icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="<?php the_field('vk-link');?>" class="social__link social__link_footer">
                            <svg class="icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#vk"></use>
                            </svg>                                       
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="<?php the_field('whatsApp-link');?>" class="social__link social__link_footer">
                            <svg class="icon">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#whatsApp"></use>
                            </svg>                                      
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__info">
                <nav class="information">
                    <h3 class="information__title">Информация</h3>
                    <ul class="information__list">
                        <li class="information__item grid-row">
                            <a href="#" class="information__link footer__text footer__text_gray">О нас</a>
                        </li>
                        <li class="information__item grid-row">
                            <a href="#" class="information__link footer__text footer__text_gray">Доставка и возврат</a>
                        </li>
                        <li class="information__item grid-row">
                            <a href="#" class="information__link footer__text footer__text_gray">Договор оферты</a>
                        </li>
                        <li class="information__item grid-row">
                            <a href="#" class="information__link footer__text footer__text_gray">Вызов замерщика</a>
                        </li>
                        <li class="information__item grid-row">
                            <a href="#" class="information__link footer__text footer__text_gray">Гипермаркет “РоНа”</a>
                        </li>
                    </ul>
                </nav>
                <div class="information">
                    <h3 class="information__title">Контакты</h3>
                    <ul class="information__list information__list_contact">
                        <li class="information__item grid-row information__item grid-row_contact">
                            <svg class="icon-information">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                            </svg>   
                            <a href="mailto:<?php the_field('email-link');?>" class="information__link footer__text footer__text_gray"><?php the_field('email-link');?></a>
                        </li>
                        <li class="information__item grid-row information__item grid-row_contact">
                            <svg class="icon-information">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                            </svg>   
                            <a href="te:<?php the_field('phone');?>" class="information__link footer__text footer__text_gray"><?php the_field('phone');?></a>
                        </li>
                        <li class="information__item grid-row information__item grid-row_contact">
                            <svg class="icon-information">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#location"></use>
                            </svg>   
                            <address class="information__link footer__text footer__text_gray information__address"><?php the_field('address');?></address>
                        </li>
                    </ul>
                </div>
                <div class="information">
                    <h3 class="information__title">Реквизиты</h3>
                    <ul class="information__list">
                        <li class="information__item grid-row">
                            <p class="information__link information__requisite footer__text footer__text_gray">ИП <?php the_field('footer-ep');?></p>
                        </li>
                        <li class="information__item grid-row">
                            <p class="information__link information__requisite footer__text footer__text_gray">ИНН <?php the_field('footer-inn');?></p>
                        </li>
                        <li class="information__item grid-row">
                            <p class="information__link information__requisite footer__text footer__text_gray">ОРГН <?php the_field('footer-ogrn');?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__company grid-row">
            <p class="footer__name footer__text footer__text_gray">Мебельный магазин РоНа</p>
            <p class="footer__name footer__text footer__text_gray">Aurora Web Studio</p>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html> 