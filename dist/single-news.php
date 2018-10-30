<?php /**Сторінка новин*/?>

<?php get_header(); ?>

<?
$gallery3   	= get_post_meta($post->ID, 'gallery_block3', true);

$links = explode ("\n",$post->post_content);
$links = str_replace('<pre>','', $links);

$args = array('post_type' =>'page', 'include' => array(51));
$wp_posts= get_posts($args);
$pageContent = explode ("\n",$wp_posts[0]->post_content);

//print_r($post);


$img=get_the_post_thumbnail_url( $post->ID);
?>
    <section class="news-open">

        <div class="page-top page-top_news-open">
            <div class="page-top__wrapper">
                <div class="page-top_heading">
                    <h1><?=$post->post_title;?></h1>
                </div>
                <div class="page-top__links page-top__links_news-open">
                    <ul>
                        <li><a href="/"><?_e('news-Головна','washington');?></a></li>
                        <li><span class="page-top__line"></span></li>
                        <li><a href="/news/"><?_e('t-news','washington');?></a></li>
                        <li><span class="page-top__line"></span></li>
                        <li class="page-top__active-link"><a href="#"><?=$post->post_title;?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- page-top -->

        <div class="news-open__content wrapper">
            <div class="news-open__image js-news-open__image">
                <?
                $img = (get_the_post_thumbnail_url($post->ID, 'full'));

                $metasz2 = get_post_meta( $post->ID);
