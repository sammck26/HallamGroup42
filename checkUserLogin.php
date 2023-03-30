<?php

function verifyUsers () {
    session_start();
    //if (!isset($_POST['username']) or !isset($_POST['password'])) {
    //    return null;
    //}

    $db = new SQLite3('database/database.db');
    $username = $_POST['username'];
    $password =  $_POST['password'];
    $sql = "SELECT * FROM logininfo WHERE username='$username' AND password='$password'";
    echo $sql;
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $user = $result->fetchArray(SQLITE3_ASSOC);
    if ($user) {
        $_SESSION['username'] = $user['username'];
        return array(
            'user' => $user,
            'role' => $user['role']
        );
    } else {
        return null;
    }
}


?>

