<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Fungsi</h2>
    <?
        echo "Luas lingkaran dengan jari-jari 7 cm = ".luasLingkaran(7)."cm";

        function luasLingkaran($jari2){
            return 3.14*$jari2*$jari2;
        }
    ?>
</body>
</html>