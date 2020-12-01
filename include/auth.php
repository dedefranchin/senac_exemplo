<?php

function controla_aceso(){
    if( !isset( $_SESSION['usuario'] ) ){
        header('Location:login.php');
        exit(0);
    }
}