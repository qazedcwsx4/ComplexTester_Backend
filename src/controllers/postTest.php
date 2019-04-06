<?php

function postTest(&$model, $api)
{
    $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');
    $data = file_get_contents("php://input");
    $json_data = json_decode($data);

    $write = new MongoDB\Driver\BulkWrite;

    $id = $write->insert($json_data);
    $result = $manager->executeBulkWrite('tester.tests', $write);

    echo 'ok';
    return 'empty';
}
