<?php include 'includes/navbar.php'; ?>

<!-- Hero Section with Video Background -->
<section class="hero-section position-relative vh-100 d-flex align-items-center text-white overflow-hidden">
  <!-- Background Video -->
  <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100">
    <source src="assets/videos/videobg2.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Dark Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.5;"></div>

  <!-- Content -->
  <div class="position-relative container section-spacing section-content">
    <div class="row">
 <div class="col-lg-8 text-start hero-text-left mt-5 pt-5">
        <p class="fw-semibold small text-uppercase">Professional Photographer</p>
        <h1 class="display-4 fw-bold">
           Capture Moments.<br>Tell Your Story.
        </h1>
        <p class="lead mb-4">
          Explore my portfolio of weddings, events, and lifestyle photography. Let’s create stunning visuals that leave a lasting impression.
        </p>
        <a href="gallery.php" class="btn btn-flat btn-lg">Get Started</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
