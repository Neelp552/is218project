<?php

function db_add_user($email, $firstname, $lastname, $birthday, $password){
    global $db;
    $query = "INSERT INTO `accounts` (`email`, `fname`, `lname`, `birthday`, `password`) VALUES (?,?,?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$email, $firstname, $lastname, $birthday, $password]);
}

function db_get_user($email, $password){
    global $db;
    $query = "SELECT `id`, `email`, `fname`, `lname`, `birthday` from `accounts` WHERE `email`=:email AND `password`=:password";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $res = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $res;
}

function db_user_exists($email, $password){
    global $db;
    $res = db_get_user($email, $password);
    return (isset($res));
}
?>