<?php

function city_select(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM city ORDER BY city ASC;"; 
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

?>