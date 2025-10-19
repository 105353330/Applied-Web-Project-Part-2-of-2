<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 5 Web Page</title>
    <meta name="description" content="Week 5 jobs page">
    <meta name="keywords" content="HTML, PHP, Jobs, Digital Services Victoria">
    <meta name="author" content="Patrick Ward">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <a class="skip-link" href="#main-jobs">Skip to content</a>

    <header class="header">
        <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
            <div class="logo-container">
                <img src="images/dsv-logo.jpg" alt="Digital Services Victoria Logo" class="logo">
                <h1>Available Positions</h1>
            </div>
            <nav class="main-nav" aria-label="Primary">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="jobs.php" class="active" aria-current="page">Jobs</a></li>
                    <li><a href="apply.php">Apply</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="mailto:info@digitalservicesvictoria.com.au">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-jobs">
        <section class="hero" role="banner">
            <div class="container">
                <h2>Available Jobs</h2>
                <p>Listed below are the currently available positions at Digital Services Victoria.</p>
                <a href="apply.php" class="cta-button" aria-label="Apply for available positions">APPLY NOW</a>
            </div>
        </section>

        <?php
        require_once "settings.php";

        $dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

        if ($dbconn) {
            $query = "SELECT * FROM jobs";
            $result = mysqli_query($dbconn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $jobId = $row['reference_number'];
                    echo '<article class="jobs-section" id="job-' . $jobId . '">';
                    echo '<h2 id="job-' . $jobId . '-title">' . $row['title'] . '</h2>';

                    echo '<aside class="aside-jobs" aria-labelledby="job-' . $jobId . '-title">';
                    echo '<p><b>ID:</b> <a href="apply.php?ref=' . $jobId . '">' . $jobId . '</a></p>';
                    echo '<p><b>Title:</b> ' . $row['title'] . '</p>';
                    echo '<p><b>Salary:</b> $' . $row['salary'] . '</p>';
                    echo '</aside>';

                    echo '<p><b>Description:</b> ' . $row['description'] . '</p>';
                    echo '<p><b>Reporting Line:</b> ' . $row['reporting_line'] . '</p>';

                    echo '<p><b>Key Responsibilities:</b></p><ul>';
                    $responsibilities = array_map('trim', explode(',', $row['responsibilities']));
                    foreach ($responsibilities as $resp) {
                        echo '<li>' . $resp . '</li>';
                    }
                    echo '</ul>';

                    echo '<p><b>Required Skills:</b></p><ol>';
                    $required_skills = array_map('trim', explode(',', $row['required_skills']));
                    foreach ($required_skills as $skill) {
                        echo '<li>' . $skill . '</li>';
                    }
                    echo '</ol>';

                    echo '<p><b>Preferred Skills:</b></p><ol>';
                    $preferred_skills = array_map('trim', explode(',', $row['preferred_skills']));
                    foreach ($preferred_skills as $skill) {
                        echo '<li>' . $skill . '</li>';
                    }
                    echo '</ol>';

                    echo '</article>';
                }
            } else {
                echo '<p>There are no job records to display.</p>';
            }

            mysqli_close($dbconn);
        } else {
            echo '<p>Unable to connect to the database.</p>';
        }
        ?>

        <a href="#main-jobs" class="cta-button" aria-label="Return to top">Return</a>
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
