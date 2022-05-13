<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koox films</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://kit.fontawesome.com/9111dc1fca.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('/img/bco-logo.png')}}" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                  <a href="/camps" class="nav-link">Filmmaking Camps</a>
                </li>
                <li class="nav-item mr-3">
                    <a href="/productions" class="nav-link">Productions</a>
                </li>
                <li class="nav-item mr-3">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item mr-3">
                    <a href="https://www.facebook.com/kooxfilms" class="nav-link">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a href="https://www.instagram.com/kooxfilms/" class="nav-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a href="https://api.whatsapp.com/send/?phone=529991447396" class="nav-link">
                        <i class="fa-brands fa-whatsapp-square"></i>
                    </a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer>
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-lg-3 col-md-12 col-sm-12 m-auto text-center">
                    <figure>
                        <img src="{{asset('/img/bco-logo.png')}}" class="img-fluid" alt="Koox films camps">
                    </figure>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h5 class="koox-600" style="color: #fff">Site map</h5>
                    <div class="row">
                        <div class="col-6">
                            <li class="koox-300">
                                <a href="/">Home</a>
                            </li>
                            <li class="koox-300">
                                <a href="/camps">Filmmaking Camps</a>
                            </li>
                            <li class="koox-300">
                                <a href="/productions">Productions</a>
                            </li>
                            <li class="koox-300">
                                <a href="/contact">Contact</a>
                            </li>
                        </div>
                        <div class="col-6">
                            <span  style="color: #fbfcfc; font-weight:600;">Follow us</span>
                            <div class="row">
                                <li class="nav-item mr-1">
                                    <a href="https://www.facebook.com/kooxfilms" target="blank_" class="nav-link">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a href="https://www.instagram.com/kooxfilms/" target="blank_" class="nav-link">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="col-12">
                    <h5 class="koox-600" style="color: #fff">Contact us</h5>
                    <li class="koox-300" style="color: #fff; font-size: .9em;">
                        Tihosuco, Quintana Roo, México. CP. 77121
                    </li>
                    <li class="koox-300" style="color: #fff; font-size: .9em;">
                        Phone: +52 9991 44 73 96
                    </li>
                    <li class="koox-300" style="color: #fff; font-size: .9em;">
                        Email:   <a href="mailto:kooxfilms@gmail.com">kooxfilms@gmail.com</a>
                    </li>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14978.091676307984!2d-88.38441562562836!3d20.195580183287465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f50e30f23b3bad1%3A0xf5f90b31e9849368!2s77121%20Tihosuco%2C%20Q.R.!5e0!3m2!1ses-419!2smx!4v1649354239376!5m2!1ses-419!2smx" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   <script src="{{asset('/js/carrusel.js')}}"></script>
</body>
</html>
