<?php
	session_start();
?>
<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        
        <link rel="stylesheet" href="css/style.css">
		<script>
function validateForm() {
    var x = document.forms["signupform"]["user_password"].value;
	var y = document.forms["signupform"]["user_password1"].value;
    if (x != y) {
        alert("Password mismatch");
        return false;
    }
	
}


</script>
    </head>
    
     
	 

    <body style="background-image:url('images/1.jpg')">
	<div class="back">

      <form action="thankyou.php" method="post" name="signupform" onsubmit="return validateForm()">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <label>Category:</label>
          
          <select name="category" required onchange="labeldisp"/>
         <option value="">Select</option>
           <option value="Staff">Staff</option>
            <option value="Research Scholar">Research Scholar</option>
            <option value="Student">Student</option>
          </select>
 
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" onFocus="if(this.value=='') this.value='';" onBlur="if(this.value =='') this.value='';" required />
          
          <label for="roll_no" >Roll No:</label>
		 
          <input type="text" id="roll" name="roll_no" onFocus="if(this.value=='') this.value='';" onBlur="if(this.value =='') this.value='';" required />
           
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" required />
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" required />
          
		  <label for="password">Confirm Password:</label>
          <input type="password" id="password" name="user_password1" required />
		  
		         
          
   <label>Research Area:</label>
	<select name="Research Area" required onchange="textdisp(this.value)"/>
         <option value="">Select</option>
           <option value="Big Data Analytics">Big Data Analytics</option>
            <option value="Cloud Computing">Cloud Computing</option>
            <option value="Big Data Security">Big Data Security</option>
			<option value="others">Others</option>
          </select>
		 
		  <input type="text" id="Research Area" name="Research Area" style='display:none;' required placeholder="others" />
		  
         <!-- <input type="radio" id="staff" value="staff" name="category"><label for="staff" class="light">Staff</label><br>
          <input type="radio" id="scholar" value="scholar" name="category"><label for="scholar" class="light">Research Scholar</label>
          
           <input type="radio" id="student" value="student" name="category"><label for="student" class="light">Student</label>-->
        </fieldset>
        
        
        
         
        
        </fieldset>
        <button type="submit">Submit</button>
      </form>
      
	  <div align="center" style=""> Already registered  <a style="text-decoration:none; color:rgb(75, 201, 112)" href="login.php"> <strong>Click here</strong></a></div>
    </div>
	</body>

</html>
