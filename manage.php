<?php
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'settings.php';

// Redirect to login if not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$message = "";

// Delete EOIs by job reference
if (isset($_POST['delete_jobref'])) {
    $jobref = trim($_POST['jobref']);
    $del_query = "DELETE FROM eoi WHERE job_reference_number = ?";
    $stmt = mysqli_prepare($conn, $del_query);
    mysqli_stmt_bind_param($stmt, "s", $jobref);
    mysqli_stmt_execute($stmt);
    $message = "All EOIs with job reference '$jobref' have been deleted.";
}

// Update EOI status
if (isset($_POST['update_status'])) {
    $EOInumber = $_POST['EOInumber'];
    $status = $_POST['status'];
    $update_query = "UPDATE eoi SET status = ? WHERE EOInumber = ?";
    $stmt = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt, "si", $status, $EOInumber);
    mysqli_stmt_execute($stmt);
    $message = "EOI #$EOInumber status updated successfully.";
}

// Filters and sorting
$where = "";
$order = "ORDER BY EOInumber ASC";

if (!empty($_POST['filter_ref'])) {
    $ref = trim($_POST['filter_ref']);
    $where = "WHERE job_reference_number LIKE '%$ref%'";
} elseif (!empty($_POST['filter_name'])) {
    $name = trim($_POST['filter_name']);
    $where = "WHERE first_name LIKE '%$name%' OR last_name LIKE '%$name%'";
}

if (!empty($_POST['sort_field'])) {
    $field = $_POST['sort_field'];
    $order = "ORDER BY $field ASC";
}

$query = "SELECT * FROM eoi $where $order";
$result = mysqli_query($conn, $query);
?>

<main id="main" style="margin-top: 120px;">
  <section class="hero hero-manage">
    <div class="container">
      <h2>Manage EOIs</h2>
      <p>HR Manager Dashboard — View, Update, Sort, and Delete EOIs.</p>
    </div>
  </section>

  <section class="manage-section">
    <div class="container">
      <p style="text-align:right;">
        <a href="logout.php" class="cta-button" style="background-color:#c53030;">Logout</a>
      </p>

      <?php if (!empty($message)) echo "<p style='color:green;font-weight:bold;'>$message</p>"; ?>

      <!-- Filter and Sort Form -->
      <form method="post" class="filter-form" style="margin-bottom:2rem;">
        <fieldset>
          <legend>Filter and Sort EOIs</legend>
          <label>Filter by Job Reference:</label>
          <input type="text" name="filter_ref" placeholder="e.g., AAD67">
          <label>Filter by Applicant Name:</label>
          <input type="text" name="filter_name" placeholder="e.g., John">
          <label>Sort By:</label>
          <select name="sort_field">
            <option value="EOInumber">EOI ID</option>
            <option value="first_name">First Name</option>
            <option value="last_name">Last Name</option>
            <option value="job_reference_number">Job Reference</option>
            <option value="status">Status</option>
          </select>
          <button type="submit" class="cta-button">Apply</button>
        </fieldset>
      </form>

      <!-- Delete by Job Reference -->
      <form method="post" class="delete-form" style="margin-bottom:2rem;">
        <fieldset>
          <legend>Delete EOIs by Job Reference</legend>
          <label>Enter Job Reference:</label>
          <input type="text" name="jobref" required>
          <button type="submit" name="delete_jobref" class="cta-button" style="background:red;">Delete</button>
        </fieldset>
      </form>

      <!-- Display EOIs Table -->
      <section class="results-section">
        <h3>EOI Results</h3>
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table border='1' cellpadding='10' style='width:100%;border-collapse:collapse;'>
                  <thead>
                    <tr>
                      <th>EOI Number</th>
                      <th>Job Reference</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['EOInumber']}</td>
                        <td>{$row['job_reference_number']}</td>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['status']}</td>
                        <td>
                          <form method='post' style='display:inline;'>
                            <input type='hidden' name='EOInumber' value='{$row['EOInumber']}'>
                            <select name='status'>
                              <option value='New'>New</option>
                              <option value='Current'>Current</option>
                              <option value='Final'>Final</option>
                            </select>
                            <button type='submit' name='update_status' class='cta-button'>Update</button>
                          </form>
                        </td>
                      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No EOIs found.</p>";
        }
        ?>
      </section>
    </div>
  </section>
</main>

<?php include 'includes/footer.inc'; ?>
