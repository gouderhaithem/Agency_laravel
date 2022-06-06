<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Home_Page.css">
    <title>Homepage</title>
</head>
<body class="body" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

<!-- NAVBAR -->
<div class="big">

    <nav class="navbar  navbar-expand-lg sticky-top py-3 sticky-top navbar-light">
        <div class="container">
            <a class="navbar-brand" href="Home_Page.html">
                <p class="text-black titre"> AgencyTech <span class="point">.</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link me-3" id="nav-link" href="Home_Page.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" id="nav-link" href="{{ url('/Add_Announce_Page') }}">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#" id="nav-link">Discussions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="Profile_Page.html" id="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#search-input" id="nav-link">Search</a>
                    </li>


                    <div class="input-group">

                        <div class="form-outline">
                            <input id="search-input" type="search" id="form1" class="form-control" placeholder="Search Here" />
                        </div>

                    </div>
                </ul>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

            </div>
        </div>
    </nav>

    <!-- NAVBAR -->
    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center page-acceuil">
        <div class="container ">

            <div class="row ">

                <div class="cd-intro-content col-lg-7 mx-auto text-center bouncy paragraph-acceuil">
                    <h1 class="display-5 tittle2 ">You Look For an Appartement, Studio or Ground... </h1>
                    <p class="Right-website">You're In The Right Website</p>
                    <button class="btn btn-primary my-1 main__btn slide1 cd-btn main_action" id="button1">Discover Now<i class="fa-solid fa-angle-right" style="margin-left: 6%;margin-right: 3%;  font-size: 25px ;"></i></a></button>

                </div>

            </div>


        </div>


    </div>

</div>

<!-- HERO -->
<!-- LIST-->
<div class="state ">
    <h1 class="featured-properties ">Start Investing In Real State </h1>
    <h6 class="text-primary Categories "><i class="fa-solid fa-rectangle-list contact-icon "></i>Catégories</h6>
</div>
<div class="list " id="list ">
    <div class="child1 "><a class="child1-link " href="Appartement_Page.html "><i class="fa-solid fa-building "></i>Appartements</a> </div>
    <div class="child1 "><a class="child1-link " href="Grounds_Page.html "><i class="fa-solid fa-map "></i>Grounds</a></div>

    <div class="child1 "><a class="child1-link " href="Garages_Page.html "><i class="fa-solid fa-warehouse "></i>Garages</a></div>
    <div class="child1 "><a class="child1-link " href="Houses_Page.html "><i class="fa-solid fa-house "></i>Houses</a> </div>
    <div class="child1 "><a class="child1-link " href="Stores_Pages.html "><i class="fa-solid fa-store "></i>Stores</a></div>
    <div class="child1 "><a class="child1-link " href=" "><i class='fas fa-th' style="margin-right: 4%; color:#0d6efd; "></i>Other</a></div>

</div>
<!-- LIST-->
<!-- Featured Propreties-->

<section class="section1 " id="section1 ">
    <div class="container for-margin-responsive ">

        <div class="row ">

            <div class="col-md-8 mx-auto text-center featured-tittles ">

                <h6 class="text-primary properties ">Properties</h6>
                <h1 class="featured-properties ">Featured Properties</h1>
                <p>Here You Will Find The More Recents Houses Annonces</p>
            </div>
        </div>

        <div class="cards ">
            @foreach($announces as $announce)
            <div class="card shadow p-3 mb-5 bg-body rounded card-- " data-aos="fade-down" data-aos-duration="1000" style="width: 18rem; ">
                <img src="images/card-new.jpg " class="card-img-top " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title title-card ">{{$announce['title']}}</h5>
                    <p class="card-text description ">{{$announce['price']}}DA .  {{$announce['surface']}}m*m</p>
                    <a href="{{ url('/announce_details') }}" class="btn btn-primary see-more" id="button2" style="width: 55%; "><i class="fa-solid fa-circle-info "></i>See More</a>
                </div>
            </div>
            @endforeach
            </div>



            <a href="" class="view">View All<box-icon name='right-arrow-alt'></box-icon></a>
        </div>


