<?php
$nome = filter_var($_GET["nome"], FILTER_SANITIZE_STRING);
$cognome = filter_var($_GET["cognome"], FILTER_SANITIZE_STRING);
$eta = filter_var($_GET["eta"], FILTER_SANITIZE_STRING);
$iscrizione = strtotime(filter_var($_GET["iscrizione"], FILTER_SANITIZE_STRING));

require_once("assets/insertData.php");