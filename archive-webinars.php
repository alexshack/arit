<?php 
/*
 * Template Name: Вебинары
 */
?>
<?php get_header();?>
    <main class="subpage">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>
        <h1 class="section__title--left section__title">Ближайшие вебинары</h1>
      </div>
      <div class="container">
        <div class="meetups-page-container meetups-page--webinars">

<?php
$args = array(
	'post_type' => 'webinars',
	'supress_filters' => false,
	'numberposts' => -1,
	'orderby' => 'date',
	'order' => 'DESC',
);
$posts = get_posts( $args );

$postsToIncoming = array();
$incomingCounter = 0;
$postsToArchieve = array();
$archieveCounter = 0;

function get_number_of_days_untill($date_to, $date_from) {
	$date_from = DateTime::createFromFormat('d.m.Y', $date_from);
	$date_to = DateTime::createFromFormat('d.m.Y', $date_to);

	$days_untill_date = $date_to->format('U') - $date_from->format('U') ;
	return $days_untill_date;
}
foreach ( $posts as $post ) {
	$id = $post->to_array()['ID'];
	setup_postdata($post);

	$date = get_field('meetup_date');
	$filter_date_format = strtotime($date);
	$today_date_format = strtotime(date('d.m.y'));
	$result = $filter_date_format - $today_date_format;

	$get_meetup_status = implode('/', explode('.', $date, -2));
	$get_meetup_untill = $get_meetup_status - date('d');


	$days_multiply = (24 * 60 * 60);
	$today = date('d.m.Y');
	$date_time_form = DateTime::createFromFormat('d.m.Y', $today);
	$date_time_to = DateTime::createFromFormat('d.m.Y', $date);
	$calculate_days = $date_time_form->diff( $date_time_to )->format( '%a' ) ;

	$new_calc_day_to_sort = $date_time_to->format('U') - $date_time_form->format('U') ;



	if ($new_calc_day_to_sort > -1) {
		
		$postsToIncoming[$incomingCounter]['calculate_days'] = $calculate_days;
		$postsToIncoming[$incomingCounter]['meetup_pic'] = get_field('meetup_pic');
		$postsToIncoming[$incomingCounter]['meetup_address'] = get_field('meetup_address');
		$postsToIncoming[$incomingCounter]['meetup_date'] = get_field('meetup_date');
		$postsToIncoming[$incomingCounter]['meetup_name'] = get_field('meetup_name');
		$postsToIncoming[$incomingCounter]['meetup_speakers'] = get_field('meetup_speakers');
		$postsToIncoming[$incomingCounter]['meetup_link'] = get_field('meetup_link');
		$postsToIncoming[$incomingCounter]['time'] = get_field('time', $id);
		$postsToIncoming[$incomingCounter]['sorting_days'] = $get_meetup_untill;
		$postsToIncoming[$incomingCounter]['url'] = get_permalink();
		$postsToIncoming[$incomingCounter]['landing'] = get_field('url_landing', $id);



		if ($calculate_days < 1) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Вебинар сегодня';

		} else if ($calculate_days < 2) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Вебинар завтра';

		} else if ( (( strlen($calculate_days) ) > 1 ) && substr($calculate_days, -1) == 1) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Остался ' . $calculate_days . ' день'; //2, 3, 4

		} else if ( substr($calculate_days, -1) > 4 || ($calculate_days == 11) || ( (strlen($calculate_days) > 1) && ( substr($calculate_days, -1) == 0)) || ($calculate_days == 12)){
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $calculate_days . ' дней'; //5, 6, 7, 8, 9, 10

		} else if (substr($calculate_days, -1) < 5 || $calculate_days == 2  ) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $get_meetup_untill . ' дня'; //2, 3, 4
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $calculate_days . ' дня'; //2, 3, 4
		}
		$incomingCounter++;
	} else if ($new_calc_day_to_sort < 0) {
		$postsToArchieve[$archieveCounter]['date_time_form'] = $date_time_form;
		$postsToArchieve[$archieveCounter]['date_time_to'] = 	$date_time_to;
		$postsToArchieve[$archieveCounter]['calculate_days'] =	$calculate_days;
	


		$postsToArchieve[$archieveCounter]['days_untill'] = $new_calc_day_to_sort;
		$postsToArchieve[$archieveCounter]['meetup_pic'] = get_field('meetup_pic');
		$postsToArchieve[$archieveCounter]['meetup_address'] = get_field('meetup_address');
		$postsToArchieve[$archieveCounter]['meetup_date'] = get_field('meetup_date');
		$postsToArchieve[$archieveCounter]['meetup_name'] = get_field('meetup_name');
		$postsToArchieve[$archieveCounter]['meetup_speakers'] = get_field('meetup_speakers');
		$postsToArchieve[$archieveCounter]['meetup_link'] = get_field('meetup_link');
		$postsToArchieve[$archieveCounter]['url'] = get_permalink();

		$archieveCounter++;
	}

} wp_reset_postdata();


