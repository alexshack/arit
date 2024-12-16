<?php 
/*
 * Template Name: Подробнее о семинаре или вебинаре
 * Template Post Type: webinars
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
		'post_type' => 'webinars',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);
?>
        <div class="news-item-page">
          <div class="paper paper--news-item">
					<h1><?php the_field('meetup_name'); ?></h1>
					<img src="<?php the_field('meetup_pic') ?>" alt="<?php the_field('meetup_name'); ?>">
            <div class="paper--news-item-body">
							<?php the_field('meetup_more'); ?>





	<div class="button--center-aligner">
		<button data-form-name="<?php the_field('meetup_name') ?>, вебинар " class="webinar-cta primary-button" style="text-align: center">Записаться на вебинар</button>
	</div>



<?php if (! empty(get_field('url_landing'))) { ?>
	<div class="button--center-aligner"><!-- .primary-button -->
		<a class="primary-button" style="text-align: center" href="<?php  the_field('url_landing' )?>"><?php the_field('cta_text') ?></a>
		</div>
<?php } ?>

            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer();?>



<script>
					

	var buttons = [...document.querySelectorAll('.webinar-cta')];

		buttons.map(function(item, index){
			console.log(index)
			popa({
				clickTrigger: '.webinar-cta',
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
