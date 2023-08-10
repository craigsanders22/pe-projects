
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header class=articles>
		<h2 class='attention-voice'>Our Saloon Originals</h2>

		<p>Where it all began! Our core set of six saloon-inspired candles are close to our hearts - and our noses! </p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($articles as $article) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
