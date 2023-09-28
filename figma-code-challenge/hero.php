<section class="hero">
	<div class="inner-column">
		<section class="headline">
			<h1 class="loud-voice">Arcu Suscipit Massa Aliquam Proin Amet</h1>
		</section>
		<section class="text-area">
			<p class="calm-voice">Luctus felis sit lectus tristique diam ornare bibendum. Arcu auctor suspendisse luctus amet bibendum pellentesque lorem. Malesuada lobortis tristique tortor,</p>
		</section>
		<?php if($page == 1): ?>
		<section class="hero-buttons">
			<button class="get-started quiet-voice">Get Started</button>
			<button class="trial-button quiet-voice">Start Free Trial</button>
		</section>
		<?php elseif($page == 2): ?>
		<section class="hero-buttons">
			<a class="button calm-voice get-started" href="#">Get Started</a>
		</section>
		<?php elseif($page == 3): ?>
		<section class="hero-buttons">
			<input type="email" class="email" placeholder="Email Address">
			<button>SignUp</button>
		</section>
		<?php endif; ?>
	</div>
</section>

<div class="client-chevron">
	<img src="images/chevron-right.svg" alt="">
</div>

<?php 
$clients = [1]; 
if($page == 2): 
	foreach ($clients as $x): ?>
<div class="review">
	<li class="card">
		<div class="card-text">
			<h4 class="attention-voice">"Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum."</h4>
			<div class="profile">
				<img src="images/avatar.svg" alt="">
				<div class="profile-text">
					<p class="strong-voice">Courtney Henry</p>
					<h5 class="quiet-voice">Marketing Coordinator</h5>
				</div>
			</div>
		</div>
	</li>
<?php endforeach; 
elseif($page == 3):
	foreach ($clients as $x): ?>
	<li class="card">
		<img class="client-picture" src="images/square.jpg" alt="">
		<div class="card-text">
			<h4 class="strong-voice">"Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum.Et, Odio Elementum."</h4>
			<div class="profile-text">
				<p class="calm-voice">Courtney Henry</p>
				<p class="quiet-voice">Marketing Coordinator</p>
			</div>
		</div>
	</li>
<?php endforeach; endif; ?>
</div>
</div>
