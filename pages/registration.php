<html>
   
   <head>
      <title>PHP Form Validation</title>
   </head>
   
   <body>
   
      <h2>Tutorials Point Absolute classes registration</h2>
      
      <form method = "post" action = "../process/registerprocess.php">
         <table>
            <tr>
               <td>Name:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>E-mail:</td>
               <td><input type = "text" name = "email"></td>
            </tr>
            
            <tr>
               <td>Specific Time:</td>
               <td><input type = "text" name = "specifictime"></td>
            </tr>
            
            <tr>
               <td>Class details:</td>
               <td><textarea name = "classdetails" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>