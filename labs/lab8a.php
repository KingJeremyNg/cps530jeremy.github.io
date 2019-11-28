<!DOCTYPE html>

<html>
    <head>
        <title>CPS530 Lab8a</title>
        <meta http-equiv="refresh" content="300">
        <link rel="stylesheet" href="lab8.css">
    </head>

    <body>
        <?php
            $url = "http://199.195.194.92:2199/rpc/meyima03/streaminfo.get?x=1";
            $xml = simplexml_load_file($url);
            echo "<div class='container'>";
            echo $xml->data->item->title . "<br>";
            echo $xml->data->item->song . "<br>";
            echo $xml->data->item->track->album . "<br>";
            echo "<img src='" . $xml->data->item->track->imageurl . "'/>";
            echo "</div>";
        ?>
    </body>
</html>