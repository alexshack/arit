<?php 
/*
 * Template Name: О направлении повышения квалификации
		Template Post Type: retrain
 */
?>
<?php get_header();?>

<?php 
	$button_counter = 0;
// getting current tag name
	$url;
	$get_current_url = home_url(add_query_arg( array() ), $url->requiest);
	$string = $get_current_url;
	$pattern = '/.+\/tag/';
	$replacement = '';
	$get_tag_name = preg_replace($pattern, $replacement, $string);
	$get_tag_name = str_ireplace('/', '', $get_tag_name);
	$get_tag_name = str_ireplace('#retrain', '', $get_tag_name);
	$get_tag_name = str_ireplace('#skillup', '', $get_tag_name);
	$get_tag_name = str_ireplace('?course=retrain', '', $get_tag_name);

	$tag_args = array(
		'post_type' => 'courses_skillup',
		'supress_filters' => false,
		'numberposts' => -1,
		'orderby' => 'name',
		'order' => 'ASC',
		'tag' => $get_tag_name,
	);
	$all_tag_posts = get_posts($tag_args);

	$tag_args_retrain = array(
		'post_type' => 'courses_retrain',
		'supress_filters' => false,
		'numberposts' => -1,
		'orderby' => 'name',
		'order' => 'ASC',
		'tag' => $get_tag_name,
	);
	$all_tag_posts_retrain = get_posts($tag_args_retrain);
?>

<script>
					var skillupTitle = '<?php single_tag_title() ?>: курсы повышения квалификации';
					var skillupDescr = '<?php echo get_field('skillup'); ?>';
					var retrainTitle = '<?php single_tag_title() ?>: профессиональная переподготовка';
					var retrainDescr = '<?php echo get_field('retrain'); ?>';
					console.log(retrainDescr);
					console.log(skillupDescr);
</script>
    <main class="subpage--white skillup-page">
      <script>var mapsDelay = 100;</script>
      <div class="container">
        <h1 class="section__title section__title--left section__title--page">Программы дополнительного образования по направлению "<?php single_tag_title() ?>"</h1>
      </div>
      <div class="about-wrap" id="about">
        <div class="about-container container">
          
          <div class="about">
					<h2 class="section__title section__title--left about__title"><?php single_tag_title() ?>:<br/>курсы повышения квалификации</h2>
					<!--<p class="regular-text about__text">Предлагаем повысить квалификацию по направлению «<?php single_tag_title() ?>». Для этого достаточно пройти курсы повышения квалификации по направлению «<?php echo single_tag_title() ?>». Учебные программы с нагрузкой более 1000 академических часов позволяют получить диплом о повышении квалификации. Подробности уточняйте у спецаиалистов академии.</p>-->
					<p class="regular-text about__text"><?php the_field('skillup') ?></p>
					<!--<p class="regular-text about__text"><?php //tag_description() ?></p>-->
          </div>
        </div>
      </div>
      <div class="learning" id="learning">
        <div class="container skillup-container">
          <div class="learning-tabs-wrap">
            <div class="learning-tabbar">
              <button class="learning-tab__control learning-tab__control--skillup learning-tab__control--active">Повышение квалификации</button>
              <button class="learning-tab__control learning-tab__control--retrain">Профессиональная переподготовка</button>
            </div>
            <div class="learning-tab--retrain">
              <div class="learning-tab">
                <div class="learning-page-list">

<?php if (count($all_tag_posts_retrain) === 0) { ?>
								<p style="text-align: center; margin-bottom: 20px;">Пока нет опубликованных курсов по этому направлению</p>
<?php } ?>
<?php 
	foreach ($all_tag_posts_retrain as $key => $course) {
	setup_postdata($course);
	$course_ar = $course->to_array();
	$id = $course->to_array()['ID'];
?>
<?php 
	// echo '<pre>';
	// var_dump($course);
	// echo get_field('course_name', $id);
	// echo '</pre>';
	// echo '<br>';
	// echo '<br>';
	// echo '<br>';
	// echo '<br>';
	// echo $id;
	// echo '<br>';
	// echo '<br>';
?>
                  <div class="learning-page-item">
                    <div class="learning-page-info-wrapper">
                      <div class="learning-page-number">
											<p class="learning-page__number"><?php echo $key + 1?> </p>
                      </div>
                      <div class="learning-page-info">
                        
											<h3 class="learning-page-info__title"><a href="<?php the_permalink($id) ?>" title="Профессиональная переподготовка по специальности <?php echo $course_ar['post_title'] ?>"><?php echo $course_ar['post_title'] ?></a></h3>
                      
											<p class="learning-page-info__hours learning-page-info__bullet"><span class="learning-page-info__field-name">Объем программы:</span><span class="text-bold learning-page-info__content"><?php the_field('hours', $id) ?> ч.</span></p>
											<p class="learning-page-info__duration learning-page-info__bullet"><span class="learning-page-info__field-name">Длительность обучения:</span><span class="text-bold learning-page-info__content"><?php echo the_field('days', $id) ?> д.</span></p>
											<p class="learning-page-info__document learning-page-info__bullet"><span class="learning-page-info__field-name">Получаемый документ:</span><span class="text-bold learning-page-info__content"><?php echo get_field('doc', $id) ?></span></p>
											<p class="learning-page-info__base learning-page-info__bullet"><span class="learning-page-info__field-name">Обучение на базе:</span><span class="text-bold learning-page-info__content"><?php the_field('base', $id) ?></span></p>
                      </div>
                    </div>
                    <div class="learning-page-info-buttons">
										<button
											id="button-<?php echo $button_counter; $button_counter++; ?>"
											data-form-name="Консультация по курсу ПП «<?php echo $course_ar['post_title'] ?>», направление «<?php single_tag_title() ?>»"
											class="primary-button learning-page-info__consult">Получить консультацию</button>
											
                    </div>
                  </div>
<?php } wp_reset_postdata(); //end learning item ?>

                </div>
              </div>
            </div>





