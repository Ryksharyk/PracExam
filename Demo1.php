<?php 
if(isset($_GET['login'])) 
{
echo "Enterd by you:<br>"; echo 
"Email: ".$_GET['email']."<br>"; echo 
"Password: ".$_GET['password']; 
} 
?> 
<div> 
	<form> 
		<input type="text" name="email" placeholder="Email"><br> 
		<input type="password" name="password" placeholder="Password"><br> 
		<input type="submit" name="login" value="Login"> 
	</form> 
</div>