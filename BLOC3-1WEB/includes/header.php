<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>AdopteUnChien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="assets/img/logo_adopteunchien.png" alt="logo" width="45" class="me-2">
      <span class="brand-text">Adopte<span class="fw-bold">Un</span>Chien</span>
    </a>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link<?php echo basename($_SERVER['PHP_SELF'])=='index.php' ? ' active' : ''; ?>" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo basename($_SERVER['PHP_SELF'])=='en_adoption.php' ? ' active' : ''; ?>" href="en_adoption.php">En adoption</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo basename($_SERVER['PHP_SELF'])=='association.php' ? ' active' : ''; ?>" href="association.php">L’Association</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo basename($_SERVER['PHP_SELF'])=='contact.php' ? ' active' : ''; ?>" href="contact.php">Nous contactez</a>
        </li>
      </ul>
    </div>
     <button class="toggle-btn" id="darkModeToggle">
            <span class="material-icons">dark_mode</span>
            <span class="material-icons">light_mode</span>
        </button>
  
   <script src="includes/Dark_mode.js" defer></script>

  </div>
</nav>