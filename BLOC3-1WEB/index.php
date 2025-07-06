<?php include("includes/header.php"); ?>
<div class="container mt-5">

  <!-- Titre -->
  <h1 class="text-center">Bienvenue chez AdopteUnChien 🐶</h1>
  <p class="lead text-center">Nous protégeons et aidons à l’adoption des chiens abandonnés.</p>

  <!-- Carrousel d'images de chiens -->
  <div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/chien1.jpeg" class="d-block w-100" alt="Chien 1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/chien2.jpeg" class="d-block w-100" alt="Chien 2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/chien3.jpeg" class="d-block w-100" alt="Chien 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>

  <!-- Carte Google Maps (en dehors du carrousel) -->
  <div class="mt-4">
    <h2 class="text-center"> Où nous trouver</h2>
    <iframe
      src="https://maps.google.com/maps?q=valenciennes&t=&z=13&ie=UTF8&iwloc=&output=embed"
      width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen>
    </iframe>
  </div>

</div>
<?php include("includes/footer.php"); ?>