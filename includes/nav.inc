<?php if (!isset($active)) { $active = ""; } ?>
<nav class="main-nav" aria-label="Primary">
  <ul>
    <li><a href="index.php"  class="<?php echo $active==='home'?'active':''; ?>"  <?php echo $active==='home'?'aria-current="page"':''; ?>>Home</a></li>
    <li><a href="jobs.php"   class="<?php echo $active==='jobs'?'active':''; ?>"   <?php echo $active==='jobs'?'aria-current="page"':''; ?>>Jobs</a></li>
    <li><a href="apply.php"  class="<?php echo $active==='apply'?'active':''; ?>"  <?php echo $active==='apply'?'aria-current="page"':''; ?>>Apply</a></li>
    <li><a href="about.php"  class="<?php echo $active==='about'?'active':''; ?>"  <?php echo $active==='about'?'aria-current="page"':''; ?>>About</a></li>
    <li><a href="mailto:info@digitalservicesvictoria.com.au">Contact Us</a></li>
  </ul>
</nav>
