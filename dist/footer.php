<?php $uri = explode('/',$_SERVER['REQUEST_URI']);
if($uri[0] == '' && (($uri[1] == '' || $uri[1] == 'ru') && $uri[2] == '')){
    get_template_part('forms/callback_form');
}
//if (!empty($post)) { get_template_part('forms/callback_form'); } ?>
<?if($post->ID != 57){?>
<footer class="footer">
    <div class="footer__wrapper b-nav">
	
			<!-- Stsrt footer-menu -->
	<?	$menu_block=['about'=>'Про проект:', 'choose'=>'Обрати квартиру:', 'construction'=>'Хід проекту:'];
		$t=0;
		foreach ($menu_block as $k=>$block) { $t++;

			$items= wp_nav_menu(array(
				'theme_location' => 'footer-menu-'.$t,
				'container'      => false,
				'container_class'=>'',
				'menu_class'     => '',
				'menu_id'     	 => '',
				'depth'			 => 1,
				'echo' 			 => false,
				'walker'=> new Foter_Walker_Nav_Menu()
			));

			 if (!empty($items)) {

				  echo '<div class="b-nav__part b-nav__part_'.$t.'">
							<div class="b-nav__heading">
							   '.$block.'
							</div>';
				  echo $items;
				  echo '</div>';
			 }
		}
	?>
		<!-- End footer-menu -->
		
        <div class="b-nav__part b-nav__part_sales-dep">
            <div class="b-nav__heading">Адреса відділу продажу:</div>
            <ul>
                <li class="b-nav__address">
                    Київ, вул. Антоновича, 74
                </li>
                <li>
                    <div class="b-nav__telephone">
                        <div class="b-nav__icon-container">
                            <div class="b-nav__icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 159.71492 432.3053"><path d="M159.71 404.851l.005-76.025c-.03-15.112-12.797-27.42-28.47-27.417l-38.295-.005a792.327 792.327 0 0 1-1.677-5.88c-5.392-18.794-12.76-44.53-12.747-79.376-.002-34.934 7.383-60.703 12.762-79.525.573-1.991 1.13-3.907 1.632-5.752l25.686.02 12.645-.008c15.696-.002 28.446-12.32 28.455-27.436l.009-76.03C159.713 12.312 146.94-.003 131.245 0L109.76.062l.002.583c-8.176.991-16.464 3.276-24.398 6.743-7.486 3.367-13.946 7.263-19.72 11.866C19.013 55.844 0 112.885 0 216.09c.005 142.654 62.875 194.748 65.618 196.964 6.047 4.756 12.513 8.641 19.816 11.858 7.859 3.444 16.14 5.73 24.304 6.726l.026.442 21.48.225c15.678-.017 28.442-12.33 28.467-27.454z"/></svg>
                            </div>
                        </div>
                        <div class="b-nav__telephone-number-container">
                            <span class="b-nav__telephone-tel"></span><a href="tel:+38(044) 222-35-47"><span class="b-nav__telephone-number">(044) 222-35-47</span></a>
                        </div>
                        <div class="b-nav__btn-container">
                            <a href="#" class="b-nav__callback-btn btn js-open-callback-form">
                                <span class="btn__text">
                                    Замовити дзвінок
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        var ct = 0;
        var addCount = document.createElement('input');
        addCount.type = "hidden";
        addCount.id = "count";
        addCount.name = "count";
        addCount.value = "0";

        function countme(form) {
            document.getElementById(form).appendChild(addCount);
            document.getElementById('count').value = ++ct;
        }
    </script>
    <div class="footer__bottom">
        <div class="footer__bottom-wrapper">
            <div class="footer__copy">
                &copy; 2018 Washington усі права захищено.
            </div>
            <div>
                <a href="https://smartorange.com.ua/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/common/smart-orange_logo.png" alt="Smart Orange Logo">
                </a>
            </div>
        </div>
    </div>
</footer>
<?}?>
<?php do_action('hook_assets_footer'); ?>

<?php wp_footer(); ?>
</body>
</html>