<?php


?>




            <div class="learning-tab--skillup learning-tab--active">
              <div class="learning-tab">
                <div class="learning-page-list">

<?php if (count($all_tag_posts) === 0) { ?>
								<p style="text-align: center; margin-bottom: 20px;">Пока нет опубликованных курсов по этому направлению</p>
<?php } ?>

<?php
 	foreach ($all_tag_posts as $key => $course) {
	setup_postdata($course);
	$course_ar = $course->to_array();
	$id = $course->to_array()['ID'];
?>
                  <div class="learning-page-item">
                    <div class="learning-page-info-wrapper">
                      <div class="learning-page-number">
											<p class="learning-page__number"><?php echo $key + 1?></p>
                      </div>
                      <div class="learning-page-info">
											<h3 class="learning-page-info__title"><a href="<?php the_permalink($id) ?>" title="Повышение квалификации по специальности <?php echo $course_ar['post_title'] ?>"><?php echo $course_ar['post_title'] ?></a></h3>
											<p class="learning-page-info__hours learning-page-info__bullet"><span class="learning-page-info__field-name">Объем программы:</span><span class="text-bold learning-page-info__content"><?php the_field('hours', $id) ?> ч.</span></p>
											<p class="learning-page-info__duration learning-page-info__bullet"><span class="learning-page-info__field-name">Длительность обучения:</span><span class="text-bold learning-page-info__content"><?php echo the_field('days', $id) ?> д.</span></p>
											<p class="learning-page-info__document learning-page-info__bullet"><span class="learning-page-info__field-name">Получаемый документ:</span><span class="text-bold learning-page-info__content"><?php echo get_field('doc', $id) ?></span></p>
											<p class="learning-page-info__base learning-page-info__bullet"><span class="learning-page-info__field-name">Обучение на базе:</span><span class="text-bold learning-page-info__content"><?php the_field('base', $id) ?></span></p>
                      </div>
                    </div>
                    <div class="learning-page-info-buttons">
										<button id="button-<?php echo $button_counter; $button_counter++ ?>"data-form-name="Консультация по курсу ПК «<?php echo $course_ar['post_title'] ?>», направление «<?php single_tag_title() ?>»" class="primary-button learning-page-info__consult">Получить консультацию</button>
											
                    </div>
                  </div>
<?php } wp_reset_postdata(); //end learning item ?>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button--center-aligner">
          <button class="secondary-button--show-more secondary-button skillup-page__more">Показать еще</button>
        </div>
      </div>
      <div class="container mobile-fullpage-container">
        <div class="paper" style="padding-top: 50px">
<?php 
	$tagIdArgs = get_tags( array(
		'number' => 1,
		'slug' => $get_tag_name,
	) );
	if (! empty($tagIdArgs)){
		// var_dump($tagIdArgs);
		// $id = $tagIdArgs->to_array()['ID'];
		// the_field()
		echo tag_description();
			// echo $tagIdArgs[0]->to_array()['description'];
	}
	// echo $tagIdArgs[0]->to_array()['term_id'];
	// var_dump($tagIdArgs);
