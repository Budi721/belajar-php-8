<?php

class Login
{

}

$login = new Login();

// Di PHP 8
var_dump($login::class);

// Di versi Lama
var_dump(get_class($login));
var_dump(Login::class);