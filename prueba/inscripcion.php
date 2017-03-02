<?php

/**

 *

 * Template Name: modalidad

 *

 */

?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'meta.php'; ?> 
	<meta property="og:title" content="" > 
	<meta property="og:type" content="website" > 
	<meta property="og:url" content="" > 
	<meta property="og:site_name" content="" >
	<title></title>
	<?php include 'header.php'; ?> 
</head>
<body>
	<?php include 'menu-otros.php'; ?> 

	<section id="taller" class="row">
					<?php


			$args = array(
				'post_type' => 'informacion',
				'posts_per_page' => '1'
			);
		?>
			<?php $the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
		<?php $img_fondo1= get_field('i'); ?> 
		<img width="100%" src="<?php echo $img_fondo1['url']; ?>" alt="<?php echo $img_fondo1['title']; ?>" title="<?php echo $img_fondo1['title']; ?>">
		<div class="info-interiores">
			<div class="header-titulo">
				<?php the_field('p_m_t'); ?>
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
			</div>
			<hr>
		</div>
	</section> 

	<?php include 'footer.php'; ?> 
</body> 
</html>