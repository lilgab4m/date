<?php
    $data = mktime(14,30,00,10,28,2023);
    // Mostra 28-07-2023
    echo date("d-m-Y", $data)."<br>";

    // Mostra 28-07-2023 02:30
    echo date("d-m-Y H:i", $data)."<br>"; 

    // Mostra 2023
    echo date("Y", $data). "<br>";

 ?>