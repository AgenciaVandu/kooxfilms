@extends('layouts.layout')
@section('content')
    <section id="maps">
        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14978.091676307984!2d-88.38441562562836!3d20.195580183287465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f50e30f23b3bad1%3A0xf5f90b31e9849368!2s77121%20Tihosuco%2C%20Q.R.!5e0!3m2!1ses-419!2smx!4v1645047460975!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
   </section>
   <section id="form">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-md-12 col-sm-12 mt-5 mb-4">
                 <form>
                     <div class="form-row">
                        <div class="col">
                          <label for="first-name">First Name</label>
                          <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                          <label for="last-name">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last name">
                        </div>
                     </div>
                     <div class="form-group pt-3">
                       <label for="email">Email address</label>
                       <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                     </div>
                     <div class="form-group">
                        <label for="inputNumber">Number</label>
                        <input type="tel" class="form-control" id="inputNumber" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                      </div>
                     <div class="form-group">
                        <label for="inputState">City</label>
                        <input type="city" class="form-control" id="inputState">
                      </div>
                     <button type="submit" class="btn btn-primary">Send</button>
                     <button type="submit" class="btn btn-primary">FILMMAKING CAMPS</button>
                   </form>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
                 <p class="gelion-thin">
                     If you wish to contact us to participate, collaborate or have any questions and want to know more, write us, call us, visit us or fill out the form and we will contact you as soon as possible.
                 </p>
                 <li>
                     <div class="row gelion-thin ">
                         <div class="col-1">
                             <img src="/img/ubicacion.svg" width="50">
                         </div>
                         <div class="col-11 pl-5 m-auto">
                             Tihosuco, Quintana Roo, México. 77121
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="row gelion-thin ">
                         <div class="col-1">
                             <img src="/img/Telefono.svg" width="50">
                         </div>
                         <div class="col-11 pl-5 m-auto">
                             Phone: +52 9991 44 73 96
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="row gelion-thin ">
                         <div class="col-1">
                             <img src="/img/Mail.svg" width="50">
                         </div>
                         <div class="col-11 pl-5 m-auto">
                             Email:  kooxfilms@gmail.com
                         </div>
                     </div>
                 </li>
                 <li>

                     <!-- <div class="row gelion-thin">
                         <div class="col-12 gelion-regular pt-3">
                             Horario Laboral
                         </div>
                         <div class="col-1">
                             <img src="/img/Reloj.svg" width="50">
                         </div>
                         
                     </div> -->
                 </li>
               </div>
           </div>
       </div>
   </section>
@endsection