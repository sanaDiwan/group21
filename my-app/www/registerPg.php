<!--include("dbTest.php");

<?php if(!empty($success_message)) { ?>	
		<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
		<?php } ?>
		<?php if(!empty($error_message)) { ?>	
		<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
		<?php } ?> -->


<html DOCTYPE!>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
   
   
    <link rel="stylesheet" type="text/css" href="css/register.css" />
    
    <title>Register</title>
</head>

<body >

    <div  style="background-color: blue;" class="register">
        <form  class="input" action="registerPg.php" method="post">
      
      <div style="background-color: silver; " class="form">
       
       
      <h1 class="h1"><b>Sign Up</b></h1>
      </b></b><input   font-size:12pt; font-family: Helvetica Neue;" type="text" name="username" required="required" placeholder="Enter Username" required /><br>
      <br>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family:Helvetica Neue;" type="email" name="email" required="required" placeholder="Enter Email" required/><br>
      <br>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family:Helvetica Neue;" type="password" name="passwordd" required="required" placeholder="Enter Password" required/><br>
      <br>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family:Helvetica Neue; " type="password" name="password2" required="required" placeholder="Comfirm Password" /><br>
      <br>
      <input name="button-register" style="height:40px; width: 110px; font-size:13pt; color:black; font-family:Helvetica Neue; cursor: pointer; background-color: gray;"  type="submit" value="Register" />

                                     
                               
       </div>
       
    </form>

    </div>

</body>
</html>


background-color: white;
  position: absolute;
  width: 400px;
  height: 500px;
  
  margin-top: 50px; 
  margin-bottom:0px;
  margin-left: 30%;
 