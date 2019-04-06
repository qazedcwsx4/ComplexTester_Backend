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
                    <input name="title" id="title" type="text" class="validate">
                    <label for="title">Tytuł</label>
                </div>
                <div class="input-field col l6">
                    <input name="author" id="author" type="text" class="validate">
                    <label for="author">Autor</label>
                </div>
                <div class="input-field col l12">
                    <textarea name="description" id="description" class="materialize-textarea"></textarea>
                    <label for="description">Opis</label>
                </div>
            </div>
            <div class="divider black"></div>
            <br>
            <div id="questions">

            </div>
                <div class="row">
                    <a class="waves-effect waves-light btn-large" onclick="xd()">Dodaj nowe pytanie</a>
                    <a class="waves-effect right waves-light btn-large">
                        Wyślij
                        <i class="material-icons right">send</i>
                    </a>
                </div>

        </form>
    </div>
</main>
<div class="row">

</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    var n = 0;
    function xd() {
        $("#questions").append('<div class="row grey lighten-2" id="question">\n' +
            '                    <div class="col l6">\n' +
            '                        <div class="input-field col l12">\n' +
            '                            <textarea name="question[]" id="question2" class="materialize-textarea"></textarea>\n' +
            '                            <label for="question">Pytanie</label>\n' +
            '                        </div>\n' +
            '                        <div class="col l12">\n' +
            '                            <p>Poprawna odpowiedź:\n' +
            '                                <label class="right">\n' +
            '                                    <input name="correctAnswer['+n+']" value="4" type="radio" checked/>\n' +
            '                                    <span>4</span>\n' +
            '                                </label>\n' +
            '                                <label class="right">\n' +
            '                                    <input name="correctAnswer['+n+']" value="3" type="radio"/>\n' +
            '                                    <span>3&nbsp&nbsp&nbsp&nbsp&nbsp</span>\n' +
            '                                </label>\n' +
            '                                <label class="right">\n' +
            '                                    <input name="correctAnswer['+n+']" value="2" type="radio"/>\n' +
            '                                    <span>2&nbsp&nbsp&nbsp&nbsp&nbsp</span>\n' +
            '                                </label>\n' +
            '                                <label class="right">\n' +
            '                                    <input name="correctAnswer['+n+']" value="1" type="radio"/>\n' +
            '                                    <span>1&nbsp&nbsp&nbsp&nbsp&nbsp</span>\n' +
            '                                </label>\n' +
            '                            </p>\n' +
            '\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '\n' +
            '                    <div class="col l6">\n' +
            '                        <div class="input-field col l6">\n' +
            '                            <input name="ans1[]" id="ans1" type="text" class="validate">\n' +
            '                            <label for="ans1">Odpowiedź 1</label>\n' +
            '                        </div>\n' +
            '                        <div class="input-field col l6">\n' +
            '                            <input name="ans2[]" id="ans2" type="text" class="validate">\n' +
            '                            <label for="ans2">Odpowiedź 2</label>\n' +
            '                        </div>\n' +
            '                        <div class="input-field col l6">\n' +
            '                            <input name="ans3[]" id="ans3" type="text" class="validate">\n' +
            '                            <label for="ans3">Odpowiedź 3</label>\n' +
            '                        </div>\n' +
            '                        <div class="input-field col l6">\n' +
            '                            <input name="ans4[]" id="ans4" type="text" class="validate">\n' +
            '                            <label for="ans4">Odpowiedź 4</label>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                </div>');
        n++;
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>
