<?php
/*
Template Name: Простір для спорту
*/
?>
<?php get_header();?>
    <section class="choose-floor stub">
        <div class="page-top page-top_choose-floor animate">
            <div class="page-top__wrapper">
                <div class="page-top_heading">
                    <h1><?=$post->post_title;?></h1>
                    <div class="page-top__letter-w">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 170.1 132.4"><path d="M57.1 132.4L0 0h6.4l51.5 119.2L82 62.8 55.2 0h6.2l24.1 57.1L110.4 0h4.9L88.2 62.7l24.6 57.1L165.4 0h4.7l-57.8 132.4-27.6-63.5-27.6 63.5z"/></svg>
                    </div>
                </div>
                <div class="page-top__links">
                    <ul>
                        <li>
                            <a href="/">Головна</a>
                        </li>
                        <li>
                            <span class="page-top__line"></span>
                        </li>
                        <li class="page-top__active-link">
                            <a href="#"><?=$post->post_title;?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="stub-window">
            <h1 class="stub-window__heading">
                Сторінка на стадії розробки
            </h1>
            <div class="stub-window-btn-box">
                <a href="#" class="stub-window__btn_last-wrap">
                    <span class="stub-window__btn_last">
                        <span class="stub-window__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="11" viewBox="0 0 44 11"><defs><path id="fk3ga" d="M686 443v1h-1v1h-1v-1h-42v-1h42v-1h1v1zm-3 3v-1h1v1zm-1 1v-1h1v1zm-1 1v-1h1v1zm2-6v-1h1v1zm-1-1v-1h1v1zm-1-1v-1h1v1zm-1-1v-1h1v1zm0 10v-1h1v1z"/></defs><g><g transform="translate(-642 -438)"><use fill="#525249" xlink:href="#fk3ga"/></g></g></svg>
                        </span>
                        <span onclick="window.history.go(-1);">Назад</span>
                        <span class="stub-window__btn_last_short"></span>
                        <span class="stub-window__btn_last_short stub-window__btn_last_short_2"></span>
                    </span>
                </a>
                <a href="/" class="stub-window__btn_main btn"><span class="btn__text">На головну</span></a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>