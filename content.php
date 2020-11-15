
<?php

$a=1;echo '<table border="1">','<tr>','<td>';
echo '<table border="1">';
echo '<tr>';
for ($j = 1; $j <= 5; $j++) { 

echo '<td>';
for ($i = 1; $i <= 10; $i++) {

$a=$j*$i;
    echo $i,'*',$j,'=',$a ,'<br>';
 
}

echo '</td>';
}
echo '</tr>';

echo '</table>';
echo '</tr>','</td>','<tr>','<td>';
echo '<table border="1">';
echo '<tr>';
for ($j = 6; $j <= 10; $j++) { 

echo '<td>';
for ($i = 1; $i <= 10; $i++) {

$a=$j*$i;
    echo $i,'*',$j,'=',$a ,'<br>';
 





}

echo '</td>';
}
echo '</tr>';

echo '</table>';
echo '</table>';
?>


