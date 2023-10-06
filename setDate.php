<?php
 $data = new DateTime('28-09-2023');
 $data->setDate(2024, 12, 25); // no setDate usa-se o formato americano.
 echo $data->format('d-m-Y H:i:s');
?>