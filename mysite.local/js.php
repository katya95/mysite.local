<?php
echo "<script>
alert ('go to back');
window.history.go(-1);
</script>";
?>
<?php  
$back = $_SERVER['HTTP_REFERER']; 
//застряем на этой же странице
//echo "
//<html>
// <head>
//   <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
//  </head>
//</html>";
?>
