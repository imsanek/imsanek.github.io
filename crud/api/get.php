<?php
    $id = intval($_GET['id']);

    header('Content-type: application/json');

    if (!$id) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'incorrect request'
        ]);
        exit();
    }

    $databaseJson = file_get_contents('database.json');
    $database = json_decode($databaseJson);

    $result = false;
    while($result = array_pop($database)) {
        if (intval($result->id) === $id) {
            break;
        }
    }

    if (!$result) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'game not found'
        ]);

        exit();
    }

    echo json_encode($result);
