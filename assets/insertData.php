<?php
require_once("assets/db.access.php");

$sql = "INSERT INTO iscritti (nome, cognome, eta, iscrizione) VALUES ('$nome', '$cognome', $eta, '$iscrizione')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  die("[FoxEngine v1][#MySQLi] ERRORE: " . $sql . "<br>" . $conn->error);
}