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
  <div class="container-fluid px-5"> <!-- full width + 5% padding left/right -->
    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="index.php">YOURLEAD</a>

    <!-- Toggler (Hamburger menu on mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav links -->
    <div class="collapse navbar-collapse justify-content-center mt-3" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>

    <!-- Buttons -->
    <div class="d-flex justify-content-center mt-3 mt-lg-0">
  <a href="index.php" class="btn btn-navbar-no-border me-2">Log In</a>
  <a href="gallery.php" class="btn btn-navbar">Get Started</a>
</div>


  </div>
</nav>

