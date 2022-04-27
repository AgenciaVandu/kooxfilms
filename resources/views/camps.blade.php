@extends('layouts.layout')
@section('content')
    <header>
        <div id="koox-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/banners/banner-1.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="/img/banners/banner-2.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="/img/banners/banner-3.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="/img/banners/banner-4.png" class="d-block w-100">
              </div>
            </div>
           <button class="carousel-control-prev" type="button" data-target="#koox-slider" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#koox-slider" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
        </div>
    </header>
    <!-- Button trigger modal -->  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #138711;">
        <figure>
            <img src="{{asset('img/koox-modal.png')}}" class="img-fluid">
        </figure>
      </div>
    </div>
  </div>
    <section class="text-center pt-5">
        <div class="container">
            <h1 class="koox-700">
                FILMMAKING CAMPS
            </h1>
            <p class="koox-300">
                These camps are aimed towards the development and creation of short films in naturally, heritage-wisely and
                culturally significant context. The process is guided through activities of sensibilization, understanding
                and comprehension of movie making, occurring in travelling camps through different spaces full of beauty,
                mysticism and cultural identity. The goal of this program is to develop a regional film-making industry
                capable of offering the material, strategic and personnel resources required for all the stages of the film
                creation process, pre-production, production and postproduction to creators of all kinds: professional
                film makers, students and amateurs.
            </p>
        </div>
    </section>
    <section id="camp-card">
        <div class="container">
            <div class="row mt-5">
                <!--Camp one-->
                <div class="col-lg-5 m-auto">
                    <h3 class="koox-700" style="text-transform: uppercase;">The camps focus on
                        setting up the CREATOR
                    </h3>
                    <p class="koox-400 text-justify">
                        The camps focus on setting up the CREATOR on command from the very start: from the development of
                        production dossiers, to the starting up the shooting and the post-production stage of their ideas,
                        all this while immersed in locations of great natural and cultural value.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="row p-4">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <img src="/img/camp.png" class="w-100" alt="">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <h4 class="koox-700 pt-2">
                                    DYNAMIC CAMP
                                </h4>
                                <li class="koox-700">
                                    Duration: <br> <span class="koox-300">12 days</span>
                                </li>
                                <li class="koox-700">
                                    Location: <br> <span class="koox-300">Tihosuco, Quintana Roo, Mexico.</span>
                                </li>
                                <li class="koox-700">
                                    Price: <br> <span class="koox-300">$1, 175 USD</span>
                                </li>
                                <li class="koox-700">
                                    Limited availability: <br> <span class="koox-300">20 participants per camp.</span>
                                </li>
                                <small class="koox-400" style="color: gray;">
                                <button data-toggle="modal" data-target="#exampleModal" style="background-color: none; border: none;">* Basic requirements </button>
                                </small>
                                <li>
                                    <div class="row pt-2">
                                        <div class="col-6">
                                            <a href="{{asset('/download/GREAT-CAMP.pdf')}}" class="btn btn-primary btn-block" target="blank_">More info</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('checkout', 1) }}" class="btn btn-primary btn-block">PAY
                                                NOW</a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!--Camp one-->
                <div class="col-lg-7">
                    <div class="card">
                        <div class="row p-4">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <img src="/img/camp-1.png" class="w-100" alt="">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <h4 class="koox-700 pt-2">
                                    GREAT CAMP
                                </h4>
                                <li class="koox-700">
                                    Duration: <br> <span class="koox-300">29 days</span>
                                </li>
                                <li class="koox-700">
                                    Location: <br> <span class="koox-300">Tihosuco, Quintana Roo, Mexico.</span>
                                </li>
                                <li class="koox-700">
                                    Price: <br> <span class="koox-300">$3, 699 USD</span>
                                </li>
                                <li class="koox-700">
                                    Limited availability: <br> <span class="koox-300">20 participants per camp.</span>
                                </li>
                                <small class="koox-400" style="color: gray;">
                                    <button data-toggle="modal" data-target="#exampleModal" style="background-color: none; border: none;">* Basic requirements </button>
                                </small>
                                <li>
                                    <div class="row pt-2">
                                        <div class="col-6">
                                            <a href="{{asset('/download/GREAT-CAMP.pdf')}}" class="btn btn-primary btn-block" target="blank_">More info</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('checkout', 2) }}" class="btn btn-primary btn-block">PAY
                                                NOW</a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 m-auto">
                    <h3 class="koox-700" style="text-transform: uppercase;">The CAMPS specifically look for CREATORS
                    </h3>
                    <p class="koox-400 text-justify">
                        The CAMPS specifically look for CREATORS with sensitive, intuitive, emotional and sensible contents,
                        that will allow them to be inspired and connect quickly with processes of synthetical and conceptual
                        creation. Imagining, conceptualizing and creating in the middle of the jungle, with natural
                        phenomena, customs and traditions full of otherness and always changing conditions are the
                        principles that support the FILMMAKING CAMPS.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="includes" class="mt-5 mb-5">
        <div class="container text-center">
            <h1 class="koox-700 pt-3 pb-5">
                KO'OX FILMS INCLUDES
            </h1>
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <i class="fas fa-user" ></i>
                        <h5 class="koox-300">
                            Accommodation
                        </h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <i class="fa-solid fa-bus"></i>
                        <h5 class="koox-300">
                            Transportation
                        </h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <i class="fa-solid fa-bowl-food"></i>
                        <h5 class="koox-300">
                            Food with 3 meals <br> per day
                        </h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <i class="fa-solid fa-video"></i>
                        <h5 class="koox-300">
                            Basic audiovisual production equipment
                        </h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pt-3">
                        <i class="fa-solid fa-users"></i>
                        <h5 class="koox-300">
                            Meetings and cultural events
                        </h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pt-3">
                        <i class="fa-solid fa-user"></i>
                        <h5 class="koox-300">
                            Certified guides
                        </h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pt-3">
                        <i class="fa-solid fa-person-military-pointing"></i>
                        <h5 class="koox-300">
                            24 hour security
                        </h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pt-3">
                        <i class="fa-solid fa-stethoscope"></i>
                        <h5 class="koox-300">
                            24 hours medical accompaniment
                        </h5>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-block d-lg-none">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-user" ></i>
                        <h5 class="koox-300">
                            Accommodation
                        </h5>
                    </div>
                    <div class="col-6">
                        <i class="fa-solid fa-bus"></i>
                        <h5 class="koox-300">
                            Transportation
                        </h5>
                    </div>
                    <div class="col-6 pt-2">
                        <i class="fa-solid fa-bowl-food"></i>
                        <h5 class="koox-300">
                            Food with 3 meals <br> per day
                        </h5>
                    </div>
                    <div class="col-6 pt-2">
                        <i class="fa-solid fa-video"></i>
                        <h5 class="koox-300">
                            Basic audiovisual production equipment
                        </h5>
                    </div>
                    <div class="col-6 pt-3">
                        <i class="fa-solid fa-users"></i>
                        <h5 class="koox-300">
                            Meetings and cultural events
                        </h5>
                    </div>
                    <div class="col-6 pt-3">
                        <i class="fa-solid fa-user"></i>
                        <h5 class="koox-300">
                            Certified guides
                        </h5>
                    </div>
                    <div class="col-6 pt-3">
                        <i class="fa-solid fa-person-military-pointing"></i>
                        <h5 class="koox-300">
                            24 hour security
                        </h5>
                    </div>
                    <div class="col-6 pt-3">
                        <i class="fa-solid fa-stethoscope"></i>
                        <h5 class="koox-300">
                            24 hours medical accompaniment
                        </h5>
                    </div>
                </div>
            </div>
            {{-- <div class="glider-contain">
                <div class="glider1 pb-5">
                    <div class="px-2 text-center">
                        <div class="col aliado-elemento text-center">
                            <i class="fas fa-user"></i>
                            <h4 class="koox-700">
                                Accommodation
                                </h5>
                                <p class="koox-300">
                                    Se parte de un equipo de producción de cinematografía, Encargado de la filmación de
                                    cortometrajes de ficción en uno de los territorios más bellos y enigmáticos de la
                                    península de Yucatán.
                                </p>
                        </div>
                    </div>
                    <div class="px-2 text-center">
                        <i class="fas fa-user"></i>
                        <h4 class="koox-700">
                            Transportation
                            </h5>
                            <p class="koox-300">
                                Se parte de un equipo de producción de cinematografía, Encargado de la filmación de
                                cortometrajes de ficción en uno de los territorios más bellos y enigmáticos de la península
                                de Yucatán.
                            </p>
                    </div>
                    <div class="px-2 text-center">
                        <div class="col aliado-elemento text-center">
                            <i class="fas fa-user"></i>
                            <h4 class="koox-700">
                                Food with 3 meals per day
                                </h5>
                                <p class="koox-300">
                                    Se parte de un equipo de producción de cinematografía, Encargado de la filmación de
                                    cortometrajes de ficción en uno de los territorios más bellos y enigmáticos de la
                                    península de Yucatán.
                                </p>
                        </div>
                    </div>
                </div>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div> --}}
        </div>
    </section>
@endsection
