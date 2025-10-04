<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commercial Gallery</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/style.css">
  <style>
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-10px);
      }
      60% {
        transform: translateY(-5px);
      }
    }
    
    /* Responsive Masonry Grid */
    @media (max-width: 1200px) {
      .masonry-grid {
        columns: 3 !important;
      }
    }
    
    @media (max-width: 768px) {
      .masonry-grid {
        columns: 2 !important;
        column-gap: 15px !important;
      }
    }
    
    @media (max-width: 480px) {
      .masonry-grid {
        columns: 1 !important;
        column-gap: 10px !important;
      }
    }
    
    /* Hover Effects */
    .masonry-item img:hover {
      transform: scale(1.02);
      box-shadow: 0 6px 20px rgba(0,0,0,0.15) !important;
    }
    
    /* Modal Styling */
    .modal-content {
      background: transparent !important;
    }
    
    .nav-arrow:hover {
      background: rgba(0,0,0,0.8) !important;
      transform: translateY(-50%) scale(1.05) !important;
      
    }
    
    .btn-close:hover {
      background: rgba(0,0,0,0.8) !important;
      transform: scale(1.05) !important;
    }
    
    /* Modal backdrop */
    .modal-backdrop {
      background-color: rgba(0, 0, 0, 0.8);
    }
    
    /* Responsive navigation buttons */
    @media (max-width: 768px) {
      .nav-arrow {
        width: 40px !important;
        height: 40px !important;
        font-size: 1.1rem !important;
      }
      
      .nav-arrow-left {
        left: 15px !important;
      }
      
      .nav-arrow-right {
        right: 15px !important;
      }
      
      .btn-close {
        width: 32px !important;
        height: 32px !important;
        top: 12px !important;
        right: 12px !important;
      }
    }
    
    @media (max-width: 480px) {
      .nav-arrow {
        width: 38px !important;
        height: 38px !important;
        font-size: 1rem !important;
      }
      
      .nav-arrow-left {
        left: 12px !important;
      }
      
      .nav-arrow-right {
        right: 12px !important;
      }
      
      .btn-close {
        width: 30px !important;
        height: 30px !important;
        top: 10px !important;
        right: 10px !important;
      }
    }
  </style>
</head>
<body>

<!-- Navigation -->
<nav class="position-fixed top-0 start-0 p-3" style="z-index: 1000; position: fixed !important;">
  <a href="../gallery.php" class="btn btn-navbar-no-border" style="padding: 0.35rem 1rem; font-weight: 500; line-height: 1.2; border: none; border-radius: 0.25rem; background-color: transparent; color: #fff; transition: all 0.2s ease;">⟵ Back to Gallery</a>
</nav>

<!-- Commercial Hero Section -->
<section class="commercial-hero" style="background-image: url('../assets/images/commercial/combg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; height: 100vh; display: flex; justify-content: center; align-items: center; text-align: center;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); z-index: 1;"></div>
  <div class="hero-content text-center text-white" style="position: relative; z-index: 2;">
    <h1 class="fw-bold display-4" style="font-size: 3.5rem; letter-spacing: 3px; margin-bottom: 1rem;">COMMERCIAL GALLERY</h1>
    <p class="lead mb-4" style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">Professional business photography that elevates your brand</p>
  </div>
  
  <!-- Animated Arrow -->
  <div class="arrow-container" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); z-index: 3;">
    <div class="arrow-down" style="text-align: center; color: white;">
      <div style="font-size: 2rem; margin-bottom: 10px; animation: bounce 2s infinite;">↓</div>
      <div style="font-size: 0.9rem; letter-spacing: 1px; opacity: 0.8;">SWIPE DOWN</div>
    </div>
  </div>
</section>

<!-- Pinterest Style Gallery -->
<section class="gallery-section" style="padding: 60px 20px; background-color: #f8f9fa;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 style="font-size: 2.5rem; font-weight: 300; color: #333; margin-bottom: 1rem;">Commercial Portfolio</h2>
        <p style="color: #666; font-size: 1.1rem;">Showcasing professional business and commercial photography</p>
      </div>
    </div>
    
    <!-- Pinterest Style Masonry Grid -->
    <div class="masonry-grid" style="columns: 4; column-gap: 20px;">
      <!-- Commercial Images -->
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/1com.jpg" alt="Commercial Photo 1" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/2com.jpg" alt="Commercial Photo 2" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/3com.jpg" alt="Commercial Photo 3" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/4com.jpg" alt="Commercial Photo 4" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/5com.jpg" alt="Commercial Photo 5" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/6com.jpg" alt="Commercial Photo 6" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/7com.jpg" alt="Commercial Photo 7" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/8com.jpg" alt="Commercial Photo 8" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/9com.jpg" alt="Commercial Photo 9" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/10com.jpg" alt="Commercial Photo 10" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/11com.jpg" alt="Commercial Photo 11" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/12com.jpg" alt="Commercial Photo 12" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/13com.jpg" alt="Commercial Photo 13" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/14com.jpg" alt="Commercial Photo 14" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/15com.jpg" alt="Commercial Photo 15" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/16com.jpg" alt="Commercial Photo 16" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/17com.jpg" alt="Commercial Photo 17" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/18com.jpg" alt="Commercial Photo 18" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/19com.jpg" alt="Commercial Photo 19" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/20com.jpg" alt="Commercial Photo 20" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
      <div class="masonry-item" style="break-inside: avoid; margin-bottom: 20px;">
        <img src="../assets/images/commercial/21com.jpg" alt="Commercial Photo 21" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>
    </div>
  </div>
