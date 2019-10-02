<?php get_header(); ?>



<div id="content"> 



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry">

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<small>Postado em <?php the_time('j M Y') ?> por <?php the_author() ?> <!--| Visualiza&ccedil;&otilde;es: <?php if(function_exists('the_views')) { the_views(); } ?> --></small>



<div class="anunciosGoogle">
<script type="text/javascript">
window.google_analytics_uacct = "UA-1502075-4";
</script>

<p>

<script type="text/javascript"><!--

google_ad_client = "pub-0063792419281840";

/* 468x60, topo_content */

google_ad_slot = "7877724226";

google_ad_width = 468;

google_ad_height = 60;

//-->

</script>

<script type="text/javascript"

src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script>

</p>

</div>
			<div id="HOTWordsTxt" name="HOTWordsTxt">

				<?php the_content('<p class="serif">Continuar lendo este post &raquo;</p>'); ?>

			</div>
			

				<?php wp_link_pages(array('before' => '<p class="paginador"><strong>P&aacute;ginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


				<div class="posts_similar">

					<h3>Posts relacionados</h3>

					<?php if(function_exists('similar_posts')){ similar_posts(); } ?>

				</div>

				

			</div>

		</div>



<div class="entry">

	<?php comments_template(); ?>

	</div>



	<?php endwhile; else: ?>

<div class="entry">

		<p>Sorry, no posts matched your criteria.</p>

</div>

<?php endif; ?>



	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

