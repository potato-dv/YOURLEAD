<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Gallery</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top full-width-navbar">
  <div class="container-fluid px-3 px-md-5">
    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="index.php">YOURLEAD</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid rgba(255,255,255,0.3); padding: 4px 8px;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navbar-center">
        <li class="nav-item">
          <a class="nav-link px-3" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="index.php">Contact</a>
        </li>
      </ul>

      
      <div class="d-flex flex-column flex-lg-row gap-2 mt-3 mt-lg-0 navbar-buttons">
        <a href="index.php" class="btn btn-navbar-no-border">Log In</a>
        <a href="gallery.php" class="btn btn-navbar">Get Started</a>
      </div>
    </div>
  </div>
</nav>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
.navbar-toggler {
  position: relative;
  z-index: 1051;
  cursor: pointer;
}

.navbar-toggler:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
}

@media (max-width: 991.98px) {
  .navbar-collapse {
    background: rgba(0, 0, 0, 0.95);
    border-radius: 10px;
    margin-top: 15px;
    padding: 20px;
    border: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .navbar-nav .nav-link {
    padding: 12px 0;
    text-align: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    color: white !important;
  }
  
  .navbar-nav .nav-item:last-child .nav-link {
    border-bottom: none;
  }
  
  .navbar-nav .nav-link:hover {
    color: #fff !important;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
  }
  
  .btn {
    width: 100%;
    margin: 8px 0;
    text-align: center;
  }
}

@media (max-width: 575.98px) {
  .container-fluid {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
  
  .navbar-brand {
    font-size: 1.1rem;
  }
  
  .navbar-toggler {
    padding: 6px 10px;
    font-size: 1.1rem;
  }
}

@media (max-width: 375px) {
  .navbar-brand {
    font-size: 1rem;
  }
  
  .container-fluid {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
}

.navbar {
  z-index: 1050;
  transition: all 0.3s ease;
}

@media (min-width: 992px) {
  .navbar {
    top: 15px;
    padding-top: 15px;
    padding-bottom: 15px;
  }
  
  /* Perfect centering for navigation links on desktop */
  .navbar-collapse {
    display: flex !important;
    justify-content: space-between;
  }
  
  .navbar-center {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin: 0 !important;
  }
  
  .navbar-buttons {
    margin-left: auto;
  }
  
  .navbar-brand {
    min-width: 150px;
  }
}

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
</style>

