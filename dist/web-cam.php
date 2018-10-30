<?php
/*
Template Name: Веб-камери
*/
?>
<?php get_header();?>
<section class="camera">
    <div class="wrapper">
        <?php include('include/menu.php'); ?>
        <div class="page-top  animate">
            <div class="page-top__wrapper">
                <div class="page-top_heading">
                    <h1>Веб камера</h1>
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
        <div class="wrapper">
            <div class="camera__content">
                <iframe class="camera__video" src="https://www.youtube.com/embed/LYWyG4refiI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <p class="camera__text">Запланированное время завершения строительства: III квартал 2020 года</p>
                <a href="/construction/" class="camera__button btn">
                    <span class="btn__text">Хід будівництва</span>
                </a>
            </div>
        </div>
</section>
<?php get_footer(); ?>
