<?php
session_start();

function generatePassword($firstName, $lastName) {
    $firstPart = substr($firstName, 0, 3);
    $lastPart = substr($lastName, -3);
    $randomNum = mt_rand(100, 999);
    return $firstPart . $lastPart . $randomNum;
}

function createTutor(){
    $created = false;
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $random = mt_rand(100, 999);
    $password = generatePassword($_POST['fname'], $_POST['lname']);
    $username = substr($fname, 0, 3) . substr($lname, 0, 1) . $random;
    $db = new SQLite3('database/database.db');

    // Insert into 'info' table
    $sql = 'INSERT INTO tutor(username, fname,lname,permissions) VALUES (:username,:fname,:lname,:permissions)';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':fname', $_POST['fname'], SQLITE3_TEXT);
    $stmt->bindParam(':lname', $_POST['lname'], SQLITE3_TEXT);
    $stmt->bindParam(':permissions', $_POST['permissions'], SQLITE3_TEXT);
   
    //$stmt->bindParam(':password', $password, SQLITE3_TEXT);
    $stmt->execute();

    // Insert into 'users' table
    $sql = 'INSERT INTO logininfo(username, password, role) VALUES (:username, :password, :role)';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':password', $password, SQLITE3_TEXT);
    $role = "tutor";
    $stmt->bindParam(':role', $role, SQLITE3_TEXT);
    $stmt->execute();
        
    if($stmt){
        $created = true;
    }

    return $created;
}

?>