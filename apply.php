<?php include 'includes/header.inc'; ?>
<body>
  <a class="skip-link" href="#main-apply">Skip to content</a>

<?php include 'includes/nav.inc'; ?>

  <!-- Main -->


  <main id="main-apply">
    <section class="hero hero-about">
      <div class="container">
        <h2>Job Application Form</h2>
        <p>Fill out the below details to apply for a position at Digital Services Victoria.</p>
      </div>
    </section>
    <form class="apply-form" method="POST" action="process_eoi.php">
      <!-- Job Ref -->
      <label for="jobRef">Job Reference Number</label>
      <input type="text" id="jobRef" name="jobRef" pattern="^[A-Za-z0-9]{5}$" maxlength="5" required>

      <!-- First Name -->
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="fname" pattern="^[A-Za-z]{1,20}$" maxlength="20" required>

      <!-- Last Name -->
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lname" pattern="^[A-Za-z]{1,20}$" maxlength="20" required>

      <!-- DOB -->
      <label for="dob">Date of Birth</label>
      <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy" pattern="^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/[0-9]{4}$" required>

      <!-- Gender -->
      <fieldset>
        <legend>Gender</legend>
        <label><input type="radio" name="gender" value="male" required> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <label><input type="radio" name="gender" value="other"> Other</label>
      </fieldset>

      <!-- Street -->
      <label for="street">Street Address</label>
      <input type="text" id="street" name="street" maxlength="40" required>

      <!-- Suburb -->
      <label for="suburb">Suburb/Town</label>
      <input type="text" id="suburb" name="suburb" maxlength="40" required>

      <!-- State -->
      <label for="state">State</label>
      <select id="state" name="state" required>
        <option value="">--Select--</option>
        <option>VIC</option>
        <option>NSW</option>
        <option>QLD</option>
        <option>NT</option>
        <option>WA</option>
        <option>SA</option>
        <option>TAS</option>
        <option>ACT</option>
      </select>

      <!-- Postcode -->
      <label for="postcode">Postcode</label>
      <input type="text" id="postcode" name="postcode" placeholder="3000" pattern="^[0-9]{4}$" maxlength="4" required>
      <div>

      <!-- Email -->
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

      <!-- Phone -->
      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" placeholder="0412345678" pattern="^[0-9]{8,12}$" maxlength="12" required>

      <!-- Skills -->
      <fieldset>
        <legend>Skills</legend>

        <div class="checkbox-row">
          <label><input type="checkbox" name="skills[]" value="html" required> HTML</label>
          <label><input type="checkbox" name="skills[]" value="css"> CSS</label>
          <label><input type="checkbox" name="skills[]" value="js"> JavaScript</label>
        </div>

        <label for="otherskills">Other Skills:</label>
        <textarea id="otherskills" name="otherskills" rows="4" cols="40"></textarea>
      </fieldset>

      <!-- Submit -->
      <button type="submit">Submit Application</button>
    </form>
  </main>

<?php include 'includes/footer.inc'; ?>
