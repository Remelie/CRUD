<?php 

require_once('../dao/config.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql="DELETE registration_info SET name='$name',email='$email',specifictime='$specifictime',classdetails='$classdetails',gender='$gender' WHERE id='$id'";

    header("Location:users.php");


     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>