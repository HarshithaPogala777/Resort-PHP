<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



	<style>
		body
		{background-image:url("resort_bg.jpg");
		background-size:cover;
		}
	
			.form-container {
           /* width: 300px; */ 
           /* Adjust the width as needed */
            padding: 30px;
            display:flex;
            
           
            /*height:100vh;
            margin:0;
           /*border: 1px solid yellow;*/
            border-radius: 5px;
        /* background-color:#bdb2ff;*/
            margin-left:150px;
            margin-right:150px;
            
        }
 	
	.form-container .row
	{
	margin-bottom:15px;
	}	
		
	</style>
	</head>
	<body>
		<!--<div class="containerform">-->
			<form name="reser" action="store.php" method="POST" id="form">
		
			<h2 style="color:white;font-size:40px"><center><u>Resort Registration Form</u></center></h2>
						
			<div class="form-container">
				<div class="container">
				<div class="row">
				<div class="col">
				<h3 style="color:white;font-size:20px">Guest COntact Information</h3>
				<hr>
				</div>
				</div>
				<div>	
				<div>
			<div class="row custom-row">
				<div class="col-4">
					<select name="mrmrs" id="ch">
						<option value="choose">choose</option>
						<option value="Mr">Mr</option>
						<option value="Mrs">Mrs</option>
					</select>
					<small id="cherror">*</small>
				</div>
				<div class="col-4"><input type="text" class="form-control" placeholder="Firstname" name="firstname" id="fname">	
				<small id="fnerr">*</small>
				</div>
				<div class="col-4"><input  id="lname" type="text" class="form-control" placeholder="Lastname" name="lastname"><small id="lnerr">*</small></div>
			</div>
			</div>
			<div class="container">
				<div class="row">
				<span style="color:deeppink">Date</span>
				</div>
				<div class="row">
					<div class="col">
					<input type="date" name="date" placeholder="date" class="form-control" style="position:relative;left:-10px;" id="date"><br>
					<small>current date</small>
					<small id="dateerror">*</small>
					</div>
				</div>
			
			</div>
			<div class="container">
				<span style="color:deeppink">Address</span>
				<input type="text" name="streea1" class="form-control" style="position:relative;left:-10px;" id="add">
				<small>Street address</small>
				<small id="adderr">*</small>
			</div>
			
		
			<div class="container">
				<div class="row">
					<div class="col-6">
					
					<input id="city" type="text" name="city" class="form-control" placeholder="city">
					<Small id="cityerr">*</small>
					</div>
					<div class="col-6">
					<input type="text" name="state" class="form-control" placeholder="state" id="state">
					<small id="stateerr">*</small>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-6">
					
					<input id="zipcode" type="text" name="zipcode" class="form-control" placeholder="zipcode">
					<small id="zipcodeerr">*</small>
					</div>
					<div class="col-6">
					<input id="country" type="text" name="country" class="form-control" placeholder="country">
					<small id="countryerr">*<small>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-6">
					
					<input id="phone" type="text" name="phonenumber" class="form-control" placeholder="phonenumber">
					<small id="phoneerr">*</small>
					</div>
					<div class="col-6">
					<input id="email" type="text" name="email" class="form-control" placeholder="email">
					<small id="emailerr">*</small>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
				<div class="col-12">
				<h3  class="text-light" style="font-size:30px">Reservation Details;</h3>
				<hr>
				</div>
			</div>
			
			
			<div class="container">
				<div class="row">
					<div class="col-6">
					
					<input type="date" name="arrivaldate" class="form-control" placeholder="ArrivalDate" id="arrival"><br>
					<small id="arrivalerr">ArrivalDate</small>
					</div>
					<div class="col-6">
					<input type="date" name="departuredate" class="form-control" placeholder="DepartureDate" id="de">
					<small id="deerr">*</small>
					<br>
					
					<small>Departure Date</small>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-6">
					
					<input id="ad" type="text" name="noadults" class="form-control" placeholder="noofadults">
					<small id="aderror">*</small>
					</div>
					<div class="col-6">
					<input type="text" name="nochildren" class="form-control" placeholder="noofchildren" id="children">
					<small id="chierr">*</small>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<span>Extra Bed</span><br>
					<div class="form-check">
						  <input value="yes" class="form-check-input" type="radio" name="ch" id="yes" class="form-control">
						  <label class="form-check-label" for="yes">
						    yes
						  </label>
						</div>
							<div class="form-check">
						  <input value="no" class="form-check-input" type="radio" name="ch" id="no" class="form-control">
						  <label class="form-check-label" for="no">
						    no
						  </label>
						  <small id="bed">*</small>
						</div>
				</div>
			</div>
			<hr>
			<div class="mb-3">
  <label for="addinfo" class="form-label">Any Additional Requesr</label>
  <textarea name="addinfo" class="form-control" id="addinfo" rows="3"></textarea>
</div>
			</div>
		</div>
		<!--</div>-->
		<div align="center">
		<div class="container">
		<input type="submit" name="submit" value="SUBMIT" style="background-color:deeppink" class="btn">
		</div>
		</div>
		</form>
		<script src="reserval.js">
		
		</script>
	</body>
</html>