?>
        </div>
      </div>



      <div class="features">
        <div class="features-wrapper">
          <div class="features-container container">
            <div class="features">
              <h2 class="section__title features__title">Плюсы образования, полученного в АРИТ</h2>
              <ol class="features-list">
                <li class="features-list-item">
                  <p class="features-item__text"> <span class="text-bold">Индивидуальный подход </span> и&nbsp;модульная система обучения </p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/stairs.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/stairs@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/stairs.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/stairs@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">01</h3>
                </li>
                <li class="features-list-item">
                  <p class="features-item__text"> <span class="text-bold">Сотни</span> направлений обучения</p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/weathervane.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/weathervane@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/weathervane.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/weathervane@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">02</h3>
                </li>
                <li class="features-list-item">
                  <p class="features-item__text">Поддержка кураторов <span class="text-bold">24/7</span></p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/shield.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/shield@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/shield.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/shield@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">03</h3>
                </li>
                <li class="features-list-item">
                  <p class="features-item__text">Все преподаватели<br>действующие <span class="text-bold">практики</span></p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/caduceus.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/caduceus@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/caduceus.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/caduceus@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">04</h3>
                </li>
                <li class="features-list-item">
                  <p class="features-item__text features-item__text--single-row">Учебные программы соответствуют<span class="text-bold"> государственным стандартам (ФГОС) </span></p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/book.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/book@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/book.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/book@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">05</h3>
                </li>
                <li class="features-list-item"> 
                  <p class="features-item__text features-item__text--single-row">Доставка документов<span class="text-bold"> по всей России</span></p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/box.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/box@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/box.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/box@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">06</h3>
                </li>
                <li class="features-list-item">
                  <p class="features-item__text features-item__text--single-row">Документы установленного образца</p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/paper.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/paper@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/paper.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/paper@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">07</h3>
                </li>
                <li class="features-list-item">
                  <p class="features-item__text">Доступ к учебным материалам <span class="text-bold">в&nbsp;любое время</span></p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/safe.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/safe@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/safe.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/safe@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">08</h3>
                </li>
                <li class="features-list-item">
                  <p class="features-item__text">Доступные цены</p>
                  <picture class="features-pic">
                    <source srcset="<?php echo get_template_directory_uri() ?>/img/4-features/piggy.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/piggy@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/4-features/piggy.png" srcset="<?php echo get_template_directory_uri() ?>/img/4-features/piggy@2x.png 2x"/>
                  </picture>
                  <h3 class="features-item__number">09</h3>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>

 

      <div class="licenses">
        <div class="container container--mobile-fullscreen">
          <h2 class="section__title">Лицензии</h2>
          <div class="licenses-list">
<?php
$licenses_args = array(
	'post_type' => 'licenses',
	'supress_filters' => false,
	'numberposts' => -1,
	'order' => 'ASC',
);
$licenses = get_posts($licenses_args);


	function human_filesize($bytes, $decimals = 0) {
		$sz = array(
			0 => ' б',
			1 => ' Кб',
			2 => ' Мб',
		);
			  $factor = floor((strlen($bytes) - 1) / 3);
			  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
	}

