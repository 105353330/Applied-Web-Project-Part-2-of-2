<?php
$body_id = '';
$page_title = 'About Us — Digital Services Victoria';
$page_description = 'Team profile, member contributions, and reflections for Digital Services Victoria.';
$active = 'about';
include __DIR__ . '/includes/header.inc';
include __DIR__ . '/includes/nav.inc';
require_once __DIR__ . '/includes/settings.php';
?>
<main id="main">
  <section class="hero hero-about">
    <div class="container">
      <h2>About Digital Services Victoria</h2>
      <p>Delivering trusted digital services to support government and the community.</p>
    </div>
  </section>

  <section class="about-section">
    <div class="about-content">
      <div class="group-info">
        <h2>Group Information</h2>
        <ul class="nested-list">
          <li>Group Name: Digital Services Victoria
            <ul>
              <li>Class Details:
                <ul>
                  <li>Swinburne University of Technology</li>
                  <li>School of Science, Computing and Engineering Technologies</li>
                  <li>COS10026 Web Technology Project</li>
                  <li>Applied Web Project Part 2 of 2</li>
                  <li>Semester 2, 2025</li>
                  <li>Time: 12.30 PM to 2.30 PM</li>
                  <li>Location: ATC Building, 325</li>
                </ul>
              </li>
              <li>Tutor: Ms. Razeen Hashmi</li>
            </ul>
          </li>
        </ul>
      </div>

      <figure class="group-photo">
        <img src="images/group-photo.jpg" alt="Digital Services Victoria team group photo" width="600" height="600">
        <figcaption>Team Members: Christopher (left), Patrick (middle), Shehan (right). Photo © Digital Services Victoria Team.</figcaption>
      </figure>

      <section class="member-contributions" aria-labelledby="member-contrib-heading">
        <h2 id="member-contrib-heading">Member Contributions</h2>
        <div class="contributions-grid">
          <?php
          if ($conn) {
            $query = "SELECT * FROM about";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='contribution-card'>
                        <h3>" . htmlspecialchars($row['name']) . "</h3>
                        <p><strong>Student ID:</strong> " . htmlspecialchars($row['student_id']) . "</p>
                        <p><strong>Role:</strong> " . htmlspecialchars($row['role']) . "</p>
                        <p><strong>Project 1 Contribution:</strong> " . htmlspecialchars($row['project1_contribution']) . "</p>
                        <p><strong>Project 2 Contribution:</strong> " . htmlspecialchars($row['project2_contribution']) . "</p>
                        <blockquote><q lang='" . htmlspecialchars($row['language']) . "'>" . htmlspecialchars($row['quote']) . "</q></blockquote>
                      </div>";
              }
            } else {
              echo "<p>No member contribution data found in the database.</p>";
            }
            mysqli_close($conn);
          } else {
            echo "<p>Database connection failed. Please check your settings.php file.</p>";
          }
          ?>
        </div>
      </section>

      <section class="additional-info">
        <h2>Additional Info / Reflection</h2>
        <div class="info-section">
          <h3>Team Workflow</h3>
          <p>We collaborated via Jira and GitHub with code reviews and shared templates for consistency.</p>
        </div>
        <div class="info-section">
          <h3>Learning Outcomes</h3>
          <p>We converted static HTML to modular PHP, improved accessibility, and aligned with WCAG and validation.</p>
        </div>
      </section>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.inc'; ?>
