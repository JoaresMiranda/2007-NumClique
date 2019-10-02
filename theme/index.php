<?php get_header(); ?>



	<div id="content">



	<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>

<div class="entry">

			<div id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<small>Postado em <?php the_time('j M Y') ?> por <?php the_author() ?></small>
			
				<div id="HOTWordsTxt" name="HOTWordsTxt">
				
				<?php the_content('Continuar lendo este post &raquo;'); ?>
				
				</div>
				
				<p class="postmetadata">Categoria: <?php the_category(', ') ?> | <?php edit_post_link('Editar', '', ' | '); ?>  <?php comments_popup_link('Comente &#187;', '1 Coment&aacute;rio &#187;', '% Coment&aacute;rios &#187;'); ?></p>



				<div class="posts_similar">

					<h3>Posts relacionados</h3>

					<?php similar_posts(); ?>

				</div>

				

				</div>

</div>



		<?php endwhile; ?>





<div id="navegacao">
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?> 
</div>



	<?php else : ?>

	<div class="entry">

		<h2>Oops!</h2>

		<p>Esta p&aacute;gina n&atilde;o foi encontrada...</p>

	</div>



	<?php endif; ?>



	</div>



<?php get_sidebar(); ?>



<?php get_footer(); ?>

