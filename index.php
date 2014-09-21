<?php

if(isset($_POST['user_input'])&&!($_POST['user_inout'])){
	$user_input=$_POST['user_input'];

}
?>
 <hr>
  <form action="edit.php" method="POST">
  <textarea name="user_input" rows="6" cols="30"><?php echo $user_input ?></textarea><br><br>
  <input type="submit" value="submit">
  </form>
