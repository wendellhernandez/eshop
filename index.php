<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eShop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="uppernav">
                <div class="uppernav-left">
                    <a href="#">Download</a>
                    <a href="#">English</a>
                </div>
                <div class="uppernav-right">
                    <a href="#">Notification</a>
                    <a href="#">Sign Up</a>
                    <a href="#">Login</a>
                </div>
            </div>
            <div class="lowernav">
                <a href="#" class="logo">
                    <img src="assets/logo.png">
                    <h1>eShop</h2>
                </a>
                <form class="search" action="index.php" method="get">
                    <input type="text" name="search" placeholder="Sign up and get 100% off on your first order">
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
                        </svg>
                    </button>
                </form>

                <svg class="cart" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256"/><path d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
            </div>
        </div>
    </header>

    <main>
        <section class="padding-section"></section>
        
        <section class="carousel-section">
            <div class="container">
                <div class="carousel">
                    <div class="slider">
                        <div class="slider-content">
                            <div class="content-left">
                                <img src="assets/home-img-1.png">
                            </div>
                            <div class="content-right">
                                <p>up to 80% off</p>
                                <h1>LATEST APPLE PRODUCTS</h1>
                                <button>Shop Now</button>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="content-left">
                                <img src="assets/home-img-2.png">
                            </div>
                            <div class="content-right">
                                <p>up to 60% off</p>
                                <h1>LATEST WATCHES</h1>
                                <button>Shop Now</button>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="content-left">
                                <img src="assets/home-img-3.png">
                            </div>
                            <div class="content-right">
                                <p>up to 75% off</p>
                                <h1>LATEST SMARTPHONES</h1>
                                <button>Shop Now</button>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="content-left">
                                <img src="assets/home-img-4.png">
                            </div>
                            <div class="content-right">
                                <p>up to 70% off</p>
                                <h1>LATEST HEADSETS</h1>
                                <button>Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <span class="slider-nav-button  slider-nav-button-active"></span><span class="slider-nav-button"></span><span class="slider-nav-button"></span><span class="slider-nav-button"></span>
                    </div>
                </div>

                <div class="spotlight-container">
                    <div class="spotlight">
                        <div class="spotlight-text spotlight-brand">
                            Brand Spotlight
                        </div>
                        <a href="#"><img src="assets/home-img-5.png"></a>
                    </div>
                    <div class="spotlight">
                        <div class="spotlight-text spotlight-mall">
                            eShop Mall
                        </div>
                        <a href="#"><img src="assets/home-img-6.png"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sectionM category-section">
            <div class="container">
                <h1>Categories</h1>
                <div class="category-container">
                    <a href="#" class="category">
                        <img src="assets/icon-1.png">
                        <p>Laptop</p>
                    </a>
                    <a href="#" class="category">
                        <img src="assets/icon-2.png">
                        <p>TV</p>
                    </a>
                    <a href="#" class="category">
                        <img src="assets/icon-3.png">
                        <p>Camera</p>
                    </a>
                    <a href="#" class="category">
                        <img src="assets/icon-4.png">
                        <p>Mouse</p>
                    </a>
                    <a href="#" class="category">
                        <img src="assets/icon-5.png">
                        <p>Fridge</p>
                    </a>
                    <a href="#" class="category">
                        <img src="assets/icon-6.png">
                        <p>Laundry</p>
                    </a>
                    <a href="#" class="category">
                        <img src="assets/icon-7.png">
                        <p>Phone</p>
                    </a>
                    <a href="#" class="category">
                        <img src="assets/icon-8.png">
                        <p>Watch</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <div class="padding-bottom"></div>
    
    <footer>
        Project by: <a href="https://github.com/wendellhernandez" class="footerlink">Wendell Hernandez</a>
        <br>
        Tech Stack: HTML, CSS, Javascript, LESS
        <br><br>
        Copyright &copy; 2023
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="scripts/app.js"></script>
</body>
</html>