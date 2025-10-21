<header class="header">
  <div class="container">
    <div class="logo-container">
      <img src="images/dsv-logo.jpg" alt="Digital Services Victoria logo" class="logo" width="100" height="100">
      <h1>Digital Services Victoria</h1>
    </div>

    <nav class="main-nav" aria-label="Main navigation">
      <ul>
        <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
        <li><a href="jobs.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'jobs.php' ? 'active' : ''; ?>">Jobs</a></li>
        <li><a href="apply.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'apply.php' ? 'active' : ''; ?>">Apply</a></li>
        <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a></li>
      </ul>
    </nav>
  </div>
</header>
