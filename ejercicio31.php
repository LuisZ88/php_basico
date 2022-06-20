<?php

$txtNombre = "";
$rdgLenguaje = "";
$chkHtml = "";
$chkCss = "";
$chkPhp = "";
$lsSerie = "";
$txtComentario = "";

if ($_POST) {
    $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
    $rdgLenguaje = (isset($_POST["rdgLenguaje"])) ? $_POST["rdgLenguaje"] : "";
    $chkHtml = (isset($_POST["chkHtml"]) == "si") ? "checked" : "";
    $chkCss = (isset($_POST["chkCss"]) == "si") ? "checked" : "";
    $chkPhp = (isset($_POST["chkPhp"]) == "si") ? "checked" : "";
    $lsSerie = (isset($_POST["lsSerie"])) ? $_POST["lsSerie"] : "";
    $txtComentario = (isset($_POST["txtComentario"])) ? $_POST["txtComentario"] : "";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($_POST) { ?> Hola <?php echo $txtNombre; ?> <br />
    Tu lenguaje es <?php echo $rdgLenguaje; ?> <br />
    Sabes de <?php echo ($chkHtml == "checked" ? "HTML " : "");
                    echo ($chkCss == "checked" ? "CSS " : "");
                    echo ($chkPhp == "checked" ? "PHP" : ""); ?> <br />
    Tu serie favorita es <?php echo $lsSerie; ?> <br />
    Tu comentario es <?php echo $txtComentario; ?>
    <br />
    <?php } ?>



    <form action="ejercicio31.php" method="post">
        Nombre:<br />
        <input type="text" value="<?php echo $txtNombre ?>" name="txtNombre" placeholder="usuario">
        <br />
        ¿te gusto?
        <br />
        php <input type="radio" name="rdgLenguaje" value="php" <?php echo ($rdgLenguaje == "php") ? "checked" : ""  ?>>
        <br /> html <input type="radio" name="rdgLenguaje" value="html"
            <?php echo ($rdgLenguaje == "html") ? "checked" : ""  ?>>
        <br /> css <input type="radio" name="rdgLenguaje" value="css"
            <?php echo ($rdgLenguaje == "css") ? "checked" : ""  ?>>
        <br />Checkboxes: <br />
        html<input type="checkbox" name="chkHtml" value="si" <?php echo $chkHtml ?>> <br>
        css<input type="checkbox" name="chkCss" value="si" <?php echo $chkCss ?>><br>
        php<input type="checkbox" name="chkPhp" value="si" <?php echo $chkPhp ?>><br>
        <br />que serie te gusta
        <br>
        <select name="lsSerie" id="">
            <option value="">Ninguna</option>
            <option value="Breaking Bad" <?php echo ($lsSerie == "Breaking Bad") ? "selected" : "" ?>>Breaking bad
            </option>
            <option value="Prison break" <?php echo ($lsSerie == "Prison break") ? "selected" : "" ?>>Prison break
            </option>
            <option value="Lost" <?php echo ($lsSerie == "Lost") ? "selected" : "" ?>>Lost</option>
        </select>
        <br>tienes dudas <br>
        <textarea name="txtComentario" id="" cols="30" rows="10"> <?php echo $txtComentario; ?></textarea>
        <input type="submit" value="enviar">

    </form>
</body>

</html>