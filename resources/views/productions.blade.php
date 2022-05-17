@extends('layouts.layout')
@section('content')
<section id="film-camps" class="text-center pt-5">
    <div class="container">
      <h1 class="koox-700"> 
          KO’OX PRODUCTIONS
      </h1>   
    </div>
</section>
<section id="camp-card">
  <div class="container-fluid pt-4 pb-4">

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <video src="{{asset('/video/video-1.mp4')}}" muted controls width="100%"></video>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <video src="{{asset('/video/video-2.mp4')}}" muted controls width="100%"></video>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="video">
                <iframe title="vimeo-player" src="https://player.vimeo.com/video/293651724?h=e72fa312d5" frameborder="0" width="100%"></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="video">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/639953884?h=023ca686ea" frameborder="0" width="100%"></iframe>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection