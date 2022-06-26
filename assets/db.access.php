 <?php
$servername = "localhost";
$username = "eragazzi";
$password = "haha volevi ehhh";
$db = "estate_ragazzi";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("[FoxEngine v1.0][#MySQLi] ERRORE: " . $conn->connect_error);
}
?> 