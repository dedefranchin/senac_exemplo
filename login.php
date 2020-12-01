<?php    
    require_once __DIR__ . '\include\autoload.php';
    $erro = false;
    $usuario = "";
    
    if( isset($_POST['a']) && ($_POST['a'] === 'entrar' ) ){
        $usuario = $_POST['u'];
        $senha = $_POST['s'];
        $erro =  !Controle_Auth::login($usuario,$senha);
        if(!$erro){
            require_once __DIR__ . '/include/autoload.php';
            $_SESSION['usuario'] = 'andre';
            header('Location:index.php?');
            exit(0);
        }
    }
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
    if($erro):
    ?>
    <p> Login Invalido </p>
    <?php endif; ?>
    
    <form action="login.php" method="post">
        <input type="text" name = "u"  placeholder = "Nome de Usuario" value = "<?php echo $usuario; ?>">
        <input type="password" name="s" placeholder = "Senha">
        <button type="submit" name = "a" value = "entrar">Enviar</button>
    </form>
    
</body>
</html>