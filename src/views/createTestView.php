<!DOCTYPE html>
<html>
<head>
    <title><?= $test->name ?></title>
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
        <form class="col s12">
            <div class="row">
                <div class="input-field col l6">
                    <input id="title" type="text" class="validate">
                    <label for="title">Tytuł</label>
                </div>
                <div class="input-field col l6">
                    <input id="author" type="text" class="validate">
                    <label for="author">Autor</label>
                </div>
                <div class="input-field col l12">
                    <textarea id="description" class="materialize-textarea"></textarea>
                    <label for="description">Opis</label>
                </div>
            </div>
            <div class="divider black"></div>
            <br>
            <br>
            <div class="row grey lighten-2">
                <div class="input-field col l6">
                    <textarea id="question" class="materialize-textarea"></textarea>
                    <label for="question">Pytanie</label>
                </div>
                <div class="col l6">
                    <div class="input-field col l6">
                        <input id="ans1" type="text" class="validate">
                        <label for="ans1">Odpowiedź 1</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans2" type="text" class="validate">
                        <label for="ans2">Odpowiedź 2</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans3" type="text" class="validate">
                        <label for="ans3">Odpowiedź 3</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans4" type="text" class="validate">
                        <label for="ans4">Odpowiedź 4</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6">
                    <textarea id="question" class="materialize-textarea"></textarea>
                    <label for="question">Pytanie</label>
                </div>
                <div class="col l6">
                    <div class="input-field col l6">
                        <input id="ans1" type="text" class="validate">
                        <label for="ans1">Odpowiedź 1</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans2" type="text" class="validate">
                        <label for="ans2">Odpowiedź 2</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans3" type="text" class="validate">
                        <label for="ans3">Odpowiedź 3</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans4" type="text" class="validate">
                        <label for="ans4">Odpowiedź 4</label>
                    </div>
                </div>
            </div>
            <div class="row grey lighten-2">
                <div class="input-field col l6">
                    <textarea id="question" class="materialize-textarea"></textarea>
                    <label for="question">Pytanie</label>
                </div>
                <div class="col l6">
                    <div class="input-field col l6">
                        <input id="ans1" type="text" class="validate">
                        <label for="ans1">Odpowiedź 1</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans2" type="text" class="validate">
                        <label for="ans2">Odpowiedź 2</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans3" type="text" class="validate">
                        <label for="ans3">Odpowiedź 3</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="ans4" type="text" class="validate">
                        <label for="ans4">Odpowiedź 4</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<div class="row">

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>
