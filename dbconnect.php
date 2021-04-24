<?php

    $waterlevel= $_GET["waterlevel"];
    $pH= $_GET["pH"];
    $temperature = $_GET["temperature"];
    $humidity = $_GET["humidity"];
    $turbidity = $_GET["turbidity"];

    $dbconn = pg_connect("host=35.238.61.0 dbname=postgres user=postgres password=SDGP12345678");
    $device_id = 1;
    $sql = "INSERT INTO api_data(tm,hu,wt,device_id,ph,tr) VALUES("
        .$temperature.
        ","
        .$humidity.
        ","
        .$waterlevel.
        ","
        .$device_id.
        ","
        .$pH.
        ","
        .$turbidity.
        ")";

    $ret = pg_query($dbconn, $sql);
    if(!$ret) {
       echo pg_last_error($dbconn);
    } else {
       echo "Inserted";
    }
    
?>
