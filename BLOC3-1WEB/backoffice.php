<?php include("config.php"); ?>
<?php include("includes/header.php"); ?>

<div class="container mt-5 mb-5">
  <h2 class="text-center mb-4">🔒 Ajouter un chien à adopter</h2>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form method="POST" enctype="multipart/form-data" class="border p-4 shadow rounded bg-white">

        <div class="mb-3">
          <label for="nom" class="form-label">Nom du chien *</label>
          <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="age" class="form-label">Âge *</label>
          <input type="number" name="age" id="age" class="form-control" min="0" required>
        </div>

        <div class="mb-3">
          <label for="race" class="form-label">Race *</label>
          <input type="text" name="race" id="race" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="photo" class="form-label">Photo du chien *</label>
          <input type="file" name="photo" id="photo" class="form-control" accept="image/*" required>
        </div>

        <div class="text-center">
          <button type="submit" name="ajouter" class="btn btn-success">✅ Ajouter le chien</button>
        </div>
      </form>

      <?php
      if (isset($_POST['ajouter'])) {
          $nom = htmlspecialchars($_POST['nom']);
          $age = (int) $_POST['age'];
          $race = htmlspecialchars($_POST['race']);
          $photo = $_FILES['photo']['name'];
          $tmp = $_FILES['photo']['tmp_name'];

          if (!is_dir("upload")) {
              mkdir("upload", 0777, true);
          }

          $chemin = "upload/" . basename($photo);
          if (move_uploaded_file($tmp, $chemin)) {
              $stmt = $pdo->prepare("INSERT INTO chiens (nom, age, race, photo) VALUES (?, ?, ?, ?)");
              $stmt->execute([$nom, $age, $race, $photo]);
              echo "<div class='alert alert-success mt-3 text-center'>🐾 Le chien a été ajouté avec succès !</div>";
          } else {
              echo "<div class='alert alert-danger mt-3 text-center'>❌ Erreur lors de l’envoi de la photo.</div>";
          }
      }
      ?>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>