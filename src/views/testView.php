<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/error.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body class="grey lighten-4">
<?php include 'navbar.php' ?>
<main id="main" class="container">
    <div class="row">
        <br>
        <div id="chuj" class="col l1">
            <i class="material-icons">stars</i>
        </div>
        <div id="pkt" class="col l11"></div>
    </div>
    <div id="kutas" align="center"></div>
    <div class="row" id="kutas2"></div>
    <a id="next_pyt" class="waves-effect waves-light btn" onclick="twojstary()">Kolejne pytanie</a>
    <?php include 'footer.php' ?>
</main>
<div class="row">

</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    var data_t = [];
    var index = 0;
    var last_len = 0;
    var punkty = 0;
    var ilosc_pytan;
    var udzielono_odp = 0;
    var wszystkie_odp = 0;
    $(document).ready(
        function () {
            $.getJSON('http://margo.qaze.org/api/getTest?id=<?= $id?>', function (data) {
                console.log("success");
                $("#pkt").text(punkty + "/" + wszystkie_odp);
                console.log(data[0].questions);
                data_t = data[0].questions;
                ilosc_pytan = data_t.length;
                index = Math.floor(Math.random() * ilosc_pytan);
                $("#kutas2").append('<div id="tresc"></div>');
                twojstary();
            })
        });

    function twojstary() {
        $("#next_pyt").hide();
        udzielono_odp = 0;
        if (ilosc_pytan <= 0) {
            koniec_pytan();
        }
        console.log(data_t);
        if (last_len) {
            for (let i = 0; i < last_len; i++) {
                $("#ZPYT" + i).remove();
                $(".BR" + i).remove();
            }
            $("#DPYT").remove();
            $(".DBR").remove();
        }
        $("#tresc").text(data_t[index].answerContent);
        var answers = data_t[index].answers;
        let poprawna_odp = data_t[index].correctAnswer;
        last_len = answers.length;
        var uzyte_liczby = [];
        var licznik = 0;
        while (licznik < last_len) {
            var i = Math.floor(Math.random() * last_len);
            while (uzyte_liczby.includes(i)) {
                i = Math.floor(Math.random() * last_len);
            }
            uzyte_liczby.push(i);
            console.log(i);
            if (answers[i] === poprawna_odp) {
                $("#kutas2").append('<div onclick="dobra_odpowiedz()" class="waves-effect waves-light btn-large blue" id="DPYT">' + answers[i] + '</div>' +
                    '<br class="DBR"/>');
            } else {
                $("#kutas2").append('<div onclick="zla_odpowiedz(' + i + ')" class="waves-effect waves-light btn-large blue" id="ZPYT' + i + '">' + answers[i] + '</div>' +
                    '<br class="BR' + i + '"/>');
            }
            licznik++;
        }
    }

    function dobra_odpowiedz() {
        if (!udzielono_odp) {
            wszystkie_odp++;
            udzielono_odp = 1;
            punkty++;
            $("#pkt").text(punkty + "/" + wszystkie_odp);
            $("#DPYT").removeClass("waves-effect waves-light btn-large blue").addClass("waves-effect waves-light btn-large green");
            data_t.splice(index, 1);
            ilosc_pytan--;
            index = Math.floor(Math.random() * ilosc_pytan);
            $("#next_pyt").show();
        }
    }

    function zla_odpowiedz(odpowiedz) {
        if (!udzielono_odp) {
            wszystkie_odp++;
            udzielono_odp = 1;
            console.log(odpowiedz);
            $("#pkt").text(punkty + "/" + wszystkie_odp);
            $("#DPYT").removeClass("waves-effect waves-light btn-large blue").addClass("waves-effect waves-light btn-large green");
            $("#ZPYT" + odpowiedz).removeClass("waves-effect waves-light btn-large blue").addClass("waves-effect waves-light btn-large red");
            index = Math.floor(Math.random() * ilosc_pytan);
            $("#next_pyt").show();
        }
    }

    function koniec_pytan() {
        $("#tresc").text("Koniec pytan   ");
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>
