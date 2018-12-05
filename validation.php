
<?php

  if($_SERVER['REQUEST_METHOD'] === 'POST') {

    //chek all input(s)
  
    if( isset($_POST['firstname'])  && 
        isset($_POST['lastname'])   && 
        isset($_POST['email'])      && 
        isset($_POST['password'])   &&
        isset($_POST['rpassword'])){

          $firstname  = $_POST['firstname'];
          $lastname   = $_POST['lastname'];
          $email      = $_POST["email"];
          $password   = $_POST['password'];
          $rpassword  = $_POST['rpassword'];
          
      
      //check firstname
      if(empty($firstname)) {
        $ERR_firstname = 'Please fill in the name field';
      }

      
      //check lastname
      if(empty($lastname)) {
        $ERR_lastname = 'Please fill the surname field';
      }


       
      //check lastname
      if(empty($email)) {
        $ERR_Email = 'Please fill the E-Mail field';
      }

      //check lastname
      if(empty($password)) {
        $ERR_Password = 'Please fill the Password field';
      }


       //check lastname
       if($rpassword != $password) {
          $ERR_Conf_Pass = 'Password do not match';
      }
      
      if(strlen($password) < 6  && strlen($rpassword) < 6 ) {
        $passsize = 'Password must be more than 6 ';
      }
      

      
      
      
    }
  }

?>