<?php 
/*
Template Name: Курс ПП
Template Post Type: courses_retrain
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>
      </div>
      <div class="container container--page-course">
        <div class="course-left">
          <p class="text--title-caption">Профессиональная переподготовка по программе</p>

<?php
	$newsItems = array(
		'post_type' => 'courses',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);

	$retrain = get_field('retrain');
?>




					<h1 class="section__title section__title--left"><?php the_title() ?> (<?php the_field('hours') ?>ч)</h1>
          <div class="course-about">
            <div class="course-about-name">
              <p class="course-about__descriptor">Форма обучения</p>
							<p class="course-about__value"><?php the_field('format'); ?></p>
            </div>
            <div class="course-about-time">
              <p class="course-about__descriptor">Время обучения</p>
              <p class="course-about__value"><?php the_field('hours') ?> ч.</p>
            </div>
          </div>
          <div class="course-info">
            <div class="dropdown-block course-info-dropdown">
              <div class="dropdown-block-inner">
                <h3 class="dropdown-block__name">Описание курса</h3>
                <button class="dropdown-block__handler dropdown-block__handler--opened"></button>
              </div>
              <div class="dropdown-block-text paper paper--dropdown dropdown-block--opened">
									<?php the_field('descr') ?>
              </div>
            </div>
            <div class="dropdown-block course-info-dropdown">
              <div class="dropdown-block-inner">
                <h3 class="dropdown-block__name">Получаемые документы</h3>
                <button class="dropdown-block__handler"></button>
              </div>
						<div class="dropdown-block-text paper paper--dropdown">
								<!--<img src="http://xn--80aqxj.xn--p1ai/wp-content/uploads/2021/03/diploma.png" alt="">
                <p><b> <i>Важно! В дипломе не указывается форма обучения (очная/заочная). Диплом установленного образца</i></b></p>-->
								<?php the_field('documents'); ?>
								<?php $doc = get_field('learning_plan'); 
	if (! empty($doc)) {
?>
	<a style="color: var(--color-primary)" href="<?php echo $doc['link'] ?>"><?php echo $doc['title'] ?></a>
<?php } ?>
              </div>
            </div>

            <div class="dropdown-block course-info-dropdown">
              <div class="dropdown-block-inner">
                <h3 class="dropdown-block__name">Требования к слушателям</h3>
                <!--<h3 class="dropdown-block__name">Условия поступления</h3>-->
                <button class="dropdown-block__handler"></button>
              </div>
              <div class="dropdown-block-text paper paper--dropdown">
								<?php the_field('requirements') ?>
              </div>
            </div>

					<?php if (! empty(get_field('for_who'))) { ?>
            <div class="dropdown-block course-info-dropdown">
              <div class="dropdown-block-inner">
                <h3 class="dropdown-block__name">Для кого это обучение?</h3>
                <!--<h3 class="dropdown-block__name">Условия поступления</h3>-->
                <button class="dropdown-block__handler"></button>
              </div>
              <div class="dropdown-block-text paper paper--dropdown">
								<?php the_field('for_who') ?>
              </div>
            </div>
					<?php } ?>




          </div>
        </div>
        <div class="course-right">
          <form method="post" onsubmit="return false" class="form sticky-form-right-wrap">
            <div class="sticky-form-right">
              <h3 class="form__title">Оставить заявку на консультацию</h3>
              <div class="form-fields">
                <div class="form-input-wrap">
										<input type="hidden" name="arit_formpage" value="<?php echo add_query_arg( $wp->query_vars, home_url( $wp->request ) ); ?>">
										<input type="hidden" name="arit_fomrname" value="<?php the_title() ?>"/>
                </div>
                <div class="form-input-wrap">
                  <input class="form__input" required="required" name="arit_name" type="text" placeholder="Имя"/>
                </div>
                <div class="form-input-wrap">
                  <input class="form__input input--phone" required="required" name="arit_phone" type="tel" autocorrect="off" autocomplete="tel" placeholder="Телефон"/>
                </div>
                <div class="form-input-wrap">
                  <input class="form__input" name="arit_email" type="email" autocapitalize="off" autocorrect="off" autocomplete="email" placeholder="Эл. почта" data-value-missing="Пожалуйста, введите свою электронную почту" data-value-invalid="Проверьте правильно ли написана почта"/>
                </div>
                <div class="form-input-wrap form-input-wrap--button">
                  <button class="primary-button form__button">Отправить заявку</button>
                </div>
              </div>
              <div class="gdpr">Нажимая на эту кнопку, Вы даете согласие 
                <button class="gdpr__button">на обработку персональных данных</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <script defer>
				setTimeout(function(){
					dropdown({
						container: '.dropdown-block',
						handler: '.dropdown-block__handler',
						dropdown: '.dropdown-block-text',
					})
				}, 1500)
      </script>
    </main>
    <div class="how-start-wrap">
      <div class="container container--dark">
        <h2 class="section__title">Как начать обучение</h2>
        <ul class="how-start">
          <li class="how-start-item">
            <p class="how-start__text">Оставьте заявку на&nbsp;обратный звонок, позвоните по телефону или&nbsp;воспользуйтесь&nbspформой</p>
            <picture class="how-start__pic">
							<img src="https://xn--80aqxj.xn--p1ai/wp-content/uploads/2021/03/retroPhone.png" />
            </picture>
            <h3 class="how-start__number">01</h3>
          </li>
          <li class="how-start-item">
            <p class="how-start__text">Предоставить документы об образовании</p>
            <h3 class="how-start__number">02</h3>
          </li>
          <li class="how-start-item">
            <p class="how-start__text">Заключить договор и начать обучение</p>
            <h3 class="how-start__number">03</h3>
          </li>
          <li class="how-start-item">
            <p class="how-start__text">Завершить обучение и получить документы</p>
            <picture class="how-start__pic">
							<img src="https://xn--80aqxj.xn--p1ai/wp-content/uploads/2021/03/cap.png" />
            </picture>
            <h3 class="how-start__number">04</h3>
          </li>
        </ul>
      </div>








      <div class="partners--course">
        <div class="partners-wrapper" id="partners">
          <div class="partners-container container">
            <div class="partners">
              <h2 class="section__title partners__title">У нас обучаются</h2>
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
										<a class="partners-item swiper-slide" rel="nofollow" href="<?php the_field('partner_link', $id) ?>" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
													<img src="<?php the_field('partner_logo', $id) ?>"/>
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
      </div>
    </div>








    <div class="testimonials-wrapper">
      <div class="testimonials-container container">
        <div class="testimonials page-course">
          <h2 class="section__title testimonials__title">Отзывы абитуриентов</h2>
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
										<img src="<?php the_field('img', $id) ?>"/>
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
					</div>
				</div>
			</div>
		</div>
	</div>




      <div class="features-wrapper bg-white">
        <div class="features-container container">
          <div class="features">
            <h2 class="section__title features__title">Преимущества академии</h2>

            <ol class="features-list">
              <li class="features-list-item">
                <p class="features-item__text"> <span class="text-bold">Индивидуальный подход </span> и&nbsp;модульная система обучения </p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/stairs.webp 1x,img/4-features/stairs@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/stairs.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/stairs@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">01</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text"> <span class="text-bold">Сотни</span> направлений обучения</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/weathervane.webp 1x,img/4-features/weathervane@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/weathervane.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/weathervane@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">02</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Поддержка кураторов <span class="text-bold">24/7</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/shield.webp 1x,img/4-features/shield@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/shield.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/shield@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">03</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Все преподаватели<br>действующие <span class="text-bold">практики</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/caduceus.webp 1x,img/4-features/caduceus@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/caduceus.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/caduceus@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">04</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Учебные программы соответствуют<span class="text-bold"> государственным стандартам (ФГОС) </span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/book.webp 1x,img/4-features/book@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/book.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/book@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">05</h3>
              </li>
              <li class="features-list-item"> 
                <p class="features-item__text features-item__text--single-row">Доставка документов<span class="text-bold"> по всей России</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/box.webp 1x,img/4-features/box@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/box.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/box@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">06</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Документы установленного образца</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/paper.webp 1x,img/4-features/paper@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/paper.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/paper@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">07</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступ к учебным материалам <span class="text-bold">в&nbsp;любое время</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/safe.webp 1x,img/4-features/safe@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/safe.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/safe@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">08</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступные цены</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/piggy.webp 1x,img/4-features/piggy@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/piggy.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/piggy@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">09</h3>
              </li>
            </ol>

          </div>
        </div>
      </div>

    <script>
      // const partnersSlider = new Swiper('.partners-slider-wrap',{
      //   slidesPerView: 1,
      //   spaceBetween: 20,
      //
      //   slidesPerColumn: 2,
      //   slidesPerColumnFill: 'row',
      //
      //   scrollbar: {
      //     el: '.partners-slider-scrollbar',
      //     hide: false,
      //   },
      //   breakpoints: {
      //     1200: {
      //       slidesPerView: 5,
      //       slidesPerColumn: 1,
      //       navigation: {
      //         nextEl: '.partners-slider-next',
      //         prevEl: '.partners-slider-prev',
      //       },
      //     }
      //   }
      // })
      
      if (window.innerWidth < 1200){
      		document.querySelector('.testimonials-slider-wrap').classList.add('swiper-container');
      		document.querySelector('.testimonials-list').classList.add('swiper-wrapper');
      		document.querySelector('.testimonials-slider-scrollbar').classList.add('.slider-scrollbar');
      
      		 const testimonialsSlider = new Swiper('.testimonials-slider-wrap', {
      			slidesPerView: 1,
      			spaceBetween: 20,
      			scrollbar: {
      				el: '.testimonials-slider-scrollbar',
      				hide: false,
      			},
      	})
      }
</script>

<?php get_footer();?>
