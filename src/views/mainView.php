<!DOCTYPE html>
<html>
<head>
    <title>qaze App Development</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/error.css">
</head>
<body class="container grey lighten-4">

<div class="row">
    <div class="col l5 m12 s12">
        <h4>ABOUT ME</h4>
        <br>
        <h5>Mobile, desktop and web applications development with server infrastructure and full support.</h5>
        <br>
        <br>
        <h4>MY RECENT PROJECT</h4>
        <br>
        <a target="_blank" href="https://play.google.com/store/apps/details?id=net.ddns.qaze.waltherstrong"><h5 style="color: black">Walther Strong Reward</h5>
        <img class="responsive-img" src="static/waltherstrong.png"></a>
    </div>
    <div class="col l1 m12 s12"></div>
    <form class="col l6 m12 s12 formValidate" id="formValidate" novalidate="novalidate" method="post">
        <h4>NEED AN APP?</h4>
        <h5>CONTACT ME</h5>
        <div class="input-field col l12 m12 s12">
            <input type="text" id="purpose" name="purpose" required/>
            <label for="purpose">App's purpose</label>
        </div>
        <div class="input-field col l12 m12 s12">
            <select id="audience" name="audience" onchange="delNone(this)">
                <option class="none" id="selectNone" disabled selected value="">None</option>
                <option value="customers">Customers</option>
                <option value="employees">Employees</option>
                <option value="resellers">Resellers</option>
                <option value="other">Other</option>
            </select>
            <label for="audience">Target users</label>
        </div>

        <div class="input-field col l12 m12 s12">
            <select id="platforms" name="platforms" onchange="delNone(this)">
                <option class="none" id="selectNone" disabled selected value="">None</option>
                <option value="desktop">Desktop</option>
                <option value="mobile">Mobile</option>
                <option value="desktopmobile">Desktop + Mobile</option>
                <option value="other">Other</option>
            </select>
            <label for="platforms">Desired platforms</label>
        </div>

        <div class="input-field col l12 m12 s12">
            <textarea id="description" name="description" class="materialize-textarea"></textarea>
            <label for="description">Additional information</label>
        </div>

        <div class="input-field col l12 m12 s12">
            <input type="text" id="email" name="email" required/>
            <label for="email">Contact e-mail</label>
        </div>
        <div class="input-field col l12 m12 s12">
            <button type="submit" name="action" class="btn right red">Submit</button>
        </div>
        <div class="col l12 m12 s12">
            <p>Or just email me directly at: <a href="mailto:qazeapps@gmail.com">qazeapps@gmail.com</a></p>
        </div>



    </form>
</div>
<footer class="page-footer grey lighten-4">
    <p style="color: black; font-size: small;">© 2018-2019 Adam Stafiej</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>
<script src="static/init.js"></script>
<script src="static/form.js"></script>
<script src="static/validation.js"></script>
<script>
    <?php foreach ($_SESSION['toasts'] as $toast) :?>
    M.toast({html: '<?= $toast?>'});
    <?php endforeach ?>
    <?php $_SESSION['toasts'] = [] ?>
</script>
</body>
</html>