</section>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content" style="background: transparent; border: none;">
      <div class="modal-body p-0 position-relative d-flex align-items-center justify-content-center" style="min-height: 80vh;">
        <!-- Close Button -->
        <button type="button" class="btn-close position-absolute" style="top: 15px; right: 15px; z-index: 1000; background: rgba(0,0,0,0.6); border-radius: 50%; width: 35px; height: 35px; opacity: 1; border: none; display: flex; align-items: center; justify-content: center;" data-bs-dismiss="modal" aria-label="Close">
          <i class="bi bi-x" style="font-size: 1rem; color: white;"></i>
        </button>
        
        <!-- Navigation Arrows -->
        <button class="nav-arrow nav-arrow-left position-absolute" style="left: 20px; top: 50%; transform: translateY(-50%); z-index: 1000; background: rgba(0,0,0,0.6); border: none; color: white; width: 45px; height: 45px; border-radius: 50%; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;" onclick="previousImage()">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="nav-arrow nav-arrow-right position-absolute" style="right: 20px; top: 50%; transform: translateY(-50%); z-index: 1000; background: rgba(0,0,0,0.6); border: none; color: white; width: 45px; height: 45px; border-radius: 50%; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;" onclick="nextImage()">
          <i class="bi bi-chevron-right"></i>
        </button>
        
        <!-- Image Container -->
        <div class="text-center position-relative" style="max-width: 100%; max-height: 90vh;">
          <img id="modalImage" src="" alt="" style="max-width: 100%; max-height: 90vh; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        </div>
        
        <!-- Image Counter -->
        <div class="position-absolute" style="bottom: 30px; left: 50%; transform: translateX(-50%); background: rgba(0,0,0,0.8); color: white; padding: 10px 20px; border-radius: 25px; font-size: 1rem; font-weight: 500;">
          <span id="imageCounter">1 / 21</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Image modal functionality
let currentImageIndex = 0;
const images = [
  '../assets/images/commercial/1com.jpg',
  '../assets/images/commercial/2com.jpg',
  '../assets/images/commercial/3com.jpg',
  '../assets/images/commercial/4com.jpg',
  '../assets/images/commercial/5com.jpg',
  '../assets/images/commercial/6com.jpg',
  '../assets/images/commercial/7com.jpg',
  '../assets/images/commercial/8com.jpg',
  '../assets/images/commercial/9com.jpg',
  '../assets/images/commercial/10com.jpg',
  '../assets/images/commercial/11com.jpg',
  '../assets/images/commercial/12com.jpg',
  '../assets/images/commercial/13com.jpg',
  '../assets/images/commercial/14com.jpg',
  '../assets/images/commercial/15com.jpg',
  '../assets/images/commercial/16com.jpg',
  '../assets/images/commercial/17com.jpg',
  '../assets/images/commercial/18com.jpg',
  '../assets/images/commercial/19com.jpg',
  '../assets/images/commercial/20com.jpg',
  '../assets/images/commercial/21com.jpg'
];

function openModal(imageIndex) {
  currentImageIndex = imageIndex;
  const modal = new bootstrap.Modal(document.getElementById('imageModal'));
  updateModalImage();
  modal.show();
}

function updateModalImage() {
  document.getElementById('modalImage').src = images[currentImageIndex];
  document.getElementById('imageCounter').textContent = `${currentImageIndex + 1} / ${images.length}`;
}

function nextImage() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  updateModalImage();
}

function previousImage() {
  currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
  updateModalImage();
}

// Add click handlers to all images
document.addEventListener('DOMContentLoaded', function() {
  const imageElements = document.querySelectorAll('.masonry-item img');
  imageElements.forEach((img, index) => {
    img.style.cursor = 'pointer';
    img.addEventListener('click', () => openModal(index));
  });
});

// Keyboard navigation
document.addEventListener('keydown', function(e) {
  const modal = document.getElementById('imageModal');
  if (modal.classList.contains('show')) {
    if (e.key === 'ArrowLeft') {
      previousImage();
    } else if (e.key === 'ArrowRight') {
      nextImage();
    } else if (e.key === 'Escape') {
      bootstrap.Modal.getInstance(modal).hide();
    }
  }
});
</script>
</body>
</html>
