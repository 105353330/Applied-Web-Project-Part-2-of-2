<?php include 'includes/header.inc'; ?>
<?php include 'includes/nav.inc'; ?>
<?php include 'settings.php'; ?>

<main id="main">
  <section class="hero hero-about">
    <div class="container">
      <h2>About Digital Services Victoria</h2>
      <p>Delivering trusted digital services to support government and the community.</p>
    </div>
  </section>

  <section class="about-section">
    <div class="about-content">

      <!-- Group Info -->
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

      <!-- Team Photo -->
      <figure class="group-photo">
        <img src="images/group-photo.jpg" alt="Digital Services Victoria Team group photo" width="600" height="600">
        <figcaption>
          Team Members: Christopher, Patrick, Shehan. 
          Image courtesy of Digital Services Victoria Team.
        </figcaption>
      </figure>

      <!-- Member Contributions -->
      <section class="member-contributions" aria-labelledby="member-contrib-heading">
        <h2 id="member-contrib-heading">Member Contributions</h2>
        <div class="contributions-grid">
          <?php
          // ✅ Database query for member contributions
          $query = "SELECT * FROM about";
          $result = mysqli_query($conn, $query);

          if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='contribution-card'>
                      <h3>{$row['name']}</h3>
                      <p><strong>Student ID:</strong> {$row['student_id']}</p>
                      <p><strong>Role:</strong> {$row['role']}</p>
                      <p><strong>Project 1 Contribution:</strong> {$row['project1_contribution']}</p>
                      <p><strong>Project 2 Contribution:</strong> {$row['project2_contribution']}</p>
                      <blockquote><q lang='{$row['language']}'>{$row['quote']}</q></blockquote>
                    </div>";
            }
          } else {
            echo "<p>No member contribution data found.</p>";
          }
          ?>
        </div>
      </section>

      <!-- Team Profile -->
      <section class="team-profile" aria-labelledby="team-profile-heading">
        <h2 id="team-profile-heading">Team Profile</h2>
        <table class="team-table">
          <caption>Team Members’ Skills and Interests</caption>
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Programming Skills</th>
              <th scope="col" colspan="2">Personal Interests</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Shehan Ariyarathna</td>
              <td>HTML5, CSS3, JavaScript</td>
              <td>Web Development</td>
              <td>UI Design</td>
            </tr>
            <tr>
              <td>Patrick Ward</td>
              <td>React, Node.js</td>
              <td>Database Design</td>
              <td>System Architecture</td>
            </tr>
            <tr>
              <td>Christopher Katsoulis</td>
              <td>Python, Java</td>
              <td colspan="2">Cloud Computing, DevOps</td>
            </tr>
          </tbody>
        </table>
      </section>

      <!-- Reflection Section -->
      <section class="additional-info">
        <h2>Additional Info / Reflection</h2>
        <div class="info-section">
          <h3>Team Workflow</h3>
          <p>We collaborated using Jira and GitHub, assigning tasks evenly and performing peer reviews to ensure quality.</p>
        </div>
        <div class="info-section">
          <h3>Learning Outcomes</h3>
          <p>We developed stronger PHP, MySQL, and accessibility design skills by creating dynamic, database-driven pages.</p>
        </div>
      </section>

    </div>
  </section>
</main>

<?php include 'includes/footer.inc'; ?>
