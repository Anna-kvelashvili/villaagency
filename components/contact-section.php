
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $subject = htmlspecialchars($_POST["subject"]);
  $message = htmlspecialchars($_POST["message"]);
  echo "<div style='text-align:center; color:green;'>Thanks, $name! Your message was received.</div>";
}
?>

<div class="contact section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| Contact Us</h6>
          <h2>Get In Touch With Our Agents</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="contact-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
       <div id="map">
  <iframe 
    src="https://www.google.com/maps/embed?pb=..._სრული_ბმული_აქ..." 
    width="100%" 
    height="500" 
    frameborder="0" 
    style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
        <div class="row mt-4">
          <div class="col-lg-6">
            <div class="item phone">
              <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
              <h6>010-020-0340<br><span>Phone Number</span></h6>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="item email">
              <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
              <h6>info@villa.co<br><span>Business Email</span></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
  <form id="contact-form" action="" method="post" onsubmit="return showConfirmationMessage(event)">
    <div class="row">
      <div class="col-lg-12">
        <fieldset>
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" placeholder="Your Name..." required>
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" placeholder="Your E-mail..." required>
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <label for="subject">Subject</label>
          <input type="text" name="subject" id="subject" placeholder="Subject...">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <label for="message">Message</label>
          <textarea name="message" id="message" placeholder="Your Message"></textarea>
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <button type="submit" id="form-submit" class="orange-button">Send Message</button>
        </fieldset>
      </div>
    </div>
  </form>
</div>

<div id="confirmation-message" style="display:none; text-align:center; background-color:#fff; color:#000; font-size:24px; padding:50px; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); border: 2px solid #000;">
  Your message has been received, please wait for a response.
</div>

<script>
  function showConfirmationMessage(event) {
    event.preventDefault(); 

 
    document.getElementById('confirmation-message').style.display = 'block';


    document.getElementById('contact-form').style.display = 'none';
  }
</script>

    </div>
  </div>
</div>
