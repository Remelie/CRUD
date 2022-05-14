<?Php
    class crudDAO{

        public function register($name, $email, $specifictime, $classdetails, $gender){
            global $db;
    
                $sql="INSERT INTO registration_info (name, email, specifictime, classdetails, gender) VALUES ('$name','$email','$specifictime','$classdetails','$gender')";
                $result=$db->query($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }

            public function display(){
                global $db;

                $sql="SELECT*FROM registration_info";
                $result=$db->query($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            } 

            public function getEdit($id){
                global $db;

                $sql="SELECT * FROM registration_info WHERE id='$id'";
                $result=$db->query($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            } 

            public function update($id,$name,$email,$specifictime,$classdetails,$gender){
                global $db;

                $sql="UPDATE registration_info SET name='$name',email='$email',specifictime='$specifictime',classdetails='$classdetails',gender='$gender' WHERE id='$id'";
                $result=$db->query($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }
            public function delete($id,$name,$email,$specifictime,$classdetails,$gender){
                global $db;

                $sql="DELETE registration_info SET name='$name',email='$email',specifictime='$specifictime',classdetails='$classdetails',gender='$gender' WHERE id='$id'";
                $result=$db->query($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }
            
            
        }
        
?>