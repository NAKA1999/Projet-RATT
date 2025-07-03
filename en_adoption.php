<?php include("includes/header.php"); ?>
<?php include("config.php"); ?>

<div class="container mt-5">
  <h2 class="text-center mb-4">🐾 Chiens à adopter</h2>

  <!-- Filtre par race -->
  <?php
  $races = $pdo->query("SELECT DISTINCT race FROM chiens ORDER BY race")->fetchAll(PDO::FETCH_COLUMN);
  ?>
  <div class="mb-4">
    <label for="filtre-race" class="form-label">Filtrer par race :</label>
    <select id="filtre-race" class="form-select w-50">
      <option value="all">Toutes les races</option>
      <?php foreach ($races as $race): ?>
        <option value="<?= htmlspecialchars($race) ?>"><?= htmlspecialchars($race) ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <!-- Cartes des chiens -->
  <div class="row">
    <?php
    $stmt = $pdo->query("SELECT * FROM chiens ORDER BY id DESC");
    while ($chien = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
      <div class="col-md-4 mb-4 carte" data-race="<?= strtolower($chien['race']) ?>">
        <div class="card h-100 shadow-sm">
          <img src="upload/<?= htmlspecialchars($chien['photo']) ?>" class="card-img-top" alt="<?= htmlspecialchars($chien['nom']) ?>" style="object-fit: cover; height: 250px;">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($chien['nom']) ?></h5>
            <p class="card-text">Âge : <?= (int)$chien['age'] ?> ans</p>
            <p class="card-text">Race : <?= htmlspecialchars($chien['race']) ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>