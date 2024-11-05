<?php include_once("templates/head.php");?>
<?php include_once("templates/nav.php");?>

  <header>
    <h1>Contact Me</h1>
    <p>Reach out through the form below or connect with me on social media.</p>
    <a href="index.html">Back to Home</a>
  </header>
  <section id="contact">
    <form>
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
    <div class="social-links">
      <a href="#">Instagram</i></a>
      <a href="#">X</a>
      <a href="#">LinkedIn</a>
      <a href="#">GitHub</a>
      <!-- Add other social links as needed -->
    </div>
  </section>
  <?php include_once("templates/footer.php");?> 