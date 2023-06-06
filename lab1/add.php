<?php
    $id = $_GET['id'];
    $title = $_GET['title'];
    $icon_url = $_GET['icon_url'];

    header('Content-type: application/json');

    if (!$title || !$icon_url) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'incorrect request'
        ]);
        exit();
    }

    $platform = json_decode($platformJSON);

    $databaseJson = file_get_contents('database.json');
    $database = json_decode($databaseJson);

    array_push($database, [
        'id' => $id,
        'title' => $title,
        'icon_url' => $icon_url,
    ]);

    file_put_contents('database.json', json_encode($database));

    echo json_encode([
        
        'status' => 'ok'
        
    ]);
