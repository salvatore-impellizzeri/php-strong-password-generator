<!doctype html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/1e3be9b4ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/style.css">

    <title>Password Generator</title>
  </head>
  <body>
    <div id="app">
      <h1 class="text-center mt-4">
        PHP STRONG PASSWORD GENERATOR
      </h1>
      <form action="" class="text-center mt-5" method="GET">
        <div>
          Inserisci la lunghezza della password
        </div>
        <input type="number" name="passLength" min="4" required>
        <button type="submit">Invia</button>
      </form>

      <div class="text-center mt-5">
        <?php
          require_once __DIR__.'/functions.php';
        ?>
      </div>

    </div>
    <script type="module" src="/src/main.js"></script>
  </body>
</html>
