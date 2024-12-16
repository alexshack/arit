<?php 
/*
 * Template Name: Обучение
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>

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
		'hide_empty' => false,
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
        <h1 class="section__title section__title--page section__title--center">Курсы обучения в АРИТ</h1>
      </div>
      <div class="learning learning-page" id="learning">
        <div class="container">
          <div class="learning-tabs-wrap">
            <div class="learning-tab--retrain">
              <h2 class="learning-page-title">Профессиональная переподготовка</h2>
              <div class="learning-slider-wrap learning-slider-wrap--retrain swiper-container">
                <div class="swiper-wrapper">
                  <ul class="learning-tab-list swiper-slide">
<?php
		$tag_counter = 0;
		while ($tag_counter <= $column_1_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
                    title="Курсы переподготовки по направлению <?php echo $learning_ways[$tag_counter]['name'] ?>" 
                    href="<?php echo $learning_ways[$tag_counter]['link'] ?>?course=retrain">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                  </ul>

                  <ul class="learning-tab-list swiper-slide">
<?php while ($tag_counter <= $column_2_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
                    title="Курсы переподготовки по направлению <?php echo $learning_ways[$tag_counter]['name'] ?>" 
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>?course=retrain">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                  </ul>
                  <ul class="learning-tab-list swiper-slide">
<?php while ($tag_counter < $tags_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
                    title="Курсы переподготовки по направлению <?php echo $learning_ways[$tag_counter]['name'] ?>" 
											href="<?php echo $learning_ways[$tag_counter]['link'] ?>?course=retrain"><?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                  </ul>
                </div>
                <div class="learning-slider--first slider-scrollbar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="learning--skillup">
      <div class="learning learning-page" id="learning">
        <div class="container">
          <div class="learning-tabs-wrap learning-tabs-wrap--skillup">
            <div class="learning-tab--skillup">
              <h2 class="learning-page-title">Повышение квалификации</h2>
              <div class="learning-slider-wrap swiper-container">
                <div class="swiper-wrapper">
                  <ul class="learning-tab-list swiper-slide">
<?php
		$tag_counter = 0;
		while ($tag_counter <= $column_1_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
                    title="Курсы повышения квалификации по направлению <?php echo $learning_ways[$tag_counter]['name'] ?>"  
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                  </ul>
                  <ul class="learning-tab-list swiper-slide">
<?php while ($tag_counter <= $column_2_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
                    title="Курсы повышения квалификации по направлению <?php echo $learning_ways[$tag_counter]['name'] ?>" 
												href="<?php echo $learning_ways[$tag_counter]['link'] ?>">
													<?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                  </ul>
                  <ul class="learning-tab-list swiper-slide">
<?php while ($tag_counter < $tags_count) { ?>
									<li class="learning-tab-list-item">
										<a class="learning-tab-list-item__link" 
                    title="Курсы повышения квалификации по направлению <?php echo $learning_ways[$tag_counter]['name'] ?>" 
											href="<?php echo $learning_ways[$tag_counter]['link'] ?>"><?php echo $learning_ways[$tag_counter]['name'] ?>
										</a>
									</li>
<?php $tag_counter++; } ?>
                  </ul>
                </div>
                <div class="learning-slider slider-scrollbar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      if (window.innerWidth < 1200) {
      	var learningSecond = new Swiper('.learning-slider-wrap', {
      		slidesPerView: 1,
      		spaceBetween: 50,
      					
      		scrollbar: {
      			el: '.learning-slider.slider-scrollbar',
      			hide: false,
      		},
      	})
      	var learningFirst = new Swiper('.learning-slider-wrap--retrain', {
      		slidesPerView: 1,
      		spaceBetween: 50,
      					
      		scrollbar: {
      			el: '.learning-slider--first.slider-scrollbar',
      			hide: false,
      		},
      	})
      }
      
      
      
      
      
      
    </script>
<?php get_footer();?>