</section>
<!-- Featured Propreties-->
<!-- Mobile-App-->
<div class="mobile-app " style="background-color: #f5f5f5;">
    <div class="mobile-app-announce">
        <p class="text-primary properties ">Get It Now For Free!</p>
        <h1 class="featured-properties " style="width: 80%;">Our Mobile Version Is Available Now </h1>
        <div class="bouttons-play-app">
            <div data-aos="flip-left" data-aos-duration="700"> <button class="buttons-store"><img src="https://img.icons8.com/fluency/26/000000/google-play.png "class="stores " />Google Play</button></div>
            <div data-aos="flip-right" data-aos-duration="700"> <button class="buttons-store1 "><i class='fab fa-apple stores' style="font-size: 26px; "></i> App Store</button></div>
        </div>
    </div>
    <div class="mobile-app-photo " data-aos="fade-left" data-aos-duration="1000">
        <img src="images/Mobile2.jpg " alt=" " class="mobile-img ">
    </div>


</div>

<!-- Mobile-App-->
<!-- Divers-->
<section class="section2 ">
    <div class="row ">

        <div class="col-md-8 mx-auto text-center ">

            <h6 class="text-primary properties ">Popular</h6>
            <h1 class="featured-properties ">Popular Annonces</h1>
            <p>Here You Will Find Most Popular Annoonces</p>
        </div>
        <div class="cards2" style=" padding-left:4%;">
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0 " style="max-width: 540px;" data-aos="fade-right" data-aos-duration="1500">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="images/divers1.jpg " class="img-fluid rounded-start divers-images " alt="... ">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body ">
                            <h5 class="card-title title-divers ">Apparetement In New York 245m²</h5>
                            <p class="card-text ">New York</p>
                            <p class="card-text "><small class="text-muted ">Last updated  3h Ago</small></p>
                            <a href="Announce_Page.html " class="btn btn-primary " id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover "></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0 " style="max-width: 540px; " data-aos="fade-left" data-aos-duration="1500">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="images/divers2.jpg " class="img-fluid rounded-start divers-images " alt="... ">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body ">
                            <h5 class="card-title title-divers ">Studio 115m²</h5>
                            <p class="card-text ">Calefornia</p>
                            <p class="card-text "><small class="text-muted ">3d Ago</small></p>
                            <a href="Announce_Page.html " class="btn btn-primary " id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover " "></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0" style="max-width: 540px;" data-aos="fade-right" data-aos-duration="1500">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/divers3.jpg" class="img-fluid rounded-start divers-images" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title title-divers">deposit 300m²</h5>
                            <p class="card-text">Los Angels</p>
                            <p class="card-text"><small class="text-muted">2 weeks Ago</small></p>
                            <a href="Announce_Page.html" class="btn btn-primary" id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover" " ></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0" style="max-width: 540px;" data-aos="fade-left" data-aos-duration="1500">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/divers4.jpg" class="img-fluid rounded-start divers-images" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title title-divers">Texas Modern Villa</h5>
                            <p class="card-text">Los Angels
                            </p>
                            <p class="card-text"><small class="text-muted">6d Ago</small></p>
                            <a href="Announce_Page.html" class="btn btn-primary" id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover" " ></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0" style="max-width: 540px;" data-aos="fade-right" data-aos-duration="1500">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/divers1.jpg" class="img-fluid rounded-start divers-images" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title title-divers">Apparetement In New York 245m²</h5>
                            <p class="card-text">New York</p>
                            <p class="card-text"><small class="text-muted">Last updated  3h Ago</small></p>
                            <a href="Announce_Page.html" class="btn btn-primary" id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover" " ></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0" style="max-width: 540px;" data-aos="fade-left" data-aos-duration="1500">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/divers2.jpg" class="img-fluid rounded-start divers-images" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title title-divers">Studio 115m²</h5>
                            <p class="card-text">Calefornia</p>
                            <p class="card-text"><small class="text-muted">3d Ago</small></p>
                            <a href="Announce_Page.html" class="btn btn-primary" id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover" " ></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0" style="max-width: 540px;" data-aos="fade-right" data-aos-duration="1500">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/divers3.jpg" class="img-fluid rounded-start divers-images" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title title-divers">deposit 300m²</h5>
                            <p class="card-text">Los Angels</p>
                            <p class="card-text"><small class="text-muted">2 weeks Ago</small></p>
                            <a href="Announce_Page.html" class="btn btn-primary" id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover" " ></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded card0" style="max-width: 540px;" data-aos="fade-left" data-aos-duration="1500">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/divers4.jpg" class="img-fluid rounded-start divers-images" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title title-divers">Texas Modern Villa</h5>
                            <p class="card-text">Los Angels
                            </p>
                            <p class="card-text"><small class="text-muted">6d Ago</small></p>
                            <a href="Announce_Page.html" class="btn btn-primary " id="button2" style="width: 40%; "><i class="fa-solid fa-circle-info for-hover" " ></i>Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--some-grounds-->
