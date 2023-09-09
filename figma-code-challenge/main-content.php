

<section class="center-content">
	<inner-column>
		<div class="center-text">
			<?php if($page == 2): ?>
				<img class="cloud-icon" src="images/upload.png" alt="">
			<?php endif; ?>
			<p class="quiet-voice">
				Rhoncus, Accumsam Dictum
			</p>


			<?php if($page == 2): ?>
				<h2 class="attention-voice">
					Etiam Nulla Lfulputate. Amet Nunc Molestie At Vulputate.
				</h2>
			<?php endif; ?>

			<?php if(in_array($page, [1, 3])): ?>

				<h2 class="attention-voice">
					Etiam Nulla Lfulputate.
				</h2>

			<?php endif; ?>

			<?php if(in_array($page, [1, 2])): ?>

				<p class="quiet-voice">
					Neque, Pulvinar Vestibulum Non Aliquam.
				</p>
			<?php endif; ?>
		</div>





		<?php if($page == 1): ?>
			<div class="video-player">
				<img src="https://peprojects.dev/images/cloud.png" alt="">
			</div>
		<?php endif; ?>





		<?php if($page == 2): ?>
			<div class="learn-more">
				<button class="calm-voice">Learn More -></button>
			</div>
		<?php endif; ?>








		<?php if($page == 3): ?>
			<div class="article-cards">
				<ol>

					<?php 
					$items = [1, 2, 3]; 

					foreach ($items as $x) { 
						?>
						<li>
							<div class="article-text">
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
			<div class="see-all">
				<button class="calm-voice">See All -></button>
			</div>
		<?php endif; ?>



</inner-column>
</section>
