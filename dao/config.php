<?Php
$config = array('host'=>'localhost',
				'username'=>'root',
				'password'=>'',
				'database'=>'registration');
$db = new mysqli($config['host'],
				 $config['username'],
				 $config['password'],
				 $config['database']);
if(mysqli_connect_error()){
	echo"error: could not connect to database".mysqli_connect_error();
}
else{
	//echo "Database connection established successfully";
}

?>