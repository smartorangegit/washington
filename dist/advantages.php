<?php
/*
Template Name: Переваги
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(122));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
    <section class="advantages">
        <div class="page-top page-top_advantages animate">
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
                            <a itemprop="url" href="#"><span itemprop="title"><?_e('home-Переваги','washington');?></span></a>
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

        <div class="advantages__items wrapper">


            <div class="advantage advantage_1 animate">
                <div class="advantage__border advantage__border_top-left"></div>
                <div class="advantage__border advantage__border_bottom-right"></div>
                <div class="advantage-text">
                    <div class="advantage__border advantage__border_top-left"></div>
                    <div class="advantage__border advantage__border_bottom-right"></div>
                    <p class="advantage-text__paragraph">
                        <?=$links[0];?>
                    </p>
                </div>
            </div>

            <div class="advantage advantage_2 animate">
                <div class="advantage__border advantage__border_top-left"></div>
                <div class="advantage__border advantage__border_bottom-right"></div>
                <div class="advantage-text">
                    <div class="advantage__border advantage__border_top-left"></div>
                    <div class="advantage__border advantage__border_bottom-right"></div>
                    <p class="advantage-text__paragraph">
                        <?=$links[1];?>
                    </p>
                </div>
            </div>

            <div class="advantage advantage_3 animate">
                <div class="advantage__border advantage__border_top-left"></div>
                <div class="advantage__border advantage__border_bottom-right"></div>
                <div class="advantage-text">
                    <div class="advantage__border advantage__border_top-left"></div>
                    <div class="advantage__border advantage__border_bottom-right"></div>
                    <p class="advantage-text__paragraph">
                        <?=$links[2];?>
                    </p>
                </div>
            </div>

            <div class="advantage advantage_4 animate">
                <div class="advantage__border advantage__border_top-left"></div>
                <div class="advantage__border advantage__border_bottom-right"></div>
                <div class="advantage-text">
                    <div class="advantage__border advantage__border_top-left"></div>
                    <div class="advantage__border advantage__border_bottom-right"></div>
                    <p class="advantage-text__paragraph">
                        <?=$links[3];?>
                    </p>
                </div>
            </div>

            <!-- <div class="advantage advantage_5 animate">
                <div class="advantage__border advantage__border_top-left"></div>
                <div class="advantage__border advantage__border_bottom-right"></div>
                <div class="advantage-text">
                    <div class="advantage__border advantage__border_top-left"></div>
                    <div class="advantage__border advantage__border_bottom-right"></div>
                    <p class="advantage-text__paragraph">
                        <?=$links[4];?>
                    </p>
                </div>
            </div> -->

            <div class="advantage advantage_6 animate">
                <div class="advantage__border advantage__border_top-left"></div>
                <div class="advantage__border advantage__border_bottom-right"></div>
                <div class="advantage-text">
                    <div class="advantage__border advantage__border_top-left"></div>
                    <div class="advantage__border advantage__border_bottom-right"></div>
                    <p class="advantage-text__paragraph">
                        <?=$links[5];?>
                    </p>
                </div>
            </div>

            <div class="advantage advantage_7 animate">
                <div class="advantage__border advantage__border_top-left"></div>
                <div class="advantage__border advantage__border_bottom-right"></div>
                <div class="advantage-text">
                    <div class="advantage__border advantage__border_top-left"></div>
                    <div class="advantage__border advantage__border_bottom-right"></div>
                    <p class="advantage-text__paragraph">
                        <?=$links[6];?>
                    </p>
                </div>
            </div>


        </div>



    </section>
<?php get_footer(); ?>