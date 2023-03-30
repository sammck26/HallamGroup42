
<?php

function gettutor (){
    $db = new SQLITE3('database/database.db');
    $sql = "SELECT * FROM Databaseold.tutor";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = [];
    
    while ($row = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach


        $arrayResult [] = $row;
    }
    return $arrayResult;
}
