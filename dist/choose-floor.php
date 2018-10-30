<?php
/*
Template Name: Обрати поверх
*/
?>
<?php get_header();?>
    <section class="choose-floor">
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
        <div class="choose-floor__content wrapper">

            <div class="choose-floor__left">
                <div class="compass">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/choose-floor/compass.png" alt="Choose floor compass image">
                    <span class="compass__direction compass__direction_north">Пн</span>
                    <span class="compass__direction compass__direction_east">Сх</span>
                    <span class="compass__direction compass__direction_south">Пд</span>
                    <span class="compass__direction compass__direction_west">Зх</span>
                </div>
                <div class="choose-floor_arrow-wrap">
                    <div class="choose-floor_arrow">
                        <span>Оберіть потрібний поверх</span>
                    </div>
                    <!-- <div class="choose-floor_arrow_short"></div> -->
                    <!-- <div class="choose-floor_arrow_short choose-floor_arrow_short_2"></div> -->
                </div>
                <div class="choose-floor__rooms-btns">
                    <ul>
                        <li class="choose-floor__rooms-btn"><a href="/pidbir-za-parametrami/">1 кімнатні</a></li>
                        <li class="choose-floor__rooms-btn"><a href="/pidbir-za-parametrami/">2 кімнатні</a></li>
                        <li class="choose-floor__rooms-btn"><a href="/pidbir-za-parametrami/">3 кімнатні</a></li>
                    </ul>
                </div>
            </div>

            <div class="choose-floor__center">
                <svg clas="build__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 360 624" style="enable-background:new 0 0 360 624;" xml:space="preserve">
                    <image style="overflow:visible;" width="537" height="831" xlink:href="<?php bloginfo('template_url'); ?>/assets/img/choose-floor/build.png"  transform="matrix(0.75 0 0 0.75 -25 10)">
                    </image>
                    <a data-floor="19" data-flat="23" href="/choose-apartment/?floor=19" data-href="/choose-apartment/?floor=19" class="build__link">
                        <rect x="108.5" y="22" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="18" data-flat="22" href="/choose-apartment/?floor=18" data-href="/choose-apartment/?floor=18" class="build__link">
                        <rect x="108.5" y="46" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="17" data-flat="21" href="/choose-apartment/?floor=17" data-href="/choose-apartment/?floor=17" class="build__link">
                        <rect x="108.5" y="70" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="16" data-flat="20" href="/choose-apartment/?floor=16" data-href="/choose-apartment/?floor=16" class="build__link">
                        <rect x="108.5" y="94" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="15" data-flat="19" href="/choose-apartment/?floor=15" data-href="/choose-apartment/?floor=15" class="build__link">
                        <rect x="108.5" y="118" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="14" data-flat="18" href="/choose-apartment/?floor=14" data-href="/choose-apartment/?floor=14" class="build__link">
                        <rect x="108.5" y="142" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="13" data-flat="17" href="/choose-apartment/?floor=13" data-href="/choose-apartment/?floor=13" class="build__link">
                        <rect x="108.5" y="166" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="12" data-flat="16" href="/choose-apartment/?floor=12" data-href="/choose-apartment/?floor=12" class="build__link">
                        <rect x="108.5" y="190" class="build__rectangle" width="156.5" height="24"/>
                    </a>
                    <a data-floor="11" data-flat="15" href="/choose-apartment/?floor=11" data-href="/choose-apartment/?floor=11" class="build__link">
                        <rect x="85.5" y="214" class="build__rectangle" width="179.5" height="24"/>
                    </a>
                    <a data-floor="10" data-flat="14" href="/choose-apartment/?floor=10" data-href="/choose-apartment/?floor=10" class="build__link">
                        <rect x="85.5" y="238" class="build__rectangle" width="179.5" height="13.5"/>
                    </a>
                    <a data-floor="9" data-flat="13" href="/choose-apartment/?floor=9" data-href="/choose-apartment/?floor=9" class="build__link">
                        <rect x="74" y="253.5" class="build__rectangle" width="204" height="26.5"/>
                    </a>
                    <a data-floor="8" data-flat="12" href="/choose-apartment/?floor=8" data-href="/choose-apartment/?floor=8" class="build__link">
                        <rect x="74.375" y="281.125" class="build__rectangle" width="204" height="26.5"/>
                    </a>
                    <a data-floor="7" data-flat="11" href="/choose-apartment/?floor=7" data-href="/choose-apartment/?floor=7" class="build__link">
                        <rect x="73.25" y="308.75" class="build__rectangle" width="204" height="26.5"/>
                    </a>
                    <a data-floor="6" data-flat="10" href="/choose-apartment/?floor=6" data-href="/choose-apartment/?floor=6" class="build__link">
                        <rect x="73.25" y="335.25" class="build__rectangle" width="204" height="15.75"/>
                    </a>
                    <a data-floor="5" data-flat="9" href="/choose-apartment/?floor=5" data-href="/choose-apartment/?floor=5" class="build__link">
                        <rect x="65.687" y="352" class="build__rectangle" width="219.125" height="29.938"/>
                    </a>
                    <a data-floor="4" data-flat="8" href="/choose-apartment/?floor=4" data-href="/choose-apartment/?floor=4" class="build__link">
                        <rect x="66.438" y="382.938" class="build__rectangle" width="219.125" height="19.063"/>
                    </a>
                    <a data-floor="3" data-flat="7" href="/choose-apartment/?floor=3" data-href="/choose-apartment/?floor=3" class="build__link">
                        <rect x="58.125" y="404" class="build__rectangle" width="232.875" height="29.938"/>
                    </a>
                    <a data-floor="2" data-flat="6" href="/choose-apartment/?floor=2" data-href="/choose-apartment/?floor=2" class="build__link">
                        <rect x="58.125" y="435.938" class="build__rectangle" width="232.875" height="29.938"/>
                    </a>
                    <a data-floor="1" data-flat="5" href="/choose-apartment/?floor=1" data-href="/choose-apartment/?floor=1" class="build__link">
                        <rect x="58.125" y="474.438" class="build__rectangle" width="239.375" height="63.563"/>
                    </a>
                </svg>
            </div>

            <div class="choose-floor__right">
                <div class="filter-btn__container">
                    <a href="/filter/" class="filter-btn btn">
                        <span class="filter-btn__icon">
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_1"></span></div>
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_2"></span></div>
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_3"></span></div>
                        </span>
                        <span class="btn__text">Фільтр</span>
                    </a>
                </div>
                <div class="choose-floor__inner">
                  <div class="choose-floor__info choose-floor__info_floor-number">
                    <div class="choose-floor__info-text">Поверх</div>
                    <div class="choose-floor__info-number choose-floor__info-number-js">17</div>
                  </div>
                  <div class="choose-floor__info choose-floor__info_apartments-number">
                    <div class="choose-floor__info-text">Кількість квартир</div>
                    <div class="choose-floor__info-number choose-flat__info-number-js">25</div>
                  </div>
                  <a href="" class="choose-floor__info  choose-floor__link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="5.6456027mm" width="16.378967mm"><g transform="translate(-118.21429,-145.23871)"><path class="hp-arrow_main-line" d="m 118.21429,155.04077 58.03571,0"></path><path class="hp-arrow__line" d="m 175.89286,154.97381 -6.80865,-6.55879"></path><path class="hp-arrow__line" d="m 169.33222,161.88374 6.55879,-6.80865"></path></g>
                            </svg>
                    <div>Дивитися планування</div>
                  </a>

                </div>
                <div class="choose-floor__price-btn-wrap">
                    <a href="#" class="choose-floor__price-btn btn js-open-callback-form"><span class="btn__text">Дізнатися ціну</span></a>
                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