//                print_r($metasz2);
if(!empty($img)){
    ?>
    <img src="<?=$img?>" alt="News Image">
    <?
}
else {
    for ($i = 0; $i <= $metasz2['gallery_news'][0]; $i++) {
        if (!empty($metasz2['gallery_news_' . $i . '_img'][0])) {
            $image_attributesz2 = wp_get_attachment_image_src($metasz2['gallery_news_' . $i . '_img'][0]);
            $bigz2 = str_replace('-150x150', '', $image_attributesz2[0]);
            ?>
            <img src="<?= $bigz2 ?>" alt="News Image">
        <? } else {
        }
    }
}
                ?>
            </div>
            <div class="news-open__text">
                <?=$post->post_content;?>
            </div>
            <div class="news-open_btns">
                <a onclick="window.history.go(-1);" class="news-open__btn news-open__btn_back btn" href="#">
                    <svg class="news-open__btn_back-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="11" viewBox="0 0 44 11"><g transform="translate(-113 -1396)"><path d="M157 1401v1h-42v1h-1v-1h-1v-1h1v-1h1v1zm-42 3v-1h1v1zm1 1v-1h1v1zm1 1v-1h1v1zm-2-6v-1h1v1zm1-1v-1h1v1zm1-1v-1h1v1zm1-1v-1h1v1zm0 10v-1h1v1z"/></g></svg>
                    <span class="btn__text"><?_e('single-news-back','washington');?></span>
                </a>
                <a href="/obrati-budinok/" class="news-open__btn btn news-open__btn_hoose-appartment">
                    <span class="btn__text">
                        <?_e('home-Обрати квартиру','washington');?>
                    </span>
                </a>
            </div>
        </div>

        <div class="news-open__read-more">
            <div class="page-top__wrapper">
                <div class="page-top_heading news-open__read-more-heading">
                    <h4><?_e('single-news-Читайте також','washington');?></h4>
                    <div class="page-top__letter-w">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 170.1 132.4"><path d="M57.1 132.4L0 0h6.4l51.5 119.2L82 62.8 55.2 0h6.2l24.1 57.1L110.4 0h4.9L88.2 62.7l24.6 57.1L165.4 0h4.7l-57.8 132.4-27.6-63.5-27.6 63.5z"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-open__list wrapper">
            <?php
            $post = get_post(60);
            $ReaNews =LoadingNews(NewsOnPage, 0);

            if (count($ReaNews['ReaNews'])) {

                $i = 0;
                foreach ($ReaNews['ReaNews'] as $k => $post) {

                    $img = get_the_post_thumbnail_url($post->ID);
                    if (!$img) {
                        $img = get_template_directory_uri() . "/assets/img/defolt.png";
                    }
//                    print_r($post);
                    $date = explode(' ', $post->post_date);
                    $new_date = explode('-', $date[0]);
                    $title = get_the_title();
                    $rest = substr($title, 0, 87);
                    ?>
                    <div class="news__item news__item_<?=$i;?> hover-ef hover-ef_1">
                        <a href="<?php echo $post->post_name; ?>">
                            <div class="hover-ef__overlay">
                                <div class="hover-ef__border">
                                    <div class="W-logo W-logo_white W-logo_hover"><svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 171.332 134.318"><path class="letter_W_left" d="M.76.677l57.1 132.39L116.065.668l-4.903.004-52.49 119.207L7.155.673z"/><path class="letter_W_right" d="M55.26.508l57.1 132.39L170.565.5l-4.902.004-52.49 119.206L61.655.505z"/></svg></div>
                                    <h3 class="hover-ef__heading_2 news__heading"><?php echo $post->post_name; ?></h3>
                                    <p class="hover-ef__paragraph">
                                        <?php echo $post->post_excerpt; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="hover-ef__black-box">
                                <div class="hover-ef__black-box-content">
                                    <div class="hover-ef__arrow_1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 477.175 477.175" xml:space="preserve"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5 c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/></svg></div>
                                    <span><?_e('home-Дивитися','washington');?></span>
                                </div>
                            </div>
                            <div class="hover-ef__bottom-text news__bottom-text">
                                <h3 class="hover-ef__heading news__heading">
                                    <?php echo $post->post_name; ?>
                                    <span class="hover-ef__arrow_2 news__arrow_2"><svg xmlns="http://www.w3.org/2000/svg" height="5.6456027mm" width="16.378967mm"><g transform="translate(-118.21429,-145.23871)"><path class="hp-arrow_main-line" d="m 118.21429,155.04077 58.03571,0" /><path class="hp-arrow__line" d="m 175.89286,154.97381 -6.80865,-6.55879" /><path class="hp-arrow__line" d="m 169.33222,161.88374 6.55879,-6.80865" /></g></svg></span>
                                </h3>
                            </div>
                            <div class="news__item-gradient"></div>
                            <div class="news__info">
                                <div class="news__date">
                                    <span class="news__date-icon news__info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 488.152 488.152"><path d="M177.854 269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.665c6.12 0 11.08-4.956 11.08-11.079v-38.66zM274.483 269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.67c6.108 0 11.069-4.956 11.069-11.079v-38.66zM371.117 269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12 0-11.08 4.954-11.08 11.069v38.66c0 6.123 4.96 11.079 11.08 11.079h38.665c6.113 0 11.074-4.956 11.074-11.079v-38.66zM177.854 365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.665c6.12 0 11.08-4.956 11.08-11.074V365.95zM274.483 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95zM371.117 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12 0-11.08 4.95-11.08 11.075v38.653c0 6.119 4.96 11.074 11.08 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95z"/><path d="M440.254 54.354v59.05c0 26.69-21.652 48.198-48.338 48.198h-30.493c-26.688 0-48.627-21.508-48.627-48.198V54.142h-137.44v59.262c0 26.69-21.938 48.198-48.622 48.198H96.235c-26.685 0-48.336-21.508-48.336-48.198v-59.05c-23.323.703-42.488 20.002-42.488 43.723v346.061c0 24.167 19.588 44.015 43.755 44.015h389.82c24.131 0 43.755-19.889 43.755-44.015V98.077c0-23.721-19.164-43.02-42.487-43.723zm-14.163 368.234c0 10.444-8.468 18.917-18.916 18.917H80.144c-10.448 0-18.916-8.473-18.916-18.917V243.835c0-10.448 8.467-18.921 18.916-18.921h327.03c10.448 0 18.916 8.473 18.916 18.921l.001 178.753z"/><path d="M96.128 129.945h30.162c9.155 0 16.578-7.412 16.578-16.567V16.573C142.868 7.417 135.445 0 126.29 0H96.128C86.972 0 79.55 7.417 79.55 16.573v96.805c0 9.155 7.422 16.567 16.578 16.567zM361.035 129.945h30.162c9.149 0 16.572-7.412 16.572-16.567V16.573C407.77 7.417 400.347 0 391.197 0h-30.162c-9.154 0-16.577 7.417-16.577 16.573v96.805c0 9.155 7.423 16.567 16.577 16.567z"/></svg></span>
                                    <span class="news__date-text"><?= $new_date[2] . '.' . $new_date[1] . '.' . $new_date[0]; ?></span>
                                </div>
<?/*                                 <div class="news__time">
                                    <span class="news__time-icon news__info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 47.001 47.001"><path d="M22.432 22.429a1.067 1.067 0 1 0 2.136 0 5.321 5.321 0 0 1 1.251-3.421c1.793-2.126 3.137-4.431 3.988-6.851a1.069 1.069 0 0 0-1.007-1.423H18.199a1.069 1.069 0 0 0-1.008 1.423c.853 2.42 2.195 4.725 3.988 6.851a5.32 5.32 0 0 1 1.253 3.421zM24.568 26.71a1.068 1.068 0 0 0-2.136 0c-.001 1.542-.922 3.067-2.593 4.304-3.574 2.639-6.249 5.506-7.951 8.52a1.06 1.06 0 0 0 .009 1.062c.19.329.542.53.922.53h21.364a1.067 1.067 0 0 0 .93-1.592c-1.701-3.014-4.377-5.881-7.95-8.52-1.673-1.237-2.594-2.762-2.595-4.304z"/><path d="M42.192 42.729h-.639c-.734-8.313-5.602-14.695-9.386-19.228 3.785-4.532 8.651-10.915 9.388-19.228h.639a2.136 2.136 0 0 0 0-4.273H4.807a2.136 2.136 0 0 0 0 4.273h.639c.735 8.314 5.601 14.697 9.386 19.228-3.784 4.532-8.651 10.914-9.387 19.228h-.638a2.137 2.137 0 0 0 0 4.273H42.194a2.137 2.137 0 1 0-.002-4.273zm-32.464 0c.803-7.511 5.686-13.295 9.335-17.617l.195-.231a2.134 2.134 0 0 0 0-2.755l-.194-.23c-3.648-4.323-8.533-10.107-9.336-17.619h27.544c-.803 7.512-5.688 13.296-9.336 17.619l-.193.23a2.134 2.134 0 0 0 0 2.755l.195.231c3.648 4.322 8.531 10.106 9.334 17.617H9.728z"/></svg></span>
                                    <span class="news__time-text"><?=$date[1];?></span>
                                </div> */?>
                            </div>
                        </a>
                    </div>
                    <?php
                    $i++;
                    if($i>=2){
                        break;
                    }
                }
            }
            ?>
        </div>

    </section>



<?php get_footer(); ?>