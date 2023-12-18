<!DOCTYPE html>
<html lang="en">

<?php 
    include("components/head.php");
    renderHead("SOWO");
?>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="SOWO logo" height="25">
                <!-- This logo is designed by using icons from "https://icons8.com/icons". -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-content"
                aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center nav-fs" id="nav-content">
                <ul class="navbar-nav ms-lg-5 mb-2 mb-lg-0 mt-md-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-mission">Our Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#steps">Steps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                </ul>
                <hr class="text-light">
                <div
                    class="d-flex align-items-center justify-content-around justify-content-sm-between gap-3 mb-2 ms-auto mt-md-2">
                    <a href="#" class="text-light text-decoration-none" id="signup-btn" data-bs-toggle="modal"
                        data-bs-target="#signupModal">
                        <i class="bi bi-pen"></i>
                        Sign Up
                    </a>
                    <a href="#" class="text-light text-decoration-none" id="login-btn" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        <i class="bi bi-box-arrow-in-right"></i>
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" class="scrollspy-example"
        tabindex="0">
        <section id="hero">
            <div class="card position-relative">
                <img src="assets/images/hero-bg-sm.jpg" class="card-img object-fit-cover d-md-none mt-5"
                    alt="Hero image">
                <img src="assets/images/hero-bg.jpg" class="card-img object-fit-cover d-none d-md-block"
                    alt="Hero image">
                <div class="card-img-overlay text-white d-grid justify-content-center align-content-center text-center mt-5 mt-md-0 z-1"
                    id="hero-content">
                    <h1 class="card-title display-5">Welcome To SOWO</h1>
                    <p class="card-text lead">Are you ready to try?</p>
                    <button type="button" id="get-started-btn"
                        class="btn btn-light text-primary mx-auto w-50 rounded-pill mt-2 mt-md-3" data-bs-toggle="modal"
                        data-bs-target="#signupModal">Get
                        Started</button>
                    <?php
                        include("components/signup-form.php");
                    ?>
                    <?php
                        include("components/login-form.php");
                    ?>
                </div>
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-25"></div>
            </div>
        </section>
        <section id="about-us" class="p-2 py-md-4">
            <div class="container">
                <h2 class="text-center display-6 mb-4">About Us</h2>
                <div class="row justify-content-between align-items-center g-3 g-md-5">
                    <div class="col-md-6 order-last order-md-first">
                        <p class="lead"><i class="bi bi-check-square-fill pe-2 text-primary"></i>
                            SOWO is the acronym of "Suggest One day WorkOut".</p>
                        <p class="lead"><i class="bi bi-check-square-fill pe-2 text-primary"></i>
                            Its purpose is to help daily lives of Myanmar citizens.
                        </p>
                        <p class="lead"><i class="bi bi-check-square-fill pe-2 text-primary"></i>
                            It allows us view various kinds of Myanmar daily foods and their calories' amount
                            respectively.</p>
                        <p class="lead"><i class="bi bi-check-square-fill pe-2 text-primary"></i>
                            Moreover, it calculates how long we need to do exercises to keep our lives healthy.</p>
                    </div>
                    <div class="col-md-6 order-first order-md-last">
                        <img src="assets/images/about-us-img.jpg" alt="About us image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="our-mission" class="p-2 py-md-4">
            <div class="container">
                <h2 class="text-center display-6 mb-4">Our Mission</h2>
                <div class="row justify-content-between align-items-center g-3 g-md-5">
                    <div class="col-md-6 order-last">
                        <p class="lead-lg text-center">We always find out what our users really need!</p>
                        <p class="lead"><i class="bi bi-check-square-fill pe-2 text-primary"></i>
                            To calculate how many calories you need to burn and how long you need to do exercises when
                            you've gained more than the calories your body needs.</p>
                        <p class="lead"><i class="bi bi-check-square-fill pe-2 text-primary"></i>
                            To realize how many calories you've gained from eating, how many calories you need to burn
                            if the calories you've gained are more than you actually need and how long you need to do
                            exercises to get a healthy life.
                        </p>
                    </div>
                    <div class="col-md-6 order-first">
                        <img src="assets/images/our-mission.jpg" alt="Our mission image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="faqs" class="p-2 py-md-4">
            <div class="container">
                <h2 class="text-center display-6 mb-4">FAQs</h2>
                <div class="accordion accordion-flush" id="faqs-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lead" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                How does it work?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#faqs-accordion">
                            <div class="accordion-body lead">
                                It calculates how many calories you need to burn and how long you need to do exercises
                                when you've gained more than the calories your body needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lead" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                How do I use SOWO?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body lead">
                                First, you need to sign up and login. Second, please select the items what you've eaten
                                today.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lead" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                How do SOWO help me?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body lead">
                                You can click "Add to SOWO" by choosing the items you've eaten today. After choosing
                                each item, it will navigate to "SOWO" page. In "SOWO" page, if the calories you've
                                gained from eating
                                today are more than your body needs, it will suggest you to do exercises with different
                                time limits. You can choose one of these exercise as you wish.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="steps" class="p-2 py-md-4 bg-secondary-subtle">
            <div class="container">
                <h2 class="text-center display-6 mb-4">5 Steps to be healthy</h2>
                <div class="row text-center g-4">
                    <div class="col-sm-6 col-md-4">
                        <i class="bi bi-pen display-6"></i>
                        <h5 class="fw-semibold mt-2 text-uppercase">Sign Up</h5>
                        <p class="lead mt-n1">Fill the information in sign up form.</p>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <i class="bi bi-box-arrow-in-right display-6"></i>
                        <h5 class="fw-semibold mt-2 text-uppercase">Login</h5>
                        <p class="lead mt-n1">Fill the information in login form.</p>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <i class="bi bi-check2-square display-6"></i>
                        <h5 class="fw-semibold mt-2 text-uppercase">Select</h5>
                        <p class="lead mt-n1">Select food items.</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="bi bi-calculator display-6"></i>
                        <h5 class="fw-semibold mt-2 text-uppercase">Do SOWO</h5>
                        <p class="lead mt-n1">Suggest One day WorkOut.</p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <i class="bi bi-person-walking display-6"></i>
                        <h5 class="fw-semibold mt-2 text-uppercase">Do exercise</h5>
                        <p class="lead mt-n1">Let's be healthy.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-us">
            <div class="card position-relative">
                <img src="assets/images/contact-us-sm.jpg" class="card-img object-fit-cover d-sm-none"
                    alt="Contact us image">
                <img src="assets/images/contact-us-img.jpg" class="card-img object-fit-cover d-none d-sm-block"
                    alt="Contact us image">
                <div class="card-img-overlay z-1">
                    <div class="container">
                        <div class="row d-flex justify-content-between align-content-lg-center vh-100 g-5">
                            <div class="col-md-6 d-none d-md-block">
                                <p class="lead-lg text-light">Leave your recommendation...</p>
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea" style="height: 100px"></textarea>
                                        <label for="floatingTextarea">Leave a message...</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary text-light">Send Message</button>
                                </div>
                            </div>
                            <div class="col-md-6 text-light">
                                <h2 class="display-6 mb-4">Contact Us</h2>
                                <p class="lead">
                                    <i class="bi bi-telephone me-2"></i> 09-123456789 , 09-876543210
                                </p>
                                <p class="lead">
                                    <i class="bi bi-envelope me-3"></i>sowogroup@gmail.com
                                </p>
                                <p class="lead">
                                    <i class="bi bi-geo-alt me-3"></i>No.20 , AAA Street, BBB Quarter, CCC Township,
                                    DDD Division
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-25 z-n1"></div>
                </div>
            </div>
            <div class="d-md-none p-2 bg-secondary-subtle">
                <div class="container">
                    <p class="lead-lg text-md-light">Leave your recommendation...</p>
                    <div class="mb-3">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingContactEmail"
                                placeholder="name@example.com">
                            <label for="floatingContactEmail">Email address</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea">Leave a message...</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary text-light">Send Message</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p class="text-center pt-3 lead">
                <?php echo date("Y"); ?> &copy; All rights reserved by SOWO.
            </p>
        </div>
    </footer>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/removeZindex.js"></script>
</body>

</html>