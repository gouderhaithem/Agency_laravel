<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Anounce_Page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Announce detailes </title>
</head>
<body>
<!--nav-->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid nav-tittle">
        <a class="navbar-brand" href="#">
            <p class="text-black titre"> AgencyTech <span class="point">.</span></p>
        </a>
    </div>

</nav>
<!--nav-->
<!--tittles-->
<div class="col-md-8 mx-auto text-center featured-tittles">

    <h6 class="text-primary properties">Announce</h6>
    <h1 class="featured-properties">Announce Details</h1>
    <p>Here You Will Find All Informations About Announce Choosen</p>
</div>
<!--tittles-->
<!--images slider-->

<div id="carouselExampleIndicators" class="carousel slide slider-image" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/appartement1.jpg" class="d-block w-100 image1 " alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/appartement2.jpg" class="d-block w-100 image2" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/appartement3.jpeg" class="d-block w-100 image3" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden" style="color: #0d6efd;" >Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden" style="color: #0d6efd;">Next</span>
    </button>
</div>

<div>
    <h1 class="Announce-tittle">Okinawa Summer House</h1>
</div>
<!--images slider-->
<!--description of an announce-->
<div class="announce-description">
    <div class="announce-infos">
        <h1>Area:</h1>
        <p>121m²</p>
        <h1>For:</h1>
        <p>Sale</p>
        <h1>Price:</h1>
        <p>1000$</p>
        <h1>Shared By:</h1>
        <p>Islam Agency</p>
        <h1>Desciption:</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ducimus ipsa quis facilis, voluptates asperiores, ipsam eaque mollitia ullam magni corporis sapiente? Voluptatum enim molestiae voluptatem possimus qui id ullam?</p>
        <h1>Localisation:</h1>
        <p>Okinawa Centre Ville 88° New City</p>
    </div>
</div>
<h1 class="details"> Agency Contact Details:</h1>
<div class="bouttons">

    <button class="boutton1"><i class="fa-solid fa-phone"></i>06-55-44-77-51</button>
    <a href="https://www.gmail.com"> <button class="boutton2"><i class="fa-solid fa-envelope"></i>Send a Message</button></a>
</div>
<!--description of an announce-->
<!--map-->
<!--Google map-->
<div data-aos="zoom-in-down" data-aos-duration="1500">
    <div id="map-container-google-1" class="z-depth-1-half map-container">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed " frameborder="0 " style="border:0 " allowfullscreen></iframe>
    </div>
</div>
<!--Google Maps-->
<!--comments-->


<section class="comment-section ">
    <div class="container cont ">
        <div class="row ">
            <div class="col-sm-5 col-md-6 col-12 pb-4 " data-aos="fade-right " data-aos-duration="1500 ">
                <h1>Comments</h1>
                @foreach($comments as $comment)
                <div class="comment mt-4 text-justify float-left " style="border-bottom:1px solid #0d6efd ; border-radius: 0px; "> <img src="https://png.pngtree.com/png-clipart/20190924/original/pngtree-business-user-profile-vector-png-image_4830519.jpg " alt=" " class="rounded-circle " width="40 " height="40 ">
                    <h4 style="color: black; ">{{$comment['user_name']}}</h4> <span style="color: gray; ">{{$comment['created_at']}}</span> <br>
                    <p style="color: black; ">{{$comment['commentaires']}}</p>
                </div>
                @endforeach

            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4 leave-div " data-aos="fade-right " data-aos-duration="1500 ">
                <form id="algin-form " action="{{route("announce_comment")}}" method="post" class="comment-form ">
                    @csrf
                <div class="form-group ">
                    <h4>Leave a comment</h4>
                    <label for="message ">Your Comment</label>
                    <textarea class="text-area " name="commentaires" id=" " msg cols="23 " rows="5 " class="form-control " style="background-color: #ecf0f3;border-radius: 15px; border:none; color:
                        black; "></textarea>
                </div>

                <div class="form-group ">
                    <p class="text-secondary paragraph-alert ">If You D'ont Have An Account Try To <a href="Join_US_Page.html " class="alert-link " style="color: #0d6efd; ">Create One </a>Now For Free!</p>
                </div>

                <div class="form-group "> <button type="button " style="background-color: #0d6efd; color: white;border-radius: 15px; font-weight: bold; " id="post " class="post ">Post Comment</button> </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--comments-->
<!--footer-->
<section class="footer ">
    <div class="footer-father ">
        <div class="infos " data-aos="fade-up " data-aos-duration="1000 ">
            <h1 class="titre1 ">AgencyTech<span class="point2 ">.</span></h1>
            <br>
            <p>Home | Blog | Pricing | About | Faq | Contact</p>

        </div>
        <div class="contact-coordonnes " data-aos="fade-up " data-aos-duration="1500 ">
            <h1 class="state "> Contact Us On :</h1><br>
            <a href="https://www.google.com/intl/fr/gmail/about/ " class="coordonnes "><i class="fa-solid fa-envelope contact-icon " style="color: black; "></i>Agency.Tech@Gmail.com</a><br>
            <a href=" " class="coordonnes "><i class="fa-solid fa-phone contact-icon " style="color: black; "></i>66-54-78-91</a><br>
            <a href="https://www.google.com/maps/place/Universite+Constantine+2+Abdelhamid+Mehri/@36.2460536,6.5678176,17z/data=!3m1!4b1!4m5!3m4!1s0x12f1655aaa0d63ab:0xa80cc72a9da3c77b!8m2!3d36.2460493!4d6.5700063 " class="coordonnes
                        "><i class="fa-solid fa-location-dot contact-icon " style="color: black; "></i>Univ Constantine2 Nouvelle Ville -Constantine-Algrie</a>
        </div>
        <div class="About " data-aos="fade-up " data-aos-duration="2000 ">
            <h1 class=" state "> About The Company</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est libero, velit laborum nostrum, sapiente animi iure corrupti, cum iste inventore provident. Atque consectetur earum, modi delectus vel quibusdam ducimus cumque.</p>
            <div class="wrapper ">
                <div class="icon facebook " data-aos="fade-up " data-aos-duration="2200 ">
                    <div class="tooltip ">Facebook</div>
                    <a href=" " class="footer-link "><span><i class="fab fa-facebook-f "></i></span></a>
                </div>
                <div class="icon twitter " data-aos="fade-up " data-aos-duration="2400 ">
                    <div class="tooltip ">Twitter</div>
                    <a href=" " class="footer-link "><span><i class="fab fa-twitter "></i></span></a>
                </div>
                <div class="icon instagram " data-aos="fade-up " data-aos-duration="2600 ">
                    <div class="tooltip ">Instagram</div>
                    <a href=" " class="footer-link "><span><i class="fab fa-instagram "></i></span></a>

                </div>
                <div class="icon github " data-aos="fade-down " data-aos-duration="2800 ">
                    <div class="tooltip ">Github</div>
                    <a href=" " class="footer-link "><span><i class="fab fa-github "></i></span></a>
                </div>
                <div class="icon linkedin " data-aos="fade-up " data-aos-duration="3000 ">
                    <div class="tooltip ">Linkedin</div>
                    <a href=" " class="footer-link "> <span><i class="fab fa-linkedin "></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <p class="rights ">AgencyTech.©2021</p>
</section>


<!--footer-->

<div class="container ">

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
