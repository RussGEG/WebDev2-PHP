<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    
    <link href="index/css/styles.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="index/css/Logo.png">
    <script src="index/Script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
<header> <!-- Changed to lowercase -->
    <div class="container">
        <nav>
            <img src="index/css/NavBarLogo2.png" alt="logo" class="logo" href="index.html">
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
</header>

<div class="section1">
    <content>
        <div class="table1"> 
            
            <img class="bodyLogo" src="index/css/Logo.png" alt="logo"></li>
            <h1>Hobby ni Hubby</h1></li>
            <p>We ensure the client that we give 100% of our skills</p></li>
            <p>and our assurance to satisfy them.</p></li>
            
        </div>
    </content>
</div>

<div class="section2">
    <contents>
        <div class="CardHeader">
            <h2>INFORMATION</h2>
        </div>
        <div class="card-container">
            <div class="card" id="reveal">
                <img src="index/css/CardP1.png">
                <div class="card-content">
                    <h3>Sparkly Clean</h3>
                    <p>We guarantee our customers we'd leave them inshock on how we clean our cars like no other.</p>
                </div>
            </div>
            <div class="cardd" id="reveal">
                <img src="index/css/CardP2.png">
                <div class="card-content">
                    <h3>Shining Shimmering</h3>
                    <p>We always make our cars look brandnew after a wash thats why we always impress our customers and i doubt that you wouldn't take a 2nd look at it</p>
                </div>
            </div>
            <div class="carddd" id="reveal">
                <img src="index/css/CardP3.png">
                <div class="card-content">
                    <h3>Inside Freshness</h3>
                    <p>May it be dirt or mud we'd clean it, we'll make your interior clean as it was before, it'll look like it was better than you last saw it.</p>
                </div>
            </div>
        </div>
        <br><br><br>
    </contents>
</div>
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

    ScrollReveal().reveal('.table1', { delay: 100, origin: 'top' });
    ScrollReveal().reveal('contents .CardHeader', { delay: 100, origin: 'bottom' });
    ScrollReveal().reveal('.card', { delay: 100, origin: 'left' });
    ScrollReveal().reveal('.cardd', { delay: 100, origin: 'top' });
    ScrollReveal().reveal('.carddd', { delay: 100, origin: 'bottom' });
</script>
</body>
</html>
