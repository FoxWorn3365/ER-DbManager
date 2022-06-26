<?php
require_once("assets/db.access.php");

$sql = "SELECT id, nome, cognome, eta, iscrizione FROM iscritti ORDER BY iscrizione DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $count = 0;
  while($row = $result->fetch_assoc()) {
    $lista[$count]["id"] = $row["id"];
    $lista[$count]["nome"] = $row["nome"];
    $lista[$count]["cognome"] = $row["cognome"];
    $lista[$count]["iscrizione"] = $row["iscrizione"];
    $lista[$count]["eta"] = $row["eta"];
    $count++;
  }
} else {
  echo "0 results";
}
$conn->close();

var_dump($lista);