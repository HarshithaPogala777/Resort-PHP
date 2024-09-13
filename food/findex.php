   <!DOCTYPE html>
<html lang="en"> 
    <!-- divinectorweb.com -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  
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


.wrapper{
  width: 90%;
  height: auto;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}
.content-area{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  flex-direction: row;
  padding: 80px 0;
}
.single-content{
  width: 300px;
  height: 300px;
  overflow: hidden;
  position: relative;
  margin: 40px;
  box-shadow: 0 2px 20px 2px rgba(0,0,0,0.3);
}

.single-content::after{
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition: all 0.3s ease;
  opacity: 0;
}
.single-content:hover::after {
position: absolute;
  content: '';
  transform: translateY(0);
background: linear-gradient(35deg, rgba(1, 1, 2, 0.8) 25%, rgba(73, 80, 3, 0));
z-index: 2;
width: 100%;
height: 100%;	
top: 0;
left: 0;
opacity: 1;	
}
.single-content img{
  object-fit: cover;
  min-height: 100%;
  height: auto;
  transition: all 0.5s ease;
  width: 100%;
  height: auto;    
}
.single-content:hover img{
  transform: scale(1.3) translate(10%, 10%);
}
.single-content .info{
  position: absolute;
  z-index: 3;
  opacity: 0;
  overflow: hidden;
  transform: translateX(-105%);
  transition: all 0.4s ease;
  left: 5%;
  right: 5%;
  bottom: 5%;
  padding: 10px 12px;
  border-left: 4px solid #fff;
  color: #ffffff;    
}
.single-content:hover .info{
  opacity: 1;
  transform: translateX(0);
}
.single-content .info h2 {
  text-transform: uppercase;
letter-spacing: 3px;
font-family: 'Bebas Neue', sans-serif;
font-size: 23px;
margin-bottom: 10px;
color: #ffffff;	
}
.single-content .info h2, 
.single-content .info p{
  transition: all 0.7s ease;
  transform: translateX(-100%);   
  overflow: hidden;
}
.single-content:hover .info h2, 
.single-content:hover .info p{
  transform: translateX(0);
}
.single-content .info p{
  font-size: 13px;
  line-height: 17px;
}

</style>
<body>
    <nav>
        <div class="logo">HAPPY RESORT</div>
        <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">contact</a></li>
            </uls>
        </div>
        
    </nav>

   

   <div class="wrapper">
    
        <div class="content-area">
            <div class="single-content">
                <img src="veg.jpg" alt="">
                <div class="info">
                    <h2>VEGETARIAN</h2>
                    <p><button><a href="veg.php">Visit</button></p>

                </div>
            </div>

            <div class="single-content">
                <img src="nonveg.jpg" alt="">
                <div class="info">
                    <h2 >NON-VEGETARIAN</h2>
                    <p><button><a href="nonveg.php">Visit</button></p>
                </div>
            </div>
           
            
           
            

            <div class="single-content">
                <img src="juice.jpg" alt="">
                <div class="info">
                    <h2>JUICES</h2>
                    
                    <p><button><a href="juice.php">Visit</button></p>
                </div>
            </div>            
        </div>
    </div>
    <br>
    
    
</body>
</html>




      
      

      

