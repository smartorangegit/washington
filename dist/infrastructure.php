<?php
/*
Template Name: Інфраструктура
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(112));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
<section class="infrastructure">

    <div class="page-top page-top_infrastructure animate">
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
                            <a itemprop="url" href="/"><span itemprop="title"><?_e('news-Головна','washington');?></span></a>
						</span>
                        </li>
                        <li>
                            <span class="page-top__line"></span>
                        </li>
                        <li class="page-top__active-link">
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="#"><span itemprop="title"><?_e('home-Інфраструктура','washington');?></span></a>
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

    <div class="infrastructure__items wrapper">

        <div class="infrastructure__item infrastructure__item_1 animate">
            <div class="infrastructure__item-inner-border"></div>
            <div class="infrastructure__item-text">
                <div class="infrastructure__item-text_top">
                    <div class="W-logo W-logo_white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 171.332 134.318"><path class="letter_W_left" d="M.76.677l57.1 132.39L116.065.668l-4.903.004-52.49 119.207L7.155.673z"/><path class="letter_W_right" d="M55.26.508l57.1 132.39L170.565.5l-4.902.004-52.49 119.206L61.655.505z"/></svg>
                    </div>
                    <h3><?=$links[0]?></h3>
                </div>
                <div class="infrastructure__item-text_bottom">
                    <p class="infrastructure__paragraph"><?=$links[1]?></p>
                </div>
            </div>
        </div>

        <div class="infrastructure__item infrastructure__item_2 animate">
            <div class="infrastructure__item-inner-border"></div>
            <div class="infrastructure__item-text">
                <div class="infrastructure__item-text_top">
                    <div class="W-logo W-logo_white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 171.332 134.318"><path class="letter_W_left" d="M.76.677l57.1 132.39L116.065.668l-4.903.004-52.49 119.207L7.155.673z"/><path class="letter_W_right" d="M55.26.508l57.1 132.39L170.565.5l-4.902.004-52.49 119.206L61.655.505z"/></svg>
                    </div>
                    <h3><?=$links[2]?></h3>
                </div>
                <div class="infrastructure__item-text_bottom">
                    <p class="infrastructure__paragraph"><?=$links[3]?></p>
                </div>
            </div>
        </div>

        <div class="infrastructure__item infrastructure__item_3 animate">
            <div class="infrastructure__item-inner-border"></div>
            <div class="infrastructure__item-text">
                <div class="infrastructure__item-text_top">
                    <div class="W-logo W-logo_white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 171.332 134.318"><path class="letter_W_left" d="M.76.677l57.1 132.39L116.065.668l-4.903.004-52.49 119.207L7.155.673z"/><path class="letter_W_right" d="M55.26.508l57.1 132.39L170.565.5l-4.902.004-52.49 119.206L61.655.505z"/></svg>
                    </div>
                    <h3><?=$links[4]?></h3>
                </div>
                <div class="infrastructure__item-text_bottom">
                    <p class="infrastructure__paragraph"><?=$links[5]?></p>
                </div>
            </div>
        </div>

        <div class="infrastructure__item infrastructure__item_4 animate">
            <div class="infrastructure__item-inner-border"></div>
            <div class="infrastructure__item-text">
                <div class="infrastructure__item-text_top">
                    <div class="W-logo W-logo_white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 171.332 134.318"><path class="letter_W_left" d="M.76.677l57.1 132.39L116.065.668l-4.903.004-52.49 119.207L7.155.673z"/><path class="letter_W_right" d="M55.26.508l57.1 132.39L170.565.5l-4.902.004-52.49 119.206L61.655.505z"/></svg>
                    </div>
                    <h3><?=$links[6]?></h3>
                </div>
                <div class="infrastructure__item-text_bottom">
                    <p class="infrastructure__paragraph"><?=$links[7]?></p>
                </div>
            </div>
        </div>

    </div>

</section>
<?php get_footer(); ?>
