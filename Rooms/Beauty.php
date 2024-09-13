
<!DOCTYPE html>
<html lang="en">
    <!-- divinectorweb.com -->
<head>
    <meta charset="UTF-8"> 
    <title>Beautifull Spots</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
       
</head>
<style>
    body {
	margin: 0; 
	padding: 0;
	font-family: montserrat;
	background-color: #000;
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
	background:rgb(1, 1, 54);
	color: #fff;
	padding: 10px 35px;
}
body {
	margin: 0;
	padding: 0;
}
.wrapper {
	width: 100%;
	height: 100vh;
	overflow: hidden;
	position: relative;
	background-color: #000;
}
.wrapper>div {
	width: 100%;
	height: 100%;
	position: absolute;
	animation: animate 25s infinite;
	opacity: 0;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.wrapper>div:nth-child(2) {
	animation-delay: 5s;
}
.wrapper>div:nth-child(3) {
	animation-delay: 10s;
}
.wrapper>div:nth-child(4) {
	animation-delay: 15s;
}
.wrapper>div:nth-child(5) {
	animation-delay: 20s;
}

@keyframes animate {
	10% {
		opacity: 1;
	}
	20% {
		opacity: 1;
	}
	30% {
		opacity: 0;
	}
	40% {
		transform: scale(1.2);
	}
}


</style>
<body>
   
        <nav>
            <div class="logo">HAPPY RESORT</div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">contact</a></li>
			    </ul>
            </div>
            
        </nav>
      
            <!--<button type="button"></button>-->
             
           
         
                <div class="wrapper">
                    <div style="background-image:url(bb/11.jpg)"></div>
					<div style="background-image:url(bb/12.jpg)"></div>
					<div style="background-image:url(bb/13.jpg)"></div>
					<div style="background-image:url(bb/18.jpg)"></div>
					<div style="background-image:url(bb/11.jpg)"></div>
					<div style="background-image:url(bb/17.jpg)"></div>
					<div style="background-image:url(bb/15.jpg)"></div>
					<div style="background-image:url(bb/14.jpg)"></div>
                   
                </div>
           
            
            
    
</body>
</html>
