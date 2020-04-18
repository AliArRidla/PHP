<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    $menu = array("rawon","sate","nasi goreng");
    $arrLength = count($menu);

    echo "Menu hari ini adalah : <br> ";
    for($x = 0; $x < $arrLength;$x++){
        echo $menu[$x] . "<br>";
    }
    echo "<br> Saya la[ar, saya ingin makan " . "<b>$menu[2]</b>";
    ?>
</body>
</html>