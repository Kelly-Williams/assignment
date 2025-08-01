<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

  <div class="content">
    <h2>Sign Up</h2>
    <form id="signupForm" onsubmit="return validateForm()">
      <input type="text" id="fullname" placeholder="Enter your full name" required /><br>
      <span class="error" id="nameError"></span><br>

      <input type="email" id="email" placeholder="Enter your email address" required /><br>
      <span class="error" id="emailError"></span><br>

      <input type="tel" placeholder="Enter your phone number" required /><br>

      <input type="password" placeholder="Create a password" required /><br>

      <input type="color" required /><br>

      <input type="date" id="dob" required /><br>
      <span class="error" id="dateError"></span><br>

      <input type="range" min="0" max="10" required /><br>

      <input type="file" required /><br>

      <input type="text" placeholder="About You" required /><br>
      <br>
      <input type="submit" value="Sign Up" />
      <a href="signin.html">Already have an account? Sign In</a>
    </form>
  </div>

  <script src="script.js"></script>
<?php
    require 'includes/footer.php';
?>