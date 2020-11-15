<?php
if (isset($_POST)) {
    //print("<br>Сообщение: " . $_POST['name']);

$message = trim(strip_tags($_POST['message']));
echo '<br>',$message;
echo '<br>',strrev($message);
//strrev-отображение строки наоборот
function mb_strrev($message)
{
$strrev="";
for ($i=mb_strlen($message,"UTF-8");$i>=0;$i--){
$strrev.=mb_substr($message,$i,1,"UTF-8");}
return $strrev;

}
echo '<br>',mb_strrev($message);
}


?>
<form action="js.php" method="POST">
<input type="submit" value="Отправить">
<form>

