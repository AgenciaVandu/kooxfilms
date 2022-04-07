@extends('layouts.layout')
@section('content')
<div class="section">
    <div class="container">
        <div class="pad-1">
         <h3 class="koox-500 pb-2">Sign in</h3>
         <div class="card p-4">
             <form>
                 <div class="form-group">
                 <label for="email">Email address</label>
                 <input type="email" class="form-control" id="email">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                 </div>
                 <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" class="form-control" id="password">
                 </div>
                 <div class="form-group form-check">
                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                 <label class="form-check-label" for="exampleCheck1">Remember me</label>
                 </div>
                 <button type="submit" class="btn btn-primary btn-block">Sign up</button>
             </form>
        </div>
        </div>
     </div>
</div>
@endsection