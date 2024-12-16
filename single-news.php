<?php 
/*
 * Template Name: Новость
 * Template Post Type: news
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>


<?php 
	$newsItems = array(
		'post_type' => 'news',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);
?>
        <div class="news-item-page">
          <div class="paper paper--news-item">
					<h1><?php the_field('news_title'); ?></h1>
					<img src="<?php the_field('news_hero') ?>" alt="<?php the_field('news_title'); ?>">
            <div class="paper--news-item-body">
							<?php the_field('news_text'); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer();?>
