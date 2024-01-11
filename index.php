<?php
include __DIR__ . '/functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iscrizione newsletter</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>
      Iscriviti alla Newsletter
    </h1>
    <form action="index.php" method="GET">

      <div class=" mb-3">
        <label for="email" class="form-label">Inserisci email</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="nome@esempio.com">
          <button class="btn btn-outline-secondary">Invia</button>
        </div>
      </div>
      <?php
      if (!empty($_GET['email'])) : ?>
        <?php
        $email = $_GET['email'];
        ?>
        <?php if (isEmail($email)) : ?>
          <div class="alert alert-success" role="alert">
            Email valida
          </div>
        <?php else : ?>
          <div class="alert alert-warning" role="alert">
            Email non valida
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </form>
  </div>

</body>

</html>