<?php
/*
Template Name: Зв'язок
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(27));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
<section class="zvyazok">

  <?php

  get_template_part('forms/callback_form');

  ?>


</section>

<?php get_footer(); ?>
