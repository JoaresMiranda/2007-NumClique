<div class="rsidebar">
	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
		<li>
			<h2>Posts recentes</h2>
			<ul>
				<?php

				$myposts = get_posts('numberposts=15&offset=1');

				foreach($myposts as $post) :

				?>
				<li><a href="<?php the_permalink(); ?>">
					<?php the_title();

				?>
					</a></li>
				<?php endforeach; ?>
			</ul>
		</li>
	</ul>

	<ul>
		<li>
			<h2>Arquivos</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		<?php endif; ?>
	</ul>

	<div id="assinarEmail">
	<form action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=1785297', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
		<p>Assinar NumClique via e-mail:</p>
		<p>
			<input type="text" style="width:170px" name="email"/>
			<input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1785297" name="url"/>
			<input type="hidden" value="NumClique - Informar é simples!" name="title"/>
			<input type="hidden" name="loc" value="pt_BR"/>
			<input type="submit" id="btAssina" value="Assinar" />
		</p>
	</form>
	</div>
	
	<div id="col_rss">
		<ul>
			<li><a href="<?php bloginfo('rss2_url'); ?>">Postagens</a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Coment&aacute;rios</a></li>
		</ul>
	</div>
	<div id="ueba">
		<a href="http://www.ueba.com.br" target="_blank"> <img src="http://www.numclique.net/wp-content/themes/numclique/images/logoUEBA.jpg" alt="Logomarca do site Uêba" /> </a> 
	</div>
	<div id="blogblogs">
		<a href="http://blogblogs.com.br/api/claim/-194051425/167207/33290" target="_blank" rel="me"> <img src="http://www.numclique.net/wp-content/themes/numclique/images/blogblogs.jpg" alt="Adicionar ao BlogBlogs.com.br" /> </a> 
	</div>
	<a href="http://www.argohost.net" target="_blank"><img src="http://www.numclique.net/wp-content/themes/numclique/images/logoArgo.gif" alt="Logomarca ArgoHost.net" /></a> 
</div>
