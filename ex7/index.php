<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

for($i=1; $i <= 10; $i++)
{
    Echo '<br/>Table de multiplication de '.$i."<br/><br/>";
    for ($j=1; $j <= 10; $j++){
        echo $i.' x '.$j.' = '.$i*$j."<br/>";
    }
}

?>
</body>
</html>