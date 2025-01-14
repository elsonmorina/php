<?php
    
    $my_file = fopen("tasks.txt", "r");
    while(!feof($my_file)){
        echo fgets($my_file) . "<br>";
    }
    fclose($my_file);


?>