<html>
    <head>
        <title>Update Module</title>
</head>
<body>
    <form method="post" action='../process/updateprocess.php'>
        <?Php 
        $id = test_input($_POST['id']);
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $specifictime = test_input($_POST['specifictime']);
        $classdetails = test_input($_POST['classdetails']);
        $gender = test_input($_POST['gender']);

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
        
        require_once('../dao/config.php');
        require_once('../dao/crudDAO.php');

        if(!empty($id) && !empty($name) && !empty($email) && !empty($specifictime) && !empty($classdetails) && !empty($gender)){
        
        $a = new crudDAO();
        $update = $a->update($id,$name,$email,$specifictime,$classdetails,$gender);
            if($update){
                //echo 'hello';die;
                header('location:../pages/users.php');
            }
        }
        else{
            echo 'Please complete all fields.';
        }
        ?>
</form>
</body>
</hmtl>
