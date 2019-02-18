<?php
/*
Template Name: Галерея
*/
?>
<!--94-->
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(57));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
    <section class="document">
        <div class="wrapper">
            <div class="page-top  animate">
                <div class="page-top__wrapper">
                    <div class="page-top_heading">
                        <h1>Галерея</h1>
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
                                <a href="#">Галерея</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-slider-wrap">
            <ul class="gallery-slider">
                <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/1.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/2.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/3.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/4.jpg" alt="image" class="gallery-slider__image">
                </li>
                <!-- <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/1.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/2.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/3.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/4.jpg" alt="image" class="gallery-slider__image">
                </li> -->
            </ul>
            <button class="gallery-slider__button gallery-slider__button_prev">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/slider__arrow.png" class="gallery-slider__icon" alt="prev">
            </button>
            <button class="gallery-slider__button gallery-slider__button_next">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/slider__arrow.png" class="gallery-slider__icon" alt="next">
            </button>

            <div class="gallery-slider-nav-wrap">
                <ul class="gallery-slider-nav">
                    <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/2.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/3.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/4.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <!-- <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/2.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/3.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/4.jpg" alt="image" class="gallery-slider-nav__image">
                    </li> -->
                </ul>
                <button class="gallery-slider-nav__button gallery-slider-nav__button_prev">
                    <svg xmlns="http://www.w3.org/2000/svg" class="gallery-slider-nav__icon"  height="5.6456027mm" width="16.378967mm">
                        <g transform="translate(-118.21429,-145.23871)"><path class="hp-arrow_main-line" d="m 118.21429,155.04077 58.03571,0"></path><path class="hp-arrow__line" d="m 175.89286,154.97381 -6.80865,-6.55879"></path><path class="hp-arrow__line" d="m 169.33222,161.88374 6.55879,-6.80865"></path></g>
                    </svg>
                </button>
                <button class="gallery-slider-nav__button gallery-slider-nav__button_next">
                    <!-- <svg version="1.1" class="gallery-slider-nav__icon" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 599.4 582" style="enable-background:new 0 0 599.4 582;" xml:space="preserve">
                        <path  d="M282.4,294.9c-24.2-24.8-48.1-49.2-71.9-73.7c-13.6-14-13.6-27.2,0.2-41.3c8.2-8.3,16.2-16.7,24.4-25
                        c11.4-11.6,25.7-11.7,36.9-0.2c39.6,40.5,79.2,81,118.7,121.6c11,11.3,11,26,0,37.4c-39.5,40.6-79.1,81.1-118.7,121.6
                        c-11.1,11.4-25.4,11.4-36.6,0.1c-8.9-9-17.7-18.1-26.5-27.2c-11.2-11.6-11.4-26.1-0.1-37.7c23.1-23.8,46.3-47.5,69.5-71.2
                    C279.6,297.9,280.8,296.6,282.4,294.9z"/>
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="gallery-slider-nav__icon"  height="5.6456027mm" width="16.378967mm">
                        <g transform="translate(-118.21429,-145.23871)"><path class="hp-arrow_main-line" d="m 118.21429,155.04077 58.03571,0"></path><path class="hp-arrow__line" d="m 175.89286,154.97381 -6.80865,-6.55879"></path><path class="hp-arrow__line" d="m 169.33222,161.88374 6.55879,-6.80865"></path></g>
                    </svg>
                </button>
            </div>
        </section>

<?php get_footer(); ?>
