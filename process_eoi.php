<?php include 'includes/header.inc'; ?>
// test
<?php include 'includes/nav.inc'; ?>

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

<?php include 'includes/footer.inc'; ?>