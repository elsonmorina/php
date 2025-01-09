<?php
    $grade = array(
        "Math"=>"3",
        "history"=>"5",
        "art"=>"3",
        "music"=>"5"
    );

    foreach($grade as $subject => $grade){
        echo "Subjecti:" .$subject.",Grade".$grade;
        echo "<br>";
    }

?>