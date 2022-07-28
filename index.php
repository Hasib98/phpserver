<?php
header("Content-Type: application/json");

if(isset($_GET['shawa'])) {
    
    echo json_encode("everything");
} 
else {
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    //echo json_encode($age,JSON_PRETTY_PRINT);
    echo json_encode($age,JSON_PRETTY_PRINT);

}
?>