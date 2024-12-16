<!DOCTYPE html>
<html lang="ru">
  <head>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WPQJDHS');</script>
		<!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <!--<title>АРИТ — Стань востребованным специалистом в сжатые сроки, не отрываясь от работы</title>-->
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?> </title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
		<meta name="yandex-verification" content="7c9f03d686c701a2" />
		<style>
			.form__button--pressed {
				opacity: 0.5;
			}
			.simple-card--bankinfo {
				max-width: 600px;
				margin-left: auto;
				margin-right: auto;
			}
			.simple-card--bankinfo p {
				margin-bottom: 20px;
				line-height: 1.5
			}
		</style>
	 <?php wp_head();?>
  </head>
  <body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPQJDHS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			 (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			 m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			 (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			 ym(74348698, "init", {
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
			 });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/74348698" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->

    <div class="header-wrapper">
      <div class="container header-container">
				<header class="header">
						<a  class="header__logo" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri()?>/img/0-common/logo.svg" alt="АРИТ АНО ДПО">
							<!--<p class="header-logo-descriptor">Дополнительное профессиональное образование. Лицензия №12 от 25.10.2013</p>-->
						</a>




          <div class="header-search">
            <input class="header__search" type="text" placeholder="Поиск">
          </div>





          <div class="socials">
<?php
	$contacts_page_id = 948;
	$phone = get_field('phone', $contacts_page_id);
	$phone_link = $phone;
	$phone_link = preg_replace('/\D/i', '', $phone_link);
	$email = get_field('email', $contacts_page_id);
?>
	<div class="socials-list"><a class="socials-item" href="<?php the_field('vk', $contacts_page_id) ?>">
                <svg class="socials-item__img" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.5 0C5.59667 0 0 5.59642 0 12.5C0 19.4036 5.59667 25 12.5 25C19.4033 25 25 19.4036 25 12.5C25 5.59642 19.4033 0 12.5 0ZM18.8407 13.8519C19.4233 14.421 20.0396 14.9565 20.5627 15.5844C20.7944 15.8621 21.0128 16.1494 21.179 16.4724C21.4164 16.933 21.202 17.4381 20.7898 17.4655L18.2289 17.465C17.5675 17.5197 17.0412 17.2529 16.5974 16.8008C16.2432 16.4404 15.9146 16.0555 15.5734 15.6829C15.434 15.5299 15.2872 15.3859 15.1123 15.2726C14.7632 15.0455 14.4598 15.1151 14.2598 15.4798C14.056 15.8509 14.0095 16.2621 13.99 16.6752C13.9621 17.279 13.7801 17.4368 13.1742 17.4652C11.8795 17.5258 10.6512 17.3294 9.50946 16.6767C8.5023 16.101 7.72276 15.2885 7.04348 14.3685C5.72072 12.5752 4.70767 10.6069 3.79744 8.5821C3.59258 8.12609 3.74246 7.8821 4.24552 7.87263C5.08133 7.85652 5.91714 7.85857 6.75294 7.87187C7.09309 7.87724 7.31816 8.07187 7.44885 8.39284C7.90051 9.50409 8.45422 10.5614 9.14808 11.5419C9.33299 11.8031 9.52174 12.0634 9.79054 12.2478C10.0872 12.4514 10.3133 12.3841 10.4532 12.0529C10.5427 11.8425 10.5813 11.6174 10.6008 11.3918C10.6673 10.6192 10.6752 9.8468 10.5601 9.07724C10.4885 8.59565 10.2176 8.28465 9.7376 8.19361C9.49309 8.14731 9.5289 8.05678 9.64783 7.91714C9.85422 7.6757 10.0476 7.52634 10.434 7.52634L13.3274 7.52583C13.7834 7.61535 13.8857 7.81995 13.9476 8.27928L13.9501 11.4946C13.9448 11.6724 14.0394 12.1992 14.3586 12.3156C14.6143 12.4 14.7831 12.1949 14.9361 12.033C15.6299 11.2967 16.1243 10.4276 16.567 9.52813C16.7624 9.13146 16.9309 8.72097 17.0946 8.30972C17.2164 8.00563 17.4056 7.85601 17.7488 7.86112L20.535 7.86445C20.6171 7.86445 20.7005 7.86522 20.7818 7.87928C21.2514 7.95959 21.3801 8.16164 21.2348 8.61969C21.0061 9.33939 20.5619 9.93887 20.1276 10.5399C19.6621 11.1834 19.1657 11.8043 18.7049 12.4506C18.2813 13.0414 18.3148 13.3389 18.8407 13.8519Z" fill="#333333"></path>
									</svg></a><a class="socials-item" href="<?php the_field('instagram', $contacts_page_id) ?>">
                <svg class="socials-item__img" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.8926 12.5C14.8926 13.8214 13.8214 14.8926 12.5 14.8926C11.1786 14.8926 10.1074 13.8214 10.1074 12.5C10.1074 11.1786 11.1786 10.1074 12.5 10.1074C13.8214 10.1074 14.8926 11.1786 14.8926 12.5Z" fill="#333333"></path>
                  <path d="M18.0952 8.26682C17.9802 7.95516 17.7967 7.67307 17.5583 7.44151C17.3267 7.20309 17.0448 7.01961 16.733 6.90459C16.48 6.80637 16.1001 6.68945 15.4003 6.65759C14.6433 6.62307 14.4163 6.61563 12.4998 6.61563C10.5831 6.61563 10.3561 6.62288 9.59928 6.6574C8.89948 6.68945 8.51934 6.80637 8.26662 6.90459C7.95477 7.01961 7.67267 7.20309 7.44131 7.44151C7.20289 7.67307 7.0194 7.95497 6.9042 8.26682C6.80597 8.51974 6.68905 8.89987 6.6572 9.59968C6.62267 10.3565 6.61523 10.5835 6.61523 12.5002C6.61523 14.4167 6.62267 14.6437 6.6572 15.4007C6.68905 16.1005 6.80597 16.4804 6.9042 16.7334C7.0194 17.0452 7.2027 17.3271 7.44112 17.5587C7.67267 17.7971 7.95457 17.9806 8.26643 18.0956C8.51934 18.194 8.89948 18.3109 9.59928 18.3428C10.3561 18.3773 10.5829 18.3845 12.4996 18.3845C14.4165 18.3845 14.6435 18.3773 15.4001 18.3428C16.0999 18.3109 16.48 18.194 16.733 18.0956C17.3589 17.8541 17.8537 17.3593 18.0952 16.7334C18.1934 16.4804 18.3103 16.1005 18.3424 15.4007C18.3769 14.6437 18.3841 14.4167 18.3841 12.5002C18.3841 10.5835 18.3769 10.3565 18.3424 9.59968C18.3105 8.89987 18.1936 8.51974 18.0952 8.26682ZM12.4998 16.1858C10.4641 16.1858 8.81384 14.5357 8.81384 12.5C8.81384 10.4643 10.4641 8.81423 12.4998 8.81423C14.5353 8.81423 16.1855 10.4643 16.1855 12.5C16.1855 14.5357 14.5353 16.1858 12.4998 16.1858ZM16.3313 9.52987C15.8556 9.52987 15.4699 9.1442 15.4699 8.66851C15.4699 8.19282 15.8556 7.80715 16.3313 7.80715C16.807 7.80715 17.1926 8.19282 17.1926 8.66851C17.1924 9.1442 16.807 9.52987 16.3313 9.52987Z" fill="#333333"></path>
                  <path d="M12.5 0C5.5975 0 0 5.5975 0 12.5C0 19.4025 5.5975 25 12.5 25C19.4025 25 25 19.4025 25 12.5C25 5.5975 19.4025 0 12.5 0ZM19.6344 15.4593C19.5997 16.2233 19.4782 16.745 19.3008 17.2016C18.928 18.1658 18.1658 18.928 17.2016 19.3008C16.7452 19.4782 16.2233 19.5995 15.4594 19.6344C14.694 19.6693 14.4495 19.6777 12.5002 19.6777C10.5507 19.6777 10.3064 19.6693 9.54075 19.6344C8.77686 19.5995 8.255 19.4782 7.79858 19.3008C7.31945 19.1206 6.88572 18.8381 6.52714 18.4729C6.16207 18.1145 5.87959 17.6805 5.69935 17.2016C5.52197 16.7452 5.40047 16.2233 5.36575 15.4594C5.33047 14.6938 5.32227 14.4493 5.32227 12.5C5.32227 10.5507 5.33047 10.3062 5.36556 9.54075C5.40028 8.77666 5.52158 8.255 5.69897 7.79839C5.87921 7.31945 6.16188 6.88553 6.52714 6.52714C6.88553 6.16188 7.31945 5.8794 7.79839 5.69916C8.255 5.52177 8.77666 5.40047 9.54075 5.36556C10.3062 5.33066 10.5507 5.32227 12.5 5.32227C14.4493 5.32227 14.6938 5.33066 15.4593 5.36575C16.2233 5.40047 16.745 5.52177 17.2016 5.69897C17.6805 5.87921 18.1145 6.16188 18.4731 6.52714C18.8381 6.88572 19.1208 7.31945 19.3008 7.79839C19.4784 8.255 19.5997 8.77666 19.6346 9.54075C19.6695 10.3062 19.6777 10.5507 19.6777 12.5C19.6777 14.4493 19.6695 14.6938 19.6344 15.4593Z" fill="#333333"></path>
									</svg></a><a class="socials-item" href="<?php the_field('facebook', $contacts_page_id) ?>">
                <svg class="socials-item__img" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25 12.5C25 5.5957 19.4043 0 12.5 0C5.5957 0 0 5.5957 0 12.5C0 19.4043 5.5957 25 12.5 25C12.5732 25 12.6465 25 12.7197 24.9951V15.2686H10.0342V12.1387H12.7197V9.83398C12.7197 7.16309 14.3506 5.70801 16.7334 5.70801C17.876 5.70801 18.8574 5.79102 19.1406 5.83008V8.62305H17.5C16.2061 8.62305 15.9521 9.23828 15.9521 10.1416V12.1338H19.0527L18.6475 15.2637H15.9521V24.5166C21.1768 23.0176 25 18.208 25 12.5Z" fill="#333333"></path>
									</svg></a><a class="socials-item" href="<?php the_field('youtube', $contacts_page_id) ?>">
                <svg class="socials-item__img" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.9429 14.8418L15.009 12.5L10.9429 10.1582V14.8418Z" fill="#333333"></path>
                  <path d="M12.5 0C5.5975 0 0 5.5975 0 12.5C0 19.4025 5.5975 25 12.5 25C19.4025 25 25 19.4025 25 12.5C25 5.5975 19.4025 0 12.5 0ZM20.3106 12.5128C20.3106 12.5128 20.3106 15.0478 19.989 16.2703C19.8088 16.9394 19.2812 17.4669 18.6121 17.647C17.3897 17.9688 12.5 17.9688 12.5 17.9688C12.5 17.9688 7.6231 17.9688 6.3879 17.6342C5.7188 17.4541 5.19123 16.9264 5.01099 16.2573C4.68922 15.0478 4.68922 12.5 4.68922 12.5C4.68922 12.5 4.68922 9.96513 5.01099 8.74271C5.19104 8.07362 5.73158 7.53307 6.3879 7.35302C7.61032 7.03125 12.5 7.03125 12.5 7.03125C12.5 7.03125 17.3897 7.03125 18.6121 7.3658C19.2812 7.54585 19.8088 8.07362 19.989 8.74271C20.3236 9.96513 20.3106 12.5128 20.3106 12.5128Z" fill="#333333"></path>
                </svg></a></div>
          </div>
          <div class="header-contacts">
					<div class="header-phone"><a class="header__contact" href="tel:+<?php echo $phone_link ?>"><?php echo $phone ?></a></div>
					<div class="header-email"><a class="header__contact" href="mailto:<?php the_field('email', $contacts_page_id) ?>"><?php the_field('email', $contacts_page_id) ?></a></div>
          </div>
         <!-- <button class="header_get-consult secondary-button">Получить консультацию </button>-->
<a class="secondary-button hero-learning" target="_blank" href="https://dpoarit.ispringlearn.ru" style="margin-right: 0">Учебный портал</a>
          <div class="burger-clickable">
            <div class="burger"><span></span></div>
          </div>
        </header>
      </div>







<?php
					// === Get menu items for custom nav menu ===
					$get_menu = wp_get_nav_menu_items( 'nav' );
					$menu_array = array();
					$menu_child = array();

					$menu_parent_id;
					$is_menu_parent_id_got = false;

					foreach ( $get_menu as $key => $menu_item ) {
						$menu_item_ar = $menu_item->to_array();
						
						if ( !$is_menu_parent_id_got ) {
							$menu_parent_id = $menu_item_ar['db_id'];
							$is_menu_parent_id_got = true;
						}
						if ( $menu_item_ar['menu_item_parent'] == $menu_parent_id) {
							$menu_child[$key]['db_id'] = $menu_item_ar['db_id'];
							$menu_child[$key]['post_title'] = $menu_item_ar['post_title'];
							$menu_child[$key]['url'] = $menu_item_ar['url'];
							$menu_child[$key]['title'] = $menu_item_ar['title'];
							$menu_child[$key]['menu_item_parent'] = $menu_item_ar['menu_item_parent'];
						} else {
							$menu_array[$key]['db_id'] = $menu_item_ar['db_id'];
							$menu_array[$key]['post_title'] = $menu_item_ar['post_title'];
							$menu_array[$key]['url'] = $menu_item_ar['url'];
							$menu_array[$key]['title'] = $menu_item_ar['title'];
							$menu_array[$key]['menu_item_parent'] = $menu_item_ar['menu_item_parent'];
						} 
					}
					// echo '<pre>';
					// var_dump($menu_array);
					// var_dump($menu_new_array);
					// echo '</pre>';

?>


      <nav class="nav container">
        <div class="nav-list">
<?php foreach ($menu_array as $menu_item) { ?>
					
	<?php if ($menu_item['db_id'] == $menu_parent_id) {?>
					<div class="dropdown-menu-item">
						<a class="nav-list-item nav-list-item--dropdown" href="#about">
							<div class="nav-list-item__text"><?php echo $menu_item['title'] ?></div>
						</a>

						<div class="nav-list-item-dropdown-wrap">
							<div class="nav-list-item-dropdown">
								<?php foreach ($menu_child as $menu_child_item) {?>
									<a class="dropdown-item" href="<?php echo $menu_child_item['url'] ?>"><?php echo $menu_child_item['title'] ?></a>
								<?php } ?>
							</div>
						</div>
					</div>
	<?php } // end menu dropdown?>

	<?php if ($menu_item['db_id'] != $menu_parent_id) {?>
<?php
$get_menu_url = get_site_url() . $_SERVER['REQUEST_URI'];
$get_current_url = $menu_item['url'];
$current_menu_class = '';
if ( $get_current_url === $get_menu_url ) {
	$current_menu_class = 'nav-list-item--current';
}
if (( preg_match('/learning/', $get_current_url )) && (preg_match('/tag/', $get_menu_url))) {
	$current_menu_class = 'nav-list-item--current';
}
// if ($get_page_name == $get_page_link)
?>
						<a class="nav-list-item <?php echo $current_menu_class //. ' ' . $get_menu_url . ' and ' . $get_current_url ?>" href="<?php echo $menu_item['url'] ?>">
							<div class="nav-list-item__text"><?php echo $menu_item['title'] ?></div>
						</a>
	<?php } // end last menu items?>
<?php } // end foreach?>
        </div>
      </nav>
    </div>



<?php if ( is_home() ) {} else {?>
	<!-- .container -->
	<div class="container breadcrumbs-container">
		<div class="breadcrumbs">
			<?php
					if (function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					}
			?>
	</div>
</div>
	<!-- /.container -->
<?php } ?>




<!-- .scroll-to-top -->
<button class="scroll-to-top hidden">
	<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8ZM8.5 11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V5.707L5.354 7.854C5.26011 7.94789 5.13278 8.00063 5 8.00063C4.86722 8.00063 4.73989 7.94789 4.646 7.854C4.55211 7.76011 4.49937 7.63278 4.49937 7.5C4.49937 7.36722 4.55211 7.23989 4.646 7.146L7.646 4.146C7.69245 4.09944 7.74762 4.06249 7.80837 4.03729C7.86911 4.01208 7.93423 3.99911 8 3.99911C8.06577 3.99911 8.13089 4.01208 8.19163 4.03729C8.25238 4.06249 8.30755 4.09944 8.354 4.146L11.354 7.146C11.4479 7.23989 11.5006 7.36722 11.5006 7.5C11.5006 7.63278 11.4479 7.76011 11.354 7.854C11.2601 7.94789 11.1328 8.00063 11 8.00063C10.8672 8.00063 10.7399 7.94789 10.646 7.854L8.5 5.707V11.5Z" fill="#1D54A9"/>
	</svg>
</button>
<!-- /.scroll-to-top -->
