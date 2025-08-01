<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';

$user_id = $_GET['id'] ?? null;
if (!$user_id) {
    echo "User ID is required.";
    exit;
}

$spot_users = "SELECT * FROM users left join roles using (roleId) left join gender using (genderId) WHERE users.userId = ? ORDER BY users.fullname DESC";
$stmt = $conn->prepare($spot_users);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$edit_res = $stmt->get_result()->fetch_assoc();

if (!$edit_res) {
    echo "User not found.";
    require 'includes/footer.php';
    exit;
}
?>
<div class="row">
    <div class="content">
        <h2>Edit <?php print $edit_res['fullname']; ?></h2>

<form action="proc/processes.php" method="post">
    <input type="text" name="fullname" placeholder="Update your full name" value="<?php print $edit_res['fullname']; ?>" required/><br>

    <input type="email" name="email" placeholder="Update your email address" value="<?php print $edit_res['email']; ?>" required /><br>
    <input type="tel" name="phone" placeholder="Update your phone number" maxlength="13" value="<?php print $edit_res['phone']; ?>" required /><br>

<select name="genderId" required>
    <option value="<?php print $edit_res['genderId']; ?>"><?php print $edit_res['gender']; ?></option>
    <?php
    $spot_gender = "select * from gender";
    $gen_result = $conn->query($spot_gender);
    while ($row = $gen_result->fetch_assoc()) {
        echo "<option value='" . $row['genderId'] . "'>" . $row['gender'] . "</option>";
    }
    ?>
</select>

<select name="roleId" required>
    <option value="<?php print $edit_res['roleId']; ?>"><?php print $edit_res['role']; ?></option>
    <?php
    $spot_role = "select * from roles";
    $rol_result = $conn->query($spot_role);
    while ($row = $rol_result->fetch_assoc()) {
        if ($row['role'] == 'Admin') {
            continue;
        }
        echo "<option value='" . $row['roleId'] . "'>" . $row['role'] . "</option>";
    }
    ?>
</select>
    <input type="text" name="username" placeholder="Update username" value="<?php print $edit_res['username']; ?>" required /><br>
<br>
    <input type="submit" name ="update_user" value="Update <?php print $edit_res['fullname']; ?>" /> <a href="persons.php">Cancel</a>
    <input type="hidden" name="userId" value="<?php print $user_id; ?>" />
</form>

    </div>
    <div class="sidebar">
                <h2>Side Bar</h2>
        <p>We are a team of dedicated professionals committed to delivering high-quality services and products.</p>
        <p>This is the about page. It contains information about the website, its purpose, and the team behind it. 
        You can find details on our mission, vision, and values here. We aim to provide a comprehensive overview of 
        our services and how we can help you achieve your goals.</p>
    </div>
</div>
<?php
    require 'includes/footer.php';
?>