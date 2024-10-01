<?php 
    $passwordLenght = $_GET['passLength'];

    function generatorPass($length){
        $password = '';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*()';
        $allCharacters = $lowercase.$uppercase.$numbers.$symbols;
        $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
        $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
        $password .= $numbers[rand(0, strlen($numbers) - 1)];
        $password .= $symbols[rand(0, strlen($symbols) - 1)];

        for ($i = 4; $i < $length; $i++) {
            $password .= $allCharacters[rand(0, strlen($allCharacters) - 1)];
        }
        return str_shuffle($password);
    }

    if ($passwordLenght) {
        echo generatorPass($passwordLenght);
    }
?>