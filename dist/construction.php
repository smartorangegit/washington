<?php
/*
Template Name: Будівництво
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
<?php get_header(); ?>
  <div class="construction">
        <div class="page-top page-top_construction animate">
            <div class="page-top__wrapper">
                <div class="page-top_heading">
                    <h1><?=$post->post_title?></h1>
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
            <div class="construction-percents wrapper">
                <div class="construction-percent__item">
                    <div class="construction-percents__text">
                        Загальнобудівельні роботи: 
                    </div>
                    <div class="construction-percents__bar">
                        <span class="construction__percents-numbers_actual">2%</span>
                        <span class="construction__percents-numbers_visible">0%</span>
                    </div>
                </div>
                <div class="construction-percent__item">
                    <div class="construction-percents__text">
                        Фасад:
                    </div>
                    <div class="construction-percents__bar">
                        <span class="construction__percents-numbers_actual">0%</span>
                        <span class="construction__percents-numbers_visible">0%</span>
                    </div>
                </div>
                <div class="construction-percent__item">
                    <div class="construction-percents__text">
                        Благоустрій:
                    </div>
                    <div class="construction-percents__bar">
                        <span class="construction__percents-numbers_actual">0%</span>
                        <span class="construction__percents-numbers_visible">0%</span>
                    </div>
                </div>
                <div class="construction-percent__item">
                    <div class="construction-percents__text">
                        Мережі:
                    </div>
                    <div class="construction-percents__bar">
                        <span class="construction__percents-numbers_actual">0%</span>
                        <span class="construction__percents-numbers_visible">0%</span>
                    </div>
                </div>
            </div>
            <div class="construction__end-text">
                Завершення будівництва: III квартал 2020 р
            </div>
        </div>
        <!-- page-top -->

        <div class="construction__photos-container wrapper">
            <div class="construction__photos">

                <?

                if ( have_posts() ) :
                  query_posts('cat=11');   // указываем ID рубрик, которые необходимо вывести.
                  while (have_posts()) : the_post();
                  $post_array [] = $post->ID;
                ?>
                        <?php the_content();
                  endwhile;  // завершаем цикл.
                endif;
                //перебираем массив из ID постов из рубрики ход строительства - формируем галерееи и выводим
                foreach ($post_array as $pArray){
                    $metas = get_post_meta($pArray);

                    $firsImg = wp_get_attachment_image_src($metas['hd_gallety_0_img'][0]);
                    $BIG = str_replace('-150x150','',$firsImg[0]);
                    ?>
                    <div class="construction__photo animate">
                        <a href="<?=$BIG;?>" class="construction__photo-item construction__photo-item_1">
                            <img src="<?=$BIG;?>" alt="Gallery Image">
                            <div class="construction__photo-info">
                                <span class="construction__photo-icon"></span>
                                <span class="construction__photo-date"><?=$metas['hd_gallety_0_alt'][0];?></span>
                            </div>
                        </a>
                        <?
                        $metas = get_post_meta($pArray);
                        for ($i = 1; $i < $metas['hd_gallety'][0]; $i++) {
                                $image_attributes = wp_get_attachment_image_src($metas['hd_gallety_' . $i . '_img'][0]);
                                $big = str_replace('-150x150', '', $image_attributes[0]);
                        ?>
                                <a href="<?=$big?>" class="construction__photo-item"></a>
                        <?
                        }
                        ?>
                    </div>
                    <?} ?>


                </div><!--End photos-->
                <div class="construction__center-bar"></div>
            </div> 



    </div>

<?php get_footer(); ?>