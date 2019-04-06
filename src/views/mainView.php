<!DOCTYPE html>
<html>
<head>
    <title>Complex Tester</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/error.css">
</head>


<body class="grey lighten-4">
<?php include 'navbar.php' ?>
<main class="container">
    <div class="row">
        <?php foreach ($tests as $test): ?>
            <div class="col l6 m6 s6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><?= $test->name ?></span>
                        <p><?= $test->description ?></p>
                        <p class="bold right"><?= $test->author ?></p>
                    </div>
                    <div class="card-action">
                        <a href="/test?id=<?= (string)$test->_id ?>">Rozpocznij ten test</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <a href="/createTest">
            <div class="col l12 m12 s12">
                <div class="card red darken-3">
                    <div class="card-content white-text">
                        <span class="card-title">Utwórz nowy test</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</main>
<div class="row">

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>
