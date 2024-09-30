<?php 

    $passwordLenght = $_GET['passLength'] ?? null;

    function generatorPass($length){
        $password = '';
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $charactersLength = strlen($characters);

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, $charactersLength) -  1];    
        }
        return $password;
    }

    if ($passwordLenght) {
        echo generatorPass($passwordLenght);
    }
?>