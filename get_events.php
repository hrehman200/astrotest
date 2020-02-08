<?php
require 'vendor/autoload.php';
// ini_set('precision', 2);
// ini_set('serialize_precision', -1);
try {
    $client = new \MongoDB\Driver\Manager(
        'mongodb+srv://upwork_test:Letmein123!@sol-ra-hotdy.mongodb.net/test'
    );

    $query = new MongoDB\Driver\Query([]);

    $rows = $client->executeQuery("astro.event", $query);

    $arr_json = [];
    foreach ($rows as $row) {
        $arr_json[] = addcslashes(json_encode($row), "'");
    }

    echo '[' . implode(',', $arr_json) . ']';
} catch (Exception $e) {
    echo $e->getMessage();
}

exit();
