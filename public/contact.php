<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home | andsol interiors</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/draft.style.css">
    <link rel="stylesheet" href="css/draft.responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div class="body__wrap">
        <div class="body__header">
           
                <header>
                    <div class="header__brand">
                        <a href="index.php">
                            <img src="img/brand/andsol_interiors.jpeg" height="80px" alt="andsol interiors logo">
                        </a>
                    </div>
                    <!-- end header brand --> 
                    <div class="hamburger">
                            <a href=""><i class="fa fa-bars" aria-hidden="true"></i></a>
                    </div>
                    <nav class="header__nav">
                       
                        <ul>
                            <li class="nav__list"><a href="index.php" class="nav__link">HOME</a></li>
                            <li class="nav__list"><a href="about.php" class="nav__link">ABOUT US</a></li>
                            <li class="nav__list"><a href="project.php" class="nav__link">PROJECTS</a></li>
                            <li class="nav__list"><a href="service.php" class="nav__link">SERVICES</a></li>
                            <li class="nav__list"><a href="contact.php" class="nav__link">CONTACT US</a></li>
                        </ul>
                    </nav>
                    <!-- end header nav  -->
                </header>
            
        </div>
        <!-- end body header -->

        <div class="body__banner">
            <div class="wrap__banner">
                <div class="banner__mobile">

                </div>
                <!-- end banner mobile -->
                <div class="banner__desktop">
                    <img src="img/banner/banner.jpg" alt="andsol interiors banner">
                </div>
                <!-- end desktop banner -->
            </div>
            <!-- end wrap banner -->
        </div>
        <!-- end body banner -->

        <div class="body__container">
            <main>
                <section class="section__offer py-5">
                    <div class="container">
                        <div class="wrap__header py-4">
                            <h2 class="section__header">
                                Contact us
                            </h2>
                        </div>
                        <!-- end wrap header -->
                        <div class="wrap__contact-section">
                            <div class="row px-3">
                                <article class="col-sm-4 py-4 contact__section-left text-light">
                                    <!-- <div class="article__header pb-4">
                                        <h4 class="section__sub-header">Contact details</h4>
                                    </div> -->
                                    <div class="article__body">
                                        <ul class="contact__details">
                                            <li class="pb-3">
                                                <div class="contact__details-icon">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                                </div>
                                                <div class="pl-3">
                                                    <span class="mb-2 d-block span__header">Our office address:</span>
                                                    <address class="">
                                                        6th cross, Yellenahalli main road, Akshayanagar,</br> near Karnataka bank, DLF Town, Bengaluru,</br> Karnataka 560114.
                                                    </address>
                                                </div>
                                            
                                            </li>
                                            <li class="pb-3">
                                                <div class="contact__details-icon">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </div>
                                                <div>
                                                    <span class="mb-2 d-block span__header">General enquiries:</span>
                                                    <a class="contact__details-link text-light" href="mailto:contact@andsolinteriors.com" target="_blank">contact@andsolinteriors.com</a>
                                                    <a class="contact__details-link text-light" href="mailto:andsolv2v@gmail.com" target="_blank">andsolv2v@gmail.com</a>
                                                </div>
                                                
                                            </li>
                                            <li class="pb-3">
                                                <div class="contact__details-icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                
                                                </div>
                                                <div class="">
                                                    <span class="mb-2 d-block span__header">Call us:</span>
                                                    <a class="contact__details-link text-light" class="" href="tel:9945869856" target="_blank">+91-9945869856</a>
                                                    <a class="contact__details-link text-light" class="" href="tel:9538832255" target="_blank">+91-9538832255</a>
                                                </div>
                                                
                                            </li>
                                            <li class="pb-3">
                                                <div class="contact__details-icon">
                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                </div>
                                                    <div class="">
                                                    <span class="mb-2 d-block span__header">Our timing:</span>
                                                    <span > Mon - Sun : 09:30 AM - 06:00 PM</span>
                                                    </div>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <article class="col-sm-8 py-4 contact__section-right">
                                    <!-- <div class="article__header">

                                        <h4 class="section__sub-header">send message us</h4>
                                    </div> -->
                                    <div class="article__body">
                                    <form class="row g-3" method="POST" action="">
                                        <div class="col-12 pt-3">
                                            <label for="inputName" class="form-label">Name</label>
                                            <i class="fa fa-user-o contact__form-icon" aria-hidden="true"></i>
                                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                                        </div>
                                        <div class="col-12 pt-3">
                                            <label for="inputEmail" class="form-label">Email</label>
                                            <i class="fa fa-envelope-o contact__form-icon" aria-hidden="true"></i>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                                        </div>
                                        <div class="col-12 pt-3">
                                            <label for="inputPhone" class="form-label">Phone number</label>
                                            <i class="fa fa-phone contact__form-icon" aria-hidden="true"></i>
                                            <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number" name="phone">
                                        </div>
                                        <div class="col-12 pt-4">
                                            <input type="submit" class="btn btn__primary" value="SEND MESSAGE">
                                        </div>
                                    </form>
                                    </div>
                                </article>
                            </div>
                        </div>
                        
                    </div>
                </section>
            </main>   
        </div>
        <!-- end body container -->
   
        <div class="body__footer">
            <footer>
                <div class="container">
                    <section class="section__footer">
                        <div class="row">
                            <article class="col-sm-4">
                                <header class="footer__article-header">
                                    <a href="index.php">
                                        <img src="img/brand/andsol_interiors.jpeg" height="80px" alt="andsol interiors logo">
                                    </a>
                                </header>
                                <!-- end footer article header -->
                                <div class="footer__article-body">
                                    <div class="footer__article-body-top">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, magnam!</p>
                                    </div>
                                    <!-- end footer artcle body top -->
                                    <div class="footer__article-body-bottom">
                                        <ul class="footer__social">
                                            <li class="footer__social-list">
                                                <a href="#" class="footer__social-link">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="footer__social-list">
                                            <a href="#" class="footer__social-link">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                            </li>
                                            <li class="footer__social-list">
                                                <a href="#" class="footer__social-link">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="footer__social-list">
                                                <a href="#" class="footer__social-link">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end footer article body bottom -->
                                </div>

                                <!-- end footer article body -->
                            </article>
                            <article class="col-sm-2">
                                <header class="footer__article-header">
                                    QUICK LINKS
                                </header>
                                <div>
                                    <ul class="footer__quick-links">
                                        <li class="footer__quick-links-list">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="footer__quick-links-list">
                                            <a href="about.php">About us</a>
                                        </li>
                                        <li class="footer__quick-links-list">
                                            <a href="service.php">Services</a>
                                        </li>
                                        <li class="footer__quick-links-list">
                                            <a href="contact.php">Contact us</a>
                                        </li>
                                        <li class="footer__quick-links-list">
                                            <a href="contact.php">FAQs</a>
                                        </li>
                                        <li class="footer__quick-links-list">
                                            <a href="contact.php">Site map</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="col-sm-2">
                                <header class="footer__article-header">
                                    PROJECTS
                                </header>
                                <div>
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                    </ul>
                                </div>
                            </article>
                            <article class="col-sm-4">
                                <header class="footer__article-header">
                                    GET IN TOUCH 
                                </header>
                                <div class="footer__article-body">
                                    <ul class="footer__contact">
                                        <li class="footer__contact-list">
                                            <div class="left__block">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                            <div class="right__block">
                                                <a class="right__block-phone" href="tel:9945869856" target="_blank">+91-9945869856</a>
                                                <a class="right__block-phone" href="tel:9538832255" target="_blank">+91-9538832255</a>
                                            </div>
                                        </li>
                                        <li class="footer__contact-list">
                                            <div class="left__block">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                            <div class="right__block">
                                                <a href="mailto:contact@andsolinteriors.com">contact@andsolinteriors.com</a>
                                                <a href="mailto:andsolv2v@gmail.com">andsolv2v@gmail.com</a>
                                            </div>
                                        </li>
                                        <li class="footer__contact-list">
                                            <div class="left__block">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                            <div class="right__block">
                                                <address>
                                                    6th cross, Yellenahalli main road, Akshayanagar,</br> near Karnataka bank, DLF Town, Bengaluru,</br> Karnataka 560114.
                                                </address>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </footer>
        </div>
        <!-- end body footer -->
   
    </div>
    <!-- end body wrap -->
   
   
       <!-- script -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script src="js/script.js"></script>
   </body>
   </html>