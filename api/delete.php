<?php
    $id = intval($_GET['id']);

    header('Content-type: application/json');

    $databaseJson = file_get_contents('new.json');
    $database = json_decode($databaseJson);

    $result = [];
    $found = false;

    for ($i = 0; $i < count($database); $i++) {
        if ($i === $id) {
            $found = true;
            continue;
        }

        array_push($result, $database[$i]);
    }

    if (!$found) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'not found'
        ]);

        exit();
    }

    file_put_contents('new.json', json_encode($result));

    echo json_encode([
        'status' => 'ok'
    ]);