foreach ($licenses as $doc) {
	$id = $doc->to_array()['ID'];
	setup_postdata($doc);
	$file = get_field('file', $id);
	$filesize = filesize( get_attached_file( $file['ID'] ) );
?>

                    <div class="licenses-item">
                      <div class="licenses-item-text">
											<p class="licenses-item__title"><?php the_field('name', $id) ?></p>
											<p class="licenses-item__size"><?php echo human_filesize($filesize) ?></p>
                      </div>
											<a download href="<?php echo $file['url'] ?>" class="licenses-item-download"> <span class="licenses-item-download__text">Скачать PDF</span>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 0C6.46875 0 5.625 0.84375 5.625 1.875V28.125C5.625 29.1562 6.46875 30 7.5 30H26.25C27.2812 30 28.125 29.1562 28.125 28.125V7.5L20.625 0H7.5Z" fill="#E2E5E7"></path>
                          <path d="M22.5 7.5H28.125L20.625 0V5.625C20.625 6.65625 21.4688 7.5 22.5 7.5Z" fill="#B0B7BD"></path>
                          <path d="M28.125 13.125L22.5 7.5H28.125V13.125Z" fill="#CAD1D8"></path>
                          <path d="M24.375 24.375C24.375 24.8906 23.9531 25.3125 23.4375 25.3125H2.8125C2.29688 25.3125 1.875 24.8906 1.875 24.375V15C1.875 14.4844 2.29688 14.0625 2.8125 14.0625H23.4375C23.9531 14.0625 24.375 14.4844 24.375 15V24.375Z" fill="#F15642"></path>
                          <path d="M5.96143 17.7626C5.96143 17.5151 6.15643 17.2451 6.47049 17.2451H8.20205C9.17705 17.2451 10.0546 17.8976 10.0546 19.1482C10.0546 20.3332 9.17705 20.9932 8.20205 20.9932H6.95049V21.9832C6.95049 22.3132 6.74049 22.4998 6.47049 22.4998C6.22299 22.4998 5.96143 22.3132 5.96143 21.9832V17.7626ZM6.95049 18.1892V20.0567H8.20205C8.70455 20.0567 9.10205 19.6132 9.10205 19.1482C9.10205 18.6242 8.70455 18.1892 8.20205 18.1892H6.95049Z" fill="white"></path>
                          <path d="M11.5224 22.4997C11.2749 22.4997 11.0049 22.3647 11.0049 22.0356V17.7775C11.0049 17.5084 11.2749 17.3125 11.5224 17.3125H13.2389C16.6646 17.3125 16.5896 22.4997 13.3064 22.4997H11.5224ZM11.9949 18.2275V21.5856H13.2389C15.263 21.5856 15.353 18.2275 13.2389 18.2275H11.9949Z" fill="white"></path>
                          <path d="M17.8053 18.2875V19.479H19.7169C19.9869 19.479 20.2569 19.749 20.2569 20.0106C20.2569 20.2581 19.9869 20.4606 19.7169 20.4606H17.8053V22.0346C17.8053 22.2971 17.6188 22.4987 17.3563 22.4987C17.0263 22.4987 16.8247 22.2971 16.8247 22.0346V17.7765C16.8247 17.5075 17.0272 17.3115 17.3563 17.3115H19.9878C20.3178 17.3115 20.5128 17.5075 20.5128 17.7765C20.5128 18.0165 20.3178 18.2865 19.9878 18.2865H17.8053V18.2875Z" fill="white"></path>
                          <path d="M23.4375 25.3125H5.625V26.25H23.4375C23.9531 26.25 24.375 25.8281 24.375 25.3125V24.375C24.375 24.8906 23.9531 25.3125 23.4375 25.3125Z" fill="#CAD1D8"></path>
                        </svg>
                      </a>
                    </div>


<?php } ?>
          </div>
        </div>
        <script defer>
          const skillupTabHandler = document.querySelector('.learning-tab__control--skillup');
          const skillupTab = document.querySelector('.learning-tab--skillup');
          const retrainTabHandler = document.querySelector('.learning-tab__control--retrain');
          const retrainTab = document.querySelector('.learning-tab--retrain');

								
					var tagTitle = document.querySelector('.section__title.about__title');
					var tagDescr = document.querySelector('.regular-text.about__text');

          	skillupTabHandler.addEventListener('click', function(){
          		this.classList.add('learning-tab__control--active')
          		skillupTab.classList.add('learning-tab--active');
          		retrainTabHandler.classList.remove('learning-tab__control--active')
          		retrainTab.classList.remove('learning-tab--active')
							tagTitle.innerText = skillupTitle;
							tagDescr.innerText = skillupDescr;
          	})
          	retrainTabHandler.addEventListener('click', function(){
          		this.classList.add('learning-tab__control--active');
          		retrainTab.classList.add('learning-tab--active');
          		skillupTabHandler.classList.remove('learning-tab__control--active');
          		skillupTab.classList.remove('learning-tab--active');
							tagTitle.innerText = retrainTitle;
							tagDescr.innerText = retrainDescr;
          })
          if (window.innerWidth < 1200){
          	showmore({
          		items: '.learning-tab--skillup',
          		clickHandler: '.skillup-page__more',
          		itemsToShow: 5,
          		initialShow: 5,
          		currentItem: 0,
          	})
          	showmore({
          		items: '.learning-tab--retrain',
          		clickHandler: '.skillup-page__more',
          		itemsToShow: 5,
          		initialShow: 5,
          		currentItem: 0,
          	})
          }
					// if (document.location.href.includes('retrain')) {
					if (document.location.search.includes('?course=retrain')) {
							document.querySelector('.learning-tab__control--retrain').click();
							tagTitle.innerText = retrainTitle;
							tagDescr.innerText = retrainDescr;
					}
          
        </script>
      </div>
    </main>
<?php get_footer();?>
<script>
					

	var jobs_buttons = [...document.querySelectorAll('.learning-page-item .primary-button')];

		jobs_buttons.map(function(item, index){
			console.log(index)
			popa({
				clickTrigger: '#button-'+index,
				popWrap: '.consult-pop-wrap',
				pop: '.consult-pop',
				popCloser: '.pop-closer',
			})
			item.addEventListener('click', function(){
				var form_handler_value = item.getAttribute('data-form-name');
				if (form_handler_value != null) {
					let form_name_item = document.querySelector('.pop-form input[name="arit_formname"]')
					let form_name_value = form_name_item.getAttribute('value');
					form_name_item.value = form_name_value + ', ' +  form_handler_value;
				}
			})
		})


</script>
