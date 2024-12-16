<?php 
/*
 * Template Name: Партнеры
 */
?>
<?php get_header();?>
    <main class="subpage">
      <div class="container">
        <script>var mapsDelay = 1000;</script>
      </div>
      <div class="container partners-container">
        <div class="partners-page">
          <h1 class="section__title">Партнеры</h1>
          <div class="partners">




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
<div class="partners-page-item-wrap"><a class="partners-item" href="<?php the_field('partner_link', $id) ?>" target="_blank" rel="nofollow">
                <div class="partners-item__border">
                  <picture class="partners__picture">
									<img src="<?php the_field('partner_logo',$id) ?>"/>
                  </picture>
                </div></a>
            </div>
<?php } ?>

          </div>
          <div class="button--center-aligner">
            <button class="secondary-button partners__more">Покзать еще</button>
          </div>
        </div>
        <script defer>
          if (window.innerWidth < 1200){
          	showmore({
          		items: '.partners-page-item-wrap',
          		clickHandler: '.partners__more',
          		itemsToShow: 5,
          		initialShow: 5,
          		currentItem: 0,
          	})
          }
          
          
        </script>
      </div>
    </main>
<?php get_footer();?>
