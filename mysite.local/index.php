<html>
<head>
<title></title>


<link rel="stylesheet" type="text/css" href="style.css"/> 

</head>


<body>
<div class="container">
<div  class="header">
<h2>top</h2>
</div>

<div class=pages>
<div class="sidebar">
<ul>
<li><a href="index.php?">приветствие</a></li>
<li> <a href="index.php?page=1&">урок1</a></li>
<li><a href="index.php?page=2&">урок2</a></li>
<li> <a href="index.php?page=3&">урок3</a></li>
<li> <a href="index.php?page=4&">урок4</a></li>


</ul>  

<?php
			//include ("menu.php");
		?>

</div>
<div class="content">
<h3>Content</h3>



<?php
 function page ($page)
{
/*if($page == 1) include("home.php");
if($page == 2) include("content1.php");
if($page == 3) include("content5.php");
if($page == 4) include("content3.php");*/

}




?> 
<?php  page($_GET["page"]);  
if(!isset($_GET["page"]) ) include("home.php");
// include("./page/about_us.php");

//if($_GET["page"] == 1) include("home.php");
//if($_GET["page"] == 2) include("content.php");
//if($_GET["page"] == 3) include("content1.php");
//if($_GET["page"] == 4) include("content3.php");
//if (isset($_POST))  include("form.php");

   


switch ($_GET["page"]) {
    case 1:
       include("home.php");
        break;
    case 2:
        include("content.php");
        break;
case 3:
       include("content1.php");
        break;
    case 4:
        include("content3.php");
        break;
    default:
        include("form.php");
}   
  ?>

</div>

<div class="foot">
</div>

 <div class="footer">
<h3>copyright</h3>
</div>
</div>
</body>
</html>

