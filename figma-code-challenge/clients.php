<section class="client-section">
	<inner-column>
	<div>
	<div class="top-text">
		<h3 class="attention-voice">What Our Clients Say
		</h3>
		<p class="quiet-voice">Neque, Pulvinar Vestibulum Non Aliquam.
		</p>
	</div>



	<div class="carousel-container">
		<ol class="carousel">


		<?php if($page == 1): ?>
		<?php 
			$clients = [1, 2]; 

			foreach ($clients as $x) { 
			?>
				<li class="card">
					
					

				<svg xmlns="http://www.w3.org/2000/svg" width="200" height="40" viewBox="0 0 200 40">
			    <!-- Five filled rectangles for stars -->
			    <rect x="0" y="0" width="40" height="40" fill="#3064a7" />
			    <rect x="50" y="0" width="40" height="40" fill="#3064a7" />
			    <rect x="100" y="0" width="40" height="40" fill="#3064a7" />
			    <rect x="150" y="0" width="40" height="40" fill="#3064a7" />
			    <rect x="200" y="0" width="40" height="40" fill="#3064a7" />
				</svg>


				<div class="card-text">
				<h4 class="calm-voice">Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum.</h4>
				<img src="https://peprojects.dev/images/dot.png" alt="">
				<p class="calm-voice">Courtney Henry</p>
				
				</div>
				</li>
			<?php 
			}
			?>
		<?php endif ; ?>


		<?php if($page == 2): ?>
			<?php 
			$clients = [1]; 

			foreach ($clients as $x) { 
				?>
				<div class="review">

					<div class="attention-voice left-arrow">
						<
					</div>

					<li class="card">

						<div class="card-text">
							<h4 class="attention-voice">"Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum."</h4>

							<div class="profile">
								<img src="https://peprojects.dev/images/dot.png" alt="">
								<div class="profile-text">
								<p class="calm-voice">Courtney Henry</p>
								<h5 class="quiet-voice">Marketing Coordinator
								</p>
								</div>

							</div>
						</li>

						<div class="attention-voice right-arrow">
							>
						</div>
					</div>
					<?php 
				}
				?>
			<?php endif ; ?>

			<?php if($page == 3): ?>
		<?php 
			$clients = [1]; 

			foreach ($clients as $x) { 
			?>
				<li class="card">

				<img class="client-picture" src="images/square.jpg" alt="">

				<div class="card-text">
				<h4 class="strong-voice">"Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum.Et, Odio Elementum."</h4>
				<div class="profile-text">
				<p class="calm-voice">Courtney Henry</p>
				<p class="quiet-voice">Marketing Coordinator
				</p>
			</div>
				
				</div>
				</li>
			<?php 
			}
			?>
		<?php endif ; ?>

		</ol>
	</div>
</div>
</inner-column>
</section>

