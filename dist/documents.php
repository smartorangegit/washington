<?php
/*
Template Name: Документація
*/
?>
<?php get_header();?>
<section class="document">
    <div class="wrapper">
        <div class="page-top  animate">
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
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="/"><span itemprop="title">Головна</span></a>
						</span>
                        </li>
                        <li>
                            <span class="page-top__line"></span>
                        </li>
                        <li class="page-top__active-link">
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="#"><span itemprop="title"><?=$post->post_title;?></span></a>
						</span>
                        </li>
                    </ul>
				<style>
				.page-top__active-link > span:last-of-type a {
					pointer-events: none;
				}
				</style>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="document-content">
                <div class="document-about">
                    <p class="document-about__text">
                        У цьому розділі ми зібрали всю необхідну інформацію щодо будівництва житлового комплексу WASHINGTON Concept House. Тут ви можете ознайомитися з усіма дозвільними документами WASHINGTON Concept House. Якщо у вас залишилися питання, відділ продажу з радістю на них відповість.
                    </p>
                    <a href="/obrati-budinok/" class="document-about__button btn">
                        <span class="btn__text">Перейти до вибору квартири</span>
                    </a>
                </div>
                <div class="document-slider-wrap">
                    <ul class="document-slider">
                        <li class="document-slider__item">
                            <a href="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" target="_blank" class="document-slider__link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" alt="document" class="document-slider__image">
								<figcaption class="document-slider__name">Document 1</figcaption>
							</a>
                        </li>
                        <li class="document-slider__item">
                            <a href="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" target="_blank" class="document-slider__link">
								<figure>    
									<img src="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" alt="document" class="document-slider__image">
									<figcaption class="document-slider__name">Document 2</figcaption>
								</figure>
							</a>
                        </li>
                        <li class="document-slider__item">
                            <a href="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" target="_blank" class="document-slider__link">
                                <figure>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" alt="document" class="document-slider__image">
									<figcaption class="document-slider__name">Document 3</figcaption>
								</figure>
							</a>
                        </li>
                        <li class="document-slider__item">
                            <a href="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" target="_blank" class="document-slider__link">
                                <figure>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" alt="document" class="document-slider__image">
									<figcaption class="document-slider__name">Document 4</figcaption>
								</figure>
							</a>
                        </li>
                        <li class="document-slider__item">
                            <a href="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" target="_blank" class="document-slider__link">
                                <figure>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/document/document.jpg" alt="document" class="document-slider__image">
									<figcaption class="document-slider__name">Document 5</figcaption>
								</figure>
							</a>
                        </li>
                    </ul>
                    <button class="document-slider__button document-slider__button_prev">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/document/slider__arrow.png" alt="prev" class="document-slider__icon">
                    </button>
                    <button class="document-slider__button document-slider__button_next">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/document/slider__arrow.png" alt="next" class="document-slider__icon document-slider__icon_revers">
                    </button>
                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>
