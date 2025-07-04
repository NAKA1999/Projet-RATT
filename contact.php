<?php include("includes/header.php"); ?>

<div class="container mt-5 mb-5">
  <h2 class="text-center mb-4">📬 Contactez-nous</h2>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $nom = htmlspecialchars($_POST['nom']);
          $email = htmlspecialchars($_POST['email']);
          $message = htmlspecialchars($_POST['message']);

          echo "<div class='alert alert-success text-center'>Merci $nom ! Votre message a bien été envoyé.</div>";
          // Tu peux ici envoyer un email ou enregistrer dans la base
      }
      ?>

      <form method="POST" class="border p-4 shadow bg-white rounded">
        <div class="mb-3">
          <label for="nom" class="form-label">Nom *</label>
          <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email *</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message *</label>
          <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Envoyer le message</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>