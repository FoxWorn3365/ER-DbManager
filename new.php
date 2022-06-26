<!DOCTYPE html>
<html>
 <head>
  <title>TEST ESTATE RAGAZZI</title>
  <script src='https://foundation.fcosma.it/assets/js/http.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/main.css">
  <!-- sono schiavizzato lol -->
 </head>
 <body style='text-align: center'>
  <h1>Nuovo iscritto</h1>
  <div id='form'>
   <b>Nome:</b>
   <input type='text' id='nome'><br>
   <b>Cognome:</b>
   <input type='text' id='cognome'><br>
   <b>Età:</b>
   <input type='number' max='150' id='eta'><br>
   <b>Data di Iscrizione:</b>
   <input type='date' id='data'><br><br>
   <button onclick='inviaTutto()'>Crea</button>
  </div>
 </body>
 <script>
 function inviaTutto() {
   var nome = document.getElementById('nome').value;
   var cognome = document.getElementById('cognome').value;
   var eta = document.getElementById('eta').value;
   var data = document.getElementById('data').value;
   http_request('https://fcosma.it/estateragazzi/insert?nome=' + nome + '&cognome=' + cognome + '&eta=' + eta + '&iscrizione=' + data);
   window.location.href = "index";
 }
 </script>
</html>