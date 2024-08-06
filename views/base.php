<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@1,700&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
      integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
      crossorigin=""
      >
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="<?= $css; ?>">
    <title><?= $title; ?></title>
    <link rel="icon" href="./public/images/Logo-Les-Milles-Conduite2.png">
</head>
<body class='arriere'>

        <?php 
            if (!$nav == 0) {require_once "./views/partials/_navBar.php"; }
        ?>


        <?= $content; ?>


    <footer class="bg-black">
        <?php 
            if (!$footer == 0) {require_once "./views/partials/_footer.php"; }
        ?>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="./public/js/base.js"></script>
<script src="./public/js/audit.js"></script>
<script src="<?= $js ?>"></script>



</body>
</html>