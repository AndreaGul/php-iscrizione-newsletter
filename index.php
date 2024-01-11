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
  <div  class="container">
    <h1>
      Iscrizione Newsletter
    </h1>
  <form action="index.php" method="GET">
      
      <div class=" mb-3">
        <label for="email" class="form-label">Email address</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email"  name="email" placeholder="name@example.com">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
        </div>
      </div>
  </form>
  </div>
    <?php
  echo $email = $_GET['email']
  ?>
</body>

</html>