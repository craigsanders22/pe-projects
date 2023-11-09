
<?php include('../header.php');?>

<main class="contact">

  <section class="contact-intro">
    <div class="inner-column">
    <h1 class="loud-voice">Let's catch up!</h1>
    <h2 class="strong-voice"> I'd love to grab a cup of coffee and discuss my current journey, what I'm passionate about, and learn more about you! Please don't hesitate to reach out via <a href = "mailto: craig.sanders@me.com">email</a> or complete the form below.</h2>


   <h2 class="strong-voice">If you'd rather, feel free to  <a href="tel:+17657210820">send a text or call!</a></h2> 

</div>
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

<?php
    require_once '../modules/contact-cards.php';
    echo generate_contact_cards();
?>







 <div class="substack">
      <iframe src="https://myxwithux.substack.com/embed" width="480" height="320" style="border:2px solid var(--main-primary); background-color: #aea3a2; border-radius: 10px;" frameborder="2" scrolling="no"></iframe>
</div>


</div>

</main>


<?php include('../footer.php');?>


