<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Resultado da pesquisa</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div class="entry">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>
<br /><br /><?php the_content_rss('', TRUE, '', 50); ?><br /><br />
				<p class="postmetadata">Categoria: <?php the_category(', ') ?> | <?php edit_post_link('Editar', '', ' | '); ?>  <?php comments_popup_link('Sem coment&aacute;rios &#187;', '1 Coment&aacute;rio &#187;', '% Coment&aacute;rios &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

<div id="navegacao">
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>

	<?php else : ?>
	<div class="entry">
		<h2 class="center">Oops!</h2>
		<p>Nada encontrado... ser&aacute; que est&aacute; escrito certinho?</p>

</div>
	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>