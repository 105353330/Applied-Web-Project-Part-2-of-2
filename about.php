<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us — Digital Services Victoria</title>
  <link rel="stylesheet" href="styles/styles.css">

</head>
<body class="about">
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="header">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
      <div class="logo-container">
        <img src="images/dsv-logo.jpg" alt="Digital Services Victoria Logo" class="logo">
        <h1>Digital Services Victoria</h1>
      </div>
      <nav class="main-nav" aria-label="Primary">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="jobs.html">Jobs</a></li>
          <li><a href="apply.html">Apply</a></li>
          <li><a href="about.html" class="active" aria-current="page">About</a></li>
          <li><a href="mailto:info@digitalservicesvictoria.com.au">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

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
                    <li>Applied Web Project Part 1 of 2</li>
                    <li>Semester 2, 2025</li>
                    <li>Time: 12.30 PM to 2.30 PM</li>
                    <li>Location: ATC Building, 325</li>
                  </ul>
                </li>
                <li>Team Members:
                  <ul>
                    <li>105305593 - Shehan Ariyarathna</li>
                    <li>105353330 - Patrick Ward</li>
                    <li>105924338 - Christopher Katsoulis</li>
                  </ul>
                </li>
                <li>Tutor: Ms. Razeen Hashmi</li>
              </ul>
            </li>
          </ul>
        </div>

        <figure class="group-photo">
          <img src="images/group-photo.jpg" alt="Digital Services Victoria Team" width="600" height="600">
          <figcaption>Team Members: Christopher (left), Patrick (middle), Shehan (right)</figcaption>
        </figure>

        <section class="member-contributions" aria-labelledby="member-contrib-heading">
          <h2 id="member-contrib-heading">Member Contributions</h2>
          <div class="contributions-grid">

            <div class="contribution-card">
              <div class="member-header">
                <h3>Shehan Ariyarathna</h3>
                <span class="student-id">105305593</span>
              </div>
              <dl>
                <dt>Role</dt>
                <dd>Index page & About page</dd>
                <dt>Quote</dt>
                <dd><q>Less is more.</q></dd>
                <dt>Language</dt>
                <dd><span lang="en">English</span> (<span lang="si">Sinhala</span>)</dd>
              </dl>
            </div>

            <div class="contribution-card">
              <div class="member-header">
                <h3>Patrick Ward</h3>
                <span class="student-id">105353330</span>
              </div>
              <dl>
                <dt>Role</dt>
                <dd>Jobs Page & Styles</dd>
                <dt>Quote</dt>
                <dd><q>Keep it simple.</q></dd>
                <dt>Language</dt>
                <dd><span lang="en">English</span></dd>
              </dl>
            </div>

            <div class="contribution-card">
              <div class="member-header">
                <h3>Christopher Katsoulis</h3>
                <span class="student-id">105924338</span>
              </div>
              <dl>
                <dt>Role</dt>
                <dd>Apply page & Jira</dd>
                <dt>Quote</dt>
                <dd><q>Nice and Calm.</q></dd>
                <dt>Language</dt>
                <dd><span lang="en">English</span></dd>
              </dl>
            </div>

          </div>
        </section>

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
                <td rowspan="2">Shehan Ariyarathna</td>
                <td>HTML5, CSS3</td>
                <td>Web Development</td>
                <td>UI Design</td>
              </tr>
              <tr>
                <td>JavaScript, PHP</td>
                <td colspan="2">Full Stack Development</td>
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

      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <p>
          <a href="https://christopher-katsoulis.atlassian.net/jira/software/projects/A1WT/boards/1" target="_blank" rel="noopener">Jira</a> ·
          <a href="https://github.com/105353330/Applied-Web-Project-Part-1-of-2" target="_blank" rel="noopener">GitHub repository</a> ·
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
