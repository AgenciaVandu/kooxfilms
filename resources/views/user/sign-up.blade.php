@extends('layouts.layout')
@section('content')
   <div class="section">
       <div class="container">
           <div class="pad">
            <h3 class="koox-500 pb-2">Sign up for free</h3>
            <div class="card p-4">
                <form>
                    <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="confirm-email">Confirm your email</label>
                        <input type="email" class="form-control" id="confirm-email">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm your Password</label>
                        <input type="password" class="form-control" id="confirm-password">
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree with the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                </form>
           </div>
           </div>
        </div>
   </div>
@endsection