<section class="section-ta3-some-grounds">
    <div class="col-md-8 mx-auto text-center tittles-some-grounds">

        <h6 class="text-primary properties">Grounds</h6>
        <h1 class="featured-properties">Popular Grounds Annonces</h1>
        <p>Here You Will Find Most Grounds Popular Annoonces</p>
    </div>
    <div class="container-fluid big-div" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="row">
            <div class="col-sm-12">
                <div id="inam" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container" style="margin-left: 9%; margin-top: 3%;">
                                <div class="row ">
                                    <div class="col-sm-12 col-lg-4 ">
                                        <div class="card shadow p-3 mb-5 bg-body rounded card-- " style="width: 18rem;">
                                            <img src="images/ground1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title title-card">Texas Modern Villa</h5>
                                                <p class="card-text description">12bds . 1ba . 3,21sqft</p>
                                                <a href="Announce_Page.html" class="btn btn-primary" id="button2"><i class="fa-solid fa-circle-info for-hover" " ></i>See More</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card shadow p-3 mb-5 bg-body rounded card-- " style="width: 18rem;">
                                            <img src="images/ground1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title title-card">Texas Modern Villa</h5>
                                                <p class="card-text description">12bds . 1ba . 3,21sqft</p>
                                                <a href="Announce_Page.html" class="btn btn-primary" id="button2"><i class="fa-solid fa-circle-info for-hover" " ></i>See More</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card shadow p-3 mb-5 bg-body rounded card-- " style="width: 18rem;">
                                            <img src="images/ground1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title title-card">Texas Modern Villa</h5>
                                                <p class="card-text description">12bds . 1ba . 3,21sqft</p>
                                                <a href="Announce_Page.html" class="btn btn-primary" id="button2"><i class="fa-solid fa-circle-info for-hover" " ></i>See More</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="carousel-item">
                            <div class="container" style="margin-left: 9%; margin-top: 3%;">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card shadow p-3 mb-5 bg-body rounded card-- " style="width: 18rem;">
                                            <img src="images/ground1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title title-card">Texas Modern Villa</h5>
                                                <p class="card-text description">12bds . 1ba . 3,21sqft</p>
                                                <a href="Announce_Page.html" class="btn btn-primary" id="button2"><i class="fa-solid fa-circle-info for-hover" " ></i>See More</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card shadow p-3 mb-5 bg-body rounded card-- " style="width: 18rem;">
                                            <img src="images/ground1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title title-card">Texas Modern Villa</h5>
                                                <p class="card-text description">12bds . 1ba . 3,21sqft</p>
                                                <a href="Announce_Page.html" class="btn btn-primary" id="button2"><i class="fa-solid fa-circle-info for-hover" " ></i>See More</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card shadow p-3 mb-5 bg-body rounded card-- " style="width: 18rem;">
                                            <img src="images/ground1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title title-card">Texas Modern Villa</h5>
                                                <p class="card-text description">12bds . 1ba . 3,21sqft</p>
                                                <a href="Announce_Page.html" class="btn btn-primary" id="button2"><i class="fa-solid fa-circle-info for-hover" " ></i>See More</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>
                    <a href="#inam" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-primary" style="width: 32px; height: 30px; border-radius: 15px;"></span>
                    </a>
                    <a href="#inam" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon bg-primary " style="width: 32px; height: 30px; border-radius: 15px;"></span>
                    </a>

                </div>

            </div>

        </div>

        <a href="User_Announces.html" class="view">View All My Announces<box-icon name='right-arrow-alt'></box-icon></a>


    </div>
