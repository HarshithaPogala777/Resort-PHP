<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles for the navigation bar */
    body{
  background:rgb(194, 176, 176)	;
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
	color:firebrick;
  background-image: linear-gradient( rgba(10, 10, 10, 0), rgb(0, 17, 255));
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
	background:orange;
	color: #fff;
	padding: 10px 35px;
}
    .rowfooterSection{
        background-color: rgb(3, 23, 58);
        color: white;
    }
    .card {
            width: 500px; /* Set your desired width */
            height: 900px; /* Set your initial height */
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            padding: 20px;
            box-sizing: border-box;
            transition: height 0.3s ease; /* Add a smooth transition effect */
        }
    .rectangle1 {
      display: inline-block;
      padding: 1px 1px;
      border: 1px solid #000;
      border-radius: 3px;
      background-color: green;
      color: white;
      font-size: 15px;
      font-style: italic;
    }
    .rectangle {
      display: inline-block;
      padding: 2px 4px;
      border: 1px solid #000;
      border-radius: 3px;
      background-color: rgb(2, 0, 128);
      color: white;
      font-size: 15px;
      font-style: italic;
    }
    .checkmark {
      font-size: 14px;
      color: black; 
      margin-right: 5px;
    }
    .star {
      font-size: 25px;
      color: rgb(211, 182, 20); 
      margin-right: 5px;
    }
  </style>
  <title>Bootstrap Navigation Bar</title>
</head>
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


