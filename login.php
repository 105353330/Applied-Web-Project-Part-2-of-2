<?php
session_start();
include 'settings.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if user exists
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {
        // Compare hashed password
        if (hash('sha256', $password) === $user['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            header("Location: manage.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "User not found.";
    }
}
?>

<?php include 'includes/header.inc'; ?>

<main class="container" style="margin-top:120px;">
  <h2>Manager Login</h2>
  <form method="post" action="login.php" style="max-width:400px;margin:auto;">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <button type="submit" class="cta-button">Login</button>
  </form>
  <p style="color:red;text-align:center;"><?php echo $error; ?></p>
</main>

<?php include 'includes/footer.inc'; ?>
