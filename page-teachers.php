<?php 
/*
 * Template Name: Преподаватели
 */
?>
<?php get_header();?>
    <main class="subpage">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>
        <h1 class="section__title section__title--page">Руководство и педагогический состав</h1>
      </div>
      <div class="container">
        <div class="teachers-page">

<?php
$args = array(
	'post_type' => 'teachers',
	'supress_filters' => false,
	'numberposts' => -1,
	'order' => 'ASC',
);
$teachers = get_posts( $args );
?>
<?php 
		foreach ($teachers as $teacher) {
		$id = $teacher->to_array()['ID'];
		setup_postdata($teacher);
?>

						<div class="teachers-slide swiper-slide">
							<picture class="teachers__pic">
								<img src="<?php the_field('img', $id) ?>"/>
							</picture>
							<h3 class="teachers-slide__title"><?php the_field('name', $id) ?></h3>
							<p class="teachers-slide__descr"><?php the_field('descr', $id) ?></p>
						</div>
<?php }  wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="button--center-aligner">
        <button class="secondary-button teachers__more">Показать еще</button>
      </div>
    </main>
<?php get_footer();?>
