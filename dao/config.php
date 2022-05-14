<?Php
$config = array('host'=>'sql6.freesqldatabase.com',
				'username'=>'sql6491943',
				'password'=>'ZZllj2tUyW',
				'database'=>'sql6491943');
$db = new mysqli($config['host'],
				 $config['username'],
				 $config['password'],
				 $config['database']);
if(mysqli_connect_error()){
	echo"error: could not connect to database".mysqli_connect_error();
}
else{
	echo "Database connection established successfully";
}

?>
