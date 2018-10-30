<?php
/*
Template Name: Архітектура
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(117));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
<section class="architecture">
    <div class="architecture__gradient"></div>
    <div class="page-top page-top_architecture animate">
        <div class="page-top__wrapper">
            <div class="page-top_heading">
                <h1 class="page-top_heading__architecture"><?=$post->post_title?></h1>
                <div class="page-top__letter-w">
                    <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 170.1 132.4"><path d="M57.1 132.4L0 0h6.4l51.5 119.2L82 62.8 55.2 0h6.2l24.1 57.1L110.4 0h4.9L88.2 62.7l24.6 57.1L165.4 0h4.7l-57.8 132.4-27.6-63.5-27.6 63.5z"/></svg>
                </div>
            </div>
                <div class="page-top__links">
                    <ul>
                        <li>
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="/"><span itemprop="title"><?_e('news-Головна','washington');?></span></a>
						</span>
                        </li>
                        <li>
                            <span class="page-top__line"></span>
                        </li>
                        <li class="page-top__active-link">
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="#"><span itemprop="title"><?_e('home-Архітектура','washington');?></span></a>
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
    <!-- page-top -->

    <div class="architecture__gallery js-architecture__gallery">
        <div class="architecture__gallery-item architecture__gallery-item_0"></div>
        <div class="architecture__gallery-item architecture__gallery-item_1"></div>
        <div class="architecture__gallery-item architecture__gallery-item_2"></div>
        <div class="architecture__gallery-item architecture__gallery-item_3"></div>
        <div class="architecture__gallery-item architecture__gallery-item_4"></div>
        <div class="architecture__gallery-item architecture__gallery-item_5"></div>
        <div class="architecture__gallery-item architecture__gallery-item_6"></div>
        <div class="architecture__gallery-item architecture__gallery-item_7"></div>
        <div class="architecture__gallery-item architecture__gallery-item_8"></div>
    </div>

    <div class="architecture__main-content wrapper">

        <div class="gallery-arrow gallery-arrow_architecture gallery-arrow_architecture-prev"><i class="arrow arrow-prev"></i></div>
        <div class="gallery-arrow gallery-arrow_architecture gallery-arrow_architecture-next"><i class="arrow arrow-next"></i></div>
        <div class="gallery-arrow gallery-arrow_architecture-nav gallery-arrow_architecture-nav-next"><i class="arrow arrow-next"></i></div>
        <div class="gallery-arrow gallery-arrow_architecture-nav gallery-arrow_architecture-nav-prev"><i class="arrow arrow-prev"></i></div>

        <div class="architecture__nav-gallery js-architecture__nav-gallery">
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_0"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_1"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_2"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_3"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_4"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_5"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_6"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_7"></div>
            <div class="architecture__gallery-nav-item architecture__gallery-nav-item_8"></div>
        </div>
    </div>

    <div class="info-block js-info-block info-block__architeture">
        <div class="info-block__main-content info-block__main-content_architecture">
            <div class="info-block__heading">
                <h3><?=$links[0];?></h3>
            </div>
            <div class="info-block__text">
                <p class="info-block__paragraph">
                    <?=$links[1];?>
                </p>
                <p class="info-block__paragraph">
                    <?=$links[2];?>
                </p>
            </div>
        </div>
        <div class="info-block__close js-info-block__close">
            <i class="info-block__arrow"></i>
        </div>
    </div>



</section>
<?php get_footer(); ?>
