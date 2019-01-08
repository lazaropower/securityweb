<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
    <div class="container">
        <a class="navbar-brand" href="{url}index.html"><strong>Find your Router</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{url}general/index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#routerfinder">Find your router</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{url}public/pdf/guide.pdf">Guide</a>
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
            <img class="d-block img-fluid" alt="First slide" src="{url}public/img/intro-bg-01.jpg">
            <div class="carousel-caption ">
                <h2 class="display-4 text-white mb-2 mt-4">Are you looking for a Router?</h2>
                <p class="text-white mb-3 px-5 lead">We help you to find the best solution for your home or
                    enterprise. </p>
                <!-- <a href="#" class="btn btn-primary btn-capsul px-4 py-2">Explore More</a> -->
            </div>
        </div>
        <div class="carousel-item">{url}
            <img class="d-block img-fluid" alt="First slide" src="{url}public/img/intro-bg-02.jpg">
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

<!-- THE FORM -->
<section class="info-section" id="routerfinder">
    <div class="container">
        <div class="head-box text-center mb-5">
            <h2>Find your router</h2>
            <h6 class="text-underline-primary">Take the survey</h6>
        </div>
        <!-- Form for entering router features -->
        <form id="router-form">

            <!-- Price (number input. TODO: convert to sliding control, elegant and no need to check the format) -->
            <div class="form-group">
                <label for="price">Maximum price in USD</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#priceModal">
                    More info
                </button>
                <input type="number" class="form-control" id="max-price">
            </div>

            <!-- Bands (3 options) -->
            <div class="form-group">
                <label for="bands">Number of bands</label>
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

            <!-- Minimum number of antennas -->
            <div class="form-group">
                <label for="antennas">Minimum number of antennas</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#antennasModal">
                    More info
                </button>
                <select class="form-control" id="antennasSelect">
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <!-- Minimum number of LAN ports -->
            <div class="form-group">
                <label for="ports">Minimum number of LAN ports</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#portsModal">
                    More info
                </button>
                <select class="form-control" id="portsSelect">
                    <option>3</option>
                    <option>4</option>
                    <option>6</option>
                    <option>8</option>
                </select>
            </div>

            <!-- MAC ACLs (yes/no) -->
            <div class="form-group">
                <label for="ports">MAC addresses access control list</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#MacAclModal">
                    More info
                </button>
                <!-- Yes/no checks -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MacAclRadios" id="MacAclRadios1" value="yes"
                           checked>
                    <label class="form-check-label" for="MacAclRadios1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MacAclRadios" id="MacAclRadios2" value="no">
                    <label class="form-check-label" for="MacAclRadios2">
                        No
                    </label>
                </div>
            </div>

            <!-- MU-MIMO (yes/no) -->
            <div class="form-group">
                <label for="ports">MU-MIMO</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#MuMimoModal">
                    More info
                </button>
                <!-- Yes/no checks -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MuMimoRadios" id="MuMimoRadios1" value="yes"
                           checked>
                    <label class="form-check-label" for="MuMimoRadios1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MuMimoRadios" id="MuMimoRadios2" value="no">
                    <label class="form-check-label" for="MuMimoRadios2">
                        No
                    </label>
                </div>
            </div>

            <!-- RADIUS (yes/no) -->
            <div class="form-group">
                <label for="ports">RADIUS server</label>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#RadiusModal">
                    More info
                </button>
                <!-- Yes/no checks -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="RadiusRadios" id="RadiusRadios1" value="yes"
                           checked>
                    <label class="form-check-label" for="RadiusRadios1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="RadiusRadios" id="RadiusRadios2" value="no">
                    <label class="form-check-label" for="RadiusRadios2">
                        No
                    </label>
                </div>
            </div>

        </form>
    </div>
</section>
<!-- ------- -->
<!-- Modals (what appears after clicking -->
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
                    <img class="img-fluid" src="{url}public/img/lazaro.jpg" alt="">
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
                    <img class="img-fluid" src="{url}public/img/angel.jpg" alt="">
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
                    <img class="img-fluid" src="{url}public/img/thomas.jpg" alt="">
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