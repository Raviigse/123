<?php

    $pol=mysqli_connect("localhost","root","","psy");


    $query = "SELECT * FROM uzytkownicy WHERE 1;";
    $wynik = mysqli_query($pol,$query);

    if($wynik && mysqli_num_rows($wynik)>0){
        $msg = "Zapytanie zwróciło: ".mysqli_num_rows($wynik)." wierszy";


        $row = mysqli_fetch_row($wynik);
        $array = mysqli_fetch_array($wynik);
        $assoc = mysqli_fetch_assoc($wynik);
    } else {
        $msg = "brak wierszy";
    }

    if(isset($msg)){
        echo $msg;
    }

    mysqli_close($pol);
?>