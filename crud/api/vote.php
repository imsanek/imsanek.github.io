<?php
    $id = intval($_POST['id']);
    $rating = intval($_POST['rating']);

    header('Content-type: application/json');

    if (!$id || !$rating || ($rating > 10 || $rating < 0)) {
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
            $votes_sum = $database[$i]->rating * $database[$i]->votes;
            $votes_sum += $rating;

            $database[$i]->votes++;

            $database[$i]->rating = $votes_sum / $database[$i]->votes;
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
