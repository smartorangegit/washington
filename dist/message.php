<?php
/*
Template Name: Дякуємо за ваше звернення!
*/
?>
<?php get_header();?>
<div class="page-wrapper">
	<?php get_template_part('include/menu'); ?>
	<?php get_template_part('forms/callback_form'); ?>

    <div class="slideable-page-content">
 
        <section class="not-found">
            <div class="page-hero">
                <div class="wrapper">
                    <div class="message-container">
                        <h1 class="message__heading">
							<?=get_the_title(get_the_id());?>
                        </h1>
                        <div class="message__text">
                            Менеджер житлового комплексу O2 Residence обов'язково зв'яжеться з вами найближчим часом.
                        </div>
                        <h2 class="message__subheading">
                            Дізнайтеся більше про проекти компанії SAGA Development
                        </h2>
                        <div class="not-found__btns">
                            <a class="not-found-btn not-found-btn__main" href="/">На головну</a>
                            <a class="not-found-btn not-found-btn__back" href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)">Повернутися на попередню сторінку</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php get_footer(); ?>
