<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
  		<title>Login Page</title>
  		<link rel="stylesheet" type="text/css" href="login_styles.css">
  		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
 	</head>

 	<body>

  		<div class="bgimg">
   			<div class="centerdiv">
    			<img src="https://cdn1.iconfinder.com/data/icons/	flat-business-icons/128/user-128.png" id="profilepic">
    			<h2>patient login</h2>
    			<form action="validate.php" method="post">
    				<div>
      					<input type="text" name="user" class="inputbox" placeholder="Username">
    	     		</div>	<br>
        			<div>
      					<input type="Password" name="password" class="inputbox" placeholder="Password">
     				</div>	
            <span>
                <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
              </span><br>
    				<div>
      					<button type="submit"> LOGIN </button>
    				</div>
    			</form>	<br>
   			</div>
  		</div>
  
	</body>
</html>