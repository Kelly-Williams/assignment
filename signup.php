<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

  <div class="content">
    <h2>Sign Up</h2>
    <form id="signupForm" onsubmit="return validateForm()">

    <select name="genderId" required>
    <option value="">Select your gender</option>
    <?php
    $spot_gender = "select * from gender";
    $result = $conn->query($spot_gender);
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['genderId'] . "'>" . $row['gender'] . "</option>";
    }
    ?>
</select>

<select name="roleId" required>
    <option value="">Select your role</option>
    <?php
    $spot_role = "select * from roles";
    $result = $conn->query($spot_role);
    while ($row = $result->fetch_assoc()) {
        if ($row['role'] == 'Admin') {
            continue; 
        }
        echo "<option value='" . $row['roleId'] . "'>" . $row['role'] . "</option>";
    }
    ?>
</select>

      <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required /><br>
      <span class="error" id="nameError"></span><br>

      <input type="email" id="email" name="email" placeholder="Enter your email address" required /><br>
      <span class="error" id="emailError"></span><br>

      <input type="tel" name="phone" placeholder="Enter your phone number" required /><br>

      <input type="password" name="password" placeholder="Create a password" required /><br>

      <input type="color" name="favorite_color" required /><br>

      <input type="date" id="dob" name="dob" required /><br>
      <span class="error" id="dateError"></span><br>

      <input type="range" name="range_value" min="0" max="10" required /><br>

      <input type="file" name="profile_file" required /><br>

      <input type="text" name="about" placeholder="About You" required /><br>
      <br>
      <input type="submit" value="Sign Up" />
      <a href="signin.html">Already have an account? Sign In</a>
    </form>
  </div>

  <script src="script.js"></script>
<?php
    require 'includes/footer.php';
?>