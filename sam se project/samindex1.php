<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Card Hover Effect</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="samstyle1.css">

</head>
<style>




	body{
	  background:rgb(3, 3, 83);
	}
	nav {
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 20px 100px;
		color: #fff;
	  background-image: linear-gradient( rgba(102, 79, 79, 0), rgb(26, 101, 185));
	}
	.logo {
		font-size: 25px;
		color: #fff;
		padding: 0 15px;
	}
	.menu ul li {
		display: inline-block;
		margin: 0 15px;
	}
	.menu ul li a {
		text-decoration: none;
		cursor: pointer;
		font-weight: bold;
		font-size: 18px;
		text-transform: uppercase;
		font-family: montserrat;
		color: #fff;
		padding: 5px 15px;
	}
	.menu ul li a:hover{
		background: rgb(31, 31, 32);
	}
	.socials a {
		text-decoration: none;
		background:blue;
		color: #fff;
		padding: 10px 35px;
	}
	
	
	
	</style>
<body>
	<nav>
        <div class="logo">HAPPY RESORT</div>
        <div class="menu">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                
				<li><a href="#">Back</a></li>

            </ul>
        </div>
        
    </nav>

	<div class="wrapper">
		<div class="card">
			<img src="samimages/img1.jpg" alt="">
			<div class="info">
				<h1>CHILDREN SWIMMING🏊️🏊‍♀️️</h1>
				<p>WE FOLLOWED SAFETY PRECAUTIONS. HOPE YOU CAN ENJOY IT.</p>
				
			</div>
		</div>
		<div class="card">
			<img src="samimages/img2.jpg" alt="">
			<div class="info">
				<h1>WATER ROASTER🌊️</h1>
				<p>THERE IS NO AGE LIMIT ,ANY ONE CAN ENJOY.MAINTAIN SWIM SUITS.</p>
				
			</div>
		</div>
		<div class="card">
			<img src="samimages/img3.jpg" alt="">
			<div class="info">
				<h1>RAIN DANCE☔️🌈️</h1>
				<p>ENJOY RAIN DANCE.</p>
				
			</div>
		</div>
		<div class="card">
			<img src="samimages/img4.jpg" alt="">
			<div class="info">
				<h1>BOATING🏄‍♂️️🏄‍♀️️🤽‍♂️️🚣‍♂️️🚣‍♀️️🤽‍♀️️</h1>
				<p>STREAMING</p>
				
			</div>
		</div>
	</div>

	
</body>
</html>	
