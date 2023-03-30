<?php
session_start();

function generatePassword($firstName, $lastName) {
    $firstPart = substr($firstName, 0, 3);
    $lastPart = substr($lastName, -3);
    $randomNum = mt_rand(100, 999);
    return $firstPart . $lastPart . $randomNum;
}

function createStudent(){
    $created = false;
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $random = mt_rand(100, 999);
    //$password = generatePassword($_POST['fname'], $_POST['lname']);
    $username = substr($fname, 0, 3) . substr($lname, 0, 1) . $random;
    $db = new SQLite3('database/database.db');

    // Insert into 'info' table
    $sql = 'INSERT INTO student(username, fname,lname,email,course) VALUES (:username,:fname,:lname,:email,:course)';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':fname', $_POST['fname'], SQLITE3_TEXT);
    $stmt->bindParam(':lname', $_POST['lname'], SQLITE3_TEXT);
    $stmt->bindParam(':email', $_POST['email'], SQLITE3_TEXT);
    $stmt->bindParam(':course', $_POST['course'], SQLITE3_TEXT);
    //$stmt->bindParam(':password', $password, SQLITE3_TEXT);
    $stmt->execute();

    /*$sql = 'INSERT INTO stage1(username) VALUES (:username)';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->execute();
    // Insert into 'users' table
   /* $sql = 'INSERT INTO users(username, password, role) VALUES (:username, :password, :role)';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':password', $password, SQLITE3_TEXT);
    $role = "student";
    $stmt->bindParam(':role', $role, SQLITE3_TEXT);
    $stmt->execute();
        */
    if($stmt){
        $created = true;
    }

    return $created;
}

?>