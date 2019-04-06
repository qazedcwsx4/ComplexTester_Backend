<?php

function createTest(&$model)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tab = [];
        $tab['name'] = $_POST['title'];
        $tab['author'] = $_POST['author'];
        $tab['description'] = $_POST['description'];
        $questions = [];
        $question = [];
        for ($i = 0; $i < count($_POST['question']); $i++) {
            $question['id'] = $i;
            $question['answerContent'] = $_POST['question'][$i];
            $ans = [];
            if ($_POST['ans1'] !== "") $ans[] = $_POST['ans1'][$i];
            if ($_POST['ans2'] !== "") $ans[] = $_POST['ans2'][$i];
            if ($_POST['ans3'] !== "") $ans[] = $_POST['ans3'][$i];
            if ($_POST['ans4'] !== "") $ans[] = $_POST['ans4'][$i];
            $question['answers'] = $ans;
            $correct = $_POST['correctAnswer'][$i];
            $question['correctAnswer'] = $_POST["ans$correct"][$i];
            $question['type'] = 'singleAnswer';
            $questions[] = $question;
        }
        $tab['questions'] = $questions;

        $manager = new MongoDB\Driver\Manager('mongodb+srv://admin:adamkrol69@complextesterdb-oplob.mongodb.net/test?retryWrites=true');

        $write = new MongoDB\Driver\BulkWrite;

        $id = $write->insert($tab);
        $result = $manager->executeBulkWrite('tester.tests', $write);

        return 'redirect:/';
    }


    //$query = new MongoDB\Driver\Query(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
    //$rows = $manager->executeQuery('tester.tests', $query); // $mongo contains the connection object to MongoDB


    //$rows = $rows->toArray();
    //$model['test'] = $rows[0];

    return 'createTestView';
}