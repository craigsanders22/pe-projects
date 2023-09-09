<section class="feature-section">
<inner-column>
	
	<div class="top-text">
	<?php if($page == 3): ?>
		<p class="quiet-voice">Neque, Pulvinar Vestibulum</p>

		<?php endif; ?>
	
		<h3 class="attention-voice">Etiam Null Lectus Molestine At Vulputate.
		</h3>
		<p class="quiet-voice">Neque, Pulvinar Vestibulum Non Aliquam.
		</p>
	</div>
	<?php if($page == 1): ?>
	<div class="square-image">
		<img src="images/square.jpg" alt="">
	</div>
	<?php endif; ?>
	

	<div class="feature-cards">
		<ol>

		<?php 
			$items = [1, 2, 3, 4, 5, 6]; 

			foreach ($items as $x) { 
			?>
				<li>
					
					<img src="https://peprojects.dev/images/dot.png" alt="">
					<div class="card-text">
					<h4 class="strong-voice">Et, Odio Elementum</h4>
					<p class="quiet-voice">Aliquam Vehicula Pelletesque Id Mi QUam Ipsum. Arcu Nisi Faubicibus Mattis Etiam.
					</p>
					</div>
				</li>
			<?php 
			}
			?>

		</ol>
	</div>
</inner-column>
</section>
