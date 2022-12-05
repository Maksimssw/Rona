<footer class="footer container">
        <div class="footer__wrapper">
            <div class="footer__block">
                <a href="/rona" class="footer__logo">
                    <svg class="icon"> 
                        <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#logo"></use>
                    </svg>
                </a>
                <p class="footer__copyright footer__text">© 2012 - 2021 РоНа Мебель</p>
                <a href="#" class="footer__privacy footer__text">Политика конфиденциальности</a>
                <ul class="social">
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
                        <li class="information__item">
                            <a href="#" class="information__link footer__text">О нас</a>
                        </li>
                        <li class="information__item">
                            <a href="#" class="information__link footer__text">Доставка и возврат</a>
                        </li>
                        <li class="information__item">
                            <a href="#" class="information__link footer__text">Договор оферты</a>
                        </li>
                        <li class="information__item">
                            <a href="#" class="information__link footer__text">Вызов замерщика</a>
                        </li>
                        <li class="information__item">
                            <a href="#" class="information__link footer__text">Гипермаркет “РоНа”</a>
                        </li>
                    </ul>
                </nav>
                <div class="information">
                    <h3 class="information__title">Контакты</h3>
                    <ul class="information__list information__list_contact">
                        <li class="information__item information__item_contact">
                            <svg class="icon-information">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#mail"></use>
                            </svg>   
                            <a href="mailto:<?php the_field('email-link');?>" class="information__link footer__text"><?php the_field('email-link');?></a>
                        </li>
                        <li class="information__item information__item_contact">
                            <svg class="icon-information">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#phone"></use>
                            </svg>   
                            <a href="te:<?php the_field('phone');?>" class="information__link footer__text"><?php the_field('phone');?></a>
                        </li>
                        <li class="information__item information__item_contact">
                            <svg class="icon-information">
                                <use xlink:href="<?php bloginfo('template_url');?>/assets/static/icons/sprite.svg#location"></use>
                            </svg>   
                            <address class="information__link footer__text information__address"><?php the_field('address');?></address>
                        </li>
                    </ul>
                </div>
                <div class="information">
                    <h3 class="information__title">Реквизиты</h3>
                    <ul class="information__list">
                        <li class="information__item">
                            <p class="information__link information__requisite footer__text">ИП <?php the_field('footer-ep');?></p>
                        </li>
                        <li class="information__item">
                            <p class="information__link information__requisite footer__text">ИНН <?php the_field('footer-inn');?></p>
                        </li>
                        <li class="information__item">
                            <p class="information__link information__requisite footer__text">ОРГН <?php the_field('footer-ogrn');?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__company">
            <p class="footer__name footer__text">Мебельный магазин РоНа</p>
            <p class="footer__name footer__text">Aurora Web Studio</p>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html> 