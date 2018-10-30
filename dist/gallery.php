<?php
/*
Template Name: День у Washington
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
<div class="page-wrapper">
    <div class="diw">

        <div class="page-top page-top_diw animate">
            <div class="page-top__wrapper">
                <div class="page-top_heading_pink">
                    <h1><?_e('home-День у Washington','washington');?></h1>
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
                            <a itemprop="url" href="#"><span itemprop="title"><?_e('home-День у Washington','washington');?></span></a>
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

        <div class="progress-bar__wrapper">
            <div class="progress-bar">
                <div class="slide-bar" data-slide="0">
                    <div class="slide-square"></div>
                    <div class="slide-time slide-time-first"><?=$links[0]?></div>
                </div>
                <div class="slide-bar" data-slide="1">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[2]?></div>
                </div>
                <div class="slide-bar" data-slide="2">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[4]?></div>
                </div>
                <div class="slide-bar" data-slide="3">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[6]?></div>
                </div>
                <div class="slide-bar" data-slide="4">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[8]?></div>
                </div>
                <div class="slide-bar" data-slide="5">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[10]?></div>
                </div>
                <div class="slide-bar" data-slide="6">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[12]?></div>
                </div>
                <div class="slide-bar" data-slide="7">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[14]?></div>
                </div>
                <div class="slide-bar" data-slide="8">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[16]?></div>
                </div>
                <div class="slide-bar" data-slide="9">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[18]?></div>
                </div>
                <div class="slide-bar" data-slide="10">
                    <div class="slide-square"></div>
                    <div class="slide-time"><?=$links[20]?></div>
                </div>
            </div>
        </div>

        <div class="diw__slider js-diw__slider">

            <div class="diw__slider-item diw__slider-item-0">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[0]?></div>
                        <div class="diw__slider-msg_text"><?=$links[1]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-1">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[2]?></div>
                        <div class="diw__slider-msg_text"><?=$links[3]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-2">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[4]?></div>
                        <div class="diw__slider-msg_text"><?=$links[5]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-3">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[6]?></div>
                        <div class="diw__slider-msg_text"><?=$links[7]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-4">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[8]?></div>
                        <div class="diw__slider-msg_text"><?=$links[9]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-5">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[10]?></div>
                        <div class="diw__slider-msg_text"><?=$links[11]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-6">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[12]?></div>
                        <div class="diw__slider-msg_text"><?=$links[13]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-7">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[14]?></div>
                        <div class="diw__slider-msg_text"><?=$links[15]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-8">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[16]?></div>
                        <div class="diw__slider-msg_text"><?=$links[17]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-9">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[18]?></div>
                        <div class="diw__slider-msg_text"><?=$links[19]?></div>
                    </div>
                </div>
            </div>

            <div class="diw__slider-item diw__slider-item-10">
                <div class="diw__slider-msg-wrapper">
                    <div class="diw__slider-msg">
                        <div class="diw__slider-msg_time"><?=$links[20]?></div>
                        <div class="diw__slider-msg_text"><?=$links[21]?></div>
                    </div>
                </div>
            </div>

        </div><!--diw__slider end-->

    </div>
</div>
<?php get_footer(); ?>
