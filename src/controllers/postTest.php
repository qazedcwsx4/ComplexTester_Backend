<?php

function postTest(&$model, $api)
{
    $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');
    $data = json_decode(file_get_contents("php://input"), true);

    $write = new MongoDB\Driver\BulkWrite;
    $id = $write->insert($data);
    $result = $manager->executeBulkWrite('tester.tests', $write);

    echo 'ok';
    return 'empty';
}
