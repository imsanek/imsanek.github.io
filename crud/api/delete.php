<?php
    $id = intval($_POST['id']);

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

    $result = [];
    $found = false;

    for ($i = 0; $i < count($database); $i++) {
        if (intval($database[$i]->id) === $id) {
            $found = true;
            continue;
        }

        array_push($result, $database[$i]);
    }

    if (!$found) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'game not found'
        ]);

        exit();
    }

    file_put_contents('database.json', json_encode($result));

    echo json_encode([
        'status' => 'ok'
    ]);
