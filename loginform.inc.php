<?php
if(isset($_POST['username'])&&isset($_POST['Password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_hash = md5('password');
	if(!empty($username)$password)){
	$query="SELECT 'id' FROM 'users' WHERE 'username'='$username' AND ''password='$password'";
	if($query_run=mysql_query($query)){
		$query__num_rows=mysql_num_rows($query_run);
        if($query__num_rows=0){
        	echo 'Invalid username/password combination.';
        }else if($query__num_rows==1){
        	$user_id = mysql_result($query_run,0,'id');
        	$_SESSION['user_id']=$user_id;
        	echo 'OK.';
        }
        }
	}
} else{
	echo 'You must supply a username and password.';
}
}
?>

<form action="<?php echo $current_file;?>" method="POST">
	Username:<input type="text" name="username"> Password: <input type="password" name="password"> <input type="submit" value="Log in">
	</form>
