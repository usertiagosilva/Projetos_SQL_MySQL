<?php

    include("process/conn.php");

    $msg = "";

    if(isset($_SESSION["msg"])) {
        //exibir mensagem
        $msg = $_SESSION["msg"];
        $status = $_SESSION["status"];

        //Limpar mensagem
        $_SESSION["msg"] = "";
        $_SESSION["status"] = "";

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu pedido!</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <a href="index.php" class="navbrand">
                <img src="img/logo-pizza.webp" alt="Fast Pizza" id="brand-logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarnav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">FAST PIZZA</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Mensagem de alerta -->
    <?php if($msg !=""): ?>
    <div class="alert alert-<?= $status ?>">
        <p><?= $msg ?></p>
    </div>
    <?php endif; ?>  <!-- fechar if -->
</body>
</html>