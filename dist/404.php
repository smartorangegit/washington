<?php get_header(); ?>

    <section class="not-found">
        <div class="not-found-content">
            <a class="not-found-button">
                <span class="not-found-button__icon-wrap not-found-button__icon-wrap_left" onclick="window.history.go(-1);">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/404/404-arrow.png" class="not-found-button__icon not-found-button__icon_revers">
                </span>
                <span class="not-found-button__text" onclick="window.history.go(-1);">
                    Назад
                </span>
            </a>
            <span class="not-found__text">
               Вибачте, сторінку не знайдено
            </span>
            <a href="/" class="not-found-button">
                <span class="not-found-button__text">
                    На головну
                </span>
                <span class="not-found-button__icon-wrap not-found-button__icon-wrap_right">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/404/404-arrow.png">
                </span>
            </a>
            <!-- <img src="img/404/404.png" class="not-found__image"> -->
        </div>   
    </section>
<?php get_footer();?>