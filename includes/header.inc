<?php
if (!isset($page_title)) { $page_title = "Digital Services Victoria"; }
if (!isset($page_description)) { $page_description = "Digital Services Victoria — secure, accessible digital services for government and the community."; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="author" content="Digital Services Victoria Team">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="stylesheet" href="styles/styles.css">
  <style>
    .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
    a.cta-button:focus-visible, .main-nav a:focus-visible {outline:3px solid #94a3b8; outline-offset:2px; border-radius:6px}
    a.cta-button:hover, a.cta-button:focus {transform:translateY(-2px)}
  </style>
</head>
<body id="<?php echo isset($body_id)?htmlspecialchars($body_id):''; ?>">
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="header">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
      <div class="logo-container">
        <img src="images/dsv-logo.jpg" alt="Digital Services Victoria logo" class="logo">
        <h1>Digital Services Victoria</h1>
      </div>
