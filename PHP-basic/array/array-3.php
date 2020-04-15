<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td {
            border:1px solid black;
        }
    </style>
</head>
<body>
        <h2>Asociation Array</h2>
    <?
        $mobil = array (
            'merk' => 'Toyota',
            'type' => 'Fortuner',
            'year' => 2017
        );
        echo '<table>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>';

        foreach ($mobil as $key => $value){
            echo '<tr>
                    <td>'. $key .' </td>
                    <td>'. $value .'</td>
                  </tr>';
        } 
        echo '</table>';  
    ?>

</body>
</html>