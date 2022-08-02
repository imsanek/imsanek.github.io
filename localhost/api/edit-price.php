<?php
    $id = $_GET['id'];
    $price = intval($_GET['price']);
    $counterNumber = intval($_GET['counterNumber']);
    header('Content-type: application/json');

    $databaseJson = file_get_contents('price.json');
    $database = json_decode($databaseJson);

    $found = false;

    for ($i = 0; $i < count($database); $i++) {
        if ($id == $database[$i]->id) {
            $found = true;
            if ($price) {
                $database[$i]->priceData[$counterNumber][2] = $price;
                break;
            }
        }
    }

    if (!$found) {
        echo json_encode([
            'status' => 'not found'
        ]);

        exit();
    }

    $database = json_encode($database);

    file_put_contents('price.json', $database);

    echo json_encode([
        'status' => 'ok'
    ]);
