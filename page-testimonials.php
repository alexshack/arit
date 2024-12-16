<?php 
/*
 * Template Name: Отзывы
 */
?>
<?php get_header();?>
    <main class="subpage">
      <div class="container">
        <script>var mapsDelay = 1000;</script>
      </div>
      <div class="container testimonials-container">
        <div class="testimonials-page">
          <h1 class="section__title">Отзывы</h1>
          <div class="testimonials">

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
						<div class="button--center-aligner">
							<button class="secondary-button testimonials__more">Показать еще</button>
						</div>
        </div>
      </div>
      <script defer>
        showmore({
        	items: '.testimonial-item',
        	initialShow: 5,
        	itemsToShow: 5,
        	currentItem: 0,
        	clickHandler: '.testimonials__more'
        })
        
      </script>
    </main>
<?php get_footer();?>
