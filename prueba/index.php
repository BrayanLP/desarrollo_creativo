<!DOCTYPE html>
<html>
<head>
	<?php include 'meta.php'; ?> 
	<meta property="og:title" content="" > 
	<meta property="og:type" content="website" > 
	<meta property="og:url" content="" > 
	<meta property="og:site_name" content="" >
	
	<?php get_header(); ?>
</head>
<body>
	<?php include 'menu-home.php'; ?> 

	<section id="taller-home" class="row">
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
					<img src="<?php echo $img_fondo1['url']; ?>" alt="<?php echo $img_fondo1['title']; ?>" title="<?php echo $img_fondo1['title']; ?>">
			<div class="info">
				<?php the_field('p_t_p')?>	
				<a href="<?php  echo site_url('/taller'); ?>" class="btn waves waves-effect right  btn-ga"><span>MÁS INFO</span> <span class="vertical"></span> <span class="az-plus"></span></a>
			</div>

		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</section>
	<section id="franja" class="row">
		<div class="fondo"></div>
	</section>
	<section id="galeria" class="row">
		<div class="info">
		<?php
			$args = array(
				'post_type' => 'informacion',
				'posts_per_page' => '1'
			);
		?>
			<?php $the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			
			
			<h1><?php the_field('g_p_p') ?></h1>

		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		<?php
			$args = array(
				'post_type' => 'galerias',
				'posts_per_page' => '6',
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
			<br>
			<br>
			<br>
			<hr>
			<a href="<?php   echo site_url('/galeria/');?>" class="btn waves waves-effect right  btn-ga"><span>MÁS FOTOS</span> <span class="vertical"></span> <span class="az-plus"></span></a>

		</div>
	</section>
	<section id="" class="row acerca-home">
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
			<div class="info">
				<?php the_field('p_p')?>	
				<a href="<?php  echo site_url('/acerca-de'); ?>" class="btn waves waves-effect right  btn-ga"><span>MÁS INFO</span> <span class="vertical"></span> <span class="az-plus"></span></a>
			</div>

		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</section>

	<?php include 'footer.php'; ?> 
</body> 
</html>