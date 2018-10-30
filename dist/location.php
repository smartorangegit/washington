<?php
/*
Template Name: Розташування
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(36));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
<section class="location">

    <div class="page-top page-top_location animate">
        <div class="page-top__wrapper">
            <div class="page-top_heading">
                <h1>Розташування</h1>
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
    <!-- page-top -->

    <?/* Google API Account
                pass: La<x(Pg):T[2nt>)
                acc: washingtonovichwashington@gmail.com
                apikey: AIzaSyCkkNgvCFDLDhP_qSDZhMRyzOG8bZ3hJYs
            */?>

    <div class="map js-map"></div>

    <div class="location__time-container">
        <div class="gallery-arrow gallery-arrow_location gallery-arrow_location-prev"><i class="arrow arrow-prev"></i></div>
        <div class="gallery-arrow gallery-arrow_location gallery-arrow_location-next"><i class="arrow arrow-next"></i></div>
        <div class="location__time js-location__time wrapper">
            <div class="location__time-item location__time-item_odd">
                <div class="time">
                    <span class="time__bold time__text"><?=$links[1]?></span><span class="time__text"><?=$links[0]?></span>
                </div>
                <div class="time__destination">
                    <?=$links[2]?>
                </div>
            </div>
            <div class="location__time-item location__time-item_even">
                <div class="time">
                    <span class="time__bold time__text"><?=$links[3]?></span><span class="time__text"><?=$links[0]?></span>
                </div>
                <div class="time__destination">
                    <?=$links[4]?>
                </div>
            </div>
            <div class="location__time-item location__time-item_odd">
                <div class="time">
                    <span class="time__bold time__text"><?=$links[5]?></span><span class="time__text"><?=$links[0]?></span>
                </div>
                <div class="time__destination">
                    <?=$links[6]?>
                </div>
            </div>
            <div class="location__time-item location__time-item_even">
                <div class="time">
                    <span class="time__bold time__text"><?=$links[7]?></span><span class="time__text"><?=$links[0]?></span>
                </div>
                <div class="time__destination">
                    <?=$links[8]?>
                </div>
            </div>
            <div class="location__time-item location__time-item_odd">
                <div class="time">
                    <span class="time__bold time__text"><?=$links[9]?></span><span class="time__text"><?=$links[0]?></span>
                </div>
                <div class="time__destination">
                    <?=$links[10]?>
                </div>
            </div>
            <div class="location__time-item location__time-item_even">
                <div class="time">
                    <span class="time__bold time__text"><?=$links[11]?></span><span class="time__text"><?=$links[0]?></span>
                </div>
                <div class="time__destination">
                    <?=$links[12]?>
                </div>
            </div>
            <div class="location__time-item location__time-item_odd">
                <div class="time">
                    <span class="time__bold time__text"><?=$links[13]?></span><span class="time__text"><?=$links[0]?></span>
                </div>
                <div class="time__destination">
                    <?=$links[14]?>
                </div>
            </div>
        </div>

    </div>

    <div class="info-block js-info-block info-block__location">
        <div class="info-block__main-content">
            <div class="info-block__heading">
                <h3><?=$links[15]?></h3>
            </div>
            <div class="info-block__text">
                <p class="info-block__paragraph">
                    <?=$links[16]?>
                </p>
                <p class="info-block__paragraph">
                    <?=$links[17]?>
                </p>
            </div>
        </div>
        <div class="info-block__close js-info-block__close">
            <i class="info-block__arrow"></i>
        </div>
    </div>

</section>
<?php get_footer(); ?>