usort($postsToIncoming, function($a,$b){
	return ($a['calculate_days'] - $b['calculate_days']);
}); ?>
<?php if (count($postsToIncoming) != 0) { ?>
	<div class="meetups-preview">
		<div class="meetups-item meetups-item--seminar">
			<picture class="meetups__picture">
				<img src="" />
			</picture>
			<div class="meetup-info">
			<h3><a class="meetup__title meetup__title--link" href=""></a></h3>
				<div class="meetup-about">
					<div class="meetup-location">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/0-common/geo.svg" alt="geo-icon">
						<p></p>
					</div>
					<div class="meetup-time">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/0-common/time.svg">
						<p></p>
					</div>
				</div>
				<div class="meetup-buttons">
					<button data-form-name="" class="meetup__primary-button primary-button seminar__button-cta webinar__button-cta">Принять участие</button>
				</div>
			</div>
		</div>
	</div>
<?php } else {?>
<p>Вебинары пока не запланированы, посмотрите архив</p>
<?php }?>



	<div class="meetups-next-list">

<?php
foreach ($postsToIncoming as $post) {
?>
	<div 
		class="meetup-next-item"
		data-url="<?php if (empty($post['landing'])) {
											echo $post['url'];
										} else { echo $post['landing']; } ?>"
		data-src="<?php echo $post['meetup_pic'] ?>"
		data-address="<?php echo $post['meetup_address'] ?>"
		data-date="<?php echo $post['time'] ?>"
		data-form-name="<?php echo $post['meetup_name'] ?>"
	>
		<div class="meetup-next-item-due  meetup-next-item-due--current">
			<div class="meetup-next-item__date"><?php echo implode('/', explode('.', $post['meetup_date'], -1)) ?></div>
			<div class="meetup-next-item__status"><?php echo $post['days_untill'] ?></div>
		</div>
		<div class="meetup-next-item-info">
		<h3 class="meetup-next-item-info__topic"><?php echo $post['meetup_name'] ?></h3>
			<p class="meetup-next-item-info__speakers"><?php echo $post['meetup_speakers'] ?></p>
		</div>
	</div>
<?php } ?>

					</div>
					<!--end meetups-next-list-->

        </div>
      </div>


      <div class="archieve-wrapper archieve-wrapper--webinars">
        <div class="container">
				<div class="section__title">Архив</div>
          <div class="archieve" style="flex-wrap: wrap;">

<?php 
// echo '<pre>';
// var_dump($postsToArchieve);
// echo '</pre>';
usort($postsToArchieve, function($a,$b){
	return ($a['calculate_days'] - $b['calculate_days']);
	// return ($a['sorting_days'] - $b['sorting_days']);
});
	foreach ($postsToArchieve as $post) {

	setup_postdata($post);
?>

            <div class="archieve-item">
              <div class="archieve-item-picture">
                <picture class="archieve__picture">
									<img src="<?php echo $post['meetup_pic'] ?>"/>
                </picture>
              </div>
							<h3 class="archieve-item__name"><a href="<?php echo $post['url'] ?>"><?php echo $post['meetup_name'] ?></a></h3>
	
							<p><?php //echo $post['meetup_date']->format('U') ?> </p>
							<p><?php echo $post['date_time_from'] ?>  </p>
							<p><?php //echo $post['date_time_to'] ?> </p>
              <div class="archieve-item__controls">
								<a target="_blank" href="<?php echo $post['url'] ?>" class="archieve__cta"><span>Подробнее</span>
                  <svg class="archieve__cta-button" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.7154 4.6098L1.26527 0.159755C1.16235 0.0567475 1.02495 0 0.878448 0C0.731945 0 0.594548 0.0567475 0.491622 0.159755L0.163901 0.487394C-0.0493491 0.700889 -0.0493491 1.04788 0.163901 1.26105L3.90078 4.99793L0.159755 8.73895C0.0568288 8.84196 0 8.97928 0 9.1257C0 9.27228 0.0568288 9.4096 0.159755 9.51269L0.487476 9.84025C0.590483 9.94325 0.727799 10 0.874302 10C1.02081 10 1.1582 9.94325 1.26113 9.84025L5.7154 5.38614C5.81857 5.2828 5.87524 5.14484 5.87491 4.99817C5.87524 4.85094 5.81857 4.71305 5.7154 4.6098Z" fill="#333333"></path>
                  </svg>
                </a>
								<p class="archieve__date"><?php echo $post['meetup_date'] ?></p>
              </div>
            </div>

<?php } ?>
          </div>
          <div class="button--center-aligner">
            <button class="secondary-button archieve__more">Показать еще</button>
          </div>
        </div>
        <script defer>
          showmore({
          	items: '.archieve-item',
          	clickHandler: '.archieve__more',
          	itemsToShow: 3,
          	initialShow: 3,
          	currentItem: 0,
          })
          showMeetup({
          	items: '.meetup-next-item',
          })
					document.querySelector('.meetup-next-item').click()
					
          
        </script>
      </div>
    </main>
<?php get_footer();?>


<script>
					popa({
						clickTrigger: '.webinar__button-cta',
						popWrap: '.consult-pop-wrap',
						pop: '.consult-pop',
						popCloser: '.pop-closer',
					})

					
					var event_name = 'Вебинар';
					var form_handler = document.querySelector('.meetups-item').querySelector('.primary-button');
					form_handler.addEventListener('click', function(){
						var form_handler_value = form_handler.getAttribute('data-form-name');
						if (form_handler_value != null) {
							let form_name_item = document.querySelector('.pop-form input[name="arit_formname"]')
							let form_name_value = form_name_item.getAttribute('value');
							form_name_item.value = form_name_value + ' ' + event_name + ', ' +  form_handler_value;
						}
					})

</script>
