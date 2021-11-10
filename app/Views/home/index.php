<?= $this->extend('home/templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To The Esthetic Hotel</div>
        <div class="masthead-heading text-uppercase">Spend Quality Holidays With Us</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">The Best Quality Of Comfortable.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-bed fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Comfortable</h4>
                <p class="text-muted">Providing convenience for you by providing full shuttle service, city trips to full 5-star based room facilities and free 24-hour service</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-gem fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Luxury Design</h4>
                <p class="text-muted">Presenting luxury room facilities with the size of a presidential room, a gold-plated bathtub, a bar room to a room with a sunset view accompanied by a balcony and lounge chairs with comfortable technology that has a 5-star comfort certificate</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-image fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Aesthetic View </h4>
                <p class="text-muted">Located between the hills and the ocean centered facing the sunset so you can see the MotoGP race which is facing directly to the Mandalika International Street Circuit which is located not far from the hotel.</p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Room Design</h2>
            <h3 class="section-subheading text-muted">The Luxury And Comfortable.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>/agency/img/portfolio/bisnis.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Suit Room</div>
                        <div class="portfolio-caption-subheading text-muted">Luxury</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>/agency/img/portfolio/patungan.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Premium Room</div>
                        <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>/agency/img/portfolio/biasa.jpeg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Esthetic Room</div>
                        <div class="portfolio-caption-subheading text-muted">Identity</div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">The Support Team Of Mandalika International Street Circuit.</h3>
        </div>
    </div>
</section>
<!-- Clients-->
<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?= base_url(); ?>/agency/img/logos/motogp.png" alt="..." /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?= base_url(); ?>/agency/img/logos/fim.png" alt="..." /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?= base_url(); ?>/agency/img/logos/wsbk.svg" alt="..." /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?= base_url(); ?>/agency/img/logos/imi.png" alt="..." /></a>
            </div>
        </div>
    </div>
</div>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Contact for information booking and all question.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/home/message" method="post">
            <?= csrf_field(); ?>
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" name="name" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" name="email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" name="phone" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required" name="message"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
        </form>
    </div>
</section>

<?= $this->endSection(); ?>