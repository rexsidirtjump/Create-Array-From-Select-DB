<?php

$array1 = array();
    $data = $conn->query("SELECT status FROM blokrumah");
    while($row = mysqli_fetch_assoc($data)){
        $array1 = array_merge($array1, array_map('trim', explode(",", $row['status'])));
    } 
    
    
    ?>