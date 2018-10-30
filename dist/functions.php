<?php
require get_template_directory() . '/inc/settings.php';
require get_template_directory() . '/inc/menu.php';
//require get_template_directory() . '/inc/custom-galleries.php';
//require get_template_directory() . '/inc/custom-metaboxes.php';


define('NewsOnPage',6);

/**
 *  @brief Реєстрація власного меню
*/
function register_my_menu() {
	
	register_nav_menu( 'main-menu-left', 'Top' );
	register_nav_menu( 'main-menu-2', 'Top2' );
	register_nav_menu( 'main-menu-3', 'Top3' );
	register_nav_menu( 'main-menu-4', 'Top4' );
	register_nav_menu( 'main-menu-5', 'Top5' );
	register_nav_menu( 'main-menu-6', 'Top6' );
	register_nav_menu( 'main-menu-lang', 'lang' );
	register_nav_menu( 'footer-menu-1', 'footer-1' );
	register_nav_menu( 'footer-menu-2', 'footer-2' );
	register_nav_menu( 'footer-menu-3', 'footer-3' );
	//register_nav_menu( 'main-menu-right', 'Right' );
}
add_action( 'init', 'register_my_menu' );


/**
 *  @brief Додаткові типи записів Об'экти, Звіти, Новини
*/
function register_post_types(){

	 register_post_type('project', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Объекты', // основное название для типа записи
            'singular_name'      => 'Объекты', // название для одной записи этого типа
            'add_new'            => 'Добавить объект', // для добавления новой записи
            'add_new_item'       => 'Добавить объект', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать объект', // для редактирования типа записи
            'new_item'           => 'Новый объект', // текст новой записи
            'view_item'          => 'Смотреть объект', // для просмотра записи этого типа.
            'search_items'       => 'Искать объект', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Объекты', // название меню
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
		'menu_icon'             => 'dashicons-building',
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );

    register_post_type('news', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Новости', // основное название для типа записи
            'singular_name'      => 'Новости', // название для одной записи этого типа
            'add_new'            => 'Добавить новость', // для добавления новой записи
            'add_new_item'       => 'Добавить новость', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать новость', // для редактирования типа записи
            'new_item'           => 'Новая новость', // текст новой записи
            'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
            'search_items'       => 'Искать новость', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Новости', // название меню
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
		'menu_icon'             => 'dashicons-format-aside',
        'supports'           => array('title','editor','author','thumbnail','excerpt')
    ) );

}
add_action('init', 'register_post_types');

//////////////////


/**
 *  @brief Шукає url в рядку 
 */
function searchUrl($url){
	preg_match("/ href=[\"|\'](.*?)[\"|\']/is", $url, $p1);
	
	return $p1;
}



/** Підбір новин*/
function LoadingNews($postnumbers=NewsOnPage, $offset=0) {

GLOBAL $post;

	if ($_POST['page'])
	{
		$setPage=$_POST['page'];
	}
	else
	{
		$setPage=1;
	}




	 $myposts = get_posts(
				array(
					'numberposts' => -1,
                    'post_type' => 'news',
                ));

	$num=count($myposts);

	if ($postnumbers>$num)
	{
		$offset=0;
	}
	else
	{
		$offset=($setPage-1)*$postnumbers;
	}

	$myposts = get_posts(
				array(
					'numberposts' => -1,
                    'post_type' => 'news',
					'posts_per_page'=>$postnumbers,
					'offset'=>$offset
                ));


			$pagination='';

			require get_template_directory() . '/inc/Pagination.php';

			$app=Pagination::createPagination();
			$app->options= array('itemsCount' => $num, 'itemsPerPage' => $postnumbers, 'currentPage' =>$setPage );
			$app->PaginationAdd();

				if (count($app->buttons)>0)
				{
					$pagination.='<div class="pagination">';
					foreach ($app->buttons as $k=>$t)
					{
						if (!isset($t->page))
						{
							continue;
						}
						$actibe='pag-click';

						if (!$t->isActive)
						{
							$actibe='pagination__active';
						}

						if ($t->text)
						{
							//$pagination.='<span class="pagination-dots">'.$t->text.'</span>';
							if ($t->text=='Next')
							{

								$pagination.='</ul>';
								$pagination.='<a href="" data-page="'.$t->page.'"  class="pag__right pag-click" title="Вперед">
								<span>ВПЕРЕД</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><path d="M230.5 499l496 491 43-54.8L284.9 444l-54.4 55z"/>
								<path d="M286.6 554L750.9 64l-44.6-54-475.8 489.4 56.1 54.6z"/></svg>
								</a>';
							}
							else
							{
								$pagination.='<a href="" data-page="'.$t->page.'" class="pag__left pag-click" title="Назад">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><path d="M230.5 499l496 491 43-54.8L284.9 444l-54.4 55z"/>
								<path d="M286.6 554L750.9 64l-44.6-54-475.8 489.4 56.1 54.6z"/></svg>
								<span>НАЗАД</span>
								</a>';
								$pagination.='<ul class="pad__center">';
							}
						}
						else
						{
							//$url=UrlAdd('news', 1);

							if($t->page>1)
							{
								$url.='?page='.$t->page;
							}

							$pagination.='<li><a class="'.$actibe.'" data-page="'.$t->page.'" href="#">'.$t->page.'</a></li>';

						}

					}

			$pagination.='</div>'; }

	   return array('ReaNews'=>$myposts, 'num'=>$num, 'pagination'=>$pagination);

	}

	
add_action('wp_ajax_paginationNews', 'paginationNews'); //работает для авторизованных пользователей
add_action('wp_ajax_nopriv_paginationNews', 'paginationNews'); //работает для неавторизованны

function paginationNews() {

	$ReaNews =LoadingNews(NewsOnPage, 0);


 	if (count($ReaNews['ReaNews']))
	{

		foreach($ReaNews['ReaNews'] as $k=>$post )
		{

			$img=get_the_post_thumbnail_url( $post->ID);
			if (!$img)
			{
				$img=get_template_directory_uri(). "/assets/img/defolt.png";
			}
		?>
		<div style="background: url(<?= $img?>) center no-repeat;
					background-size: cover;" class="news__item news__item5 wow fadeIn"
		class="news__item news__item<?=$k?> wow fadeIn">
          <div class="news__prev">
            <p><?php  echo $post->post_title;?></p>
            <a rel="nofollow" href="<?php  echo $post->post_excerpt;?>">Детальніше</a>
          </div>

        </div>
			<?php
	    }

		echo $ReaNews['pagination'];

	}
	die();
}

/////////////////////////////////////


function langNext($lang){

	$this_lang=lang();

	if ($this_lang=='/ua') {
		$this_lang .= '/';
	}
	else {
		$this_lang .= '/';
	}

	if ($lang=='ua') {
		$lang = '/';
	}
	else {
		$lang .= '/'.$lang.'/';
	}

	$urlLang = str_replace($this_lang, $lang, $_SERVER['REQUEST_URI']);

	echo get_site_url().$urlLang;
   // echo $urlLang;
}

function lang($par=''){
	$LANG=qtrans_getLanguage();
	if ($LANG && !$par) {$LANG='/'.$LANG;
	}
	return $LANG;
}
add_action( 'after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain( 'washington', get_template_directory() . '/languages' );
}
