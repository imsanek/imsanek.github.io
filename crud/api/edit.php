<?php
    $id = intval($_POST['id']);
    $title = $_POST['title'];
    $platformJSON = $_POST['platform'];
    $price = intval($_POST['price']);

    header('Content-type: application/json');

    if (!$id || !($title || $platformJSON || $price)) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'incorrect request'
        ]);
        exit();
    }

    $databaseJson = file_get_contents('database.json');
    $database = json_decode($databaseJson);

    $found = false;

    for ($i = 0; $i < count($database); $i++) {
        if ($id === intval($database[$i]->id)) {
            $found = true;
            if ($title) {
                $database[$i]->title = $title;
            }
            if ($platformJSON) {
                $platform = json_decode($platformJSON);
                $database[$i]->platform = $platform;
            }
            if ($price) {
                $database[$i]->price = $price;
            }
        }
    }

    if (!$found) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'game not found'
        ]);

        exit();
    }

    file_put_contents('database.json', json_encode($database));

    echo json_encode([
        'status' => 'ok'
    ]);
