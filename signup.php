<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
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
</body>
</html>
