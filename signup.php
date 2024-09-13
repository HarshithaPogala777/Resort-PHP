<!DOCTYPE html>
<html>
    <head>
      <!  <link href="signup.css" rel="stylesheet">-->
      <style>
      body{
    background-image:url("image1_2.jpg");
    height:100vh;
    -webkit-background-size:cover;
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center center;

    /* background-attachment:fixed; */
}


.scroll-container {
    width: 300px;
   height:100px;
    overflow: hidden;
    position: relative;
   /* border:1px solid #ccc;*/
}
.scroll-content {
    white-space: nowrap;
    animation: scroll 5s linear infinite;
  font-size:35px;
  color:white;
  font-style:oblique;
}

@keyframes scroll {
    from { transform: translateX(-100%); }
    to { transform: translateX(100%); }
}
.form
{
    margin-left:200px;
    margin-right:200px;
    margin-top:100px;
    padding-left:50px;
    padding-right:50px;
    height:400px;
}
      </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
        <div class="hi">
            <!--Sunset or sunrise over a tropical resort with warm, vibrant colors. the image size should be 126.6 kb-->
            <div class="scroll-container">
                <div class="scroll-content">
                    Hi,There Welcome To the
                    <br>Happy Resorts
                </div>
            </div>

        </div>
        </center>

        <!--SIgn UP Form-->
    <div class="form" style="border: 1px solid yellow"> 
        <!--<fieldset>-->
        <form class="form-group" action="data.php" method="POST" id="form">
            <!-- <div width="60px"> -->
                <label for="user" class="form-label">UserName*</label>
                <input type="text" id="user" class="form-control" class="form-control-sm" width="30px" name="username">
                <span id="usererror">*</span>
                <br><br>
            <!-- </div> -->

            <label for="email" class="form-label">Email*</label>
            <input type="email" id="email" class="form-control" class="form-control-sm" name="email">
            <span id="emailerror">*</span>
            <br><br>

            <label for="pass" class="form-label">Password*</label>
            <input type="password" id="pass" class="form-control" class="form-control-sm" name="pass">
            <span id="passerror">*</span>
            <br><br>

            <center><button type="submit"> Sign Up</button></center>
           
        </form>
       <!--</fieldset>-->
    </div>
        <script>
         function validate()
       	{	
       		emailval();
       		passval();
       		userval();
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
       		else if(pass.value.length<8)
       		{
       			passerror.innerText="password length should be grater than 8 and <20";
       		passerror.setAttribute("style","color:red");
       		event.preventDefault();
       		}
       	}
       	function userval()
       	{
       		const user=document.getElementById("user");
       		const usererror=document.getElementById("usererror");
       		if(user.value=="")
       		{
       			usererror.innerText="This field is mandatory";
       			usererror.setAttribute("style","color:red");
       			event.preventDefault();
       		}
       		
       	}
       	const form=document.getElementById("form");
       	form.addEventListener("submit",validate);
           

        </script>

   </body>
</html>
