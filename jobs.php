<?php include 'includes/header.inc'; ?>
<?php include 'includes/nav.inc'; ?>

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

<?php include 'includes/footer.inc'; ?>