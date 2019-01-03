<!DOCTYPE html>
<html>
<head>
    <title>Find your Router</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="public/css/custom-style.css">
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="public/font-awesome/css/font-awesome.min.css">
<body>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
    <div class="container">
        <a class="navbar-brand" href="index.html"><strong>Find your Router</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href=".">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#routerfinder">Find your router</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/pdf/guide.pdf">Guide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Intro Seven -->
<section class="intro carousel slide bg-overlay-light h-auto" id="carouselExampleCaptions">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" alt="First slide" src="public/img/intro-bg-01.jpg">
            <div class="carousel-caption ">
                <h2 class="display-4 text-white mb-2 mt-4">Are you looking for a Router?</h2>
                <p class="text-white mb-3 px-5 lead">We help you to find the best solution for your home or
                    enterprise. </p>
                <!-- <a href="#" class="btn btn-primary btn-capsul px-4 py-2">Explore More</a> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" alt="First slide" src="public/img/intro-bg-02.jpg">
            <div class="carousel-caption ">
                <h2 class="display-4 text-white mb-2 mt-4">You select the features and we select the best router for
                    you.</h2>
                <p class="text-white mb-3 px-5 lead">Our system is able to find between a lot of routers according to
                    your needs.</p>
                <!-- <a href="#" class="btn btn-primary btn-capsul px-4 py-2">Explore More</a> -->
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>

<!-- Info block 1 -->
<section class="info-section" id="routerfinder">
    <div class="container">
        <div class="head-box text-center mb-5">
            <h2>Find your router</h2>
            <h6 class="text-underline-primary">Take the survey</h6>
        </div>
        <!-- Form for entering router features -->
        <form id="router-form">
            <div class="form-group">
                <label for="price">Maximum price in USD</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#priceModal">
                    More info
                </button>
                <input type="number" class="form-control" id="max-price">
            </div>
            <div class="form-group">
                <label for="price">Number of bands</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#bandsModal">
                    More info
                </button>
                <select class="form-control" id="bandsSelect">
                    <option>1 (2.4 Ghz)</option>
                    <option>2 (2.4 GHz + 5 Ghz)</option>
                    <option>3 (2.5 Ghz + 2 * 5 GHz)</option>
                </select>
            </div>


        </form>
    </div>
</section>

<!-- Modals -->
<section id="modals">
    <!-- Price Modal -->
    <div class="modal fade" id="priceModal" tabindex="-1" role="dialog"
         aria-labelledby="priceModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="priceModalLabel">Maximum price</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Here you define the maximum price you are willing to pay for your new router. All the
                        suggested routers will cost that or less. Take into account that if you set a price
                        that is too small, you may not find any router fitting your needs.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bands Modal -->
    <div class="modal fade" id="bandsModal" tabindex="-1" role="dialog"
         aria-labelledby="bandsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bandsModalLabel">Minimum number of bands</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>TODO: Explain briefly what are bands. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- team style 1 -->
<section class="team-section py-5" id="team">
    <div class="container">
        <div class="row mb-5">
            <div class="head-box text-center mb-5 col-md-12">
                <h2>Meet Our Team</h2>
                <h6 class="text-underline-primary mb-5">Members of the group</h6>
            </div>
            <div class="col-md-4 mb-md-0 mb-sm-4">
                <div class="member-box anim-lf t-bottom">
                    <img class="img-fluid" src="public/img/lazaro.jpg" alt="">
                    <div class="overlay-content">
                        <h3 class="text-white ml-3 my-0">Lázaro Amor</h3>
                        <p class="text-white ml-3 mb-3">Developer</p>
                        <span class="socail-l ml-3 mb-3">
			            <!--<a href="#" class="mr-2"><i class="fa fa-facebook box-circle-solid"></i></a>
						<a href="#" class="mr-2"><i class="fa fa-twitter box-circle-solid"></i></a>
						<a href="#"><i class="fa fa-dribbble box-circle-solid"></i></a>-->
			          </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-sm-4">
                <div class="member-box anim-lf t-bottom">
                    <img class="img-fluid" src="public/img/angel.jpg" alt="">
                    <div class="overlay-content">
                        <h3 class="text-white ml-3 my-0">Ángel del Castillo</h3>
                        <p class="text-white ml-3 mb-3">Developer</p>
                        <span class="socail-l ml-3 mb-3">
			            <!--<a href="#" class="mr-2"><i class="fa fa-facebook box-circle-solid"></i></a>
						<a href="#" class="mr-2"><i class="fa fa-twitter box-circle-solid"></i></a>
						<a href="#"><i class="fa fa-dribbble box-circle-solid"></i></a>-->
			          </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-sm-4">
                <div class="member-box anim-lf t-bottom">
                    <img class="img-fluid" src="public/img/thomas.jpg" alt="">
                    <div class="overlay-content">
                        <h3 class="text-white ml-3 my-0">Thomas Bobillot</h3>
                        <p class="text-white ml-3 mb-3">Developer</p>
                        <span class="socail-l ml-3 mb-3">
			            <!-- <a href="#" class="mr-2"><i class="fa fa-facebook box-circle-solid"></i></a>
						<a href="#" class="mr-2"><i class="fa fa-twitter box-circle-solid"></i></a>
						<a href="#"><i class="fa fa-dribbble box-circle-solid"></i></a>-->
			          </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer Block 1 -->
<section class="footer-section bg-dark pt-5">
    <div class="container pb-3">
        <div class="row">
            <div class="col-md-3">
                <div class="about-box text-white">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">About</a></li>
                        <li><a href="#" class="text-white">Products</a></li>
                        <li><a href="#" class="text-white">Services</a></li>
                        <li><a href="#" class="text-white">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-box text-white">
                    <h5 class="mb-3">Legal Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms and Conditions</a></li>
                        <li><a href="#" class="text-white">Custom Link 1</a></li>
                        <li><a href="#" class="text-white">Custom Link 2</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-box text-white">
                            <h5 class="mb-3">About Company</h5>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-white">Subscribe Now</h5>
                        <div class="input-group">
                            <input class="form-control" aria-label="Amount (to the nearest dollar)" type="text">
                            <span class="input-group-addon">Subscribe</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-white">
                            Share the Love
                        </h5>
                        <ul class="social-box social-circle">
                            <li><a href="#" class="fa-box" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="tw-box" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="go-box" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="ld-box" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="rss-box" title="Rss"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-footer bg-primary py-2 mt-4">
        <div class="container text-center text-light">
            &copy; Security of Information Systems.</a> <span id="year"></span>. Created by Lázaro Amor with <i
                    class="fa fa-heart"></i>
        </div>
    </div>
</section>

<!-- Javascript Files  -->
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/core.js"></script>
</body>
</html>
