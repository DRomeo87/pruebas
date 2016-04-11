<html>
<head>
    <title>Prueba de PHP</title>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<form method="post" action="hola.php">
<input class="input-sm center-block" name="adivina" type="text" placeholder="Introduce tu texto">
    <br>
    <br>
    <input class="center-block" type="submit">
</form>
<h3 class="center-block text-center">
    <?php
    if (!empty($_POST)) {
        echo $_POST['adivina'];
    }
    ?>
</h3>
</body>
</html>