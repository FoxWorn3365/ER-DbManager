<?php
require_once("assets/getRecords.php");

foreach ($lista as $span) {
?>
   <tr>
    <td><?= $span["id"]; ?></td>
    <td><?= $span["nome"]; ?></td>
    <td><?= $span["cognome"]; ?></td>
    <td><?= $span["eta"]; ?></td>
    <td style="background-color: yellow"><?= date("d/m/Y", $span["iscrizione"]); ?></td>
   </tr>
<?php
}
?>