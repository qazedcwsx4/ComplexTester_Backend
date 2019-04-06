<?php

function main(&$model)
{
    if ()
    header("Access-Control-Allow-Origin: *");
    $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');
    $query = new MongoDB\Driver\Query([]);
    $rows = $manager->executeQuery('tester.tests', $query); // $mongo contains the connection object to MongoDB

    $model['tests'] = $rows->toArray();


    //echo '<pre>';
    //var_dump($rows);
    //echo '</pre>';
    return 'mainView';
}