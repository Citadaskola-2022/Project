<?php

$db = new \SQLite3('../db/project.sqlite3');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = <<<SQL
        INSERT INTO score_map (player_id, pos_x, pos_y) VALUES (:player_id, :x, :y)
    SQL;

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':player_id', $_POST['player_id'], SQLITE3_INTEGER);
    $stmt->bindValue(':x', $_POST['pos_x'], SQLITE3_INTEGER);
    $stmt->bindValue(':y', $_POST['pos_y'], SQLITE3_INTEGER);
    $stmt->execute();

    header('location: /project/goal');
    die();
}

$result = $db->query("SELECT id, number, name, surname FROM players WHERE team_id = 1");

$players = [];
while ($row = $result->fetchArray()) {
    $players[$row['id']] = new \App\Kriss\Player($row['id'], $row['number'], $row['name'], $row['surname']);
}

require '../views/project/goal.view.php';