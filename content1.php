<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title></title>
  <style>
   
   .color1 {
    color: red; 
   }
.color2 {
    color: green; 
   }
.color3 {
    color: yellow; 
   }
.color4 {
    color: blue; 
   }
.color5 {
    color: black; 
   }
  </style>
 </head>
 <body>


<?php




$a=1;
$color=''; echo '<table border="1">','<tr>','<td>';
echo '<table border="1">';
echo '<tr>';

for ($j = 1; $j <= 5; $j++) { 
echo '<td>';

for ($i = 1; $i <= 10; $i++) {


$a=$j*$i;


switch ($i ):
case 1:
    $color='<b class = "color1">';
    echo $color,$i,'*','</b>';
break;
case 2:
    $color='<b class = "color2">';
   echo $color,$i,'</b>','*';
    break;
case 3:
    $color='<b class = "color3">';
echo $color,$i,'</b>','*';
    break;
case 4:
    $color='<b class = "color4">';
echo $color,$i,'</b>','*';
break;
default:
 $color='<b class = "color5">';
echo $color,$i,'</b>','*';
    
endswitch;





switch ($j ):

case 1:
    $color='<b class = "color1">';
    echo $color,$j,'</b>','=';
break;
case 2:
    $color='<b class = "color2">';
echo $color,$j,'</b>','=';
    break;
case 3:
    $color='<b class = "color3">';
echo $color,$j,'</b>','=';
    break;
case 4:
    $color='<b class = "color4">';
echo $color,$j,'</b>','=';
break;
default:
$color='<b class = "color5">';
echo $color,$j,'</b>','=';
    
endswitch;







$st=strlen($a);
$d=preg_split('//',$a,-1,PREG_SPLIT_NO_EMPTY);
for ($n=0;$n<$st;$n++){

switch ($d[$n]):
/*switch ($i||$j ||$a): */
case 1:
    $color='<b class = "color1">';
    echo $color,$d[$n],'</b>';
break;
case 2:
    $color='<b class = "color2">';
   echo $color,$d[$n],'</b>';
    break;
case 3:
    $color='<b class = "color3">';
echo $color,$d[$n],'</b>';
    break;
case 4:
    $color='<b class = "color4">';
echo $color,$d[$n],'</b>';
break;
default:
 $color='<b class = "color5">';
echo $color,$d[$n],'</b>';
    
endswitch;



}
echo '<br>';

 
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


switch ($i ):
case 1:
    $color='<b class = "color1">';
    echo $color,$i,'*','</b>';
break;
case 2:
    $color='<b class = "color2">';
   echo $color,$i,'</b>','*';
    break;
case 3:
    $color='<b class = "color3">';
echo $color,$i,'</b>','*';
    break;
case 4:
    $color='<b class = "color4">';
echo $color,$i,'</b>','*';
break;
default:
 $color='<b class = "color5">';
echo $color,$i,'</b>','*';
    
endswitch;





switch ($j ):

case 1:
    $color='<b class = "color3">';
    echo $color,$j,'</b>','=';
break;
case 2:
    $color='<b class = "color2">';
echo $color,$j,'</b>','=';
    break;
case 3:
    $color='<b class = "color3">';
echo $color,$j,'</b>','=';
    break;
case 4:
    $color='<b class = "color4">';
echo $color,$j,'</b>','=';
break;
default:
$color='<b class = "color5">';
echo $color,$j,'</b>','=';
    
endswitch;







$st=strlen($a);
$d=preg_split('//',$a,-1,PREG_SPLIT_NO_EMPTY);
for ($n=0;$n<$st;$n++){

switch ($d[$n]):
/*switch ($i||$j ||$a): */
case 1:
    $color='<b class = "color1">';
    echo $color,$d[$n],'</b>';
break;
case 2:
    $color='<b class = "color2">';
   echo $color,$d[$n],'</b>';
    break;
case 3:
    $color='<b class = "color3">';
echo $color,$d[$n],'</b>';
    break;
case 4:
    $color='<b class = "color4">';
echo $color,$d[$n],'</b>';
break;
default:
 $color='<b class = "color5">';
echo $color,$d[$n],'</b>';
    
endswitch;



}
echo '<br>';

}
echo '</td>';
}
echo '</tr>';

echo '</table>';
echo '</table>';
?>
</body>
</html>

