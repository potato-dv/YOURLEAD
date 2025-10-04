<?php include 'includes/navbar.php'; ?>

<section class="category-section">
  
  <div class="category-banner" style="background-image: url('assets/images/photobg.jpg');">
    <div class="overlay"></div>
      <div class="content text-center text-white">
        <h1 class="fw-bold">PHOTO GALLERY</h1>
        <p>SINCE 2025</p>
        <div class="d-flex flex-column flex-md-row gap-3 justify-content-center gallery-buttons">
          <a href="pages/wedding.php" class="btn btn-navbar gallery-btn">VIEW WEDDING</a>
          <a href="pages/commercial.php" class="btn btn-navbar gallery-btn">VIEW COMMERCIAL</a>
          <a href="pages/sport.php" class="btn btn-navbar gallery-btn">VIEW SPORTS</a>
        </div>
      </div>
  </div>
<style>

@media (max-width: 767.98px) {
  .gallery-buttons {S
    padding: 0 30px;
    gap: 15px !important; 
  }
  
  .gallery-btn {
    padding: 10px 20px !important; 
    font-size: 0.9rem !important; 
    min-width: auto !important;
    width: auto !important;
    max-width: 200px; 
    margin: 0 auto; 
  }
}

@media (max-width: 575.98px) {
  .gallery-buttons {
    padding: 0 20px; 
    gap: 12px !important;
  }
  
  .gallery-btn {
    padding: 8px 16px !important; 
    font-size: 0.85rem !important;
    max-width: 180px;
  }
}

@media (max-width: 375px) {
  .gallery-buttons {
    padding: 0 15px;
    gap: 10px !important;
  }
  
  .gallery-btn {
    padding: 8px 14px !important;
    font-size: 0.8rem !important;
    max-width: 160px;
  }
}
</style>