<?php
require_once __DIR__ . '/../include/autoload.php';

class Controle_Auth{
    
    public static function controla_aceso(bool $adm  = FALSE){
        if( (!self::tem_usuario_logado()  )|| ($adm &&  !self::usuario_logado_eh_adm())  ){
            header('Location:login.php');
            exit(0);
        }
    }

    public static function tem_usuario_logado():bool{
        return isset($_SESSION['usuario']);
    }
    public static function usuario_logado_eh_adm():bool{
        return $_SESSION['usuario'] ->flag_adm === '0';
    }

    public static function login(string $nome_usuario, string $senha):bool{
        global $dsn , $db_username, $db_senha;
        try{
            $pdo = new PDO($dsn, $db_username, $db_senha);
            $sql = "SELECT * FROM usuario WHERE nome_usuario = '$nome_usuario' AND senha = '$senha'";
            $resultado = $pdo->query($sql);
            if($resultado ===FALSE){
                return FALSE; //erro mysql
            }
            $usuario = $resultado->fetchObject() ;
            unset($usuario->senha);
            $_SESSION['usuario'] = $usuario;

            return $usuario !== FALSE;
        }catch(PDOException $e) {
            return false; // erro conexao
        }
        
       
        
    }

}