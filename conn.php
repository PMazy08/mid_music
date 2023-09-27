<?php
        $severname = "202.28.34.197";
        $username = "web65_64011212228";
        $password = "64011212228@csmsu";
        $dbname = "web65_64011212228";
    
        $conn = new mysqli($severname, $username, $password, $dbname);
        //่ทดสอบว่าเขื่อมยัง
        // if($conn->connect_error){
        //     die("Connecttin Fail");
        // }else{
        //     echo "Connecttin Success";
        // }
?>