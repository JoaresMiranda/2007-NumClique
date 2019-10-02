<div class="lsidebar">
	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		<?php wp_list_pages('exclude=495&title_li=<h2>Perfil</h2>' ); ?>
		<?php wp_list_categories('show_count=1&title_li=<h2>Categorias</h2>'); ?>
		<?php wp_list_bookmarks(); ?>
	</ul>
	<?php endif; ?>
</div>