
        <?php
           $page_title = "Get in touch with Andsol Interiors for the best designing ideas.";
           $page_meta_key = "best interior design, best home interior design, best house interior design, modular kitchen designs, home decor design, small modular kitchen, best modular kitchen, latest modular kitchen designs, budget modular kitchen, best home designers, best interior for living room, best interior design for 3bhk flat, best indian interior designer, modern interior designers, living room best design, interior bedroom wall design, best australian interior designers, best budget interior design, ideal interior design for small houses, fallcelling design, dining hall designs, arch design for dining hall, hall partition designs between living dining";
           $page_meta_description = "Contact us for the best and world-class interior services for your dream home at your location and get free 3D design for each booking.";
            include("../private/required/header.php");
        
        ?>

        <div class="body__banner half__banner">
            <div class="wrap__banner">
                <div class="banner__contact-us">
                    <!-- <img src="img/banner/banner.jpg" alt="andsol interiors banner"> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.574438519333!2d77.51275341482096!3d12.87074029092206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae4155ab456ddb%3A0x8595cd3c481724e0!2sAndsol%20Interiors!5e0!3m2!1sen!2sin!4v1613208840404!5m2!1sen!2sin" class="w-100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                                                        #2221, 8th cross, Park street, BSK 6th Stage, 4th Block, Bangalore-506109   
                                                    </address>
                                                </div>
                                            
                                            </li>
                                            <li class="pb-3">
                                                <div class="contact__details-icon">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </div>
                                                <div>
                                                    <span class="mb-2 d-block span__header">General enquiries:</span>
                                                    <a class="contact__details-link " href="mailto:contact@andsolinteriors.com" target="_blank">contact@andsolinteriors.com</a>
                                                    <a class="contact__details-link " href="mailto:andsolv2v@gmail.com" target="_blank">andsolv2v@gmail.com</a>
                                                    <!-- <a class="contact__details-link " href="mailto:engrs.srbuildcon@gmail.com" target="_blank">engrs.srbuildcon@gmail.com</a> -->
                                                </div>
                                                
                                            </li>
                                            <li class="pb-3">
                                                <div class="contact__details-icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                
                                                </div>
                                                <div class="">
                                                    <span class="mb-2 d-block span__header">Call us:</span>
                                                    <!-- <a class="contact__details-link" href="tel:9538832255" target="_blank">+91-9538832255</a>
                                                    <a class="contact__details-link" href="tel:9945869856" target="_blank">+91-9945869856</a> -->
                                                    <a class="contact__details-link" href="tel:8197837643" target="_blank">+91-8197837643</a>
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
                                    <form class="row g-3 px-5" method="POST" action="contact_form.php">
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
                                        <label for="inputComment" class="form-label d-block">Comment</label>
                                            <i class="fa fa-commenting-o contact__form-icon pt-2" aria-hidden="true"></i>
                                            <textarea name="comment" class="form-control" id="inputComment" placeholder="Your comment"></textarea>
                                        </div>
                                        <div class="col-12 pt-4">
                                            <input type="submit" class="hbtn hb-fill-middle hpad2 hbor1" name="contact" value="SEND MESSAGE">
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
   
      
        <?php
            include("../private/required/footer.php");
        
        ?>