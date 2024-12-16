<?php get_header();?>

    <main id="top">
      <script>var mapsDelay = 10000;</script>
      <div class="hero-wrapper">
        <picture class="hero__picture-left">
          <source srcset="<?php echo get_template_directory_uri()?>/img/1-hero/chess.webp 1x,<?php echo get_template_directory_uri()?>/img/1-hero/chess@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/1-hero/chess.png" srcset="<?php echo get_template_directory_uri()?>/img/1-hero/chess@2x.png 2x" alt="Обучение в АРИТ"/>
        </picture>
        <picture class="hero__picture-right">
          <source srcset="<?php echo get_template_directory_uri()?>/img/1-hero/cap.webp 1x,<?php echo get_template_directory_uri()?>/img/1-hero/cap@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/1-hero/cap.png" srcset="<?php echo get_template_directory_uri()?>/img/1-hero/cap@2x.png 2x" alt="Повышение квалификации в АРИТ"/>
        </picture>
        <div class="hero-container container">
          <div class="hero">
            <h1 class="section__title section__title--left hero__title">Стань востребованным специалистом в сжатые сроки, не отрываясь от&nbsp;работы</h1>
            <ul class="hero-bullets">
              <li class="hero-bullet">Выбери одно из <span class="text-bold"> 40 направлений</span> <a href="/learning" title="Курсы профессиональной переподготовки в АРИТ">переподготовки</a> и <a href="/learning" title="Курсы повышения квалификации в АРИТ">повышения квалификации</a></li>
              <li class="hero-bullet">Пройди теорию<span class="text-bold"> удаленно</span>, а практику очно (в&nbsp;высокотехнологичных классах)</li>
              <li class="hero-bullet">Получи<span class="text-bold"> поддержку 24/7 и диплом</span> по&nbsp;окончании</li>
            </ul>
            <div class="hero-buttons">
							<button data-form-name="Главная страница, получить консультацию" class="primary-button hero-cta">Получить консультацию</button>
<!--<a class="secondary-button hero-learning" target="_blank" href="https://dpoarit.ispringlearn.ru">Учебный портал</a>-->
          <!--<button class="header_get-consult secondary-button">Получить консультацию </button>-->
            </div>
          </div>
        </div>
      </div>







      <div class="learning" id="learning">
        <div class="container">
          <h2 class="section__title learning__title">Направления обучения в АРИТ</h2>
<?php
$arit_get_categories = array(
	'show_count' => true,
	'depth' => 0,
	'echo' => 0,
	'hide_empty' => 0,
	'taxonomy' => 'category',
	'pad_counts' => 1,
	'child_of' => 5,
);
	// $categories = wp_list_categories( $arit_get_categories );
	$categories = get_categories( $arit_get_categories );
	$categories_count = count($categories);
	$categories_per_column = $categories_count / 3;
	$column_1_count = floor($categories_per_column);
	$column_2_count = floor($categories_per_column);
	$column_3_count = ceil($categories_per_column);



	$arit_tags_args = array(
		'hide_empty' => true,
	);
	$arit_tags = get_tags($arit_tags_args);

	$learning_ways;

	foreach ( $arit_tags as $key => $tag ) {
		$tag = $tag->to_array();
		$learning_ways[$key]['name'] = $tag['name'];
		$learning_ways[$key]['slug'] = $tag['slug'];
		$learning_ways[$key]['term_id'] = $tag['term_id'];
		$learning_ways[$key]['link'] = get_tag_link($tag['term_id']);
			
	}
	$tags_count = count($learning_ways);
	$tags_per_column = $tags_count / 3;
	$column_1_count = floor($tags_per_column) - 1;
	$column_2_count = $column_1_count * 2 + 2;

?>
					<ul>
					</ul>
          <div class="learning-tabs-wrap">
            <div class="learning-tabbar">
              <button class="learning-tab__control learning-tab__control--skillup learning-tab__control--active">Повышение квалификации</button>
              <button class="learning-tab__control learning-tab__control--retrain">Профессиональная переподготовка</button>
            </div>
            <div class="learning-tab--retrain">
              <div class="learning-tab">
                <ul class="learning-tab-list">
