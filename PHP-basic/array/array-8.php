<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    $age = array(
        "Joe" => "29",
        "Elsa" => "27",
        "Kevin" => "32",
        "Nick" => "24",
        "Olaf" => "9",
        "Ana" => "17",
    );
    ksort($age);

    foreach($age as $name => $value){
        echo "name = " . $name . ", agr = " . $value . "<br>";
    }
    ?>
</body>
</html>