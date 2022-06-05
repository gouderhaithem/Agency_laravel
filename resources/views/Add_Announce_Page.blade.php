<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Add_Announce_Page.css">

    <title>Add Announce</title>
</head>
<body class="body">


<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse"><i class="fa-solid fa-bars " style="background: transparent;"></i>
            </button>
        </div>
        <div class="img bg-wrap text-center py-4 ">
            <div class="user-logo ">
                <div class="img " style="background-image: url(images/Agency-Avatar.jpg); "></div>
                <h3> {{ Auth::user()->name }}</h3>
            </div>
        </div>
        <ul class="list-unstyled components mb-5  List_style">
            <li class="active ">
            <br>
                <br>

            <li>
                <a href="Profile_Page.html"><i class="fa-solid fa-user ICONS"></i> Account</a>
            </li>
            <br>
            <br>
            <li>
                <a  href="{{ url('/Home_Page') }}"><i class="fa-solid fa-user ICONS"></i> Home</a>
            </li>
            <br>
            <br>

            <li>
                <a href="Add_Announce_Page.html "><i class="fa-solid fa-plus ICONS"></i> Add Announce</a>
            </li>
            <br>
            <br>
            <li>
                <a href="User_Announces.html"><i class="fa-solid fa-bullhorn ICONS"></i> My Announces</a>
            </li>
            <br>
            <br>
            <li>
                <a href="Setting_Page.html "><i class=" fa-solid fa-gear ICONS"></i> Settings</a>
            </li>
            <br>
            <br>
            <li>
                <a href="Home_Page.html "><span class="fa fa-sign-out mr-3 ICONS"></span> Log Out</a>
            </li>
            <br>
            <br>
        </ul>
        <div class="social-media ">
            <a href="https://www.facebook.com/ "> <i class="fa-brands fa-facebook-square " style="color: white; font-size: 23px;"></i></a>
            <a href="https://www.instagram.com/ "><i class="fa-brands fa-instagram-square " style="color: white; font-size: 23px;"></i></a>
            <a href="www.twitter.com "> <i class="fa-brands fa-twitter-square " style="color: white; font-size: 23px;"></i></a>
            <a href="https://www.linkedin.com/s "> <i class="fa-brands fa-linkedin " style="color: white; font-size: 23px;"></i></a>
            <p class="rights ">AgencyTech.©2021</p>
        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content " class=" w-100 container-fluid">
        <nav class="">
            <div class="container1">
                <a class="navbar-brand " href="#" style="margin-left: 7%;">
                    <p class="text-black titre ">AgencyTech <span class="point ">.</span></p>
                </a>
                <button class="navbar-toggler " type="button " data-bs-toggle="collapse " data-bs-target="#navbarNav " aria-controls="navbarNav " aria-expanded="false " aria-label="Toggle navigation ">
                    <span class="navbar-toggler-icon "></span>
                </button>

            </div>
        </nav>

        <div class="container">
            <form method="post" action="{{route("announce_store")}}" class="form"  >
                @csrf
                <label for="" class="label">Catégorie</label><br>
                <input type="checkbox" name="Category_id" class="input-checkbox">
                <label for="Appartements">Appartements</label><br>
                <input type="checkbox" name="Category_id" value="1" class="input-checkbox">
                <label for="Houses">Houses</label><br>
                <input type="checkbox" name="Category_id" class="input-checkbox">
                <label for="Grounds">Grounds</label><br>
                <input type="checkbox" name="Category_id" class="input-checkbox">
                <label for="Garages" >Garages</label><br>
                <input type="checkbox" name="Category_id" class="input-checkbox">
                <label for="Stores">Stores</label><br>
                <input type="checkbox" name="Category_id" class="input-checkbox">
                <label for="Other">Other</label><br>
                <label for="" class="label" >Title</label><br>
                <input type="text" class="i"name="title" placeholder="Name Of Estate"><br>
                <label for="" class="label" >room number</label><br>
                <input type="number" class="i"name="roomnumber"  placeholder="For example 4"><br>
                <label for="" class="label" >Surface</label><br>
                <input type="number" class="i"name="surface"  placeholder="1000m*m"><br>
                <label for="" class="label" >Price</label><br>
                <input type="number" class="i"name="price"  placeholder="1000$"><br>
                <label for="" class="label" >Place</label><br>
                <input type="text" class="i" name="place" placeholder="Localisation Of The Estate"><br>
                <label for="" class="label" >Description</label><br>
                <input type="text" class="description-input" name="description" placeholder="Informations About Your Announce"><br>
                <label for="" class="label" >Photos</label><br>
                <input type="file" class="i-photo" name="photos" placeholder=" Add Photos"><br>
                <button class="boutton"><i class="fa-solid fa-plus" style="margin-left: -5%; margin-right: 3%;"></i>Add Announce</button>
            </form>

            <!--form-->

        </div>
    </div>
</div>
@if(session('status'))
    <div class="bg-success">{{session('status')}}</div>
@endif




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
