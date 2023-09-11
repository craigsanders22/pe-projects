<section class="call-to-action">
	<inner-column>



		<?php if(in_array($page, [1, 2])): ?>
			<section class="intro-area">
				<p class="quiet-voice">Lorem, ipsum, dolor Dictum.
				</p>	
			</section>





			<section class="cta-headline">
				<h1 class="loud-voice">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				</h1>
			</section>








			<section class="hero-buttons">
			    <button class="quote-button quiet-voice">
			        <span class="button-text">Get Free Quotes</span>
			        <span class="icon-container">
			            <img src="images/chevron-right-white.svg" alt="">
			        </span>
			    </button>


			<?php endif ; ?>
			<?php if($page == 2): ?>
			<button class="trial-button quiet-voice">
    <span class="button-text">Free SignUp</span>
    <span class="icon-container">
        <img src="images/chevron-right.svg" alt="">
    </span>
</button>
				
			<?php endif ; ?>
		</section>

	








		<?php if($page == 3): ?>
			<section class= "page3-CTA">

				<div class="cta-text">
					<h1 class="attention-voice">Lorem ipsum dolor sit amet 
					</h1>

					<p class="quiet-voice">Lorem, ipsum, dolor Dictum.
					</p>	

					<div class=cta-email>
						<input type="email" class="quiet-voice" placeholder="Email Address">
						<button>SignUp</button>
					</div>
				</div>


				<img src="images/square.jpg" alt="">
			</div>
		<?php endif ; ?>










	</inner-column>
</section>