<?php
		$tag_counter = 0;
		while ($tag_counter <= $column_1_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
												title="Курсы переподготовки по специальности <?php echo $learning_ways[$tag_counter]['name'] ?>"
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>?course=retrain">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                </ul>

                <ul class="learning-tab-list">
<?php while ($tag_counter <= $column_2_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
												title="Курсы переподготовки по специальности <?php echo $learning_ways[$tag_counter]['name'] ?>"
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>?course=retrain">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                </ul>

                <ul class="learning-tab-list">
<?php while ($tag_counter < $tags_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link"
												title="Курсы переподготовки по специальности <?php echo $learning_ways[$tag_counter]['name'] ?>"
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>?course=retrain"><?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                </ul>

              </div>
              <button class="learning-more--retrain secondary-button">Показать еще</button>
            </div>




            <div class="learning-tab--skillup learning-tab--active">
              <div class="learning-tab">
                <ul class="learning-tab-list">
<?php
		$tag_counter = 0;
		while ($tag_counter <= $column_1_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
												title="Курсы повышения квалификации по специальности <?php echo $learning_ways[$tag_counter]['name'] ?>"
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                </ul>

                <ul class="learning-tab-list">
<?php while ($tag_counter <= $column_2_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
												title="Курсы повышения квалификации по специальности <?php echo $learning_ways[$tag_counter]['name'] ?>"
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                </ul>

                <ul class="learning-tab-list">
<?php while ($tag_counter < $tags_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link"
											title="Курсы повышения квалификации по специальности <?php echo $learning_ways[$tag_counter]['name'] ?>"
											href="<?php echo $learning_ways[$tag_counter]['link'] ?>"
										><?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                </ul>

              </div>
              <button class="learning-more--skillup secondary-button">Показать еще</button>
            </div>
          </div>
        </div>
      </div>


      <div class="about-wrap" id="about">
        <div class="about-container container">
          <div class="about">
            <h2 class="section__title section__title--left about__title">О нашей академии</h2>
            <p class="regular-text about__text">Академия развития инновационных технологий (АРИТ). АРИТ — это место, где помогают людям разных профессий <a href="/learning" title="Курсы повышения квалификации">повысить квалификацию</a> или <a href="/learning" title="Курсы профессиональной переподготовки">пройти полную профессиональную переподготовку</a>. В академии свои знания и опыт  передают команда профессоров, докторов наук, специалистов практиков с выдающимися результатами в своих областях. </p>
            <p class="regular-text about__text text-bold">Достаточно выбрать одно из 100 направлений.</p>
            <p class="regular-text about__text">Теоретические знания вы можете получать дистанционно, в удобное для Вас время. А практика всегда проходит в оборудованных высокотехнологичных классах. Поэтому у вас нет необходимости надолго отрываться от работы ради обучения.</p>
            <p class="regular-text about__text">Врачи, геодезисты, строители, проектировщики, педагоги, средний медперсонал и люди других профессий, — получают <a href="/learning/" title="Дистанционное обучение в АРИТ">дополнительное образование</a> в нашей Академии.<span class="text-bold"> На базе АРИТ обучаются до 15 тысяч специалистов ежемесячно со всей России. </span></p>
            <p class="regular-text about__text">Если у вас уже есть базовое образование, но вы хотите стать более востребованным специалистом, то мы ждем вас в АРИТ. </p>
          </div>
          <picture class="about-picture">
            <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/about-pic.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/about-pic@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/about-pic.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/about-pic@2x.png 2x" alt="Дистанционное обучение в АРИТ" />
          </picture>
        </div>
        <picture class="about-picture__left">
          <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/horse-l.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/horse-l@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/horse-l.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/horse-l@2x.png 2x" alt="Академия АРИТ"/>
        </picture>
        <picture class="about-picture__right">
          <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/apolo-r.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/apolo-r@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/apolo-r.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/apolo-r@2x.png 2x" alt="Академия АРИТ"/>
        </picture>
        <picture class="about-picture__right-2">
          <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/microscope.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/microscope@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/microscope.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/microscope@2x.png 2x" alt="Академия АРИТ"/>
        </picture>
      </div>
      <div class="features-wrapper">
        <div class="features-container container">
          <div class="features">
            <h2 class="section__title features__title">Преимущества обучения в АРИТ</h2>
            <ol class="features-list">
              <li class="features-list-item">
                <p class="features-item__text"> <span class="text-bold">Индивидуальный подход </span> и&nbsp;модульная система обучения </p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/stairs.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/stairs@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/stairs.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/stairs@2x.png 2x" alt="Индивидуальный подход и модульная система"/>
                </picture>
                <h3 class="features-item__number">01</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text"> <span class="text-bold">Сотни</span> направлений обучения</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/weathervane.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/weathervane@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/weathervane.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/weathervane@2x.png 2x" alt="Сотни направлений обучения"/>
                </picture>
                <h3 class="features-item__number">02</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Поддержка кураторов <span class="text-bold">24/7</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/shield.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/shield@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/shield.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/shield@2x.png 2x" alt="Поддержка кураторов 24/7"/>
                </picture>
                <h3 class="features-item__number">03</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Все преподаватели<br>действующие <span class="text-bold">практики</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/caduceus.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/caduceus@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/caduceus.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/caduceus@2x.png 2x" alt="Все преподаватели действующие практики"/>
                </picture>
                <h3 class="features-item__number">04</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Учебные программы соответствуют<span class="text-bold"> государственным стандартам (ФГОС) </span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/book.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/book@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/book.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/book@2x.png 2x" alt="Учебные программы соответствуют государственным стандартам (ФГОС)"/>
                </picture>
                <h3 class="features-item__number">05</h3>
              </li>
              <li class="features-list-item"> 
                <p class="features-item__text features-item__text--single-row">Доставка документов<span class="text-bold"> по всей России</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/box.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/box@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/box.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/box@2x.png 2x" alt="доставка документов по всей России" />
                </picture>
                <h3 class="features-item__number">06</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Документы установленного образца</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/paper.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/paper@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/paper.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/paper@2x.png 2x" alt="документы установленного образца"/>
                </picture>
                <h3 class="features-item__number">07</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступ к учебным материалам <span class="text-bold">в&nbsp;любое время</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/safe.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/safe@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/safe.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/safe@2x.png 2x" alt="доступ к учебным материалам в любое время"/>
                </picture>
                <h3 class="features-item__number">08</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступные цены</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/piggy.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/piggy@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/piggy.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/piggy@2x.png 2x" alt="доступные цены"/>
                </picture>
                <h3 class="features-item__number">09</h3>
              </li>
            </ol>
          </div>
        </div>
      </div>






<?php
$args = array(
	'post_type' => 'teachers',
	'supress_filters' => false,
	'numberposts' => -1,
	'order' => 'ASC',
);
$teachers = get_posts( $args );
?>






      <div class="teachers-wrap">
        <div class="teachers-container container">
          <div class="teachers">
            <h2 class="section__title teachers__title">Наши преподаватели</h2>
            <div class="teachers-slider-outer">
              <div class="teachers-slider-wrap swiper-container">

                <div class="teachers-slider swiper-wrapper">
<?php 
		foreach ($teachers as $teacher) {
		$id = $teacher->to_array()['ID'];
		setup_postdata($teacher);
?>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
										<img src="<?php the_field('img', $id) ?>" alt="<?php the_field('name', $id) ?>"/>
                    </picture>
										<h3 class="teachers-slide__title"><?php the_field('name', $id) ?></h3>
										<p class="teachers-slide__descr"><?php the_field('descr', $id) ?></p>
                  </div>
<?php }  wp_reset_postdata(); ?>
                </div>
              </div>


              <div class="teachers-slider-scrollbar slider-scrollbar"></div>
              <div class="teachers-slider-prev slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.3929 6.95737C14.3321 6.9475 14.2705 6.94295 14.209 6.94375H3.72757L3.95612 6.83744C4.17952 6.73171 4.38276 6.5878 4.55673 6.41224L7.49598 3.47298C7.88308 3.10345 7.94813 2.50899 7.65012 2.06448C7.30327 1.59081 6.63812 1.48796 6.16441 1.8348C6.12614 1.86284 6.08977 1.8934 6.05559 1.92629L0.740483 7.24139C0.325108 7.6563 0.324743 8.32936 0.739653 8.74473C0.739919 8.745 0.740218 8.7453 0.740483 8.74557L6.05559 14.0607C6.47129 14.4752 7.14435 14.4743 7.55893 14.0586C7.59155 14.0259 7.62201 13.991 7.65012 13.9544C7.94813 13.5099 7.88308 12.9154 7.49598 12.5459L4.56204 9.6013C4.40608 9.44517 4.22676 9.31425 4.03053 9.21329L3.71163 9.06979H14.1505C14.6935 9.08995 15.17 8.71062 15.272 8.17685C15.366 7.59734 14.9724 7.05138 14.3929 6.95737Z" fill="white"></path>
                </svg>
              </div>
              <div class="teachers-slider-next slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.60714 6.95737C1.66794 6.9475 1.72946 6.94295 1.79101 6.94375H12.2724L12.0439 6.83744C11.8205 6.73171 11.6172 6.5878 11.4433 6.41224L8.50402 3.47298C8.11692 3.10345 8.05187 2.50899 8.34988 2.06448C8.69673 1.59081 9.36188 1.48796 9.83559 1.8348C9.87386 1.86284 9.91023 1.8934 9.94441 1.92629L15.2595 7.24139C15.6749 7.6563 15.6753 8.32936 15.2603 8.74473C15.2601 8.745 15.2598 8.7453 15.2595 8.74557L9.94441 14.0607C9.52871 14.4752 8.85565 14.4743 8.44107 14.0586C8.40845 14.0259 8.37799 13.991 8.34988 13.9544C8.05187 13.5099 8.11692 12.9154 8.50402 12.5459L11.438 9.6013C11.5939 9.44517 11.7732 9.31425 11.9695 9.21329L12.2884 9.06979H1.84951C1.30647 9.08995 0.830042 8.71062 0.728025 8.17685C0.634048 7.59734 1.02763 7.05138 1.60714 6.95737Z" fill="white"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>







<?php

$args = array(
	'post_type' => 'seminars',
	'supress_filters' => false,
	'numberposts' => 1,
	'orderby' => 'date',
	'order' => 'DESC',
);
$last_seminar = get_posts( $args );
$args_web = array(
	'post_type' => 'webinars',
	'supress_filters' => false,
	'numberposts' => 1,
	'orderby' => 'date',
	'order' => 'DESC',
);
$last_webinar = get_posts( $args_web );

// echo  '<pre>';
// var_dump($last_seminar);
// echo  '</pre>';
?>




      <div class="meetups-wrapper" id="meetups">
        <div class="meetups-container container">
          <div class="meetups">
            <div class="meetups-category meetups-category--seminars">
              <h2 class="section__title">Семинары</h2>
<?php foreach ($last_seminar as $seminar) {
	setup_postdata($seminar); 
	$id = $seminar->to_array()['ID'];
?>
			<div class="meetups-item meetups-item--seminar">
				<picture class="meetups__picture">
				<img src="<?php the_field('meetup_pic', $id) ?>" alt="<?php the_field('meetup_name', $id) ?>"/>
				</picture>

				<div class="meetup-info">
					<h3 class="meetup__title">
						<a class="meetup__title meetup__title--link" href="<?php (! empty( get_field('url_landing', $id)) ) ? the_field('url_landing', $id) : the_permalink($id); ?>">
							<?php the_field('meetup_name', $id) ?>
						</a>
					</h3>

					<div class="meetup-about">
						<div class="meetup-location"><img src="<?php echo get_template_directory_uri()?>/img/0-common/geo.svg" title="Адрес" alt="Адрес">
						<p><?php the_field('meetup_address', $id) ?></p>
						</div>
						<div class="meetup-time"><img src="<?php echo get_template_directory_uri()?>/img/0-common/time.svg" title="Время начала" alt="Время начала">
						<p><?php the_field('meetup_date', $id) ?></p>
						</div>
					</div>
					<div class="meetup-buttons">
						<button data-form-name="Заявка на семинар <?php the_field('meetup_name', $id) ?>" class="meetup__primary-button primary-button seminar__button-cta">Принять участие в семинаре</button>
					</div>
				</div>
				</div><a class="secondary-button meetups-more--seminars" href="<?php the_permalink(181) ?>">Все семинары</a>
		</div>
<?php } //end seminar ?>



<?php foreach ($last_webinar as $webinar) {
	setup_postdata($webinar); 
	$id = $webinar->to_array()['ID'];
?>
            <div class="meetups-category meetups-category--webinars">
              <h2 class="section__title">Вебинары</h2>
								<div class="meetups-item meetups-item--webinar">
									<picture class="meetups__picture">
										<img src="<?php echo the_field('meetup_pic', $id)?>" 
													alt="<?php the_field('meetup_name', $id) ?>"
										/>
									</picture>
									<div class="meetup-info">
									<h3 class="meetup__title">
										<a class="meetup__title meetup__title--link" href="<?php (! empty( get_field('url_landing', $id)) ) ? the_field('url_landing', $id) : the_permalink($id); ?>">
											<?php the_field('meetup_name', $id) ?>
										</a>
									</h3>
									<div class="meetup-about">
										<div class="meetup-location">
											<img src="<?php echo get_template_directory_uri()?>/img/0-common/geo.svg"
													title="Адрес"
													alt="Адрес"
											>
											<p><?php the_field('meetup_address', $id) ?></p>
										</div>
										<div class="meetup-time">
											<img src="<?php echo get_template_directory_uri()?>/img/0-common/time.svg"
													title="Время начала"
													alt="Время начала">
											<p><?php the_field('meetup_date', $id) ?></p>
										</div>
									</div>
									<div class="meetup-buttons">
										<button data-form-name="Заявка на вебинар <?php the_field('meetup_name', $id) ?>" class="meetup__primary-button primary-button webinar__button-cta">Принять участие в вебинаре</button>
									</div>
									</div>
<?php } // end of webinar ?>
								</div><a class="secondary-button meetups-more--webinars" href="<?php the_permalink(108) ?>">Все вебинары</a>
            </div>
          </div>
        </div>
      </div>
    </main>








    <div class="news-wrapper" id="news">
      <div class="news-container container">
        <div class="news">
          <h2 class="section__title news__title">Новости</h2>
          <div class="news-slider-outer">
            <div class="news-slider-wrapper swiper-container">
              <div class="news-slider swiper-wrapper">


<?php
	$get_news = array(
		'post_type' => 'news',
		'supress_filters' => false,
		'numberposts' => 10,
		'orderby' => 'date',
		'order' => 'DESC',
	);

	$news = get_posts( $get_news );
	foreach ($news as $new) {
		$id = $new->to_array()['ID'];
		setup_postdata($new)
?>

                <div class="news-item swiper-slide"><a href="<?php the_permalink($id) ?>">
                    <picture class="news__picture">
										<img src="<?php the_field('news_hero', $id)?>" alt="<?php the_field('news_title', $id) ?>"/>
                    </picture></a>
										<div class="news-info"><a href="<?php the_permalink($id) ?>">
									<h3 class="news-item__title"><?php the_field('news_title', $id) ?></h3></a>
									<p class="news-item__descr"><?php the_field('news_subtitle', $id) ?></p>
									<div class="news-bottom">
<?php // Выводит дату поста всегда ?>
									<span class="news-date"><?php echo date('d.m.y', strtotime($new->post_date))  ?></span></div>
                  </div>
                </div>

<?php } ?>


              </div>
            </div>
            <div class="news-slider-scrollbar slider-scrollbar"></div>
            <div class="news-slider-prev slider-button">
              <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.3929 6.95737C14.3321 6.9475 14.2705 6.94295 14.209 6.94375H3.72757L3.95612 6.83744C4.17952 6.73171 4.38276 6.5878 4.55673 6.41224L7.49598 3.47298C7.88308 3.10345 7.94813 2.50899 7.65012 2.06448C7.30327 1.59081 6.63812 1.48796 6.16441 1.8348C6.12614 1.86284 6.08977 1.8934 6.05559 1.92629L0.740483 7.24139C0.325108 7.6563 0.324743 8.32936 0.739653 8.74473C0.739919 8.745 0.740218 8.7453 0.740483 8.74557L6.05559 14.0607C6.47129 14.4752 7.14435 14.4743 7.55893 14.0586C7.59155 14.0259 7.62201 13.991 7.65012 13.9544C7.94813 13.5099 7.88308 12.9154 7.49598 12.5459L4.56204 9.6013C4.40608 9.44517 4.22676 9.31425 4.03053 9.21329L3.71163 9.06979H14.1505C14.6935 9.08995 15.17 8.71062 15.272 8.17685C15.366 7.59734 14.9724 7.05138 14.3929 6.95737Z" fill="white"></path>
              </svg>
            </div>
            <div class="news-slider-next slider-button">
              <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.60714 6.95737C1.66794 6.9475 1.72946 6.94295 1.79101 6.94375H12.2724L12.0439 6.83744C11.8205 6.73171 11.6172 6.5878 11.4433 6.41224L8.50402 3.47298C8.11692 3.10345 8.05187 2.50899 8.34988 2.06448C8.69673 1.59081 9.36188 1.48796 9.83559 1.8348C9.87386 1.86284 9.91023 1.8934 9.94441 1.92629L15.2595 7.24139C15.6749 7.6563 15.6753 8.32936 15.2603 8.74473C15.2601 8.745 15.2598 8.7453 15.2595 8.74557L9.94441 14.0607C9.52871 14.4752 8.85565 14.4743 8.44107 14.0586C8.40845 14.0259 8.37799 13.991 8.34988 13.9544C8.05187 13.5099 8.11692 12.9154 8.50402 12.5459L11.438 9.6013C11.5939 9.44517 11.7732 9.31425 11.9695 9.21329L12.2884 9.06979H1.84951C1.30647 9.08995 0.830042 8.71062 0.728025 8.17685C0.634048 7.59734 1.02763 7.05138 1.60714 6.95737Z" fill="white"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>


      <div class="partners-wrapper" id="partners">
        <div class="partners-container container">
          <div class="partners">
            <h2 class="section__title partners__title">Партнеры</h2>
            <div class="partners-slider-outer">
              <div class="partners-slider-wrap swiper-container">
								<div class="partners-slider swiper-wrapper">


<?php
	$get_partners = array(
		'post_type' => 'partners',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);

	$partners = get_posts( $get_partners );
	foreach ($partners as $partner) {
		$id = $partner->to_array()['ID'];
		setup_postdata($partner)
?>
										<a class="partners-item swiper-slide" href="<?php the_field('partner_link', $id) ?>" target="_blank" rel="nofollow">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
												<img src="<?php the_field('partner_logo', $id) ?>" alt="партнер"/>
                        </picture>
											</div>
										</a>
<?php } wp_reset_postdata(); ?>

                </div>
              </div>
              <div class="partners-slider-scrollbar slider-scrollbar"></div>
              <div class="partners-slider-prev slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.3929 6.95737C14.3321 6.9475 14.2705 6.94295 14.209 6.94375H3.72757L3.95612 6.83744C4.17952 6.73171 4.38276 6.5878 4.55673 6.41224L7.49598 3.47298C7.88308 3.10345 7.94813 2.50899 7.65012 2.06448C7.30327 1.59081 6.63812 1.48796 6.16441 1.8348C6.12614 1.86284 6.08977 1.8934 6.05559 1.92629L0.740483 7.24139C0.325108 7.6563 0.324743 8.32936 0.739653 8.74473C0.739919 8.745 0.740218 8.7453 0.740483 8.74557L6.05559 14.0607C6.47129 14.4752 7.14435 14.4743 7.55893 14.0586C7.59155 14.0259 7.62201 13.991 7.65012 13.9544C7.94813 13.5099 7.88308 12.9154 7.49598 12.5459L4.56204 9.6013C4.40608 9.44517 4.22676 9.31425 4.03053 9.21329L3.71163 9.06979H14.1505C14.6935 9.08995 15.17 8.71062 15.272 8.17685C15.366 7.59734 14.9724 7.05138 14.3929 6.95737Z" fill="white"></path>
                </svg>
              </div>
              <div class="partners-slider-next slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.60714 6.95737C1.66794 6.9475 1.72946 6.94295 1.79101 6.94375H12.2724L12.0439 6.83744C11.8205 6.73171 11.6172 6.5878 11.4433 6.41224L8.50402 3.47298C8.11692 3.10345 8.05187 2.50899 8.34988 2.06448C8.69673 1.59081 9.36188 1.48796 9.83559 1.8348C9.87386 1.86284 9.91023 1.8934 9.94441 1.92629L15.2595 7.24139C15.6749 7.6563 15.6753 8.32936 15.2603 8.74473C15.2601 8.745 15.2598 8.7453 15.2595 8.74557L9.94441 14.0607C9.52871 14.4752 8.85565 14.4743 8.44107 14.0586C8.40845 14.0259 8.37799 13.991 8.34988 13.9544C8.05187 13.5099 8.11692 12.9154 8.50402 12.5459L11.438 9.6013C11.5939 9.44517 11.7732 9.31425 11.9695 9.21329L12.2884 9.06979H1.84951C1.30647 9.08995 0.830042 8.71062 0.728025 8.17685C0.634048 7.59734 1.02763 7.05138 1.60714 6.95737Z" fill="white"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>











      <section class="resourses-wrapper" id="resourses">
        <div class="resourses-container container">
          <div class="resourses">
            <h2 class="section__title resourses__title">Ресурсы</h2>
            <ul class="resourses-list">
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="https://e.lanbook.com/books/5856
"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/books.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Электронно-библиотечная система</h3></a></li>
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="https://fmba.gov.ru/"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/pharmacy.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Федеральное медико‑биологическое агентство</h3></a></li>
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="https://edu.rosminzdrav.ru/"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/graduate.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Портал непрерывного медицинского образования</h3></a></li>
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="http://www.scsml.rssi.ru/"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/atom.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Центральная научная медицинская библиотека</h3></a></li>
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="http://www.femb.ru/feml"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/caduceus.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Электронная медицинская библиотека</h3></a></li>
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="http://www.fbramn.ru/catalog/"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/dna.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Фундаментальная медицинская библиотека</h3></a></li>
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="http://med.claw.ru/"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/encyclopedia.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Медицинская энциклопедия</h3></a></li>
              <li class="resourses-item"><a rel="nofollow" target="_blank" class="resourses-item__link" href="http://window.edu.ru/"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/file.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Единое окно доступа к информационным ресурсам</h3></a></li>
            </ul>
          </div>
        </div>
      </section>











      <div class="testimonials-wrapper" id="testimonials">
        <div class="testimonials-container container">
          <div class="testimonials">
            <h2 class="section__title testimonials__title">Отзывы</h2>
            <div class="testimonials-slider-outer">
              <div class="testimonials-slider-wrap">
                <div class="testimonials-list testimonials-slider">

<?php
$args = array(
	'post_type' => 'testimonials',
	'supress_filters' => false,
	'numberposts' => 10,
	'orderby' => 'date',
	'order' => 'DESC',
);
$testimonials = get_posts( $args );
?>
<?php if (count($testimonials) == 0) {?>
	<p>Пока нет ни одного отзыва</p>
<?php } ?>
<?php 
		foreach ($testimonials as $testimonial) {
		$id = $testimonial->to_array()['ID'];
		setup_postdata($testimonial);
?>
                  <div class="testimonial-item swiper-slide">
                    <div class="testimonial">
                      <picture class="testimonial__picture">
											<img src="<?php the_field('img', $id) ?>" alt="<?php the_field('name', $id) ?>"/>
                      </picture>
                      <div class="testimonial-message">
                        <div class="testimonial-message-info">
                          <div class="testimonial-who">
                            <h3 class="testimonial-who__name"><?php the_field('name', $id) ?></h3>
                            <p class="testimonial-who__position"><?php the_field('post', $id) ?></p>
                          </div>
                          <div class="testimonial__date"><?php echo date('d.m.y', strtotime($testimonial->post_date)) ?></div>
                        </div>
                        <p class="testimonial__text"><?php the_field('testimonial', $id) ?></p>
                      </div>
                    </div>
                  </div>
<?php }; wp_reset_postdata();//end smalls ?>




                </div>
                <div class="testimonials-slider-scrollbar"></div>
              </div>
            </div>
						<div class="testimonials-more-wrap"><a class="secondary-button testimonials-more" href="<?php the_permalink(106) ?>">Все отзывы</a></div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer();?>
<script>
					

	var meetups_buttons = [...document.querySelectorAll('.meetup__primary-button')];
	meetups_buttons.map(function(item, index){
		var meetup_button = '.' + item.classList[2];
		popa({
			clickTrigger: meetup_button,
			popWrap: '.consult-pop-wrap',
			pop: '.consult-pop',
			popCloser: '.pop-closer',
		})
		item.addEventListener('click', function(){
			var form_handler_value = item.getAttribute('data-form-name');
			if (form_handler_value != null) {
				let form_name_item = document.querySelector('.pop-form input[name="arit_formname"]')
				let form_name_value = form_name_item.getAttribute('value');
				form_name_item.value = 'Главная страница, ' + form_handler_value;
			}
		})
	})

	var jobs_buttons = [...document.querySelectorAll('.hero-cta')];
	jobs_buttons.map(function(item, index){
		popa({
			clickTrigger: '.hero-cta',
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
