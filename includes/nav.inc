<nav class="main-nav" aria-label="Primary Navigation">
  <ul>
    <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
    <li><a href="jobs.php">Jobs</a></li>
    <li><a href="apply.php">Apply</a></li>
    <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About</a></li>
    <li><a href="manage.php">Manage</a></li>
    <li><a href="mailto:info@digitalservicesvictoria.com.au">Contact</a></li>
  </ul>
</nav>
