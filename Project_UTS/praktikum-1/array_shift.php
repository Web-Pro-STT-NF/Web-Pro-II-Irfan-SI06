<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Irfan", "Arlan", "Algi", "Domami"];
    array_unshift($tims, "joko", "indra");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
