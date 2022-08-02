<?php
    $id = intval($_GET['id']);
    $firstDate = $_GET['firstDate'];
    $lastDate = $_GET['lastDate'];

    header('Content-type: application/json');

    $databaseJson = file_get_contents('hotel.json');
    $database = json_decode($databaseJson);

    $result = [];
    $found = false;
    $numbResult = [];

    $numbResult = [
        'id' => $database[$id-1]->id,
        'img' => $database[$id-1]->img,
        'title' => $database[$id-1]->title,
        'about' => $database[$id-1]->about,
        'price' => $database[$id-1]->price,
        'children' => $database[$id-1]->children,
        'humans' => $database[$id-1]->humans,
        'dates'  => []
    ];

    for ($j = 0; $j < count($database[$id-1]->dates); $j++){
        if ($database[$id-1]->dates[$j]->date[0] == $firstDate){
            continue;
        }
        array_push($numbResult[dates], $database[$id-1]->dates[$j]);
    }

    for ($i = 0; $i < count($database); $i++) {
        if ($database[$i]->id == $id) {
            $found = true;
            array_push($result, $numbResult);
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

    file_put_contents('hotel.json', json_encode($result));

    echo json_encode([
        'status' => 'ok'
    ]);