<!-- Your content goes here -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="resort.jpeg" height = 500px class="d-block w-100" alt="First Slide">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    </div><br>
<h2 align = "center"><b>ROOMS</b></h2>
<h5 align="center"><b>Revitalised and Refreshed Rooms … Unveiling Soon!</b></h5><br><br>
<p align="center">A variety of accommodation is available ranging from the Deluxe to the Family Rooms. Check our room and suite<br> availability via our online booking and reservation system.</p>
</div><br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card border-dark mb-3">
          <a href="deluxe.php"><img src="deluxe.jpg" width = "460px" height="300px"></a>
          <div class="card-body">
            <h2 class="card-title"><b>DELUXE ROOM</b></h2>
            <p class="card-text">Refined resort living amongst the lush and tranquil gardens.  Designed with an emphasis on comfort and elegance, this room is an ideal choice for a cozy retreat for both leisure and corporate travelers.</p>
            <div class="star">&#9733;&#9733;&#9733;&#9733;</div><br>
            <div class="rectangle">
                <small>8.9  </small>
            </div>
            Fabulous * 1,600 reviews<br><br>
            <a style="color: maroon;"><h5><s><b>&#x20B9;3,562</b></s></h5>
            <h3><a style="color:black;">&#x20B9;1,745</a>
                <div class="rectangle1">
                <small>51% off</small>
                </div>
            </h3>
            </a>
            <p>+&#x20B9; 145 taxes and charges</p>
            <div class="checkmark">&#10004; <b>Free cancellation</b></div>
            <div class="checkmark">&#10004; <b>No Prepayment required</b><br>
            </div><br>
            <a href="deluxe.php" class="btn btn-danger float-right">Book Now &rarr;</a>
          </div>
        </div>
      </div>
    
      <div class="col-sm-6">
        <div class="card border-dark mb-3">
          <a href="deluxe2.php"><img src="deluxe2.jpg" width = "460px" height="300px"></a>
          <div class="card-body">
            <h2 class="card-title"><b>PREMIER DELUXE SEA-FACING ROOM</b></h2>
            <p class="card-text">Elegantly designed in tones evoking an airy feel and the room is adorned with sleek rattan fixtures and intricate local motifs..</p>
            <div class="star">&#9733;&#9733;&#9733;</div><br>
            <div class="rectangle">
                <small>8.0</small>
            </div>
              Outstanding 1,500 reviews<br><br>
            <a style="color: maroon;"><h5><s><b>&#x20B9;4,000</b></s></h5>
            <h3><a style="color:black;">&#x20B9;2,000</a>
                <div class="rectangle1">
                <small>50% off</small>
                </div>
            </h3>
            </a>
            <p>+&#x20B9; 125 taxes and charges</p>
            <div class="checkmark">&#10004; <b>Free cancellation</b></div>
            <div class="checkmark">&#10004; <b>No Prepayment required</b>
            </div>
            <div class="checkmark">&#10004; <b>Free Entry</b><br>
            </div><br>
            <a href="deluxe2.php" class="btn btn-danger float-right">Book Now &rarr;</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
          <div class="card border-dark mb-3">
            <a href="deluxe3.php"><img src="deluxe3.jpg" width = "460px" height="300px"></a>
            <div class="card-body">
              <h2 class="card-title"><b>FAMILY ROOM</b></h2>
              <p class="card-text">Elegant rooms with views of lush gardens.  Stretch and relax in spacious comfort that can accommodate 4 adults.  Tastefully furnished with touches of traditional décor, it comprises of 2 inter-connecting rooms.  This option is perfect for families going on a weekend get-away or family vacation</p>
              <div class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</div><br>
              <div class="rectangle">
                  <small>8.5</small>
              </div>
              Amazous * 1,000 reviews<br><br>
              <a style="color: maroon;"><h5><s><b>&#x20B9;5,000</b></s></h5>
              <h3><a style="color:black;">&#x20B9;2,000</a>
                  <div class="rectangle1">
                  <small>40% off</small>
                  </div>
              </h3>
              </a>
              <p>+&#x20B9; 150 taxes and charges</p>
              <div class="checkmark">&#10004; <b>Free cancellation</b></div>
              <div class="checkmark">&#10004; <b>No Prepayment required</b><br>
              </div><br>
              <a href="deluxe3.php" class="btn btn-danger float-right">Book Now &rarr;</a>
            </div>
          </div>
        </div>
      
        <div class="col-sm-6">
          <div class="card border-dark mb-3">
            <a href="deluxe4.php"><img src="deluxe4.jpg" width = "460px" height="300px"></a>
            <div class="card-body">
              <h2 class="card-title"><b>EXECUTIVE SEA-FACING FAMILY SUITE</b></h2>
              <p class="card-text">Resort-style living with tasteful furnishings. For families that seek additional space and privacy, the room offers inter-connecting rooms with expansive views of the South China Sea</p>
  <div class="star">&#9733;&#9733;</div><br>                                                                                                                                                                                                                                                                                                                                                          
              <div class="rectangle">
                  <small>7.0</small>
              </div>
               Awesome * 750 reviews<br><br>
              <a style="color: maroon;"><h5><s><b>&#x20B9;3,500</b></s></h5>
              <h3><a style="color:black;">&#x20B9;1,500</a>
                  <div class="rectangle1">
                  <small>65% off</small>
                  </div>
              </h3>
              </a>
              <p>+&#x20B9; 110 taxes and charges</p>
              <div class="checkmark">&#10004; <b>Free cancellation</b></div><br>
              <a href="deluxe4.php" class="btn btn-danger float-right">Book Now &rarr;</a>
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card border-dark mb-3">
            <a href="deluxe5.php"><img src="deluxe5.jpg" width = "460px" height="300px"></a>
            <div class="card-body">
              <h2 class="card-title"><b>EXECUTIVE SEA-FACING SUITE                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </b></h2>
              <p class="card-text">The sea-facing Executive Room commands a stunning view. Enjoy the glistening sunrise from your private balcony amidst the serenity of the resort’s lush tropical gardens.</p>
              <div class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</div><br>
              <div class="rectangle">
                  <small>9.0</small>
              </div>
              Fabulous * 500 reviews<br><br>
              <a style="color: maroon;"><h5><s><b>&#x20B9;5,000</b></s></h5>
              <h3><a style="color:black;">&#x20B9;3,750</a>
                  <div class="rectangle1">
                  <small>25% off</small>
                  </div>
              </h3>
              </a>
              <p>+&#x20B9; 100 taxes and charges</p>
              <div class="checkmark">&#10004; <b>Free cancellation</b></div>
              <div class="checkmark">&#10004; <b>No Prepayment required</b><br>
              </div><br>
              <a href="deluxe5.php" class="btn btn-danger float-right">Book Now &rarr;</a>
            </div>
          </div>
        </div>
      
        <div class="col-sm-6">
          <div class="card border-dark mb-3">
            <a href="deluxe6.php"><img src="deluxe6.jpg" width = "460px" height="300px"></a>
            <div class="card-body">
              <h2 class="card-title"><b>STUDIO ROOM</b></h2>
              <p class="card-text">Showcasing warm contemporary feel with traditional touches. The one-bedroom unit provides spacious luxury comforts with panoramic views of the coastline, landscaped garden and pool</p>
              <div class="star">&#9733;&#9733;</div><br>
              <div class="rectangle">
                  <small>7.5</small>
              </div>
              Pleasant * 1,000 reviews<br><br>
              <a style="color: maroon;"><h5><s><b>&#x20B9;7,000</b></s></h5>
              <h3><a style="color:black;">&#x20B9;3,000</a>
                  <div class="rectangle1">
                  <small>65% off</small>
                  </div>
              </h3>
              </a>
              <p>+&#x20B9; 105 taxes and charges</p>
              <div class="checkmark">&#10004; <b>Free cancellation</b></div>
              <div class="checkmark">&#10004; <b>No Prepayment required</b><br>
              </div>
              <div class="checkmark">&#10004; <b>Free Entry</b><br>
              <a href="deluxe6.php class="btn btn-danger float-right">Book Now &rarr;</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  <section class="rowfooterSection">
    <div class="containerLg">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 footerCol pageLinks">
                <ul id="menu-footer-menu" class="footerList clearfix footerListHalf"><li id="menu-item-338" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-338 ">Home</li>
