@extends('layouts.layout')
@section('content')
<header class="index-video">
    <video src="{{asset('/video/video.mp4')}}" width="100%" loop muted autoplay></video>
    {{-- <div id="koox-slider" class="carousel slide" data-ride="carousel">
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
    </div> --}}
  </header>
  <section class="text-center pt-5">
      <div class="container">
        <h1 class="koox-700"> 
            ABOUT US
        </h1>
        <p class="koox-300" >
          We are a private company focused on offering integrated packages that include services of infrastructure, logistics, material and cultural resources, and personnel to fill the needs of both professional and amateur film making endeavors through CONTROLLED CAMPS set up in locations full of cultural, natural and heritage value, all these in the south of Mexico. 
        </p>
      </div>
  </section>
  <section class="method mt-5">
      <div class="bg-overlay">
          <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                    <h1 class="koox-700" style="text-transform: uppercase;">
                        Working <br class="d-none d-sm-none d-md-none d-lg-block"> method
                    </h1>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 text-justify pt-4 pb-4">
                  With the method of “FREE AND SPONTANEOUS EXPRESSION”, the CREATOR is set immediately in living and socio-culturally real environments where they will learn how to capture the phenomena, the accidents, the ideas and thoughts that flow in such reality that’s being laid out in front of their eyes. Under this concept, we propose a context of ABSOLUTE FREEDOM AND DIRECT EXPERIENCE, with the multiples varieties that reality offers as a way to achieve that every film production is profound and genuine. <br><br>
                  From the very beginning, the CREATORS is considered someone capable of taking what their contexts offer to woven their ideas as part of the process of contacting the space. The experience of reality without filters and its adoption as a substantial element of film discourses is the aim of the “SPONTANEUOS EXPRESSION” method. 
                  <br>
                   It’s in the moments of tension, thrill, collective responsibility, understanding and interpretation of reality where the automatic creation process awakes in the CREATOR; where the QUESTIONS that sustain the progression of knowledge and the linking of skills arise.
                </div>
            </div>
          </div>
      </div>
  </section>
  <section class="text-center pt-5 pb-3">
    <div class="container">
      <h1 class="koox-700" style="text-transform: uppercase;"> 
        philosophy
      </h1>
      <p class="koox-300">
        Knowledge is only truly acquired when connect to emotions, and everyday emotions are closely linked to significant emotions. Only through the vertigo and the ever-changing nature of a transcendental experience cand offer true, lasting knowledge. Under this premise, to us, film-making can only be done by breaking away with the school room tradition and the systematized learning as the only way of acquiring, solid, useful and meaningful knowledge.<br> Only in such way is possible to deploy all our apprehension capabilities: through the immersion in a real and significant experience. It’s in the interpretation and the way reality has to surprise with is changing and variable nature where the truly solid knowledge can arise. With this as starting point, KO’OOX FILMS has taken the mission of offering to the participants of the FILM MAKING CAMPS all human, cultural and material resources required for the creation of profound, genuine and with high artistic, social and aesthetic films.  
      </p>
    </div>
