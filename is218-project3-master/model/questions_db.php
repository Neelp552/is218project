<?php
/* db utils for questions */
function db_add_question($name, $body, $skills, $email, $ownerid){
    global $db;
    $query = "INSERT INTO `questions` (`owneremail`, `ownerid`, `createddate`, `title`, `body`, `skills`) VALUES (?,?,?,?,?,?)";
    $stmt = $db->prepare($query);
    $date = date("Y-m-d h:m:s");
    $stmt->execute([$email, $ownerid, $date, $name, $body, $skills]);
}

function db_get_questions($user){
    global $db;
    $query = "SELECT `id`, `title`, `body`, `skills`, `score` FROM `questions` WHERE `owneremail`=:user";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':user', $user);
    $stmt->execute();
    $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $res;
}

function db_get_question($id){
    global $db;
    $query = "SELECT `id`, `title`, `body`, `skills`, `score` FROM `questions` WHERE `id`=:id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $res = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $res;
}
function db_get_all_questions(){
    global $db;
    $query = 'SELECT * FROM `questions`';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $res;

}

function db_edit_question($id, $name, $body, $skills){
    global $db;
    $query = "UPDATE `questions` SET `title`=:title, `body`=:body, `skills`=:skills WHERE `id`=:id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':title', $name);
    $stmt->bindValue(':body', $body);
    $stmt->bindValue(':skills', $skills);
    $stmt->execute();
}

function db_delete_question($id){
    global $db;
    $query = "DELETE from `questions` WHERE `id`=:id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
}
?>