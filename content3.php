<form action="form.php" method="POST">
    	Строка: <br>
      <input name="message" type="text"><br><br>
    	<!--<input name="message" type="text" value="<?php if(isset($_REQUEST['message'])) echo $_REQUEST['message']; ?>"><br>-->
    	<input type="submit" value="Отправить">
    </form>

