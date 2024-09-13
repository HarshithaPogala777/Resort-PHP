<!DOCTYPE html>
<!-- Created By MultiWebPress - www.multiwebpress.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  box-sizing: border-box;
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

.socials a {
	text-decoration: none;
	background:blue;
	color: #fff;
	padding: 10px 35px;
}


.navbar-inverse .navbar-nav > li > a {
	color: white;

}

.navbar > .container .navbar-brand {
	color: white;
}

.thumbnail img {
    object-fit: cover;
    height: 400px;
    width: 100%;
}

.gallery-section{
  width: 100%;
  padding: 50px 0;
}

.inner-width{
  width: 100%;
  max-width: 1300px;
  margin: auto;
  padding: 20px 20px;
}

.gallery-section h1{
  font-size: 4vw;
  padding-bottom: 20px;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.gallery-section .gallery a {
  padding: 10px;
}

.border{
  width: 180px;
  height: 4px;
  background: #333;
  margin: 60px auto;
}

.gallery-section .gallery{
  display: flex;
  flex-wrap: wrap-reverse;
  justify-content: center;
}

.gallery-section .image{
  flex: 25%;
  overflow: hidden;
  cursor: pointer;
}

.gallery-section .image img{
  width: 100%;
  height: 100%;
  transition: 0.4s;
  border-radius: 25px;
}

.gallery-section .image:hover img{
  transform: scale(1.6);
}

@media screen and (max-width:960px) {
  .gallery-section .image{
    flex: 33.33%;
  }
}

@media screen and (max-width:768px) {
  .gallery-section .image{
    flex: 50%;
  }

  .gallery-section h1{
    font-size: 22px;
  }
}

@media screen and (max-width:480px) {
  .gallery-section .image{
    flex: 100%;
  }
}
  </style>
<body>
	<nav>
        <div class="logo">HAPPY RESORT</div>
        <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="about.php">contact</a></li>
            </ul>
        </div>
        
    </nav>


    <div class="gallery-section">
      <div class="inner-width">
        <h1>ENJOY JUICES!</h1>
        <div class="gallery">

          <a href="juice/1.jpg" class="image">
            <img decoding="async" src="juice/1.jpg" alt="">
          </a>

          <a href="juice/2.jpg" class="image">
            <img decoding="async" src="juice/2.jpg" alt="">
          </a>

          <a href="juice/3.jpg" class="image">
            <img decoding="async" src="juice/3.jpg" alt="">
          </a>

          <a href="juice/4.jpg" class="image">
            <img decoding="async" src="juice/4.jpg" alt="">
          </a>

          <a href="juice/5.jpg" class="image">
            <img decoding="async" src="juice/5.jpg" alt="">
          </a>

          <a href="juice/6.jpg" class="image">
            <img decoding="async" src="juice/6.jpg" alt="">
          </a>

          <a href="juice/7.jpg" class="image">
            <img decoding="async" src="juice/7.jpg" alt="">
          </a>

          <a href="juice/8.jpg" class="image">
            <img decoding="async" src="juice/8.jpg" alt="">
          </a>

        </div>
      </div>
    </div>
    <script src="script.js">
		$(".gallery").magnificPopup({
  delegate: 'a',
  type: 'image',
  gallery:{
    enabled: true
  }
});
	</script>
  </body>
</html>
