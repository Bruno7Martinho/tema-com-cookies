<?php
$tema = "claro"; // padrão


if (isset($_COOKIE["tema"])) {
    $tema = $_COOKIE["tema"];
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Preferência de Tema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?= $tema ?>">
    <div class="container">
        <h1>Tema atual: <?= ucfirst($tema) ?></h1>


        <p>Escolha seu tema preferido:</p>
        <a href="set_tema.php?tema=claro">🌞 Tema Claro</a> | 
        <a href="set_tema.php?tema=escuro">🌙 Tema Escuro</a>
    </div>
</body>
</html>
