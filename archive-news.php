<?php 
/*
 * Template Name: Новости
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
        </script>

        <h1 class="section__title">Новости</h1>

<?php 
	$news_latest_item = array(
		'post_type' => 'news',
		'supress_filters' => false,
		'numberposts' => 1,
		'orderby' => 'date',
		'order' => 'DESC',
	);
	$news_latest_small = array(
		'post_type' => 'news',
		'supress_filters' => false,
		'numberposts' => 3,
		'orderby' => 'date',
		'order' => 'DESC',
		'offset' => 1,
	);

	$news_latest = get_posts( $news_latest_item );
	$news_smalls = get_posts( $news_latest_small );
	$catalog_counter = 1;
	$posts_to_exclude = array();

?>



        <div class="news-page">
          <div class="news-wrapper">



						<div class="news-latest-one">
<?php
	foreach ($news_latest as $key => $post) {
		setup_postdata($post);
		$posts_to_exclude[$key] = $post->to_array()['ID'];
?>
							<a class="news-latest-one__img-wrap" href="<?php echo the_permalink(); ?>">
							<img class="news-latest-one__pic" src="<?php the_field('news_hero'); ?>" alt="<?php the_field('news_title'); ?>">
							</a>
							<div class="news-latest-one-info">
								<a href="<?php echo the_permalink(); ?>">
									<h3 class="news-item__title"><?php the_field('news_title'); ?></h3>
								</a>
								<p class="news-item__descr"><?php the_field('news_subtitle'); ?></p>
								<div class="news-bottom">
									<a class="news-button" href="<?php the_permalink(); ?>">Подробнее</a>
									<span class="news-date"><?php the_date('d.m.Y'); ?></span>
								</div>
              </div>
<?php }; wp_reset_postdata();// end latest post ?>

            </div>




						<div class="news-latest">
<?php
	foreach ($news_smalls as $key => $post) {
		setup_postdata($post);
		$posts_to_exclude[$key+1] = $post->to_array()['ID'];
?>
							<a class="news-latest-item" href="<?php the_permalink(); ?>">
								<h3 class="news-item__title"><?php the_field('news_title'); ?></h3>
								<p class="news-date"><?php echo date('d.m.y', strtotime($post->post_date)) ?></p>
							</a>
<?php }; wp_reset_postdata();//end smalls ?>
						</div>

          </div>
        </div>


        <div class="regular-news-wrapper">
          <div class="news-page regular-news">
					<?php
	$get_news_rest = array(
		'post_type' => 'news',
		'supress_filters' => false,
		'numberposts' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'offset' => 4,
		'exclude' => $posts_to_exclude,
	);
	$news_rest = get_posts( $get_news_rest );
						foreach ($news_rest as $post) {
						setup_postdata($post);
					?>
						<div class="news-item">
							<a href="<?php the_permalink() ?>">
								<picture class="news__picture">
									<img src="<?php the_field('news_hero') ?>"/>
								</picture>
							</a>
							<div class="news-info">
								<a href="<?php the_permalink() ?>">
									<h3 class="news-item__title"><?php the_field('news_title') ?></h3>
								</a>
								<p class="news-item__descr"><?php the_field('news_subtitle') ?></p>
								<div class="news-bottom">
									<a class="news-button" href="<?php the_permalink() ?>">Подробнее</a>
									<span class="news-date"><?php echo date('d.m.y', strtotime($post->post_date)) ?></span>
								</div>
              </div>
            </div>
						<?php } //end rest news?>
          <div class="button--center-aligner">
            <button class="secondary-button news__more">Показать еще</button>
          </div>
        </div>
        <script>
          showmore({
          	items: '.news-item'	,
          	clickHandler: '.news__more',
          	itemsToShow: 3,
          	initialShow: 3,
          	currentItem: 0,
          })
        </script>
      </div>
    </main>
<?php get_footer();?>
