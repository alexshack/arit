<?php 
/*
 * Template Name: Просто документ
 */
?>
<?php get_header();?>

<style>
	.privacy-container {
		margin-top: 200px;
		max-width: 900px;
	}
	h1 {
		margin-bottom: 20px;
	}
p {
margin-bottom: 20px;
line-height: 2;
font-size: 16px;
}
</style>
<div class="container privacy-container">
	<h1><?php the_title();?></h1>
	<!-- .description -->
	<div class="description"><?php the_content(); ?></div>
	<!-- /.description -->
</div>

<?php get_footer();?>
