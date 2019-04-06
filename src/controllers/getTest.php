<?php

function getTest(&$model, $api)
{
    header("Access-Control-Allow-Origin: *");
    if (!isset($_GET['id'])) {
        echo('spierdalaj');
        return 'empty';
    }
    $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');
    $query = new MongoDB\Driver\Query(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
    $rows = $manager->executeQuery('tester.tests', $query); // $mongo contains the connection object to MongoDB


    $rows = $rows->toArray();
    $row = $rows[0];
    $model = [];
    $model[] = $row;
    if ($api) {
        echo(json_encode($model));
        return 'empty';
    } else return 'getTestView';
}
