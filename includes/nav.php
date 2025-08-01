<div class="topnav">
    <a href="./">Home</a> 
    <a href="about me.php">About Me</a>
    <a href="myproject.php">My Project</a> 
    <a href="myhobbies.php">My Hobbies</a> 
    <a href="contact.php">Contact Us</a>
    <a href="persons.php">Users</a>
    <a href="edit-user.php">Edit User</a>

<div class="topnav-right">
    <?php if(isset($_SESSION['consort'])) { ?>
    <a href="profile.php">Profile</a>
    <a href="proc/processes.php?logout=true">Logout</a>
    <?php } else { ?>
    <a href="signin.php">Sign In</a>
    <a href="signup.php">Sign Up</a>
    <?php } ?>
    </div>
</div>
<div class="header">
    <h1>
    <?php 
$title = explode('.', basename($_SERVER['PHP_SELF']));
print ucwords(reset($title));
    ?>
    </h1>
</div>
