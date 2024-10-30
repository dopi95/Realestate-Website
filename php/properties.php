<?php

function getAllProperties($con){
    $sql = "SELECT * from  properties";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $properties = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
    } else {
        $properties = 0;
    }
    return $properties;
}

?>
