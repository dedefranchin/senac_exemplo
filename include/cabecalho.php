<?php
    require_once __DIR__ . '/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo Controle_Interface::get_titulo(); ?></title>
    <span>Bem vindo, <?php echo $_SESSION['usuario']; ?></span>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
    
</head>
<body>
    <header>
        <div class="menu-principal">
            <a href="index.php" <?php if(Controle_Interface::verifica_secao_atual(Controle_Interface::SECAO_HOME)):?> class="selecionado" <?php endif; ?> >Home</a>
            <a href="lista.php"  <?php if(Controle_Interface::verifica_secao_atual(Controle_Interface::SECAO_LISTA)):?> class="selecionado" <?php endif; ?>>Lista</a>
        </div>
        <div class="painel-usuario">
            <a href="logout.php">Sair</a>
        </div>
       
    </header>
    <h1> <?php echo Controle_Interface::get_titulo(); ?></h1>
</body>
</html>