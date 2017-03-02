<?php

/**

 *

 * Template Name: galeria

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

	<section id="interiores" class="row">
			<?php
			$args = array(
				'post_type' => 'informacion',
				'posts_per_page' => '1'
			);
		?>
			<?php $the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<?php $img= get_field('i_g'); ?>
			
			<img width="100%" src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>"> 

		
		<div class="info-interiores">
			<div class="header-titulo">
				<?php the_field('g_p_p') ?>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
			<div class="logica">
				
				<?php
					$args = array(
						'post_type' => 'galerias',
						'posts_per_page' => '-1',
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
								<div class="cont-img">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>" class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section id="precio" class="row">
		<div class="info-interiores">
			<a href="inscripcion.php" class="btn waves waves-effect btn-ga">
				<span>MODALIDADES DEL TALLER</span>
				<span class="vertical"></span>
				<span class="az-plus"></span> 
				<span class="info-more">INFO</span>
			</a>
			<div class="col l6 m6 s12">
				<div class="white">
					<?php
					$args = array(
						'post_type' => 'informacion',
						'posts_per_page' => '1'
					);
				?>
				<?php $the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<?php the_field('o_1')?>
								<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="col l6 m6 s12 ">
				<div class="white">
					<?php
					$args = array(
						'post_type' => 'informacion',
						'posts_per_page' => '1'
					);
				?>
				<?php $the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<?php the_field('o_2')?>
								<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				</div>
			</div>
			<p class="right">* No incluye materiales</p>
		</div>
	</section>

	<?php include 'footer.php'; ?> 
</body> 
</html>