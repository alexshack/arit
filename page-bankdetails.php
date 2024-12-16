<?php 
/*
 * Template Name: Реквизиты организации
 */
?>
<?php get_header();?>
    <main class="subpage">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>
        <h1 class="section__title section__title--page">Реквизиты АНО ДПО АРИТ </h1>
      </div>
      <div class="container">
        <div class="simple-card simple-card--bankinfo">
					<div>
						<?php the_field('info', 948) ?>
<?php /*$infoargs = array(
	'post_type' => 'contact_info',
	'supress_filters' => false,
	'numberposts' => 1,
); 
$get_info = get_posts($infoargs);?>
<?php foreach($get_info as $info){
	setup_postdata($info);
	the_field('info', 511);
} wp_reset_postdata(); */?>
					</div>
        </div>
      </div>
    </main>
<?php get_footer();?>
