<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Использование массива для вывода меню на сайте.</title>
     </head>
     <body>
<?php
$menu = array (
     array ("link"=>"Главная", "href"=>"index.php"),
     array ("link"=>"Таблица умножения", "href"=>"content.php"),
     array ("link"=>"Задание2", "href"=>"content1.php"),
       array ("link"=>"Задание3", "href"=>"content3.php")
);
?>
          <ul>
               <li><a href='<?=$menu [0] ["href"]?>'><?=$menu [0] ["link"]?></a></li>
               <li><a href='<?=$menu [1] ["href"]?>'><?=$menu [1] ["link"]?></a></li>
               <li><a href='<?=$menu [2] ["href"]?>'><?=$menu [2] ["link"]?></a></li>
                <li><a href='<?=$menu [3] ["href"]?>'><?=$menu [3] ["link"]?></a></li>
          </ul>
     </body>
</html>
<?php
echo "<ul>";
foreach ($menu as $item){
echo "<li><a href='{$item[href]}'> {$item [link]}</a></li>";
}
?>
