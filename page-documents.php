<?php 
/*
 * Template Name: Документы
 */
?>
<?php get_header();?>
    <main class="subpage">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>
        <h1 class="section__title section__title--page">Документы</h1>
      </div>
      <div class="container container--mobile-fullscreen">
        <div class="licenses-list">
<?php
$docs_args = array(
	'post_type' => 'docs',
	'supress_filters' => false,
	'numberposts' => -1,
	'order' => 'ASC',
);
$docs = get_posts($docs_args);

	function human_filesize($bytes, $decimals = 0) {
		$sz = array(
			0 => ' б',
			1 => ' Кб',
			2 => ' Мб',
			3 => ' Гб'
		);
			  $factor = floor((strlen($bytes) - 1) / 3);
			  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
	}


foreach ($docs as $doc) {
	$id = $doc->to_array()['ID'];
	setup_postdata($doc);
	$file = get_field('file', $id);
	$filesize = filesize( get_attached_file( $file['ID'] ) );
	
?>
                    <div class="licenses-item">
                      <div class="licenses-item-text">
											<p class="licenses-item__title"><?php the_field('name', $id) ?></p>
											<p class="licenses-item__size"><?php echo human_filesize($filesize) ?></p>
                      </div>
											<a href="<?php echo $file['url'] ?>" class="licenses-item-download"> <span class="licenses-item-download__text">Скачать PDF</span>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 0C6.46875 0 5.625 0.84375 5.625 1.875V28.125C5.625 29.1562 6.46875 30 7.5 30H26.25C27.2812 30 28.125 29.1562 28.125 28.125V7.5L20.625 0H7.5Z" fill="#E2E5E7"></path>
                          <path d="M22.5 7.5H28.125L20.625 0V5.625C20.625 6.65625 21.4688 7.5 22.5 7.5Z" fill="#B0B7BD"></path>
                          <path d="M28.125 13.125L22.5 7.5H28.125V13.125Z" fill="#CAD1D8"></path>
                          <path d="M24.375 24.375C24.375 24.8906 23.9531 25.3125 23.4375 25.3125H2.8125C2.29688 25.3125 1.875 24.8906 1.875 24.375V15C1.875 14.4844 2.29688 14.0625 2.8125 14.0625H23.4375C23.9531 14.0625 24.375 14.4844 24.375 15V24.375Z" fill="#F15642"></path>
                          <path d="M5.96143 17.7626C5.96143 17.5151 6.15643 17.2451 6.47049 17.2451H8.20205C9.17705 17.2451 10.0546 17.8976 10.0546 19.1482C10.0546 20.3332 9.17705 20.9932 8.20205 20.9932H6.95049V21.9832C6.95049 22.3132 6.74049 22.4998 6.47049 22.4998C6.22299 22.4998 5.96143 22.3132 5.96143 21.9832V17.7626ZM6.95049 18.1892V20.0567H8.20205C8.70455 20.0567 9.10205 19.6132 9.10205 19.1482C9.10205 18.6242 8.70455 18.1892 8.20205 18.1892H6.95049Z" fill="white"></path>
                          <path d="M11.5224 22.4997C11.2749 22.4997 11.0049 22.3647 11.0049 22.0356V17.7775C11.0049 17.5084 11.2749 17.3125 11.5224 17.3125H13.2389C16.6646 17.3125 16.5896 22.4997 13.3064 22.4997H11.5224ZM11.9949 18.2275V21.5856H13.2389C15.263 21.5856 15.353 18.2275 13.2389 18.2275H11.9949Z" fill="white"></path>
                          <path d="M17.8053 18.2875V19.479H19.7169C19.9869 19.479 20.2569 19.749 20.2569 20.0106C20.2569 20.2581 19.9869 20.4606 19.7169 20.4606H17.8053V22.0346C17.8053 22.2971 17.6188 22.4987 17.3563 22.4987C17.0263 22.4987 16.8247 22.2971 16.8247 22.0346V17.7765C16.8247 17.5075 17.0272 17.3115 17.3563 17.3115H19.9878C20.3178 17.3115 20.5128 17.5075 20.5128 17.7765C20.5128 18.0165 20.3178 18.2865 19.9878 18.2865H17.8053V18.2875Z" fill="white"></path>
                          <path d="M23.4375 25.3125H5.625V26.25H23.4375C23.9531 26.25 24.375 25.8281 24.375 25.3125V24.375C24.375 24.8906 23.9531 25.3125 23.4375 25.3125Z" fill="#CAD1D8"></path>
                        </svg>
                      </a>
                    </div>
<?php } ?>





        </div>
      </div>
    </main>
<?php get_footer();?>
