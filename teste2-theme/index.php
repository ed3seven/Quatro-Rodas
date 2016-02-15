<?php get_header(); ?>

<body id="" class="home ">

	<div class="banner" style="position: relative;">
		<img src="<?php bloginfo('template_directory');?>/img/banner.png">
	</div>

	<header class="h-header container">
		<h1 class="h-logo">
			<a href="/" title="Quatro Rodas">
			<img src="<?php bloginfo('template_directory');?>/img/logo.png">
			</a>
		</h1>

		<form action="/busca" method="get" class="h-busca-form">
			<label for="Pesquisar">
				<input class="h-busca" type="text" placeholder="Pesquisar" name="qu">
				<img src="<?php bloginfo('template_directory');?>/img/search.png" class="h-busca-ico"></i>
			</label>
			<input type="submit" class="fa fa-search" value="">
		</form>

		<nav class="h-menu-prin">
			<button class="open"></button>
			<ul>
				<button class="close"></button>
				<li class="h-menu-carros">
					<a href="javascript:void(0)">Carros</a>
					<nav class="h-submenu">
						<ul class="h-button">
							<li>
								<a href="javascript:void(0)">Ver todos os carros</a>
							</li>
						</ul>
						<ul class="h-lista">
							<li><a href="javascript:void(0)">Audi</a></li>
							<li><a href="javascript:void(0)">Bentley</a></li>
							<li><a href="javascript:void(0)">BMW</a></li>
							<li><a href="javascript:void(0)">Chevrolet</a></li>
							<li><a href="javascript:void(0)">Chrysler</a></li>
							<li><a href="javascript:void(0)">Citröen</a></li>
							<li><a href="javascript:void(0)">Dodge</a></li>
							<li><a href="javascript:void(0)">Ferrari</a></li>
							<li><a href="javascript:void(0)">Fiat</a></li>
							<li><a href="javascript:void(0)">Ford</a></li>
							<li><a href="javascript:void(0)">Honda</a></li>
							<li><a href="javascript:void(0)">Hyundai</a></li>
							<li><a href="javascript:void(0)">Jac Motors</a></li>
							<li><a href="javascript:void(0)">Jaguar</a></li>
							<li><a href="javascript:void(0)">Jeep</a></li>
							<li><a href="javascript:void(0)">Kia</a></li>
							<li><a href="javascript:void(0)">Lamborghini</a></li>
							<li><a href="javascript:void(0)">Mercedes-Benz</a></li>
							<li><a href="javascript:void(0)">Mitsubishi</a></li>
							<li><a href="javascript:void(0)">Volkswagen</a></li>
						</ul>
					</nav>
				</li>

				<li class="h-menu-testes">
					<a href="javascript:void(0)">Testes</a>
					<nav class="h-submenu">
					<ul class="h-lista-button">
						<li class="is_active"><a href="javascript:void(0)">Ver tudo de testes</a></li>
						<li><a href="javascript:void(0)">Comparativos</a></li>
						<li><a href="javascript:void(0)">Impressões</a></li>
						<li><a href="javascript:void(0)">Longa duração</a></li>
						<li><a href="javascript:void(0)">Teste de Pista</a></li>
					</ul>
					<ul class="h-lista">
						<li>
							<a href="javascript:void(0)">
								<img alt="Punto T-Jet: receita das antigas" src="http://msalx.quatrorodas.abril.com.br/2016/02/11/1453/zOJRd/qr-674-esportivos-pequenos-9121-tif.jpeg?1455210000">
								<p>Punto T-Jet: receita das antigas</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="h-block"><a href="javascript:void(0)">Notícias</a></li>
				<li class="h-block"><a href="javascript:void(0)">Auto-Serviço</a></li>
				<li class="h-block"><a href="javascript:void(0)">Guia de Compras</a></li>
				<li class="h-block"><a href="javascript:void(0)">Tabela FIPE</a></li>
				<li class="h-block"><a href="javascript:void(0)">Assine</a></li>

			</ul>
		</nav>

		<nav class="h-mais-acessados">
			<ul>
				<li><a href="javascript:void(0)">Salão do Automóvel</a></li>
				<li><a href="javascript:void(0)">Renegade</a></li>
				<li><a href="javascript:void(0)">Novo Sandero</a></li>
				<li><a href="javascript:void(0)">Novo KA</a></li>
				<li><a href="javascript:void(0)">HB 20</a></li>
				<li><a href="javascript:void(0)">Duster</a></li>
				<li><a href="javascript:void(0)">Golf</a></li>
				<li><a href="javascript:void(0)">Corolla</a></li>
				<li><a href="javascript:void(0)">Civic</a></li>
				<li><a href="javascript:void(0)">|A-Z|</a></li>
			</ul>
		</nav>

	</header>

	<section class="grid container">
		<ul class="g-destaque">
		<?php $query = new WP_Query( 'showposts=4' ); $count = 1; ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<?php if ( $count == 1 ) : ?>
			<li class="g-space big">
				<a class="g-box" href="javascript:void(0)">
					<figure>
						<?php 
							$very_small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'very-small' );
							$small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' );
							$medium = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
							$big = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' );
						?>
						<source media="(max-width: 479px)" srcset="<?php echo $very_small[0]; ?>, <?php echo $small[0]; ?> 2x">
						<source media="(max-width: 767px)" srcset="<?php echo $small[0]; ?>, <?php echo $medium[0]; ?> 2x">
						<source src="<?php echo $big[0]; ?>">
						<img srcset="<?php echo $big[0]; ?>" alt="This picture loads on non-supporting browsers.">
					</figure>
					<h3 class="g-tag"><?php $cats = get_the_category(); echo $cats[0]->name; ?></h3>
					<h4 class="g-title"><?php the_title(); ?></h4>
				</a>
			</li>

		<?php else : ?>

			<?php if ( $count == 3 ) : ?>

			<li class="g-space publicidade">
				<img srcset="<?php bloginfo('template_directory');?>/img/banner300x250.png">
			</li>

			<?php endif; ?>

			<li class="g-space medium">
				<a class="g-box" href="javascript:void(0)">
					<figure>
						<?php 
							$very_small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'very-small' );
							$small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' );
							$medium = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
							$big = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' );
						?>
						<source media="(max-width: 479px)" srcset="<?php echo $medium[0]; ?>, <?php echo $big[0]; ?> 2x">
						<source media="(max-width: 767px)" srcset="<?php echo $medium[0]; ?>, <?php echo $big[0]; ?> 2x">
						<source src="<?php echo $big[0]; ?>">
						<img srcset="<?php echo $medium[0]; ?>, <?php echo $big[0]; ?> 2x" alt="This picture loads on non-supporting browsers.">
					</figure>
					<h3 class="g-tag"><?php $cats = get_the_category(); echo $cats[0]->name; ?></h3>
					<h4 class="g-title"><?php the_title(); ?></h4>
				</a>
			</li>

		<?php endif; ?>
		<?php $count++; endwhile; endif; ?>
		</ul>
	</section>


	<section class="card container">
		<ul class="c-destaque">
		<?php $query = new WP_Query( 'showposts=4&offset=4' ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
			<li class="c-space medium">
				<a class="c-box" href="javascript:void(0)">
					<figure>
						<?php 
							$very_small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'very-small' );
							$small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' );
							$medium = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
							$big = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' );
						?>
						<source media="(max-width: 479px)" srcset="<?php echo $medium[0]; ?>, <?php echo $big[0]; ?> 2x">
						<source media="(max-width: 767px)" srcset="<?php echo $medium[0]; ?>, <?php echo $big[0]; ?> 2x">
						<source src="<?php echo $big[0]; ?>">
						<img srcset="<?php echo $medium[0];  ?>, <?php echo $big[0]; ?> 2x" alt="This picture loads on non-supporting browsers.">
					</figure>
					<h3 class="c-tag"><?php $cats = get_the_category(); echo $cats[0]->name; ?></h3>
					<h4 class="c-title"><?php the_title(); ?></h4>
					<h5 class="c-subtitle"><?php echo get_post_meta( get_the_ID(), 'subtitle', true ); ?></h5>
				</a>
			</li>

		<?php endwhile; endif; ?>
		</ul>
	</section>

</body>
</html>