<li class="menu-item menu-item-type-post_type_archive menu-item-object-cpt_promo menu-item-339 ">Promotions</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-39 current_page_item menu-item-340 active  ">Rooms</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-341 ">Facilities</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342 ">Food &#038; Beverage</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-343 ">Meetings &#038; Events</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344 ">Activities</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345 ">Location</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346 ">Contact Us</li>
<li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2447">Infographic</li>
</ul>					</div>
            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-6 footerCol">					
                <h4>Our Hotels</h4>
                <ul class="footerList clearfix">
                    <li>Happy-Garden Hotel &amp; Residences, Genting Highlands</li>
                    <li>Swiss-Garden Beach Resort Kuantan</li>
                    <li>Swiss-Garden Beach Resort Damai Laut (Rebranded)</li>
                    <li>Swiss-Garden Hotel Melaka</li>
                    <li>Happy-Garden Hotel Bukit Bintang Kuala Lumpur</li>
                    <li>Happy-Inn Johor Bahru (Rebranded)</li>
                    <li>Damai Laut Golf &amp; Country Club</li>                     
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 footerLastCol">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-3 footerHdLinkCol">
                        <h4>
                            Best Rate Guarantee
                        </h4>
                                                        <h4>
                            E-Brochure
                        </h4>
                                                        <h4>
                            Sitemap
                        </h4>
                    </div>
                    <div class="col-sm-12 col-xs-6 newsletter">
                        <h4>Newsletter Subscription</h4>
                        <p>Get all offers in your mailbox</p>
                        <form action="" method="" class="newsletterForm" autocomplete="off">
                            <input type="email" name="newsEmail" id="newsEmail" placeholder="Your email here">
                            <input type="submit" name="newsSubmit" id="newsSubmit" value="Submit">
                        </form>
                                                                                            
                    </div>							
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
