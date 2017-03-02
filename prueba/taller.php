<?php

/**

 *

 * Template Name: taller

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
				<?php the_field('p_t_p')?>
		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
				<div class="row">
			
					<a href="<?php  echo site_url('/modalidad-del-taller/');?>" class="btn waves waves-effect btn-ga">
						<span>MODALIDADES DEL TALLER</span>
						<span class="vertical"></span>
						<span class="az-plus"></span> 
						<span class="info-more">INFO</span>
					</a>
					<div class="col l6 m6 s12">
						<div class="white b-secundary">
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
						<div class="white b-secundary">
							
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
				
			</div>
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
				<h1 class="color-p"><?php the_field('t_d')?>	</h1>
				<?php the_field('p_t')?>
				<?php the_field('p_p_v')?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div>
			<div class="row padding-ga">
				<div class="input-field col l12">
					<?php
						$args = array(
							'post_type' => 'informacion',
							'posts_per_page' => '1'
						);
					?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<a  target="_blank" href="<?php the_field('d_p'); ?>" class="btn waves waves-effect btn-ga">
						<span>INFO DE MATERIALES</span>
						<span class="vertical"></span>
						<span class="az-plus"></span> 
					</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="col s12">
					<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '1',
							'meta_key' => 'prod-categoria',
							'meta_value' => 'pintura-left',
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
								<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>" class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
									<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
								</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<div class="col l8 s12 m8 codigo2">
						<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '4',
							'meta_key' => 'prod-categoria',
							'meta_value' => 'pintura-right',
							'order' => 'des'
						);
						?>
							<?php $the_query = new WP_Query($args); ?>
							<?php if ($the_query->have_posts()) : ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<?php $img= get_field('i'); ?>
							<?php $img2= get_field('i2'); ?>
							
							<div class="col l6 s12 m6">
								<div class="cont">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div> 
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
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
				<?php the_field('p_m')?>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div class="row padding-ga">
				<div class="input-field col l12">
					<?php
						$args = array(
							'post_type' => 'informacion',
							'posts_per_page' => '1'
						);
					?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<a   target="_blank" href="<?php the_field('d_ma'); ?>" class="btn waves waves-effect btn-ga">
						<span>INFO DE MATERIALES</span>
						<span class="vertical"></span>
						<span class="az-plus"></span> 
					</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="col s12">
					<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '1',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'madera-left',
							
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
								<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
									<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
								</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<div class="col l8 s12 m8 codigo2">
						<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '4',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'madera-right',
							
							'order' => 'des'
						);
						?>
							<?php $the_query = new WP_Query($args); ?>
							<?php if ($the_query->have_posts()) : ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<?php $img= get_field('i'); ?>
							<?php $img2= get_field('i2'); ?>
							
							<div class="col l6 s12 m6">
								<div class="cont">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div> 
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
				</div>
			</div>
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
				<?php the_field('c_m')?>
				
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div class="row padding-ga">
				<div class="input-field col l12">
					<?php
						$args = array(
							'post_type' => 'informacion',
							'posts_per_page' => '1'
						);
					?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<a  target="_blank"  href="<?php the_field('d_man'); ?>" class="btn waves waves-effect btn-ga">
						<span>INFO DE MATERIALES</span>
						<span class="vertical"></span>
						<span class="az-plus"></span> 
					</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="col s12">
					<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '1',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'mandalas-left',
							
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
								<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
									<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
								</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<div class="col l8 s12 m8 codigo2">
						<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '4',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'mandalas-right',
							
							'order' => 'des'
						);
						?>
							<?php $the_query = new WP_Query($args); ?>
							<?php if ($the_query->have_posts()) : ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<?php $img= get_field('i'); ?>
							<?php $img2= get_field('i2'); ?>
							
							<div class="col l6 s12 m6">
								<div class="cont">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div> 
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
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
				<?php the_field('p_textil')?>
				
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div class="row padding-ga">
				<div class="input-field col l12">
					<?php
						$args = array(
							'post_type' => 'informacion',
							'posts_per_page' => '1'
						);
					?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<a   target="_blank" href="<?php the_field('d_t')?>" class="btn waves waves-effect btn-ga">
						<span>INFO DE MATERIALES</span>
						<span class="vertical"></span>
						<span class="az-plus"></span> 
					</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="col s12">
					<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '1',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'textil-left',
							
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
								<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
									<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
								</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<div class="col l8 s12 m8 codigo2">
						<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '4',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'textil-right',
							
							'order' => 'des'
						);
						?>
							<?php $the_query = new WP_Query($args); ?>
							<?php if ($the_query->have_posts()) : ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<?php $img= get_field('i'); ?>
							<?php $img2= get_field('i2'); ?>
							
							<div class="col l6 s12 m6">
								<div class="cont">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div> 
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
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
				<?php the_field('p_l_l')?>
				
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div class="row padding-ga">
				<div class="input-field col l12">
					<?php
						$args = array(
							'post_type' => 'informacion',
							'posts_per_page' => '1'
						);
					?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					
					<a  target="_blank"  href="<?php the_field('d_l')?>" class="btn waves waves-effect btn-ga">
						<span>INFO DE MATERIALES</span>
						<span class="vertical"></span>
						<span class="az-plus"></span> 
					</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="col s12">
					<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '1',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'lienzo-left',
							
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
								<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
									<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
								</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<div class="col l8 s12 m8 codigo2">
						<?php
						$args = array(
							'post_type' => 'talleres',
							'posts_per_page' => '4',
							'meta_key' => 'prod-categoria',
							
							'meta_value' => 'lienzo-right',
							
							'order' => 'des'
						);
						?>
							<?php $the_query = new WP_Query($args); ?>
							<?php if ($the_query->have_posts()) : ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<?php $img= get_field('i'); ?>
							<?php $img2= get_field('i2'); ?>
							
							<div class="col l6 s12 m6">
								<div class="cont">
									<a href="<?php echo $img2['url']; ?>" alt="<?php echo $img2['title']; ?>" title="<?php echo $img2['title']; ?>"  class="fancy" rel="fancy" title="<?php the_field('c'); ?>">
										<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
									</a>
								</div>
							</div> 
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
			<hr>
		</div>
	</section>
	<section id="precio" class="row">
		<div class="info-interiores">
			<a href="<?php  echo site_url('/modalidad-del-taller/');?>" class="btn waves waves-effect btn-ga">
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