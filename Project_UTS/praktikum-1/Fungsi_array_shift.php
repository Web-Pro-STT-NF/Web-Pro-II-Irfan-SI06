<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Irfan", "Arlan", "Algi", "Domami"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
