x<!DOCTYPE html>
<html>
    <head>
        <link href="signup.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
    background-image:url("image0_7.jpg");
    height:100vh;
    -webkit-background-size:cover;
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center center;

    /* background-attachment:fixed; */
}

        </style>
    </head>
    <body>
        <center>
        <div class="hi">
            <!--Sunset or sunrise over a tropical resort with warm, vibrant colors. the image size should be 126.6 kb-->
            <div class="scroll-container">
                <div class="scroll-content">
                    Hi,There Welcome Back
                    <br>
                </div>
            </div>

        </div>
        </center>

        <!--SIgn UP Form-->
    <div class="form" style="border: 1px solid yellow"> 
        <!--<fieldset>-->
        <form class="form-group" style="height:200px" id="form" action="logindata.php" method="POST">
            <div width="60px">
                <!-- <label for="user" class="form-label">UserName</label>
                <input type="text" id="user" class="form-control" class="form-control-sm" width="30px"><br><br> -->
            <!-- </div> -->

            <label for="email" class="form-label" style="color:aqua">Email</label>
            <input type="email" id="email" class="form-control" class="form-control-sm" name="email">
            <span id="emailerror">*</span>
            <br><br>

            <label for="pass" class="form-label" style="color:aqua">Password</label>
            <input type="password" id="pass" class="form-control" class="form-control-sm" name="pass">
            <span id="passerror">*</span>
            <br><br>

            <a href="forgot.php"><span class="text-primary m-2">Forgot password</span></a>

            <center><button type="submit" class="btn btn-dark"> Login</button></center>
           
        </form>
       <!--</fieldset>-->
    </div>
        <script>
        	function validate()
       	{	
       		emailval();
       		passval();
       	}
       	function emailval()
       	{
       		const email=document.getElementById("email");
       		const emailerror=document.getElementById("emailerror");
       		if(email.value==="")
       		{
       		emailerror.innerText="you forgot fill this field";
       		emailerror.setAttribute("style","color:red");
       		event.preventDefault();
       		}
       		
       		
       	}
       	function passval()
       	{
       		const pass=document.getElementById("pass");
       		const passerror=document.getElementById("passerror");
       		
       		if(pass.value=="")
       		{
       		passerror.innerText="you forgot to fill this field";
       		passerror.setAttribute("style","color:red");
       		event.preventDefault();
       		}
       	}
       	const form=document.getElementById("form");
       	form.addEventListener("submit",validate);
        
        </script>

   </body>
</html>
