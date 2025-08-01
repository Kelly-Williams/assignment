<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

  <!-- Sidebar and main content wrapper -->
  <div class="main-container">
    <!-- Main Content Section -->
    <div class="content">
      <h1>Welcome to My Website</h1>
      <p>This is the homepage. Use the navigation links above or on the sidebar to explore more about me, my hobbies, and my projects.</p>

      <h2>What You will Find Here</h2>
      <ul>
        <li>An overview of who I am and what I do</li>
        <li> Cool projects I have built or contributed to</li>
        <li> My hobbies, interests, and creative side</li>
        <li> Ways you can reach out or connect with me</li>
      </ul>

      <h2>Why This Site?</h2>
      <p>This personal website is a central place to showcase my work, passions, and journey. Whether you're a friend, a fellow developer, or someone curious, I hope you find something interesting here.</p>
    </div>

  </div>

    <!-- Sidebar Section -->
    <div class="sidebar">

      <h3>Latest News</h3>
      <p> Just launched my new project — check it out on the Projects page!</p>

      <h3>Tip of the Day</h3>
      <p>"Stay curious. Keep learning. Build something amazing."</p>
    </div>

    
<?php
    require 'includes/footer.php';
?>
