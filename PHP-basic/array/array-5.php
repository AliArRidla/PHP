<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style src="css/style.css"></style>
</head>
<body>
    <h2>Multidimensi Array</h2>
       <table>
            <tr>
                <th>Judul Film </th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?
                $movie = array(
                    array("Avengers Infinity",2018,8.7),
                    array("The Avengers ",2012,8.1),
                    array("Guardians of the Galaxy",2014,8.1),
                    array("Iron Man",2008,8.1));

                echo "<tr>";
                    echo "<td>". $movie[0][0] ."</td>";
                    echo "<td>". $movie[0][1] ."</td>";
                    echo "<td>". $movie[0][2] ."</td>";
                echo "<tr>";
                    echo "<td>". $movie[1][0] ."</td>";
                    echo "<td>". $movie[1][1] ."</td>";
                    echo "<td>". $movie[1][2] ."</td>";
                echo "<tr>";
                    echo "<td>". $movie[2][0] ."</td>";
                    echo "<td>". $movie[2][1] ."</td>";
                    echo "<td>". $movie[2][2] ."</td>";
                echo "<tr>";
                    echo "<td>". $movie[3][0] ."</td>";
                    echo "<td>". $movie[3][1] ."</td>";
                    echo "<td>". $movie[3][2] ."</td>";

            ?>
       </table>

</body>
</html>