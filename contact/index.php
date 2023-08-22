
<?php include('../header.php');?>

<main class="contact">
  <form action="send_email.php" method="post" class="contact-form">
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
</main>


<?php include('../footer.php');?>





