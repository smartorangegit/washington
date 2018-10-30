<?php
/*
Template Name: Обрати квартиру
*/
?>
<?php get_header();?>
<?
$floor = $_GET['floor'];

function app($floor){
    $apps[1] =  get_field('apartment', 194); /*только этот этаж правильный*/
    /*$apps[4] =  get_field('apartment', 59);
    $apps[5] =  get_field('apartment', 89);
    $apps[6] =  get_field('apartment', 93);
    $apps[7] =  get_field('apartment', 97);
    $apps[8] =  get_field('apartment', 240);
    $apps[9] =  get_field('apartment', 244);
    $apps[10] =  get_field('apartment', 248);

    $apps[11] =  get_field('apartment', 252);
    $apps[12] =  get_field('apartment', 256);
    $apps[13] =  get_field('apartment', 260);
    $apps[14] =  get_field('apartment', 264);
    $apps[15] =  get_field('apartment', 268);
    $apps[16] =  get_field('apartment', 272);
    $apps[17] =  get_field('apartment', 276);
    $apps[18] =  get_field('apartment', 280);
    $apps[19] =  get_field('apartment', 284);
    $apps[20] =  get_field('apartment', 288);

    $apps[21] =  get_field('apartment', 292);
    $apps[22] =  get_field('apartment', 296);
    $apps[23] =  get_field('apartment', 300);
    $apps[24] =  get_field('apartment', 304);*/


    $result = $apps[$floor];
    return $result;
}
$apartments = app($floor);

