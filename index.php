<?php include('validation.php');?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Form Without Database </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='stylesheet' href='main.css'>
   
</head>
<body>
    
    <div class="container">
    <form method='POST'>
    <h1>Registration Form</h1>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control"  placeholder="First name" name='firstname'  >
      <span><?php if(isset($ERR_firstname)) { ?> <?php echo $ERR_firstname;?> <?php }?></span>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" class="form-control" placeholder="Last name" name='lastname' >
      <span><?php if(isset($ERR_lastname)) { ?> <?php echo $ERR_lastname;?> <?php }?></span>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationTooltipUsername">E-Mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" >@</span>
        </div>
        <input type="text" class="form-control"  placeholder="E-Mail" name='email'>
       
      </div>
      <span><?php if(isset($ERR_Email)) { ?> <?php echo $ERR_Email;?> <?php }?></span>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Password</label>
      <input type="text" class="form-control"  placeholder="Password" name='password'>
      <span>
            <?php if(isset($ERR_Password) && isset($passsize)) { ?> 
            <?php echo $ERR_Password . '<br>' . $passsize;?> 
            <?php }?>
      </span>
     
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip04">Confirm Password</label>
      <input type="text" class="form-control"  placeholder="Confirm Password" name='rpassword'>
      <span><?php if(isset($ERR_Conf_Pass)) { ?> <?php echo $ERR_Conf_Pass;?> <?php }?></span>
    </div>
 
  </div>
 <center>
 <button class="btn btn-primary" id='btn' type="submit">Register</button>
 </center>

</form>
    </div>




<div class="container">
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">E-Mail</th>
      <th scope='col'>Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td><?php echo $firstname;?></td>
      <td><?php echo $lastname;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $password;?></td>
    </tr>
    
  </tbody>
</table>
</div>


</body>
</html>


