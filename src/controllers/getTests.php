<?php

function getTests(&$model, $api)
{
    header("Access-Control-Allow-Origin: *");
    $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');
    $query = new MongoDB\Driver\Query([]);
    $rows = $manager->executeQuery('tester.tests', $query); // $mongo contains the connection object to MongoDB


    $rows = $rows->toArray();


    $model = [];
    foreach ($rows as $row) {
        $temp['name'] = $row->name;
        $temp['author'] = $row->author;
        $temp['id'] = (string)$row->_id;
        $temp['description'] = $row->description;
        array_push($model, $temp);
    }
    //header("Access-Control-Allow-Origin: *");

    if ($api) {
        echo(json_encode($model));
        return 'empty';
    }
    else return 'getTestsView';
}
