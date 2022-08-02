<?php
    $id = intval($_GET['id']);

    header('Content-type: application/json');


    $databaseJson = file_get_contents('new.json');
    $database = json_decode($databaseJson);

    $result = $database;
    

    if (!$result) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'not found'
        ]);

        exit();
    }

    echo json_encode($result);
