<?php
include "./../App/configuracao.php";
include "./../App/Libraries/Rota.php";
include "./../App/Libraries/Controller.php";
<<<<<<< HEAD
include "./../App/Libraries/database.php"
=======
>>>>>>> 34dd33a1f02d0ce8d6de5cb4a3ac254e22bb3d09
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
</head>
<body>
    <?php
    include "../App/Views/header.php";
    $rotas = new Rota();
   // $rotas->url();
    include "../App/Views/footer.php";
    ?>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
</body>
</html>