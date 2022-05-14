<?Php
	require_once('../dao/config.php');
	require_once('../dao/crudDAO.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$specifictime = test_input($_POST["specifictime"]);
		$classdetails = test_input($_POST["classdetails"]);
		$gender = test_input($_POST["gender"]);
	 }
	 
	 function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }

	if(!empty($name) && !empty($email) && !empty($specifictime) && !empty($classdetails) && !empty($gender)){
		
			$a=new crudDAO();
			$create=$a->register($name, $email, $specifictime, $classdetails, $gender);
			//$create=crudDAO::create($lname, $fname, $username, $password, $email);	use only for static method
			if($create){
				header('location: ../pages/registration.php');	
			}
			else{
				echo "Error saving to the database!";
			}
		}
	else{
		echo "Please complete all fields";
	}
?>
