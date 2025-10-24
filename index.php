<?php
$body_id        = 'home';
$page_title     = 'Digital Services Victoria — Innovating Tomorrow\'s Technology';
$page_description = 'We deliver secure, accessible digital services for Victorian and Australian government agencies.';
$active         = 'home';
include __DIR__ . '/includes/header.inc';
include __DIR__ . '/includes/nav.inc';
?>
<main id="main">
  <section class="hero" role="banner">
    <div class="container">
      <h2>Innovating Tomorrow's Technology Today</h2>
      <p>We partner with Victorian and Australian government agencies to deliver secure, accessible digital services for all citizens.</p>
      <a href="jobs.php" class="cta-button" aria-label="Explore available career opportunities">EXPLORE CAREERS</a>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="services-grid">
        <article class="service-card">
          <i class="fas fa-code" aria-hidden="true"></i>
          <h3>Software Development <span class="sr-only">service</span></h3>
          <p>Custom, accessible apps and platforms for government services.</p>
        </article>

        <article class="service-card">
          <i class="fas fa-cloud" aria-hidden="true"></i>
          <h3>Cloud Solutions <span class="sr-only">service</span></h3>
          <p>Secure, scalable cloud infrastructure for public agencies.</p>
        </article>

        <article class="service-card">
          <i class="fas fa-shield-alt" aria-hidden="true"></i>
          <h3>Cybersecurity <span class="sr-only">service</span></h3>
          <p>Protecting citizen data with modern security frameworks.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="container">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-grid">
        <blockquote class="testimonial-card">
          <p>“Digital Services Victoria transformed our community with their innovative solutions.”</p>
          <cite>— John Smith, CEO of TechCorp</cite>
        </blockquote>
        <blockquote class="testimonial-card">
          <p>“Exceptional service and outstanding results every time.”</p>
          <cite>— Sarah Johnson, CTO of InnovateX</cite>
        </blockquote>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.inc'; ?>
