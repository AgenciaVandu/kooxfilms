@extends('layouts.layout')
@section('content')
    <section  style="padding-top: 6.5em">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 pt-2">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col-6 m-auto">
                                <h5 class="koox-500">
                                    Details
                                </h5>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-outline-dark btn-sm" href="">Edit</button>
                            </div>
                        </div>
                        <hr>
                        <li class="koox-600">
                            First Name <br>
                            <span class="koox-300" style="color: gray">
                                Alvar
                            </span>
                        </li>
                        <li class="koox-600">
                            Last Name <br>
                            <span class="koox-300" style="color: gray">
                                Buenfil
                            </span>
                        </li>
                        <li class="koox-600">
                            email <br>
                            <span class="koox-300" style="color: gray">
                                ab@agenciavandu.com
                            </span>
                        </li>
                        <li class="koox-600">
                            Password <br>
                            <span class="koox-300" style="color: gray">
                                *******
                            </span>
                        </li>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pt-2">
                    <div class="card p-4">
                        <h5 class="koox-500">
                            Details of camp
                        </h5>
                        <hr>
                        <li class="koox-600">
                             Name of camp<br>
                            <span class="koox-300" style="color: gray">
                                12 days
                            </span>
                        </li>
                        <li class="koox-600">
                            Location <br>
                            <span class="koox-300" style="color: gray">
                                Tihosuco, Quintana Roo, Mexico.
                            </span>
                        </li>
                        <li class="koox-600">
                            Price <br>
                            <span class="koox-300" style="color: gray">
                                $1, 175 USD
                            </span>
                        </li>
                        <li class="koox-600">
                            Participants <br>
                            <span class="koox-300" style="color: gray">
                                20 participants per camp.
                            </span>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection