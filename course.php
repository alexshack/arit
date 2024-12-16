<?php 
/*
Template Name: Курс по ПК
Template Post Type: courses_skillup
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
          <p class="text--title-caption">Повышение квалификации по программе</p>

<?php
	$newsItems = array(
		'post_type' => 'courses_skillup',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);

	$skillup = get_field('skillup');
?>




					<h1 class="section__title section__title--left"><?php the_field('course_name') ?></h1>
          <div class="course-about">
            <div class="course-about-name">
              <p class="course-about__descriptor">Форма обучения</p>
							<p class="course-about__value"><?php echo $skillup['format']; ?></p>
            </div>
            <div class="course-about-time">
              <p class="course-about__descriptor">Время обучения</p>
              <p class="course-about__value">от 500ч.</p>
            </div>
          </div>
          <div class="course-info">
            <div class="dropdown-block course-info-dropdown">
              <div class="dropdown-block-inner">
                <h3 class="dropdown-block__name">Описание курса</h3>
                <button class="dropdown-block__handler"></button>
              </div>
              <div class="dropdown-block-text paper paper--dropdown">
									<?php echo $skillup['descr'] ?>
              </div>
            </div>
            <div class="dropdown-block course-info-dropdown">
              <div class="dropdown-block-inner">
                <h3 class="dropdown-block__name">Получаемые документы</h3>
                <button class="dropdown-block__handler"></button>
              </div>
							<div class="dropdown-block-text paper paper--dropdown"><img src="http://xn--80aqxj.xn--p1ai/wp-content/uploads/2021/03/diploma.png" alt="">
                <p><b> <i>Важно! В дипломе не указывается форма обучения (очная/заочная). Диплом установленного образца</i></b></p>
								<?php echo $skillup['documents']; ?>
              </div>
            </div>
            <div class="dropdown-block course-info-dropdown">
              <div class="dropdown-block-inner">
                <h3 class="dropdown-block__name">Условия поступления</h3>
                <button class="dropdown-block__handler"></button>
              </div>
              <div class="dropdown-block-text paper paper--dropdown">
								<?php echo $skillup['requirements'] ?>
              </div>
            </div>
          </div>
        </div>
        <div class="course-right">
          <div class="sticky-form-right-wrap">
            <div class="sticky-form-right">
              <h3 class="form__title">Оставить заявку на консультацию</h3>
              <div class="form-fields">
                <div class="form-input-wrap">
                  <input type="hidden" name="fomrname"/>
                </div>
                <div class="form-input-wrap">
                  <input class="form__input" required="required" name="name" type="text" placeholder="Имя"/>
                </div>
                <div class="form-input-wrap">
                  <input class="form__input input--phone" required="required" name="tel" type="tel" autocorrect="off" autocomplete="tel" placeholder="Телефон"/>
                </div>
                <div class="form-input-wrap">
                  <input class="form__input" name="email" type="email" autocapitalize="off" autocorrect="off" autocomplete="email" placeholder="Эл. почта" data-value-missing="Пожалуйста, введите свою электронную почту" data-value-invalid="Проверьте правильно ли написана почта"/>
                </div>
                <div class="form-input-wrap form-input-wrap--button">
                  <button class="primary-button form__button">Отправить заявку</button>
                </div>
              </div>
              <div class="gdpr">Нажимая на эту кнопку, Вы даете согласие 
                <button class="gdpr__button">на обработку персональных данных</button>
              </div>
            </div>
          </div>
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
							<img src="http://xn--80aqxj.xn--p1ai/wp-content/uploads/2021/03/retroPhone.png" />
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
							<img src="http://xn--80aqxj.xn--p1ai/wp-content/uploads/2021/03/cap.png" />
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
                  <div class="partners-slider swiper-wrapper"><a class="partners-item swiper-slide" href="https://www.atmos-med.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/atmos.webp 1x,img/8-partners/atmos@2x.webp 2x" type="image/webp"/><img src="img/8-partners/atmos.png" srcset="img/8-partners/atmos@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.btlmed.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/btl.webp 1x,img/8-partners/btl@2x.webp 2x" type="image/webp"/><img src="img/8-partners/btl.png" srcset="img/8-partners/btl@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.cbr.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/cb.webp 1x,img/8-partners/cb@2x.webp 2x" type="image/webp"/><img src="img/8-partners/cb.png" srcset="img/8-partners/cb@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://fcgie.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/center-hygien.webp 1x,img/8-partners/center-hygien@2x.webp 2x" type="image/webp"/><img src="img/8-partners/center-hygien.png" srcset="img/8-partners/center-hygien@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="http://ucentr.karelia.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/center-karnelius.webp 1x,img/8-partners/center-karnelius@2x.webp 2x" type="image/webp"/><img src="img/8-partners/center-karnelius.png" srcset="img/8-partners/center-karnelius@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://vk.com/dental.aurora" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/dental-aurora-clinic.webp 1x,img/8-partners/dental-aurora-clinic@2x.webp 2x" type="image/webp"/><img src="img/8-partners/dental-aurora-clinic.png" srcset="img/8-partners/dental-aurora-clinic@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.instagram.com/doctor_super/?hl=ru" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/dr-super.webp 1x,img/8-partners/dr-super@2x.webp 2x" type="image/webp"/><img src="img/8-partners/dr-super.png" srcset="img/8-partners/dr-super@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.vladokb.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/gbuzvookb.webp 1x,img/8-partners/gbuzvookb@2x.webp 2x" type="image/webp"/><img src="img/8-partners/gbuzvookb.png" srcset="img/8-partners/gbuzvookb@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://g-richter.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/gedeon-richter.webp 1x,img/8-partners/gedeon-richter@2x.webp 2x" type="image/webp"/><img src="img/8-partners/gedeon-richter.png" srcset="img/8-partners/gedeon-richter@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://gkbe.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/gkb-eramishanceva.webp 1x,img/8-partners/gkb-eramishanceva@2x.webp 2x" type="image/webp"/><img src="img/8-partners/gkb-eramishanceva.png" srcset="img/8-partners/gkb-eramishanceva@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/job-service.webp 1x,img/8-partners/job-service@2x.webp 2x" type="image/webp"/><img src="img/8-partners/job-service.png" srcset="img/8-partners/job-service@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://niioz.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/nii.webp 1x,img/8-partners/nii@2x.webp 2x" type="image/webp"/><img src="img/8-partners/nii.png" srcset="img/8-partners/nii@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.pnzgu.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/president-gov-univercity.webp 1x,img/8-partners/president-gov-univercity@2x.webp 2x" type="image/webp"/><img src="img/8-partners/president-gov-univercity.png" srcset="img/8-partners/president-gov-univercity@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="http://spmuzrb.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/sergiev-posad.webp 1x,img/8-partners/sergiev-posad@2x.webp 2x" type="image/webp"/><img src="img/8-partners/sergiev-posad.png" srcset="img/8-partners/sergiev-posad@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.lvrach.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/doctor.webp 1x,img/8-partners/doctor@2x.webp 2x" type="image/webp"/><img src="img/8-partners/doctor.png" srcset="img/8-partners/doctor@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.lvrach.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/ttp-optic.webp 1x,img/8-partners/ttp-optic@2x.webp 2x" type="image/webp"/><img src="img/8-partners/ttp-optic.png" srcset="img/8-partners/ttp-optic@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://szgmu.ru/rus/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/szgmu.webp 1x,img/8-partners/szgmu@2x.webp 2x" type="image/webp"/><img src="img/8-partners/szgmu.png" srcset="img/8-partners/szgmu@2x.png 2x"/>
                        </picture>
                      </div></a><a class="partners-item swiper-slide" href="https://www.rastatus.ru/" target="_blank">
                      <div class="partners-item__border">
                        <picture class="partners__picture">
                          <source srcset="img/8-partners/status.webp 1x,img/8-partners/status@2x.webp 2x" type="image/webp"/><img src="img/8-partners/status.png" srcset="img/8-partners/status@2x.png 2x"/>
                        </picture>
                      </div></a>
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
                <div class="testimonial-item swiper-slide">
                  <div class="testimonial">
                    <picture class="testimonial__picture">
                      <source srcset="img/10-testimonials/testimonial-1.webp 1x,img/10-testimonials/testimonial-1@2x.webp 2x" type="image/webp"/><img src="img/10-testimonials/testimonial-1.png" srcset="img/10-testimonials/testimonial-1@2x.png 2x"/>
                    </picture>
                    <div class="testimonial-message">
                      <div class="testimonial-message-info">
                        <div class="testimonial-who">
                          <h3 class="testimonial-who__name">Оксана Иванова</h3>
                          <p class="testimonial-who__position">Директор MacDonalds</p>
                        </div>
                        <div class="testimonial__date">02.06.20</div>
                      </div>
                      <p class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item swiper-slide">
                  <div class="testimonial">
                    <picture class="testimonial__picture">
                      <source srcset="img/10-testimonials/testimonial-1.webp 1x,img/10-testimonials/testimonial-1@2x.webp 2x" type="image/webp"/><img src="img/10-testimonials/testimonial-1.png" srcset="img/10-testimonials/testimonial-1@2x.png 2x"/>
                    </picture>
                    <div class="testimonial-message">
                      <div class="testimonial-message-info">
                        <div class="testimonial-who">
                          <h3 class="testimonial-who__name">Оксана Иванова</h3>
                          <p class="testimonial-who__position">Директор MacDonalds</p>
                        </div>
                        <div class="testimonial__date">02.06.20</div>
                      </div>
                      <p class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item swiper-slide">
                  <div class="testimonial">
                    <picture class="testimonial__picture">
                      <source srcset="img/10-testimonials/testimonial-1.webp 1x,img/10-testimonials/testimonial-1@2x.webp 2x" type="image/webp"/><img src="img/10-testimonials/testimonial-1.png" srcset="img/10-testimonials/testimonial-1@2x.png 2x"/>
                    </picture>
                    <div class="testimonial-message">
                      <div class="testimonial-message-info">
                        <div class="testimonial-who">
                          <h3 class="testimonial-who__name">Оксана Иванова</h3>
                          <p class="testimonial-who__position">Директор MacDonalds</p>
                        </div>
                        <div class="testimonial__date">02.06.20</div>
                      </div>
                      <p class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonials-slider-scrollbar"></div>
            </div>
          </div>
          <div class="testimonials-more-wrap"><a class="secondary-button testimonials-more" href="/testimonials.html">Показать еще</a></div>
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
                  <source srcset="img/4-features/stairs.webp 1x,img/4-features/stairs@2x.webp 2x" type="image/webp"/><img src="img/4-features/stairs.png" srcset="img/4-features/stairs@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">01</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text"> <span class="text-bold">Сотни</span> направлений обучения</p>
                <picture class="features-pic">
                  <source srcset="img/4-features/weathervane.webp 1x,img/4-features/weathervane@2x.webp 2x" type="image/webp"/><img src="img/4-features/weathervane.png" srcset="img/4-features/weathervane@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">02</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Поддержка кураторов <span class="text-bold">24/7</span></p>
                <picture class="features-pic">
                  <source srcset="img/4-features/shield.webp 1x,img/4-features/shield@2x.webp 2x" type="image/webp"/><img src="img/4-features/shield.png" srcset="img/4-features/shield@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">03</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Все преподаватели<br>действующие <span class="text-bold">практики</span></p>
                <picture class="features-pic">
                  <source srcset="img/4-features/caduceus.webp 1x,img/4-features/caduceus@2x.webp 2x" type="image/webp"/><img src="img/4-features/caduceus.png" srcset="img/4-features/caduceus@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">04</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Учебные программы соответствуют<span class="text-bold"> государственным стандартам (ФГОС) </span></p>
                <picture class="features-pic">
                  <source srcset="img/4-features/book.webp 1x,img/4-features/book@2x.webp 2x" type="image/webp"/><img src="img/4-features/book.png" srcset="img/4-features/book@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">05</h3>
              </li>
              <li class="features-list-item"> 
                <p class="features-item__text features-item__text--single-row">Доставка документов<span class="text-bold"> по всей России</span></p>
                <picture class="features-pic">
                  <source srcset="img/4-features/box.webp 1x,img/4-features/box@2x.webp 2x" type="image/webp"/><img src="img/4-features/box.png" srcset="img/4-features/box@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">06</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Документы установленного образца</p>
                <picture class="features-pic">
                  <source srcset="img/4-features/paper.webp 1x,img/4-features/paper@2x.webp 2x" type="image/webp"/><img src="img/4-features/paper.png" srcset="img/4-features/paper@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">07</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступ к учебным материалам <span class="text-bold">в&nbsp;любое время</span></p>
                <picture class="features-pic">
                  <source srcset="img/4-features/safe.webp 1x,img/4-features/safe@2x.webp 2x" type="image/webp"/><img src="img/4-features/safe.png" srcset="img/4-features/safe@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">08</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступные цены</p>
                <picture class="features-pic">
                  <source srcset="img/4-features/piggy.webp 1x,img/4-features/piggy@2x.webp 2x" type="image/webp"/><img src="img/4-features/piggy.png" srcset="img/4-features/piggy@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">09</h3>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <script>
      const partnersSlider = new Swiper('.partners-slider-wrap',{
      	slidesPerView: 1,
      	spaceBetween: 20,
      
      	slidesPerColumn: 2,
      	slidesPerColumnFill: 'row',
      
      	scrollbar: {
      		el: '.partners-slider-scrollbar',
      		hide: false,
      	},
      	breakpoints: {
      		1200: {
      			slidesPerView: 5,
      			slidesPerColumn: 1,
      			navigation: {
      				nextEl: '.partners-slider-next',
      				prevEl: '.partners-slider-prev',
      			},
      		}
      	}
      })
      
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
<?php get_footer();?>
