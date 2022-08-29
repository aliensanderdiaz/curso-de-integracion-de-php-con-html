<?php

$is_float = filter_var("esto no es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

var_dump($is_float);

$is_int = filter_var("esto no es un numero", FILTER_VALIDATE_INT);

var_dump($is_int);

$is_ip = filter_var("00.0.0.5", FILTER_VALIDATE_IP);

var_dump($is_ip);

$is_url = filter_var("https://platzi.com/", FILTER_VALIDATE_URL);

var_dump($is_url);

$is_email = filter_var("https://platzi.com/", FILTER_VALIDATE_EMAIL);

var_dump($is_email);