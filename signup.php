<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
  		<title>Signup Page</title>
  		<link rel="stylesheet" type="text/css" href="login_styles.css">
  		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <script type="text/javascript">
            var state = false;
            function toggle()
            {
              
              if (state) {
                document.getElementById("pswd").setAttribute("type","password");
                state = false;
              }
              else{
                document.getElementById("pswd").setAttribute("type","text");
                state = true;
              }
              
            }

            function validate()
            {
                var s1=document.getElementById("name").value;
                var s2=document.getElementById("uname").value;
                var s3=document.getElementById("pswd").value;
                var s4=document.getElementById("city").value;
                if(s1.trim()=="") // trim to check blank spaces
                {
                    document.getElementById("lbl1").style.visibility="visible";
                    document.getElementById("name").style.border="solid 1px red";
                    return false;
                }
                else if(s2.trim()=="")
                {
                    document.getElementById("lbl1").style.visibility="hidden";
                    document.getElementById("name").style.border="initial"; // default border
                    // previous 2 lines to remove the already exixting username effects
                    document.getElementById("uname").style.border="solid 1px red";
                    document.getElementById("lbl1").style.visibility="visible";
                    document.getElementById("lbl1").innerHTML="*Enter username";
                    return false;
                }
                else if(s2.trim().length < 6)
                {
                    document.getElementById("lbl1").style.visibility="hidden";
                    document.getElementById("name").style.border="initial";
                    // previous 2 lines to remove the already exixting username effects
                    document.getElementById("uname").style.border="solid 1px red";
                    document.getElementById("lbl1").style.visibility="visible";
                    document.getElementById("lbl1").innerHTML="*Username must be atleast 6 characters long";
                    return false;
                }
                
                else if(s3.trim()=="")
                {
                    document.getElementById("lbl1").style.visibility="hidden";
                    document.getElementById("name").style.border="initial"; // default border
                    document.getElementById("lbl2").style.visibility="hidden";
                    document.getElementById("uname").style.border="initial";
                    // previous 2 lines to remove the already exixting username effects
                    document.getElementById("pswd").style.border="solid 1px red";
                    document.getElementById("lbl2").style.visibility="visible";
                    document.getElementById("lbl2").innerHTML="*Enter password";
                    return false;
                }
                else if(s3.trim().length < 8)
                {
                    document.getElementById("lbl1").style.visibility="hidden";
                    document.getElementById("name").style.border="initial";
                    document.getElementById("lbl2").style.visibility="hidden";
                    document.getElementById("uname").style.border="initial";
                    // previous 2 lines to remove the already exixting username effects
                    document.getElementById("pswd").style.border="solid 1px red";
                    document.getElementById("lbl2").style.visibility="visible";
                    document.getElementById("lbl2").innerHTML="*Password must be atleast 8 characters long";
                    return false;
                }
                else if(s4.trim()=="")
                {
                    document.getElementById("lbl1").style.visibility="hidden";
                    document.getElementById("name").style.border="initial"; // default border
                    document.getElementById("lbl2").style.visibility="hidden";
                    document.getElementById("uname").style.border="initial";

                    document.getElementById("lbl3").style.visibility="hidden";
                    document.getElementById("pswd").style.border="initial";
                    // previous 2 lines to remove the already exixting username effects
                    document.getElementById("city").style.border="solid 1px red";
                    document.getElementById("lbl3").style.visibility="visible";
                    document.getElementById("lbl3").innerHTML="*Enter city";
                    return false;
                }
                else   
                    return true;
            }
        
        </script>

 	</head>

 	<body>

  		<div class="bgimg">
   			<div class="centerdiv">
    			<img src="https://cdn1.iconfinder.com/data/icons/	flat-business-icons/128/user-128.png" id="profilepic">
    			<h2>patient signup</h2>
    			<form onsubmit="return validate()" action="registration.php" method="post">
            <div>
              <input id="name" type="text" name="name" class="inputbox" placeholder="Name">
            </div>  <br>
            
    				<div>
      				<input id="uname" type="text" name="user" class="inputbox" placeholder="Username">
    	     	</div> <br>
            
        		<div>
      				<input id="pswd" type="Password" name="password" class="inputbox" placeholder="Password">
              <span>
                <i class="fa fa-eye" id="eye" onclick="toggle()"></i>
              </span>
     				</div><br>
            
            <div>
              <input id="city" type="text" name="city" class="inputbox" placeholder="City">
            </div><br>
            
    				<div>
      				<button type="submit"> SIGN UP </button>
    				</div>


    			</form>	<br>
          <label id="lbl1" style="color: red; font-size: 18px; font-weight: bold; visibility: hidden;" >*Enter name</label><br>
          <label id="lbl2" style="color: red; font-size: 18px; font-weight: bold; visibility: hidden;" ></label><br>
          <label id="lbl3" style="color: red; font-size: 18px; font-weight: bold; visibility: hidden;" ></label><br>
   			</div>
  		</div>
  
	</body>
</html>

