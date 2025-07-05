<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>AdopteUnChien</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Police douce (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Ton CSS perso -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ===== NAVBAR ULTRA-CLEAN ===== -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
  <div class="container">

    <!-- Logo + nom du site -->
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="assets/img/logo_adopteunchien.png" alt="logo" width="45" class="me-2">
      <span class="brand-text">Adopte<span class="fw-bold">Un</span>Chien</span>
    </a>

    <!-- Bouton burger pour mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button id="toggle-dark" class="btn btn-outline-light ms-3">🌙 Mode sombre</button>

    <!-- Liens -->
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
  <a class="nav-link<?php echo basename($_SERVER['PHP_SELF'])=='contact.php' ? ' active' : ''; ?>" href="contact.php">Contact</a>
</li>
      </ul>
    </div>

  </div>
</nav>