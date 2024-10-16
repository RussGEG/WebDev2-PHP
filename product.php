<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link rel="icon" href="about/css/Logo.png">
    <link href="products/css/prod.css" rel="stylesheet" type="text/css">
    <link href="prod.css" rel="stylesheet" type="text/css">
    <script>function showSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
    }
    function hideSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
    }</script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <Header>
        
        <div class="container">

            <nav>
                <img src="products/css/NavBarLogo2.png" alt="logo" class="logo" href="index.html">

                <ul class="sidebar">
                    <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                    <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="contacts.php">Contacts</a></li>
            </ul>
            <ul>
                <li class="hideOnMobile"><a href="index.php">Home</a></li>
                <li class="hideOnMobile"><a href="about.php">About Us</a></li>
                <li class="hideOnMobile"><a href="product.php">Products</a></li>
                <li class="hideOnMobile"><a href="contacts.php">Contacts</a></li>
                    <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
            </nav>
        </div>
    
    </Header>  


    <content>
    <h1>PRODUCTS</h1>
            
    <div class="container">
        <div class="product-card" id="card1"> 
           
            <img src="products/css/CarShampooer.jpg" alt="Product Image">
            <h2>Car Shampoo </h2>
            <p>Stay Clean Everyday</p>
            <p>Price: PHP180</p>
            <button>Reserve</button>
        </div>
        <div class="product-card" id="card2">
            <img src="products/css/CarWaxxer.jpg" alt="Product Image">
            <h2>Car Wax</h2>
            <p>Stay Shiny and Water Proof</p>
            <p>Price: PHP150</p>
            <button>Reserve</button>
        </div>
        <div class="product-card" id="card3">
            <img src="products/css/CarInteriorCLeaner.jpg" alt="Product Image">
            <h2>Interior Cleaner/Spray </h2>
            <p>Stay Clean with this Interior Spray</p>
            <p>Price: PHP250</p>
            <button>Reserve</button>
        </div>
        <div class="product-card" id="card4">
            <img src="products/css/CarAirFreshener.jpg" alt="Product Image">
            <h2>Scent Freshener</h2>
            <p>Bad Odor No More</p>
            <p>Price: PHP159</p>
            <button>Reserve</button>
        </div>
    
    </div>

    <div class="SERVICES">
        <h1>
            SERVICES
        </h1>
    </div>
    <div class="container">
        <div class="product-card" id="card1"> 
            <img src="products/css/CarWash.png" alt="Product Image">
            <h2>Car Wash</h2>
            <p>Thorough Wash Around The Car</p>
            <p>Price: PHP200</p>
            <button>Book</button>
        </div>
        <div class="product-card" id="card2">
            <img src="products/css/CarWax.png" alt="Product Image">
            <h2>Car Wax</h2>
            <p>Shiny & Clean Waxing</p>
            <p>Price: PHP270</p>
            <button>Book</button>
        </div>
        <div class="product-card" id="card3">
            <img src="products/css/CarInterior.png" alt="Product Image">
            <h2>Interior Cleaning</h2>
            <p>Inside Car Deep Cleaning</p>
            <p>Price: PHP300</p>
            <button>Book</button>
        </div>
        <div class="product-card" id="card4">
            <img src="products/css/CarBundle.png" alt="Product Image">
            <h2>Bundle</h2>
            <p>Includes Car Wash, Car Wax and Interior Cleaning</p>
            <p>Price: PHP 700</p>
            <button>Book</button>
        </div>
    </div>

</content>
<footer>
    <div id="footer">
        <p>ⓒ 2023 Hobby ni Hubby | All Rights Reserved</p>
    </div>
    </footer>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });
    
        ScrollReveal().reveal('h1', { delay: 100, origin: 'top' });
        ScrollReveal().reveal('#card1', { delay: 100, origin: 'top' });
        ScrollReveal().reveal('#card2', { delay: 150, origin: 'top' });
        ScrollReveal().reveal('#card3', { delay: 200, origin: 'top' });
        ScrollReveal().reveal('#card4', { delay: 250, origin: 'top' });
    </script>
</body>
</html>
