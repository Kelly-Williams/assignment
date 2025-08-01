<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

  <div class="content">
    <h2>Contact Me</h2>
    <form id="contactForm" onsubmit="return validateContactForm()">
      <input type="text" id="fullname" placeholder="Enter your full name" required /><br>
      <span class="error" id="nameError"></span><br>

      <input type="email" id="email" placeholder="Enter your email address" required /><br>
      <span class="error" id="emailError"></span><br>

      <input type="tel" id="phone" placeholder="Enter your phone number" required /><br>
      <span class="error" id="phoneError"></span><br>

      <select id="reason" required>
        <option value="" disabled selected>Select Reason for Contact</option>
        <option value="feedback">Feedback</option>
        <option value="support">Support</option>
        <option value="general">General Inquiry</option>
      </select><br><br>

      <select id="contactMethod" required>
        <option value="" disabled selected>Select Contact Method</option>
        <option value="email">Email</option>
        <option value="phone">Phone</option>
        <option value="chat">Chat</option>
      </select><br><br>

      <select id="category" required>
        <option value="" disabled selected>Select Category</option>
        <option value="general">General</option>
        <option value="technical">Technical</option>
        <option value="billing">Billing</option>
      </select><br><br>

      <textarea name="message" rows="5" cols="30" placeholder="Enter your message here..." required></textarea><br><br>

      <input type="submit" value="Send Message" />
      <input type="reset" value="Clear" />
    </form>
  </div>

  <script src="script.js"></script>
<?php
    require 'includes/footer.php';
?>
