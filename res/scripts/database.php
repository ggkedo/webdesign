<?php
$db_user = 'root';
$db_pass = 'mysql';
$db_name = 'webdesign';

//dsn: connection string
$dsn = 'mysql:host=localhost;dbname='.$db_name.';charset=utf8mb4';
$db = new PDO($dsn, $db_user, $db_pass);

function get_fish_list($firstn)
{
    global $db;
    $sql = "SELECT * FROM fish LIMIT :n";
    $query = $db->prepare($sql);
    $query->bindParam(":n", $firstn, PDO::PARAM_INT);
    $query->execute();
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function get_services_list($firstn)
{
    global $db;
    $sql = "SELECT * FROM services LIMIT :n";
    $query = $db->prepare($sql);
    $query->bindParam(":n", $firstn, PDO::PARAM_INT);
    $query->execute();
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function get_news_list($firstn)
{
    global $db;
    $sql = "SELECT * FROM news WHERE status = 1 ORDER BY added DESC LIMIT :n";
    $query = $db->prepare($sql);
    $query->bindParam(":n", $firstn, PDO::PARAM_INT);
    $query->execute();
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function get_news($id)
{
    global $db;
    $sql = "SELECT * FROM news WHERE id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    return $row;
}