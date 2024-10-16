<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link href="about/css/styles.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="about/css/Logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap" rel="stylesheet">
        <script src="about/Script.js"></script>
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

        <section class="sec-01">
            <div class="container">
                <h2 class="main-tittle">ABOUT US</h2>
                <div class="content">
                    <div class="image">
                        <img src="about/css/AboutUs.jpg" alt="">
                    </div>
                    <div class="textbox">
                        <h3>FOUNDERS
                        </h3>
                        <p>This company has been founded by Charmaine Gonzales with her Husband Ruel Gonzales. We provide car cleaning products that would satisfy our customers you can get one yourself just by reserving one and getting it on our address or by lalamove, We also provide cleaning services to those who wants.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-02">
            <div class="container">
                <h3 class="section-title">VALUES</h3>
                <div class="content">
                    <div class="image">
                        <img src="about/css/Logo.png" alt="">
                    </div>
                    <div class="values">
                        <h4 class="info-title">GOALS & MISSIONS</h4>
                        <p>Our goal is to become one of the top companies who offer and sell cleaning products & services,</p>
                        <p> we also want to expland abroad to offer them our services.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-03">
            <div class="container">
                <h3 class="faq-title">FAQs</h3>
                <div class="faq">
                    <div class="question">
                        <h4>What types of cleaning products do you sell?</h4>

                        <svg width="15" height="10" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecup="round"/>
                        </svg>
                    </div>
                    <div class="answer">
                        <p>We offer a wide range of cleaning products specifically designed for vehicles, including car shampoos, interior cleaners, glass cleaners, wax, tire shine, and more.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>Are your products safe for all vehicle surfaces?</h4>

                        <svg width="15" height="10" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecup="round"/>
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Yes, our products are formulated to be safe and effective on various vehicle surfaces such as paint, glass, plastic, and rubber.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>Do you offer any eco-friendly cleaning products?</h4>

                        <svg width="15" height="10" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecup="round"/>
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Yes, we have a selection of eco-friendly cleaning products that are biodegradable and environmentally responsible.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>Do you provide guidance on how to use your products effectively?</h4>

                        <svg width="15" height="10" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecup="round"/>
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Absolutely. We provide detailed usage instructions on our product labels and can offer additional guidance and tips upon request.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>Can I return or exchange products if I'm not satisfied?</h4>

                        <svg width="15" height="10" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecup="round"/>
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Yes, we have a satisfaction guarantee policy. If you're not happy with a product, you can return it within a specified period for a refund or exchange.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div id="footer">
                <p>ⓒ 2023 Hobby ni Hubby | All Rights Reserved</p>
            </div>
        </footer>
        <script>
            ScrollReveal({ 
                reset: true,
                distance: '60px',
                duration: 1800,
                delay: 400
            });
            ScrollReveal().reveal('.main-tittle, .section-title, .faq-title', { delay: 100, origin: 'left' });
            ScrollReveal().reveal('.sec-01 .image, .values', { delay: 100, origin: 'bottom' });
            ScrollReveal().reveal('.textbox', { delay: 100, origin: 'right' });
            ScrollReveal().reveal('.sec-02 .image, .question', { delay: 100, origin: 'top' });


            const faqs = document.querySelectorAll(".faq");

            faqs.forEach((faq) => {
                faq.addEventListener("click", () => {
                    faq.classList.toggle("active");
                    });
                }); 
        </script>
    </body>

</html>
