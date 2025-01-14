<?php

//open a file me emrin ds.txt
//nese nuk ka file te hapur e hap
//nese esht file i hapur i mbishkrun dhe i hup ato te merparshmet dhe e lejon me editu etj, etj.

    // $file = fopen("ds.txt", "w");

    // $teksti = "ky esht teksti qe duam ta shenojm";

    // fwrite($file, $teksti);
    // fclose($file);

    // $my_file = fopen("ds.txt", "r");
    // while(!feof($my_file)){
    //     echo fgets($my_file) . "<br>";
    // }
    // fclose($my_file);

    $my_file = fopen("ds.txt", "w+");
    fwrite($my_file,"kete tekst dua ta shenoj");
    fclose($my_file);

    $my_file2 = fopen("ds.txt", "a+");
    fwrite($my_file2, "\nadd more text");
    fclose($my_file2);
?>