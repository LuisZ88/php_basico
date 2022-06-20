<?php
$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";
$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));
$json = file_get_contents($url, false, stream_context_create($opciones));
$objeto = json_decode($json);


foreach ($objeto->list as $video) {
    echo $video->title . " En el canal " . $video->channel . "<br>";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($objeto->list as $video) { ?>
        <li>
            <a href="<?php echo $video->url ?>"><?php echo $video->title ?></a>
        </li> <?php } ?>
    </ul>
</body>

</html>