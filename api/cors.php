<?php
$dominioPermitido = $_SERVER['HTTP_ORIGIN'];
header("Access-Control-Allow-Origin: $dominioPermitido");
header("Access-Control-Allow-Headers: content-type");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");