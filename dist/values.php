<?php
/*
Template Name: Цінності
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(107));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
<section class="values">
    <div class="page-top page-top_values animate">
        <div class="page-top__wrapper">
            <div class="page-top_heading">
                <h1><?=$links[0];?></h1>
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
                            <a itemprop="url" href="#"><span itemprop="title"><?_e('home-Цінності','washington');?></span></a>
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

    <div class="values__block values__block_pleasures animate">
        <div class="values__top-gradient"></div>
        <div class="values__bottom-gradient"></div>
        <div class="wrapper values__block-wrapper">
            <div class="values__text-block">
                <div class="values__text-block-headig">
                    <h4><?=$links[1];?></h4>
                </div>
                <div class="values__text-block-paragraph">
                    <p><?=$links[2];?></p>
                </div>
            </div>
            <div class="down-arrows down-arrows_values js-values-arrow" data-next = "js-values__block_privacy">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 485.263 581.108">
                        <path class="down-arrow down-arrow_1" d="M252.144 406.93l225.1-225.1c5.3-5.3 5.3-13.8 0-19.1-5.3-5.3-13.8-5.3-19.1 0l-215.5 215.5-215.5-215.5c-5.3-5.3-13.8-5.3-19.1 0-2.6 2.6-4 6.1-4 9.5 0 3.4 1.3 6.9 4 9.5l225.1 225.1c5.2 5.3 13.8 5.3 19 .1z"/>
                        <path class="down-arrow down-arrow_2" d="M252.144 577.22l225.1-225.1c5.3-5.3 5.3-13.8 0-19.1-5.3-5.3-13.8-5.3-19.1 0l-215.5 215.5-215.5-215.5c-5.3-5.3-13.8-5.3-19.1 0-2.6 2.6-4 6.1-4 9.5 0 3.4 1.3 6.9 4 9.5l225.1 225.1c5.2 5.3 13.8 5.3 19 .1z" />
                        <path class="down-arrow down-arrow_3"d="M252.144 248.175l225.1-225.1c5.3-5.3 5.3-13.8 0-19.1-5.3-5.3-13.8-5.3-19.1 0l-215.5 215.5-215.5-215.5c-5.3-5.3-13.8-5.3-19.1 0-2.6 2.6-4 6.1-4 9.5 0 3.4 1.3 6.9 4 9.5l225.1 225.1c5.2 5.3 13.8 5.3 19 .1z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="values__block values__block_privacy animate js-values__block_privacy">
        <div class="values__top-gradient"></div>
        <div class="values__bottom-gradient"></div>
        <div class="wrapper values__block-wrapper">
            <div class="values__text-block">
                <div class="values__text-block-headig">
                    <h4><?=$links[3];?></h4>
                </div>
                <div class="values__text-block-paragraph">
                    <p><?=$links[4];?></p>
                </div>
            </div>
            <div class="down-arrows down-arrows_values js-values-arrow" data-next = "js-values__block_personality">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 485.263 581.108">
                        <path class="down-arrow down-arrow_1" d="M252.144 406.93l225.1-225.1c5.3-5.3 5.3-13.8 0-19.1-5.3-5.3-13.8-5.3-19.1 0l-215.5 215.5-215.5-215.5c-5.3-5.3-13.8-5.3-19.1 0-2.6 2.6-4 6.1-4 9.5 0 3.4 1.3 6.9 4 9.5l225.1 225.1c5.2 5.3 13.8 5.3 19 .1z"/>
                        <path class="down-arrow down-arrow_2" d="M252.144 577.22l225.1-225.1c5.3-5.3 5.3-13.8 0-19.1-5.3-5.3-13.8-5.3-19.1 0l-215.5 215.5-215.5-215.5c-5.3-5.3-13.8-5.3-19.1 0-2.6 2.6-4 6.1-4 9.5 0 3.4 1.3 6.9 4 9.5l225.1 225.1c5.2 5.3 13.8 5.3 19 .1z" />
                        <path class="down-arrow down-arrow_3"d="M252.144 248.175l225.1-225.1c5.3-5.3 5.3-13.8 0-19.1-5.3-5.3-13.8-5.3-19.1 0l-215.5 215.5-215.5-215.5c-5.3-5.3-13.8-5.3-19.1 0-2.6 2.6-4 6.1-4 9.5 0 3.4 1.3 6.9 4 9.5l225.1 225.1c5.2 5.3 13.8 5.3 19 .1z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="values__block values__block_personality animate js-values__block_personality">
        <div class="values__top-gradient"></div>
        <div class="values__bottom-gradient"></div>
        <div class="wrapper values__block-wrapper">
            <div class="values__text-block">
                <div class="values__text-block-headig">
                    <h4><?=$links[5];?></h4>
                </div>
                <div class="values__text-block-paragraph">
                    <p><?=$links[6];?></p>
                </div>
            </div>
        </div>
    </div>



</section>
<?php get_footer(); ?>
