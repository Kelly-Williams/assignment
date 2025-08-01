<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

  <div class="content">
    <h2>Sign In</h2>
    <form id="signinForm" onsubmit="return validateSignIn()">
      <input type="text" id="username" placeholder="Enter your username" required /><br>
      <span class="error" id="usernameError"></span><br>

      <input type="password" id="password" placeholder="Enter your password" required /><br>
      <span class="error" id="passwordError"></span><br>

      <br>
      <input type="submit" value="Sign In" />
      <a href="signup.html">Don't have an account? Sign Up</a>
    </form>
  </div>

  <script src="script.js"></script>
<?php
    require 'includes/footer.php';
?>