<?php 
/*
 * Template Name: Подробнее о семинаре или вебинаре
 * Template Post Type: seminars
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
		'post_type' => 'seminars',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);
?>
        <div class="news-item-page">
          <div class="paper paper--news-item">
					<h1><?php the_field('meetup_name'); ?></h1>
					
					<div class="meetup-about">
						<div class="meetup-location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/0-common/geo.svg" alt="geo-icon">
						<p><?php the_field('meetup_address') ?></p>
						</div>
						<div class="meetup-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/0-common/time.svg">
						
<?php if (!empty(get_field('time'))) {
		$meetup_time = ', <br class="only-mobile">' . get_field('time');
	} else {
		$meetup_time =  '';
	}?>
						<p>
							<?php echo get_field('meetup_date') ?>
							<?php echo $meetup_time ?>
						</p>
						</div>
					</div>
					<img src="<?php the_field('meetup_pic') ?>" alt="<?php the_field('meetup_name'); ?>">
            <div class="paper--news-item-body">
							<?php the_field('meetup_more'); ?>
							<?php //var_dump(get_field('url_landing')); ?>






<div class="button-aligner--fixed button--center-aligner">
<?php if (! empty(get_field('url_landing'))) { ?>
		<a class="primary-button cta-link-button" 
				style="text-align: center"
				href="<?php  the_field('url_landing' )?>"
		><?php the_field('cta_text') ?></a>
	<!--</div>->
<?php } else { ?>
	<!--<div style="margin-bottom: 25px" class="button--center-aligner">-->
		<button data-form-name="<?php the_field('meetup_name') ?>, семинар " class="seminar-cta primary-button" style="text-align: center">Записаться на семинар</button>
<?php						} ?>
	</div>

            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer();?>

<script>
					

	var buttons = [...document.querySelectorAll('.seminar-cta')];

		buttons.map(function(item, index){
			console.log(index)
			popa({
				clickTrigger: '.seminar-cta',
				popWrap: '.consult-pop-wrap',
				pop: '.consult-pop',
				popCloser: '.pop-closer',
			})

			var form_handler_value = item.getAttribute('data-form-name');
			if (form_handler_value != null) {
				let form_name_item = document.querySelector('.pop-form input[name="arit_formname"]')
				let form_name_value = form_name_item.getAttribute('value');
				form_name_item.value = form_name_value + ', ' +  form_handler_value;
						}
		})


</script>