</section>
<!-- some-grounds-->



<!-- footer-->
<section class="footer ">
    <div class="footer-father ">
        <div class="infos " data-aos="fade-up" data-aos-duration="1000">
            <h1 class="titre1 ">AgencyTech<span class="point2 ">.</span></h1>
            <br>
            <p>Home | Blog | Pricing | About | Faq | Contact</p>

        </div>
        <div class="contact-coordonnes " data-aos="fade-up" data-aos-duration="1500">
            <h1 class="state "> Contact Us On :</h1><br>
            <a href="https://www.google.com/intl/fr/gmail/about/ " class="coordonnes "><i class="fa-solid fa-envelope contact-icon " style="color: black;"></i>Agency.Tech@Gmail.com</a><br>
            <a href=" " class="coordonnes "><i class="fa-solid fa-phone contact-icon " style="color: black;"></i>66-54-78-91</a><br>
            <a href="https://www.google.com/maps/place/Universite+Constantine+2+Abdelhamid+Mehri/@36.2460536,6.5678176,17z/data=!3m1!4b1!4m5!3m4!1s0x12f1655aaa0d63ab:0xa80cc72a9da3c77b!8m2!3d36.2460493!4d6.5700063 " class="coordonnes
                                                "><i class="fa-solid fa-location-dot contact-icon " style="color: black;"></i>Univ Constantine2 Nouvelle Ville -Constantine-Algrie</a>
        </div>
        <div class="About " data-aos="fade-up" data-aos-duration="2000">
            <h1 class=" state "> About The Company</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est libero, velit laborum nostrum, sapiente animi iure corrupti, cum iste inventore provident. Atque consectetur earum, modi delectus vel quibusdam ducimus cumque.</p>
            <div class="wrapper">
                <div class="icon facebook" data-aos="fade-up" data-aos-duration="2200">
                    <div class="tooltip">Facebook</div>
                    <a href="" class="footer-link"><span><i class="fab fa-facebook-f"></i></span></a>
                </div>
                <div class="icon twitter" data-aos="fade-up" data-aos-duration="2400">
                    <div class="tooltip">Twitter</div>
                    <a href="" class="footer-link"><span><i class="fab fa-twitter"></i></span></a>
                </div>
                <div class="icon instagram" data-aos="fade-up" data-aos-duration="2600">
                    <div class="tooltip">Instagram</div>
                    <a href="" class="footer-link"><span><i class="fab fa-instagram"></i></span></a>

                </div>
                <div class="icon github" data-aos="fade-up" data-aos-duration="2800">
                    <div class="tooltip">Github</div>
                    <a href="" class="footer-link"><span><i class="fab fa-github"></i></span></a>
                </div>
                <div class="icon linkedin" data-aos="fade-up" data-aos-duration="3000">
                    <div class="tooltip">Linkedin</div>
                    <a href="" class="footer-link"> <span><i class="fab fa-linkedin"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <p class="rights ">AgencyTech.©2021</p>
</section>

<!-- footer-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>


</html>