</section>
<section id="includes" class="mt-5">
    <div class="container">
        <div class="carousel__contenedor mb-5">
            <button aria-label="anterior" class="carousel__anterior">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="carousel__lista">
                <div class="carousel__elemento"> <!--Elemento a-->
                    <div class="px-2 text-center">
                        <div class="col aliado-elemento text-center">
                            <i class="fa-solid fa-campground"></i>
                            <h4 class="koox-700">
                                Accommodation
                                </h5>
                                <p class="koox-300">
                                    In the Villa KO’OX FILMS headquaters in Tihosuco, Quintana Roo.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="carousel__elemento"> <!--Elemento b-->
                    <div class="px-2 text-center">
                        <i class="fa-solid fa-bus"></i>
                        <h4 class="koox-700">
                            Transportation
                            </h5>
                            <p class="koox-300">
                                Services to the natural locations: jungle, lagoons, underground caves (cenotes) and their surroundings.
                            </p>
                    </div>
                </div>
                <div class="carousel__elemento"> <!--Elemento c-->
                    <div class="px-2 text-center">
                        <div class="col aliado-elemento text-center">
                            <i class="fa-solid fa-bowl-food"></i>
                            <h4 class="koox-700">
                                Food with 3 meals per day
                                </h5>
                                <p class="koox-300">
                                    Buffet meals per day when we are in the village. (Field work meals will be arranged accordingly  such as lunch  bags)
                                </p>
                        </div>
                    </div>
                </div>
                <div class="carousel__elemento"> <!--Elemento d-->
                    <div class="px-2 text-center">
                        <div class="col aliado-elemento text-center">
                            <i class="fa-solid fa-users"></i>
                            <h4 class="koox-700">
                                Meetings and cultural events
                                </h5>
                                <p class="koox-300">
                                    Conversations with active farmers, wood and textile artisans and villagers dedicated to the preservation of ancestral rituals and celebrations.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="carousel__elemento"> <!--Elemento e-->
                    <div class="px-2 text-center">
                        <div class="px-2 text-center">
                            <div class="col aliado-elemento text-center">
                                <i class="fas fa-user"></i>
                                <h4 class="koox-700">
                                    Certifed guides
                                    </h5>
                                    <p class="koox-300">
                                        We have specialized guides in the different natural locations of the place.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel__elemento"> <!--Elemento e-->
                    <div class="px-2 text-center">
                        <div class="col aliado-elemento text-center">
                            <i class="fa-solid fa-person-military-pointing"></i>
                            <h4 class="koox-700">
                                24 hours security
                                </h5>
                                <p class="koox-300">
                                    We have 24 hours security guard and security cameras.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <button aria-label="siguiente" class="carousel__siguiente">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div role="tablist" class="carousel__indicadores"></div>  
    </div>
