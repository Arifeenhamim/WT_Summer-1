<?php
include("../control/empregistration.php");
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe Registration</title>
</head>

<body>
    <center>
    <h1><font color="green">City Bank Limited.</font></h1>
    
    <form action="" method="POST" enctype="multipart/form-data">
        
    <p><strong><font color="green">To do further work, please register</font></strong></p>
    <br><br><br><br>
        

        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>

                    


                <tr>
                <td>
               
                <font>First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </font> 
      
                <input type="text" name="firstname" placeholder="Enter Your First name">  <?php echo $FirstnameErr; ?> <br> <br>
                
              
                </td>
            </tr>
                 
                <tr>
                <td>
               
                <label>Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label>
                
                <input type="text" name="lastname" placeholder="Enter Your Last name"> <?php echo $LastnameErr; ?>  <br><br>
                
                </td>
            </tr>

            
      
              <tr>
                <td>
               
                <font>User name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </font> 
      
                <input type="text" name="username" placeholder="Enter your username"><?php echo $UsernameErr;?>    <br> <br>
                
              
                </td>
            </tr>

            <tr>
                        <td>
                            <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </label>
                            <input type="password" name="password"placeholder="Enter your password"> <?php echo $passwordErr;?> <br><br>
                        </td>
                    </tr>
             
                    <tr>
                        <td>
                            <label>Conform Password :&nbsp;&nbsp;&nbsp;  </label>
                            <input type="password" name="conformpassword"placeholder="Enter your password"><?php echo $confirmPasswordErr;?> <br><br>
                        </td>
                    </tr>

            <tr>
                <td>
               
                <font>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </font> 
      
                <input type="Email" name="email" placeholder="Enter your email"><?php echo $emailErr;?> <br><br>
                
              
                </td>
            </tr>
           
                    

                    <tr>
                        <td>
                           
                                <label>NID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</label> 
                                <input type="text" name="nid" placeholder="Enter your valid nid"> <?php echo $NIDErr;?> <br><br>
                           
                        </td>
                    </tr>

                    <tr>
                        <td>
                           
                                <label>Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="phone" placeholder="Enter your phone number"> <?php echo $PhoneErr;?> <br><br>
                         
                        </td>
                    </tr>




                    <tr>
                <td>
               
                <font>DOB:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font> 
      
                <input type="date" name="DOB" value="DOB" placeholder="Enter Your DOB"><br><br>
                
              
                </td>
            </tr>

            <tr>
                        <td>
                           
                                <label>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label> 
                                <input type="radio" name="gender" vale="male" >Male <!-- <?php echo $genderErr;?>  -->
                                <input type="radio" name="gender" vale="female">Female &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $genderErr;?> <br><br>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                           
                                <label>Present Address:  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label>
                                <input type="text" name="Presentaddress" placeholder="Enter Your Present Address"> <br><br>
                         
                        </td>
                    </tr>

                    <tr>
                     <td>
                            <label>Permanent Address:&nbsp;&nbsp;&nbsp; </label>
                           <input type="text" name="Permanentaddress" placeholder="Enter Your Permanent Address"><br><br>
            

                     </td>
                     </tr>
                              
                        <tr>
                        <td>
                           
                                <label>Image:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label>
                                <input type="file" id="img" name="img" accept="image/*"> <br><br> <br>
                         
                        </td>
                    </tr>


                    <tr>
                       <td>
                       <label> Please choose a file: &nbsp;&nbsp;</label>
               
                                <input type="file" name ="myfile"> <br>
                                <?php echo $fileErr; ?> 
                            
                               <br>
                         </td>
                        </tr>


         <center>

                   <tr>
                        <td>
                            
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submit" value="Register">
                           
                        </td>
                    </tr>
          </center>
                    



                </table>
            </center>
        </form>
    </center>
</body>

</html>
