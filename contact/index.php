
<?php include('../header.php');?>

<main class="contact">

  <section class="contact-intro">
    <h1 class="loud-voice">Let's catch up!</h1>
    <h2 class="strong-voice"> I'd love to grab a cup of coffee and discuss my current journey, what I'm passionate about, and learn more about you! Please don't hesitate to reach out via <a href = "mailto: craig.sanders@me.com">email</a> or shoot me a <a href="tel:+17657210820">text or call</a>! 

    <h2 class="strong-voice">Or send me a quick message below!</h2>


  </section>



  <form action="functions.php" method="post" class="contact-form">
  <div class="inner-column">
      <div class="container">
        <h2 class="attention-voice">Contact Me</h2>
        <form action="#" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
  </div>

 </form>

 <h2 class= "attention-voice">Other ways to see what I'm up to: </h2>
<div class=contact-cards>
        <div class="link">

          <div class="icon">

            <picture>
              <img src="assets/email.gif">
            </picture>
          </div>

          <div class="link">
            <a href="mailto: craig.sanders@me.com">Email Me</a>

            </a>
          </div>
        </div>

        <div class="link">
          <div class="icon">

            <picture>
              <img src="assets/coding.gif">
            </picture>
          </div>

          <div class="link2">
            <a href="https://codepen.io/craigsanders22">Codepen</a>

          </div>
        </div>
        <div class="link">
          <div class="icon">

            <picture>
              <img src="assets/society.gif">
            </picture>
          </div>

          <div class="link3">
            <a href="https://www.linkedin.com/in/craig-sanders-b0ba3525/">LinkedIn</a>

          </div>
        </div>

        <div class="link">
          <div class="icon">

            <picture>
              <img src="assets/php.gif">
            </picture>
          </div>

          <div class="link4">
            <a href="https://github.com/craigsanders22">Github</a>

          </div>
        </div>
      </div>
    </div>
</main>


<?php include('../footer.php');?>