$floors = get_field('floor',188);
//print_r($floors);
foreach ($floors as $itemFloor){
    if($itemFloor['num'] == $floor){
        $currentFloor = $itemFloor;
        $img_full = $itemFloor['img'];
    }
}
?>
<section class="select-apartmens">
    <div class="wrapper">
        <div class="page-top select-apartmens__page-top animate">
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
						<li>
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="/obraty-poverh/"><span itemprop="title">Обрати поверх</span></a>
						</span>
                        </li>
							<span class="page-top__line"></span>
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
        <div class="select-apartmens-wrap">
            <div class="select-apartmens-top">
                <a href="/obraty-poverh/" class="select-button btn">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/select-appartmets/long-arrow.png" alt="icon" class="select-button__icon select-button__icon_transform">
                    <span class="select-button__text btn__text">Обрати поверх</span>
                </a>

                <div class="select-floor">
                    <a href="#" class="select-floor__button">
                        <svg class="select-floor__icon select-floor__icon_top" xmlns="http://www.w3.org/2000/svg" width="444.819" height="444.819" viewBox="0 0 444.819 444.819"><path d="M352.025 196.712L165.884 10.848C159.029 3.615 150.469 0 140.187 0s-18.842 3.619-25.697 10.848L92.792 32.264c-7.044 7.043-10.566 15.604-10.566 25.692 0 9.897 3.521 18.56 10.566 25.981L231.545 222.41 92.786 361.168c-7.042 7.043-10.564 15.604-10.564 25.693 0 9.896 3.521 18.562 10.564 25.98l21.7 21.413c7.043 7.043 15.612 10.564 25.697 10.564 10.089 0 18.656-3.521 25.697-10.564L352.025 248.39c7.046-7.423 10.571-16.084 10.571-25.981.001-10.088-3.525-18.654-10.571-25.697z"/></svg>
                    </a>
                    <p class="select-floor__text"><?=$_GET['floor']?> поверх</p>
                    <a href="#" class="select-floor__button">
                        <svg class="select-floor__icon select-floor__icon_bottom" xmlns="http://www.w3.org/2000/svg" width="444.819" height="444.819" viewBox="0 0 444.819 444.819"><path d="M352.025 196.712L165.884 10.848C159.029 3.615 150.469 0 140.187 0s-18.842 3.619-25.697 10.848L92.792 32.264c-7.044 7.043-10.566 15.604-10.566 25.692 0 9.897 3.521 18.56 10.566 25.981L231.545 222.41 92.786 361.168c-7.042 7.043-10.564 15.604-10.564 25.693 0 9.896 3.521 18.562 10.564 25.98l21.7 21.413c7.043 7.043 15.612 10.564 25.697 10.564 10.089 0 18.656-3.521 25.697-10.564L352.025 248.39c7.046-7.423 10.571-16.084 10.571-25.981.001-10.088-3.525-18.654-10.571-25.697z"/></svg>
                    </a>
                </div>

                <a href="/filter/" class="select-button btn">
                    <!-- <img src="img/select-appartmets/filter.png" alt="icon" class="select-button__icon select-button__icon_scale"> -->
                    <span class="filter-btn__icon">
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_1"></span></div>
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_2"></span></div>
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_3"></span></div>
                        </span>
                    <span class="select-button__text btn__text">Фільтр</span>
                </a>
            </div>

            <div class="apartmens-plan-wrap">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                     width="100%" height="100%" viewBox="0 0 2487.000000 1370.000000"
                     preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,1370.000000) scale(0.100000,-0.100000)"
                       fill="#000000" stroke="none">
                        <path d="<?=$img_full?>" />
                    </g>

                    <g transform="matrix(2.828525,-0.01893281,0,2.8903451,2796.9039,79.628362)" id="g15">
                        <g id="layer1">
                            <?foreach ($apartments as $itemFloor){?>
                                <a href="/apartment/?floor=<?=$_GET['floor']?>&flat=<?=$itemFloor['ap_id']?>" class="apartment__link">
                                    <path class="apartment"
                                          d="<?=$itemFloor['mouseover']?>"
                                          id="path4569" />
                                </a>
                            <?}?>
                        </g>
                    </g>

                </svg>

                <!--                    --><?//get_template_part('include/houses/2');?>
                <!--                    --><?// include_once('includes/houses/2.php'); ?>
            </div>

            <img src="<?php bloginfo('template_url'); ?>/assets/img/select-appartmets/compas.png" alt="image" class="select-apartmens__image">
        </div>
    </div>

    <div class="apartment-tooltip">
        <div class="apartment-tooltip-wrap">
            <svg class="apartment-tooltip__icon" xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 283.5 60.8"><g transform="translate(-17.2 -18.4)"><g><g><path d="M40.2 20.4l-5 11.4-4.8-11.4h-1.3L34.5 33l-4.8 11.2-10.3-23.8h-1.3l11.4 26.5L35 34.2l5.5 12.7 11.6-26.5h-.9L40.7 44.3l-5-11.4 5.4-12.5z"/><path d="M29.5 48.3L17.2 19.8h2.6l9.9 22.9 4.2-9.8-5.6-13.1h2.5l4.4 10.5 4.6-10.5H42l-5.7 13.1 4.3 9.9 10.1-23H53L40.5 48.3 35 35.6l-5.5 12.7zM19 21l10.5 24.4L19 21z"  /></g><g><path id="path17" d="M54.5 46.4h1.1l4.9-9.9h13.9l4.9 9.9h1.2l-13-26.6-13 26.6zm6.4-10.9l6.5-13.3L74 35.5H60.9z"  /><path d="M81.4 47h-2.5L74 37.1H60.8L56 47h-2.4l13.9-28.5L81.4 47zM61.9 34.9H73l-5.6-11.4-5.5 11.4z"  /></g><g id="g21"><path d="M101.9 34c-.7-.6-1.5-1.2-2.4-1.8-.9-.6-1.7-1.1-2.6-1.6-.9-.5-1.6-1-2.3-1.5-1.6-1.2-2.4-2.5-2.4-4v-.2c0-1.2.4-2.2 1.2-2.9.8-.7 1.8-1.1 2.9-1.1 1.1 0 2.2.3 3.1.8.9.6 1.6 1.3 2.2 2.3v-1.8c-1.2-1.6-2.9-2.4-5.1-2.4-1.5 0-2.8.4-3.8 1.3s-1.6 2.1-1.6 3.7v.2c0 1 .3 2 .9 2.9.6.9 1.4 1.6 2.3 2.2.9.6 1.9 1.2 2.9 1.9 1.1.7 2 1.3 2.9 1.9.9.6 1.7 1.4 2.3 2.4.6 1 .9 2 .9 3.2v.2c0 1.8-.6 3.3-1.9 4.4-1.3 1.1-2.8 1.7-4.5 1.7-1.7 0-3.2-.4-4.3-1.2-1.2-.8-2-1.9-2.7-3.2v1.9c1.6 2.4 3.8 3.6 6.7 3.6 2.2 0 4-.6 5.5-1.9 1.5-1.3 2.2-3 2.2-5.2v-.3c0-1.1-.2-2.1-.7-3-.4-1.1-1-1.9-1.7-2.5z"  /><path d="M96.6 47.5c-3.1 0-5.5-1.3-7.2-3.8l-.1-.1v-4.7l1.1 2.4c.6 1.2 1.4 2.2 2.5 3 1.1.7 2.4 1.1 4 1.1s3-.5 4.1-1.5c1.1-1 1.7-2.3 1.7-4v-.2c0-1-.3-2-.8-2.9-.6-.9-1.3-1.6-2.1-2.2-.9-.6-1.9-1.2-2.9-1.9-1.1-.7-2-1.3-2.9-1.9-1-.6-1.8-1.4-2.4-2.3-.7-1-1-2-1-3.2V25c0-1.8.6-3.2 1.8-4.2 1.1-.9 2.6-1.4 4.2-1.4 2.3 0 4.2.9 5.5 2.6l.1.2v4.3l-1.1-2c-.5-.9-1.1-1.6-2-2.1-.8-.5-1.7-.7-2.8-.7-1 0-1.8.3-2.5.9-.7.6-1 1.4-1 2.5v.2c0 1.3.7 2.4 2.2 3.5.7.5 1.4 1 2.3 1.5.9.5 1.8 1 2.6 1.6.9.6 1.7 1.2 2.4 1.9.8.7 1.4 1.5 1.9 2.5s.7 2.1.7 3.3v.3c0 2.4-.8 4.3-2.4 5.7-1.6 1.2-3.6 1.9-5.9 1.9zm-4.8-21.4c.1.6.4 1.1.7 1.6.6.8 1.3 1.5 2.1 2 .9.6 1.9 1.2 2.9 1.9 1.1.7 2.1 1.3 3 1.9 1 .7 1.8 1.5 2.4 2.5.1.2.3.4.4.7 0-.1-.1-.1-.1-.2-.4-.8-1-1.6-1.6-2.2-.7-.6-1.4-1.2-2.3-1.7-.9-.6-1.7-1.1-2.6-1.6-.9-.5-1.7-1-2.4-1.5-1.4-1-2.2-2.1-2.5-3.4z"  /></g><g><path d="M115.3 20.4v26h1.1v-9.9h17.8v9.9h1.2v-26h-1.2v15.1h-17.8V20.4z"/><path d="M117 37.1V47h-2.3V19.8h2.3v15.1h16.6V19.8h2.3V47h-2.3v-9.9z"/></g><g><path d="M147.7 20.4h1.1v26h-1.1z"/><path d="M147.1 19.8h2.3V47h-2.3z"/></g><g id="g39"><path id="polygon41"   d="M162.1 46.4V23.3l19.1 23.5V20.4h-1v23.1L161.1 20v26.4z"/><path id="path43" d="M181.8 48.4l-19.1-23.5V47h-2.2V18.4l19.1 23.5V19.8h2.2v28.6zm-20.1-26.6l19 23.3V45l-19-23.3v.1z"  /></g><g id="g45"><path id="path47" d="M196.3 23.9c-2.7 2.6-4 5.8-4 9.5 0 2.3.6 4.5 1.8 6.6 1.2 2.1 2.8 3.7 4.9 5 2.1 1.2 4.3 1.9 6.7 1.9h.4c2.5 0 4.8-.6 6.9-1.9v-9.4h-9.7v1h8.6v7.8c-2 1-4 1.5-5.9 1.5-3.4 0-6.3-1.2-8.7-3.7-2.4-2.5-3.6-5.4-3.6-8.8 0-3.4 1.2-6.3 3.6-8.8 2.4-2.4 5.3-3.7 8.7-3.7 2.5 0 4.9.7 7 2.2v-1.3c-2.2-1.3-4.6-1.9-7-1.9-3.9 0-7 1.3-9.7 4z"  /><path id="path49" d="M206 47.4h-.4c-2.5 0-4.8-.7-7-2-2.1-1.3-3.8-3-5.1-5.2-1.2-2.1-1.9-4.5-1.9-6.9 0-3.8 1.4-7.1 4.2-9.9 2.8-2.7 6.1-4.1 9.9-4.1 2.6 0 5 .7 7.3 2l.3.2v2.7l-.9-.6c-2.1-1.4-4.3-2.1-6.7-2.1-3.2 0-6 1.2-8.3 3.5-2.3 2.3-3.5 5.1-3.5 8.4 0 3.2 1.2 6 3.5 8.4 2.3 2.3 5.1 3.5 8.3 3.5 1.7 0 3.5-.4 5.3-1.2v-6.9h-8.6V35h10.9v10.3l-.3.2c-1.9 1.2-4.3 1.9-7 1.9z"  /></g><g id="g51"><path id="polygon53"   d="M229.5 46.4v-25h6v-1h-13.1v1h6v25z"/><path id="polygon55"   d="M221.8 22v-2.2H236V22h-5.9v25h-2.3V22z"/></g><g id="g57"><path id="path59" d="M255.4 20c-3.7 0-6.9 1.3-9.6 4-2.7 2.6-4 5.8-4 9.4 0 3.6 1.3 6.8 3.9 9.5 2.6 2.7 5.7 4.1 9.3 4.1h.5c3.6 0 6.7-1.3 9.4-4 2.6-2.7 3.9-5.9 3.9-9.5 0-3.6-1.3-6.8-4-9.4-2.5-2.8-5.7-4.1-9.4-4.1zm8.7 22.2c-2.4 2.4-5.3 3.7-8.7 3.7-3.4 0-6.3-1.2-8.7-3.7-2.4-2.4-3.6-5.4-3.6-8.8 0-3.4 1.2-6.3 3.6-8.8 2.4-2.4 5.3-3.7 8.8-3.7 3.4 0 6.3 1.2 8.7 3.7 2.4 2.4 3.6 5.4 3.6 8.8 0 3.4-1.3 6.3-3.7 8.8z"  /><path id="path61" d="M255.6 47.4h-.5c-3.7 0-7-1.4-9.7-4.2-2.7-2.8-4.1-6.1-4.1-9.9 0-3.8 1.4-7.1 4.2-9.8 2.8-2.7 6.1-4.1 10-4.1 3.9 0 7.2 1.4 9.9 4.1 2.7 2.7 4.1 6 4.1 9.8 0 3.8-1.4 7.1-4.1 9.9-2.7 2.8-6 4.2-9.8 4.2zm-.2-25.8c-3.2 0-6 1.2-8.3 3.5-2.3 2.3-3.5 5.1-3.5 8.4 0 3.2 1.2 6 3.5 8.4 2.3 2.3 5.1 3.5 8.3 3.5 3.2 0 6-1.2 8.3-3.5 2.3-2.3 3.5-5.1 3.5-8.4 0-3.2-1.2-6-3.5-8.4-2.3-2.4-5.1-3.5-8.3-3.5z"  /></g><g id="g63"><path id="polygon65"   d="M280 46.4h1V23.3l19.1 23.5V20.4h-1v23.1L280 20z"/><path id="path67" d="M300.7 48.4l-19.1-23.5V47h-2.2V18.4l19.1 23.5V19.8h2.2v28.6zm-20.1-26.6l19 23.3V45l-19-23.3v.1z"  /></g></g><g id="g69"><path id="path71" d="M105.1 74.4c.5-.5 1.2-.8 1.9-.8.3 0 .5 0 .8.1l.6.3c.2.1.3.2.4.3l.3.3.1.1-.4.3s0-.1-.1-.1l-.2-.2-.3-.3c-.1-.1-.3-.2-.5-.2-.2-.1-.4-.1-.6-.1-.6 0-1.1.2-1.5.6-.4.4-.6.9-.6 1.6 0 .6.2 1.1.6 1.5.4.4.9.6 1.5.6.2 0 .4 0 .6-.1.2-.1.4-.1.5-.2.1-.1.3-.2.4-.3l.2-.2.1-.1.4.3s0 .1-.1.1l-.3.3c-.1.1-.3.2-.4.3l-.6.3c-.3.1-.5.1-.8.1-.8 0-1.4-.3-1.9-.8s-.8-1.2-.8-1.9c-.1-.6.1-1.2.7-1.8z"  /><path id="path73" d="M118.1 78.3c-.5.5-1.2.8-1.9.8a2.732 2.732 0 0 1-2.7-2.7c0-.8.3-1.4.8-1.9s1.2-.8 1.9-.8c.8 0 1.4.3 1.9.8s.8 1.2.8 1.9-.3 1.3-.8 1.9zm-3.4-.4c.4.4.9.6 1.5.6s1.1-.2 1.5-.6c.4-.4.6-.9.6-1.5s-.2-1.1-.6-1.6c-.4-.4-.9-.6-1.5-.6s-1.1.2-1.5.6c-.4.4-.6.9-.6 1.6 0 .6.2 1.1.6 1.5z"  /><path id="path75" d="M128.2 73.7V79h-.5l-3.2-4.2V79h-.6v-5.3h.5l3.2 4.2v-4.2h.6z"  /><path id="path77" d="M133.9 74.4c.5-.5 1.2-.8 1.9-.8.3 0 .5 0 .8.1l.6.3c.2.1.3.2.4.3l.3.3.1.1-.4.3s0-.1-.1-.1l-.2-.2-.3-.3c-.1-.1-.3-.2-.5-.2-.2-.1-.4-.1-.6-.1-.6 0-1.1.2-1.5.6-.4.4-.6.9-.6 1.6 0 .6.2 1.1.6 1.5.4.4.9.6 1.5.6.2 0 .4 0 .6-.1.2-.1.4-.1.5-.2.1-.1.3-.2.4-.3l.2-.2.1-.1.3.5s0 .1-.1.1l-.3.3c-.1.1-.3.2-.4.3l-.6.3c-.3.1-.5.1-.8.1a2.732 2.732 0 0 1-2.7-2.7c.1-.8.3-1.4.8-2z"  /><path id="path79" d="M146.5 78.5v.5h-3.7v-5.3h3.6v.5h-3V76h2.4v.5h-2.4v2h3.1z"  /><path id="path81" d="M153.4 73.7c.5 0 .9.2 1.2.5.3.3.5.7.5 1.2s-.2.9-.5 1.2c-.3.3-.7.5-1.2.5H152V79h-.6v-5.3h2zm-1.4.5v2.2h1.4c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.2-.2-.5-.3-.8-.3H152z"  /><path id="path83" d="M163.3 73.7v.5h-1.7V79h-.6v-4.7h-1.7v-.5h4z"  /><path id="path85" d="M173.1 73.7h.6V76h2.9v-2.3h.6V79h-.6v-2.4h-2.9V79h-.6v-5.3z"  /><path id="path87" d="M186.8 78.3c-.5.5-1.2.8-1.9.8a2.732 2.732 0 0 1-2.7-2.7c0-.8.3-1.4.8-1.9s1.2-.8 1.9-.8a2.732 2.732 0 0 1 2.7 2.7c0 .7-.3 1.3-.8 1.9zm-3.5-.4c.4.4.9.6 1.5.6s1.1-.2 1.5-.6c.4-.4.6-.9.6-1.5s-.2-1.1-.6-1.6c-.4-.4-.9-.6-1.5-.6s-1.1.2-1.5.6c-.4.4-.6.9-.6 1.6 0 .6.2 1.1.6 1.5z"  /><path id="path89" d="M195.7 78.1c.3-.3.5-.7.5-1.1v-3.2h.6V77c0 .6-.2 1.1-.6 1.5-.4.4-.9.6-1.5.6s-1.1-.2-1.5-.6c-.4-.4-.6-.9-.6-1.5v-3.2h.6V77c0 .4.2.8.5 1.1.3.3.7.5 1.1.5.2-.1.6-.2.9-.5z"  /><path id="path91" d="M204.4 77.1c-.1-.1-.2-.2-.4-.3-.2-.1-.4-.1-.6-.2-.2-.1-.4-.1-.6-.2l-.6-.3c-.2-.1-.3-.2-.4-.4-.1-.2-.2-.4-.2-.7 0-.4.2-.7.5-1 .3-.3.7-.4 1.2-.4.2 0 .4 0 .5.1.2 0 .3.1.4.2.1.1.2.1.3.2.1.1.2.1.2.2l.1.1-.4.4v-.1l-.1-.1c-.1-.1-.2-.1-.2-.2-.1 0-.2-.1-.3-.1-.1 0-.3-.1-.4-.1-.3 0-.6.1-.8.3-.2.2-.3.4-.3.6 0 .2.1.3.2.5.1.1.2.2.4.3.2.1.4.1.6.2.2.1.4.1.6.2l.6.3c.2.1.3.2.4.4.1.2.2.4.2.7 0 .4-.2.8-.5 1.1-.3.3-.7.4-1.3.4-.2 0-.4 0-.6-.1-.2-.1-.4-.1-.5-.2-.1-.1-.2-.2-.3-.2-.1-.1-.2-.1-.2-.2l-.1-.1.3-.4.1.1.2.2c.1.1.2.1.3.2.1.1.2.1.4.2.2 0 .3.1.5.1.4 0 .7-.1.9-.3.2-.2.3-.4.3-.7-.3-.4-.3-.6-.4-.7z"/><path d="M213.7 78.5v.5H210v-5.3h3.6v.5h-3V76h2.4v.5h-2.4v2h3.1z"/></g></g></svg>

            <ul class="apartment-tooltip-descript">
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Кількість кімнат:</span> 3</p>
                </li>
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Загальна площа:</span> 112,9 м<span class="exponent">2</span></p>
                </li>
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Житлова площа:</span> 45,5 м<span class="exponent">2</span></p>
                </li>
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Поверх:</span> 3-21</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>
