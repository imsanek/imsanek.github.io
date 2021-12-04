<?php
    $id = intval($_GET['id']);
    $date = array($_GET['date']);
    $phone = intval($_GET['phone']);
    $name = $_GET['name'];
    $email = $_GET['email'];

    header('Content-type: application/json');

    if (!$id) {
        header('HTTP/1.1 404 Not Found');
        echo json_encode([
            'status' => 'incorrect request'
        ]);
        exit();
    }

    $databaseJson = file_get_contents('hotel.json');
    $database = json_decode($databaseJson);

    array_push($database[$id]->dates, [
        'date' => $date[0],
        'phone' => $phone,
        'name' => $name,
        'email' => $email
    ]);

    file_put_contents('hotel.json', json_encode($database));

    echo json_encode([
        'status' => 'ok'
    ]);