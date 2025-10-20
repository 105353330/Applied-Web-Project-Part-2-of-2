<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply — Digital Services Victoria</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>


<body>
  <a class="skip-link" href="#main-process">Skip to content</a>

  <!-- Header -->
  <header class="header">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
      <div class="logo-container">
        <img src="images/dsv-logo.jpg" alt="Digital Services Victoria Logo" class="logo">
        <h1>Available Positions</h1>
      </div>
      <nav class="main-nav" aria-label="Primary">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="jobs.html">Jobs</a></li>
          <li><a href="apply.html" class="active" aria-current="page">Apply</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="mailto:info@digitalservicesvictoria.com.au">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
    <main id="main-process">
<?php
require_once "settings.php";
$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

$job_reference_number = trim($_POST['jobRef']);
$first_name = trim($_POST['fname']);
$last_name = trim($_POST['lname']);
$dob = trim($_POST['dob']);
$dob_parts = explode('/', $dob);
$dob_sql = $dob_parts[2] . '-' . $dob_parts[1] . '-' . $dob_parts[0];
$gender = trim($_POST['gender']);
$street_address = trim($_POST['street']);
$suburb = trim($_POST['suburb']);
$state = trim($_POST['state']);
$postcode = trim($_POST['postcode']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$skills = isset($_POST['skills']) ? implode(', ', $_POST['skills']) : '';
$other_skills = trim($_POST['otherskills']);

$insert = "INSERT INTO eoi (job_reference_number, first_name, last_name, dob, gender, street_address, suburb, state, postcode, email, phone, skills, other_skills) VALUES ('$job_reference_number', '$first_name', '$last_name', '$dob_sql', '$gender', '$street_address', '$suburb', '$state', '$postcode', '$email', '$phone', '$skills', '$other_skills')";
mysqli_query($dbconn, $insert);
$eoiNumber = mysqli_insert_id($dbconn);
echo "<h2><br><br>Your Expression of Interest number is: $eoiNumber<br><br></h2>";

?>
</main>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <p>
          <a href="https://christopher-katsoulis.atlassian.net/jira/software/projects/A1WT/boards/1" target="_blank"
            rel="noopener">Jira</a> ·
          <a href="https://github.com/105353330/Applied-Web-Project-Part-1-of-2" target="_blank" rel="noopener">GitHub
            repository</a> ·
          <a href="mailto:info@digitalservicesvictoria.com.au">info@digitalservicesvictoria.com.au</a>
        </p>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Digital Services Victoria. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>

</html>