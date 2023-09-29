</main>

<footer class="site-footer">
	<inner-column>
		<div class="footer-nav">
			<div class="site-map">

				<nav class="product">
					<h3 class="strong-voice">
					Product</h3>
					<ul>
						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>
						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>
						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

					</ul>
				</nav>

				<nav class="information">
					<h3 class="strong-voice">
					Information</h3>
					<ul>
						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>
						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

					</ul>
				</nav>

				<nav class="company">
					<h3 class="strong-voice">
					Company</h3>
					<ul>
						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>
						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>

						<li>
							<a href="#" class="quiet-voice">Link Here</a>
						</li>
					</ul>

				</div>
				<div class="subscribe">

					<h3 class="strong-voice">
					Subscribe</h3>
					<form action="submitForm()" method="post" class="form-container">
						<label for="email" class="email-voice"></label>
						<input type="email" id="email" name="email" class="email-voice" placeholder="Email Address" required />
						<button type="submit" class="submit-button">&rsaquo;</button>
					</form>


					<p class="quiet-voice">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea facere beatae voluptas non eaque.</p>

				</div>
			</div>

			<div class="bottom-footer">

				<nav class='logo'>

					<?php if($page == 2): ?>

						<img src="images/blue-logo.svg" alt="">

					<?php endif; ?>

					<?php if(in_array($page, [1, 3])): ?>

						<img src="images/white-logo.svg" alt="">

					<?php endif; ?>
				</nav>

				<nav class="legal-menu">
					<ul>
						<li><a href="#" class="quiet-voice">Terms</a></li>
						<li><a href="#" class="quiet-voice">Privacy</a></li>
						<li><a href="#" class="quiet-voice">Cookies</a></li>
					</ul>
				</nav>

				<nav class="social-menu">

				<img src="images/linkedin.svg" width="25" height="25" alt="A circle">
					<img src="images/facebook.svg" width="25" height="25" alt="A circle">

				<img src="images/git.svg" width="25" height="auto" alt="A circle">

			</nav>

		</nav>
	</div>
</div>

</inner-column>
</footer>
</body>

</html>