</section>
{{-- <section id="includes" class="mt-5">
    <div class="container text-center">
        <h1 class="koox-700">
            KO'OX FILMS INCLUDES
        </h1>
        <div class="row mt-5">
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
            <div class="col-lg-4 text-center">
                <i class="fas fa-user" ></i>
                <h4 class="koox-700">
                    TRANSPORTATION
                </h4>
                <p class="koox-300">
                    Includes transportation from the meeting point in Valladolid Yucatán to the camp site.

                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fas fa-user" ></i>
                <h4 class="koox-700">
                    CULTURAL  GUEST
                </h4>
                <p class="koox-300">
                    Have an encounter with cultural expressions and explore the cinematographic narrative with the Mayan community in Tihosuco Quintana Roo, heiress of a powerful and ancestral culture with a unique historical passage.
                </p>
            </div>
        </div>
    </div>
</section> --}}
<section id="camps">
    <div class="container tex-center">
        <div class="row">
            <div class="col-lg-6 film mt-4 text-center">
                <div class="campos">
                    <a href="/camps">
                        <img src="/img/film.jpg" class="img-fluid" alt="">
                    </a>
                    <a href="{{ route('checkout', 1) }}" class="btn btn-primary mt-4">DINAMIC CAMP PAY NOW</a>
                </div>
            </div>
            <div class="col-lg-6 audiovisual mt-4 text-center">
                <div class="campos">
                    <a href="/productions">
                        <img src="/img/audio.jpg" class="img-fluid" alt="">
                    </a>
                    <a href="{{ route('checkout', 2) }}" class="btn btn-primary mt-4">GREAT CAMP PAY NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="newsletter" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3 class="koox-500">Contact us</h3>
                <p class="koox-300"> For more information or questions contact us here. <br> We will get back to you as soon as possible. Thank you. </p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                <form action="">
                    <div class="row">
                        <div class="col-lg-8 col-sm-12">
                            <div class="form-group">
                                <input type="email" placeholder="Email"  class="form-control" id="email-info" aria-describedby="email-info-1">
                              </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="row">
                                <div class="col-10">
                                    <button type="submit"  class="btn btn-block btn-dark">Submit</button>
                                </div>
                                <div class="col-2">
                                    <a href="https://api.whatsapp.com/send/?phone=529991447396" style="text-decoration:none; color:#000;" target="blanK_">
                                        <img src="/img/whatsapp-brands.svg" width="30" alt="icono whatsapp">
                                        {{-- <i class="fab fa-whatsapp"></i> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="acept-contact">
                        <small class="form-check-label text-muted" for="acept-contact">I authorize koox films contact me to provide me with more information</small>
                      </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="container mt-5">
        <div class="bg-green">
            <h1 class="koox-700 text-center pt-5 pb-4">TEAM KO’OX</h1>
            <div class="carousel__contenedor mb-5">
                <button aria-label="anterior" class="carousel__anterior1">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="carousel__lista1">
                    <div class="carousel__elemento"> <!--Elemento a-->
                        <div class="text-center">
                            <div class=" aliado-elemento text-center">
                                <img src="/img/team/alvar.png" class="img-fluid">
                                <h4 class="koox-700 mt-3">ALVAR CANTO <br> <span class="cargo">Film Camp Director</span></h4>
                               {{--  <p style="font-size: .8em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Nisi laudantium expedita ipsam facilis. Eos cupiditate, eum praesentium sequi dolorum quam consequuntur porro odit ipsam ea, amet distinctio saepe!</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel__elemento"> <!--Elemento b-->
                        <div class="text-center">
                            <div class="col aliado-elemento text-center">
                                <img src="/img/team/david.png" class="img-fluid">
                                <h4 class="koox-700 mt-3">DAVID AVILÉS <br> <span class="cargo">Filmmaker</span></h4>
                                {{-- <p style="font-size: .8em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Nisi laudantium expedita ipsam facilis. Eos cupiditate, eum praesentium sequi dolorum quam consequuntur porro odit ipsam ea, amet distinctio saepe!</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel__elemento"> <!--Elemento c-->
                        <div class=" text-center">
                            <div class="col aliado-elemento text-center">
                                <img src="/img/team/erika.png" class="img-fluid">
                                <h4 class="koox-700 mt-3">ERIKA ACEVEDO <br> <span class="cargo">General Coordinator &  Advertising</span></h4>
                                {{-- <p style="font-size: .8em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Nisi laudantium expedita ipsam facilis. Eos cupiditate, eum praesentium sequi dolorum quam consequuntur porro odit ipsam ea, amet distinctio saepe!</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel__elemento"> <!--Elemento d-->
                        <div class=" text-center">
                            <div class="col aliado-elemento text-center">
                                <img src="/img/team/hector.png" class="img-fluid">
                                <h4 class="koox-700 mt-3">HÉCTOR PÉREZ<br> <span class="cargo">Executive Director</span></h4>
                                {{-- <p style="font-size: .8em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Nisi laudantium expedita ipsam facilis. Eos cupiditate, eum praesentium sequi dolorum quam consequuntur porro odit ipsam ea, amet distinctio saepe!</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel__elemento"> <!--Elemento e-->
                        <div class=" text-center">
                            <div class="col aliado-elemento text-center">
                                <img src="/img/team/jose.png" class="img-fluid">
                                <h4 class="koox-700 mt-3">ALBERTO POOT<br> <span class="cargo">Field Assistant</span></h4>
                                {{-- <p style="font-size: .8em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Nisi laudantium expedita ipsam facilis. Eos cupiditate, eum praesentium sequi dolorum quam consequuntur porro odit ipsam ea, amet distinctio saepe!</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel__elemento"> <!--Elemento e-->
                        <div class=" text-center">
                            <div class="col aliado-elemento text-center">
                                <img src="/img/team/joel.png" class="img-fluid">
                                <h4 class="koox-700 mt-3">JOEL ZAVALA<br> <span class="cargo">Photografer & Camera Assistant</span></h4>
                                {{-- <p style="font-size: .8em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Nisi laudantium expedita ipsam facilis. Eos cupiditate, eum praesentium sequi dolorum quam consequuntur porro odit ipsam ea, amet distinctio saepe!</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel__elemento"> <!--Elemento e-->
                        <div class=" text-center">
                            <div class="col aliado-elemento text-center">
                                <img src="/img/team/nicte.png" class="img-fluid">
                                <h4 class="koox-700 mt-3">NICTE UC BE<br> <span class="cargo">Make-up Artist</span></h4>
                                {{-- <p style="font-size: .8em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Nisi laudantium expedita ipsam facilis. Eos cupiditate, eum praesentium sequi dolorum quam consequuntur porro odit ipsam ea, amet distinctio saepe!</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <button aria-label="siguiente" class="carousel__siguiente1">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <div role="tablist" class="carousel__indicadores1"></div>  
           
        </div>
    </div>
</section>
@endsection