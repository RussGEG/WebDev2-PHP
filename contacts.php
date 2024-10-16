<!DOCTYPE html>
    <html>
        <head>
            <title>Contact Us</title>
            <link rel="icon" href="contacts/css/Logo.png">
            <link href="contacts/css/styles.css" rel="stylesheet" type="text/css">
            <script src="contacts/Script.js"></script>
            <link href="https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap" rel="stylesheet">
            <script src="https://unpkg.com/scrollreveal"></script>
        </head>
    <body>

        <Header>
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
    </Header>

    <Content>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>You may contact us using the given information or you may send us a message through email by using our form.</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M680-600h80v-80h-80v80Zm0 160h80v-80h-80v80Zm0 160h80v-80h-80v80Zm0 160v-80h160v-560H480v56l-80-58v-78h520v720H680Zm-640 0v-400l280-200 280 200v400H360v-200h-80v200H40Zm80-80h80v-200h240v200h80v-280L320-622 120-480v280Zm560-360ZM440-200v-200H200v200-200h240v200Z"/></svg></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>#6 Lower Waling-waling Street,<br>Modesta Village,San Mateo Rizal<br>1850</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>0960-549-3772 (Smart)</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>minne_ph@yahoo.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>
                        
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type your message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" required="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        </Content>
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
    
                ScrollReveal().reveal('.contactForm', { delay: 200, origin:'right'});
                ScrollReveal().reveal('.box', { delay: 200, origin:'left'});
                
        </script>
    </body>
</html>
    
