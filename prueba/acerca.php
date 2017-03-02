<?php

/**

 *

 * Template Name: acerca

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

	<section id="acerca" class="row">
			<?php


				$args = array(
					'post_type' => 'informacion',
					'posts_per_page' => '1'
				);
			?>
			<?php $the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<?php $img_fondo1= get_field('f_a'); ?> 
			<img width="100%" src="<?php echo $img_fondo1['url']; ?>" alt="<?php echo $img_fondo1['title']; ?>" title="<?php echo $img_fondo1['title']; ?>">
			

		<div class="info-interiores">
			<div class="col s12 ">
				<div class="header-titulo">
					<?php the_field('p_p')?>	
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

				<div class="logica">
					<?php
					$args = array(
						'post_type' => 'acerca',
						'posts_per_page' => '6',
						'meta_key' => 'acerca',
						
						'meta_value' => 'acerca',
						
						'order' => 'des'
					);
					?>
						<?php $the_query = new WP_Query($args); ?>
						<?php if ($the_query->have_posts()) : ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<?php $img= get_field('i'); ?>
						<?php $img2= get_field('i2'); ?>
						
						<div class="col l4 s12 m4">
							<div class="cont">
								<div class="box">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img  width="100%" src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div>
						</div> 
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<hr>
				</div>	
			</div>
			<div class="col s12 ">
				<div class="header-titulo">
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
							
						<?php the_field('p_r')?>	
						

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="logica">
					<?php
					$args = array(
						'post_type' => 'acerca',
						'posts_per_page' => '6',
						'meta_key' => 'acerca',
						
						'meta_value' => 'resena',
						
						'order' => 'des'
					);
					?>
						<?php $the_query = new WP_Query($args); ?>
						<?php if ($the_query->have_posts()) : ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<?php $img= get_field('i'); ?>
						<?php $img2= get_field('i2'); ?>
						
						<div class="col l4 s12 m4">
							<div class="cont">
								<div class="box">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img  width="100%" src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div>
						</div> 
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?> 
</body> 
</html>