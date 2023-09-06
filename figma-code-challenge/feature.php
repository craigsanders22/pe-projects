<section class="feature-section">
	<div>
	<div class="top-text">
		<h3 class="strong-voice">Etiam Null Lectus Molestine At Vulputate.
		</h3>
		<p class="quiet-voice">Neque, Pulvinar Vestibulum Non Aliquam.
		</p>
	</div>

	<div class="square-image">
		<img src="images/square.jpg" alt="">
	</div>
	</div>

	<div class="feature-cards">
		<ol>

		<?php 
			$items = [1, 2, 3, 4, 5, 6]; 

			foreach ($items as $x) { 
			?>
				<li>
					<picture>
					<img src="https://peprojects.dev/images/dot.png" alt=""></picture>
					<div class="card-text">
					<h4 class="strong-voice">Et, Odio Elementum</h4>
					<p class="calm-voice">Aliquam Vehicula Pelletesque Id Mi QUam Ipsum. Arcu Nisi Faubicibus Mattis Etiam.
					</p>
					</div>
				</li>
			<?php 
			}
			?>

		</ol>
	</div>
</section>
