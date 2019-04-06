<?php

function test(&$model, $api)
{
    if (!isset($_GET['id'])) {
        echo('spierdalaj');
        return 'empty';
    }
    $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');
    $query = new MongoDB\Driver\Query(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
    $rows = $manager->executeQuery('tester.tests', $query); // $mongo contains the connection object to MongoDB


    $rows = $rows->toArray();
    $model['test'] = $rows[0];
    $model['id'] = $_GET['id'];

    return 'testView';
}