<?php get_header(); ?>

    <!--index666-->
<?
$news = strpos($_SERVER['REQUEST_URI'], 'news');
if ($news !== false) {
    get_template_part('news');
}
$project = strpos($_SERVER['REQUEST_URI'], 'project');
if ($news !== false) {
    get_template_part('projects');
}
//if($_SERVER['REQUEST_URI']== '/news/') {
//    get_template_part('news');
//}
//if($_SERVER['REQUEST_URI']== '/project/') {
//    get_template_part('project');
//}
?>

<?php get_footer(); ?>