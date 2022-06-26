<!DOCTYPE html>
<html>
 <head>
  <title>TEST ESTATE RAGAZZI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/main.css">
  <!-- sono schiavizzato lol -->
 </head>
 <body style='text-align: center'>
  <h1>Iscritti</h1>
  <!-- iniziamo con la bellissima tabella -->
  <table>
   <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Età</th>
    <th>Data di Iscrizione</th>
   </tr>
   <!-- da qua in poi ci andranno gli iscritti -->
<?php require("assets/printRecords.php"); ?>
  </table>
 </body>
</html>