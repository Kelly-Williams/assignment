<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="topnav">
    <a href="./">Home</a> | <a href="about me.html">About Me</a> | <a href="myproject.html">My Project</a> | <a href="myhobbies.html">My Hobbies</a> | <a href="contact.html">Contact Us</a>
    <div class="topnav-right">
      <a href="signin.html">Sign In</a> | <a href="signup.html">Sign Up</a>
    </div>
  </div>

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
</body>
</html>
