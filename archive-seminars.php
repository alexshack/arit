<?php 
/*
 * Template Name: Семинары
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
        </script>
        <h1 class="section__title--left section__title">Ближайшие семинары</h1>
      </div>


<?php

$args = array(
	'post_type' => 'seminars',
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

foreach ( $posts as $post ) {
	setup_postdata($post);

	$date = get_field('meetup_date');
	$filter_date_format = ($date);
	$today_date_format = (date('d.m.y'));
	$result = $filter_date_format - $today_date_format;

	$get_meetup_status = implode('/', explode('.', $date, -2));
	$get_meetup_untill = $get_meetup_status - date('d');

	$days_multiply = (24 * 60 * 60);
	$today = (date('d.m.y')) ;
	$meetup_date =  ($date);
	$date_time_form = DateTime::createFromFormat('d.m.y', $today);
	$date_time_to = DateTime::createFromFormat('d.m.y', $meetup_date);
	$calculate_days = $date_time_form->diff( $date_time_to )->format( '%a' ) ;

	$new_calc_day_to_sort = $date_time_to->format('U') - $date_time_form->format('U') ;


	// if ($result > -1) {
	// if ($calculate_days > -1) {
	if ($new_calc_day_to_sort > -1) {
		$postsToIncoming[$incomingCounter]['result'] = $result;
		$postsToIncoming[$incomingCounter]['new_calc_day_to_sort'] = $new_calc_day_to_sort;
		$postsToIncoming[$incomingCounter]['calculate_days'] = $calculate_days;
		$postsToIncoming[$incomingCounter]['meetup_pic'] = get_field('meetup_pic');
		$postsToIncoming[$incomingCounter]['meetup_address'] = get_field('meetup_address');
		$postsToIncoming[$incomingCounter]['meetup_date'] = get_field('meetup_date');
		$postsToIncoming[$incomingCounter]['meetup_name'] = get_field('meetup_name');
		$postsToIncoming[$incomingCounter]['meetup_speakers'] = get_field('meetup_speakers');
		$postsToIncoming[$incomingCounter]['sorting_days'] = $get_meetup_untill;
		$postsToIncoming[$incomingCounter]['time'] = get_field('time', $id);
		$postsToIncoming[$incomingCounter]['url'] = get_permalink();
		$postsToIncoming[$incomingCounter]['landing'] = get_field('url_landing', $id);

		if ($calculate_days < 1) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Семинар сегодня';

		} else if ($calculate_days < 2) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Семинар завтра';

		} else if ( (( strlen($calculate_days) ) > 1 ) && substr($calculate_days, -1) == 1) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Остался ' . $calculate_days . ' день'; //2, 3, 4

		} else if ( substr($calculate_days, -1) > 4 || ($calculate_days == 11) || ( (strlen($calculate_days) > 1) && ( substr($calculate_days, -1) == 0)) || ($calculate_days == 12)){
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $calculate_days . ' дней'; //5, 6, 7, 8, 9, 10
			
		} else if (substr($calculate_days, -1) < 5 || $calculate_days == 2  ) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $get_meetup_untill . ' дня'; //2, 3, 4
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $calculate_days . ' дня'; //2, 3, 4

		}

		$incomingCounter++;
	// } else if ($calculate_days < -2) {
	} else {
		$postsToArchieve[$archieveCounter]['meetup_pic'] = get_field('meetup_pic');
		$postsToArchieve[$archieveCounter]['meetup_address'] = get_field('meetup_address');
		$postsToArchieve[$archieveCounter]['meetup_date'] = get_field('meetup_date');
		$postsToArchieve[$archieveCounter]['meetup_name'] = get_field('meetup_name');
		$postsToArchieve[$archieveCounter]['meetup_speakers'] = get_field('meetup_speakers');
		$postsToArchieve[$incomingCounter]['url'] = get_permalink();

		$archieveCounter++;
	}

} wp_reset_postdata();


usort($postsToIncoming, function($a,$b){
	return ($a['calculate_days'] - $b['calculate_days']);
	// return ($a['sorting_days'] - $b['sorting_days']);
});?>
      <div class="container">
        <div class="meetups-page-container">

<?php if (count($postsToIncoming) != 0) { ?>
          <div class="meetups-preview">
                <div class="meetups-item meetups-item--seminar">
                  <picture class="meetups__picture">
                    <img src="" alt=" "/>
                  </picture>
                  <div class="meetup-info">
                    <h3><a class="meetup__title meetup__title--link" href=""></a></h3>
                    <div class="meetup-about">
                      <div class="meetup-location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/0-common/geo.svg" alt="geo-icon">
                        <p></p>
                      </div>
                      <div class="meetup-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/0-common/time.svg">
                        <p></p>
                      </div>
                    </div>
                    <div class="meetup-buttons">
                      <button class="meetup__primary-button primary-button seminar__button-cta">Принять участие</button>
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

								<div class="meetup-next-item-due">
								<div class="meetup-next-item__date"><?php echo implode('/', explode('.', $post['meetup_date'], -1)) ?></div>
								<div class="meetup-next-item__status"><?php echo $post['days_untill'] ?></div>
              </div>
              <div class="meetup-next-item-info">
							<h3 class="meetup-next-item-info__topic"><?php echo $post['meetup_name'] ?> <?php echo $post['counted_date'] ?></h3>
								<p class="meetup-next-item-info__speakers"><?php echo $post['meetup_speakers'] ?></p>
              </div>
            </div>
<?php } //wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
<?php if (count($postsToArchieve) > 0) { ?>
      <div class="archieve-wrapper">
        <div class="container">
          <div class="section__title">Архив</div>
          <div class="archieve">
<?php
usort($postsToArchieve, function($a,$b){
	return ($b['calculate_days'] - $a['calculate_days']);
	// return ($a['sorting_days'] - $b['sorting_days']);
});
?>

<?php
		foreach ($postsToArchieve as $post) {
?>
            <div class="archieve-item">
              <picture class="archieve__picture">
								<img src="<?php echo $post['meetup_pic'] ?>"/>
              </picture>
							<h3 class="archieve-item__name"><?php echo $post['meetup_name'] ?></h3>
              <p class="archieve-item__status">Семинар завершен</p>
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
          
        </script>
      </div>
    </main>
<?php } //archieve checker ?>
        <script defer>
          // showmore({
          //   items: '.archieve-item',
          //   clickHandler: '.archieve__more',
          //   itemsToShow: 3,
          //   initialShow: 3,
          //   currentItem: 0,
          // })
          showMeetup({
          	items: '.meetup-next-item',
          })
					document.querySelector('.meetup-next-item').click()
          
        </script>
<?php get_footer();?>


<script>

					popa({
						clickTrigger: '.seminar__button-cta',
						popWrap: '.consult-pop-wrap',
						pop: '.consult-pop',
						popCloser: '.pop-closer',
					})

					var event_name = 'Семинар';
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
