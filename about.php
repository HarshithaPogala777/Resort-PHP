<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>AboutUS</title>
    <link href='' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style>
        :root {
            --light-blue: rgb(32, 18, 95);
            --dark-blue: rgb(204, 100, 223);
            --violet: rgb(119, 188, 236);

            --background-left: rgb(29, 33, 68);
            --background-right: rgb(30, 25, 47);

            --conic-gradient: conic-gradient(var(--dark-blue),
                    var(--violet),
                    var(--light-blue),
                    var(--dark-blue));
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {

            from,
            20%,
            40%,
            80%,
            to {
                transform: scale(1);
            }

            10%,
            60% {
                transform: scale(1.1);
            }
        }

        body {
            background: linear-gradient(to right,
                    var(--background-left),
                    var(--background-right));
            height: 100vh;
            margin: 0px;
            overflow: hidden;
            padding: 0px;
        }

        nav {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            color: #fff;
            background-image: linear-gradient(rgba(102, 79, 79, 0), rgb(2, 47, 99));
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

        .menu ul li a:hover {
            background: rgb(31, 31, 32);
        }

        .socials a {
            text-decoration: none;
            background: blue;
            color: #fff;
            padding: 10px 35px;
        }


        #background {
            display: grid;
            inset: 0px;
            place-items: center;
            position: fixed;
            z-index: 1;
        }

        #circle {
            animation: rotate 10s linear infinite;
            background: var(--conic-gradient);
            border-radius: 70vh;
            display: grid;
            filter: blur(1.5vh);
            height: 70vh;
            place-items: center;
            position: relative;
            width: 70vh;
        }

        #circle-inner {
            border-radius: inherit;
            inset: 5%;
            position: absolute;
        }

        #circle-glow {
            animation: pulse 10s ease-in-out infinite;
            background: var(--conic-gradient);
            border-radius: 100vh;
            filter: blur(3vh);
            height: 120%;
            opacity: 0.25;
            width: 120%;
            z-index: 2;
        }

        #circle-inner {
            background: linear-gradient(to right,
                    var(--background-left),
                    var(--background-right));
            z-index: 3;
        }

        #app {
            display: grid;
            height: 100vh;
            place-items: center;
            position: relative;
            width: 100vw;
            z-index: 2;
        }

        #profiles {
            display: flex;
            flex-wrap: wrap;
            gap: clamp(10px, 0.8vw, 20px);
            justify-content: center;
            margin-left: 80px;
            width: clamp(600px, 80vw, 1400px);
        }

        #profiles>.profile {
            aspect-ratio: 7 / 8;
            backdrop-filter: blur(0.75vw);
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 1vw;
            cursor: pointer;
            transition: background-color 250ms;
            width: calc(25% - clamp(10px, 0.8vw, 20px));
        }

        #profiles>.profile:hover {
            backdrop-filter: blur(1vw);
            background-color: rgba(255, 255, 255, 0.1);
        }

        .profile>.profile-content {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            height: calc(100% - clamp(8px, 1vw, 12px));
            justify-content: center;
            padding: clamp(8px, 1vw, 12px);
        }

        .profile>.profile-content>.profile-pic {
            aspect-ratio: 1;
            border: clamp(3px, 0.4vw, 5px) solid white;
            border-radius: 100%;
            flex-shrink: 0;
            height: 70%;
            position: relative;
        }

        .profile>.profile-content>.profile-pic>.profile-pic-image {
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 100%;
            height: calc(100% - clamp(10px, 1.5vw, 20px));
            margin: clamp(5px, 0.75vw, 10px);
            object-fit: cover;
            width: calc(100% - clamp(10px, 1.5vw, 20px));
        }

        .profile>.profile-content>.profile-name {
            color: white;
            font-family: 'Rubik', sans-serif;
            font-size: clamp(1em, 2vw, 2em);
            margin: 0px;
            text-align: center;
        }

        .profile>.profile-content>.profile-names {
            color: rgb(236, 236, 95);
            font-family: 'Rubik', sans-serif;
            font: size 28px;
            margin: 0px;
            text-align: center;
        }


        @media(max-width: 1200px),
        (max-height: 900px) {
            #nav {
                width: 80px;
            }

            #nav-items {
                gap: 5px;
                width: 80px;
            }

            #nav-items>.nav-item {
                border-radius: 6px;
                height: 60px;
                width: 60px;
            }

            #nav-items>.nav-item>i {
                font-size: 1.5em;
            }
        }
    </style>
   
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    
</head>





<body oncontextmenu='return false' class='snippet-body'>
    <nav>
        <div class="logo">HAPPY RESORT</div>
        <div class="menu">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">contact</a></li>
            </ul>
        </div>

    </nav>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <div id="background">
        <div id="circle">
            <div id="circle-glow"></div>
            <div id="circle-inner"></div>
        </div>
    </div>

    <div id="app">
        <div id="profiles">
            <div class="profile">
                <div class="profile-content">
                    <div class="profile-pic">
                        <img class="profile-pic-image" src="about/1.jpg" />
                    </div>
                    <h3 class="profile-name">Ms.G.Harika</h3>
                    <h4 class="profile-names">RESORT MANAGER</h4>
                    <h4 class="profile-names">Contact:9898989890</h4>

                </div>
            </div>
            <div class="profile">
                <div class="profile-content">
                    <div class="profile-pic">
                        <img class="profile-pic-image" src="about/2.jpg" />
                    </div>
                    <h3 class="profile-name">Ms.S.SAMEERA</h3>
                    <h4 class="profile-names">MARKETTING MANAGER</h4>
                    <h4 class="profile-names">Contact:9898989893</h4>

                </div>
            </div>
            <div class="profile">
                <div class="profile-content">
                    <div class="profile-pic">
                        <img class="profile-pic-image" src="about/3.jpg" />
                    </div>
                    <h3 class="profile-name">Ms.P.HARSHITHA</h3>
                    <h4 class="profile-names">CATERING MANAGER</h4>
                    <h4 class="profile-names">Contact:9898989895</h4>
                </div>
            </div>
            <div class="profile">
                <div class="profile-content">
                    <div class="profile-pic">
                        <img class="profile-pic-image" src="about/4.jpg" />
                    </div>
                    <h3 class="profile-name">J.SONI</h3>
                    <h4 class="profile-names">ACCOUNTANT MANAGER</h4>
                    <h4 class="profile-names">Contact:9898989896</h4>

                </div>
            </div>
            <div class="profile">
                <div class="profile-content">
                    <div class="profile-pic">
                        <img class="profile-pic-image" src="about/7.jpg" />
                    </div>
                    <h3 class="profile-name">Mr.T.R HEMANTH</h3>
                    <h4 class="profile-names">RESTAURANT MANAGER</h4>
                    <h4 class="profile-names">Contact:9898989897</h4>
                </div>
            </div>

            <div class="profile">
                <div class="profile-content">
                    <div class="profile-pic">
                        <img class="profile-pic-image" src="about/6.jpg" />
                    </div>
                    <h3 class="profile-name">Mr.DHANUSH</h3>
                    <h4 class="profile-names">GENERAL MANAGER</h4>
                    <h4 class="profile-names">Contact:9898989891</h4>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
