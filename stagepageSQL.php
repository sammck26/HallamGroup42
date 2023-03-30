<?php
$stage = $_GET['stage'];
function getnumberofweeks (){
    $db = new SQLITE3('database/database.db');

    $sql = "SELECT WeekID FROM Week WHERE StageID = $stage";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = [];
    
    while ($row = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach


        $arrayResult [] = $row;
    }
    return $arrayResult;
}
function getmilestones (){
    $db = new SQLITE3('database/database.db');
    for ($i=1; $i<count(12); $i++):{
    $sql = "SELECT Description FROM Milestones WHERE WeekID = $i";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = [];
    }
    while ($row = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach


        $arrayResult [] = $row;
    }
    return $arrayResult;
}