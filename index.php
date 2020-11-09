<!doctype html>
<html lang="en">
<head>
<style>
table {
    font-size: 18px;
    width: 400px;
    background: white;
    font-weight: normal;
    background: peachpuff;
    border:  solid #e06219;
    }
h1{ font-size: 18px; }
</style>
</head>

<body> <?php
echo 'Array <br>';

for ($i = 0; $i < 5; $i++){
    for ($j=0; $j < 10; $j++){
       $numbers[$i][$j] = rand(10,90);
       echo ' | '.$numbers[$i][$j];
    }
    echo '<br>';
}

echo '<center>';
echo '<br><h1> HTML-table</h1>';
echo '<table cellpadding="15" cellspacing="0" border="1">';
foreach ($numbers as $key => $value) {
    echo "<tr>";
    for ($j=0; $j < 10; $j++){
        echo "<td>".$value[$j]."</td>";
    }
    echo "</tr>";
}
echo '</table>';
echo '</center>';
?> </body>
</html>
