<?php
    $id = intval($_GET['id']);
    $date = array($_GET['date']);
    $phone = intval($_GET['phone']);
    $name = $_GET['name'];
    $email = $_GET['email'];
    $children = $_GET['children'];
    $price = $_GET['price'];

    header('Content-type: application/json');

    if (!$id) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'incorrect request'
        ]);
        exit();
    }

    $databaseJson = file_get_contents('new.json');
    $database = json_decode($databaseJson);


    array_push($database, [
        'id' => $id,
        'date' => $date,
        'phone' => $phone,
        'name' => $name,
        'email' => $email,
        'children' => $children,
        'price' => $price
    ]);

    file_put_contents('new.json', json_encode($database));

    echo json_encode([
        'status' => 'ok'
    ]);