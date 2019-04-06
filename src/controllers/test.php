<?php

function test(&$model, $api)
{
    $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');

    $dec = json_decode($json,true);

    $write = new MongoDB\Driver\BulkWrite;
    $id = $write->insert($dec);
    $result = $manager->executeBulkWrite('tester.tests', $write);



    echo '<pre>';
    var_dump($dec);
    echo '</pre>';

    echo "XDDD";
    return 'empty';
}