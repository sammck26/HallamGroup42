
<?php

function getStudent (){
    $db = new SQLITE3('C:\\xampp\\Storageforhallam\\Database.db');
    $sql = "SELECT * FROM students";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = [];
    
    while ($row = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach


        $arrayResult [] = $row;
    }
    return $arrayResult;
}
