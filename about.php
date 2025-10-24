<?php 
include('header.inc'); 
include('settings.php'); 
?>

<main id="main">

  <!-- Hero Section -->
  <section class="hero hero-about" role="banner">
    <div class="container">
      <h2>About Digital Services Victoria</h2>
      <p>Delivering secure and innovative digital services that improve government and community outcomes.</p>
    </div>
  </section>

  <section class="about-section">
    <div class="about-content">

      <!-- Group Info -->
      <div class="group-info" role="region" aria-labelledby="group-info-heading">
        <h2 id="group-info-heading">Group Information</h2>
        <ul class="nested-list">
          <li>Group Name: Digital Services Victoria
            <ul>
              <li>Class Details:
                <ul>
                  <li>Swinburne University of Technology</li>
                  <li>School of Science, Computing and Engineering Technologies</li>
                  <li>Unit: COS10026 – Web Technology Project</li>
                  <li>Project Part 2 of 2 – Applied Web Project</li>
                  <li>Semester 2 | 2025</li>
                  <li>Class Time: 12.30 PM – 2.30 PM</li>
                  <li>Location: ATC Building 325</li>
                </ul>
              </li>
              <li>Tutor: Ms Razeen Hashmi</li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- Group Photo -->
      <figure class="group-photo">
        <img src="images/group-photo.jpg" alt="Digital Services Victoria team group photo" width="600" height="400">
        <figcaption>Team Members: Christopher, Patrick, Shehan – Photo courtesy of Digital Services Victoria Team.</figcaption>
      </figure>

      <!-- Member Contributions (Loaded from Database) -->
      <section class="member-contributions" aria-labelledby="member-contrib-heading">
        <h2 id="member-contrib-heading">Member Contributions</h2>
        <div class="contributions-grid">
          <?php
          // Fetch data from the 'about' table
          $query = "SELECT * FROM about";
          $result = mysqli_query($conn, $query);

          if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='contribution-card'>
                      <div class='member-header'>
                        <h3>" . htmlspecialchars($row['name']) . "</h3>
                        <span class='student-id'>" . htmlspecialchars($row['student_id']) . "</span>
                      </div>
                      <dl>
                        <dt>Role</dt>
                        <dd>" . htmlspecialchars($row['role']) . "</dd>
                        <dt>Project 1 Contribution</dt>
                        <dd>" . htmlspecialchars($row['project1_contribution']) . "</dd>
                        <dt>Project 2 Contribution</dt>
                        <dd>" . htmlspecialchars($row['project2_contribution']) . "</dd>
                      </dl>
                      <blockquote><q lang='" . htmlspecialchars($row['language']) . "'>" . htmlspecialchars($row['quote']) . "</q></blockquote>
                    </div>";
            }
          } else {
            echo "<p>No member contribution data found in database.</p>";
          }
          ?>
        </div>
      </section>

      <!-- Team Profile Table -->
      <section class="team-profile" aria-labelledby="team-profile-heading">
        <h2 id="team-profile-heading">Team Profile</h2>
        <table class="team-table">
          <caption>Team Members’ Skills and Interests</caption>
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Programming Skills</th>
              <th scope="col">Personal Interests</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Shehan Ariyarathna</td>
              <td>HTML5, CSS3, JavaScript</td>
              <td>Web Development, UI Design</td>
            </tr>
            <tr>
              <td>Patrick Ward</td>
              <td>PHP, SQL, React</td>
              <td>Database Design, System Architecture</td>
            </tr>
            <tr>
              <td>Christopher Katsoulis</td>
              <td>Python, Java</td>
              <td>Cloud Computing, DevOps</td>
            </tr>
          </tbody>
        </table>
      </section>

      <!-- Additional Info / Reflection -->
      <section class="additional-info" aria-labelledby="reflection-heading">
        <h2 id="reflection-heading">Additional Information / Reflection</h2>

        <div class="info-section">
          <h3>Team Workflow</h3>
          <p>We used GitHub and Jira for collaboration, with each member assigned a set of pages and version control responsibility. Weekly meetings ensured progress and problem-solving transparency.</p>
        </div>

        <div class="info-section">
          <h3>Learning Outcomes</h3>
          <ul class="info-list">
            <li>Improved PHP and MySQL skills for dynamic website integration.</li>
            <li>Enhanced accessibility through ARIA and WCAG best practices.</li>
            <li>Learned modular coding with PHP includes for efficient maintenance.</li>
            <li>Understood database normalization and secure data retrieval.</li>
          </ul>
        </div>

        <div class="info-section">
          <h3>Future Enhancements</h3>
          <p>We plan to integrate real-time data visualization and REST APIs for external job feeds in future iterations.</p>
        </div>
      </section>

    </div>
  </section>
</main>

<?php include('footer.inc'); ?>
