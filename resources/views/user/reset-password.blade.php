@extends('layouts.layout')
@section('content')
<div class="section">
    <div class="container">
        <div class="pad-1">
         <h3 class="koox-500 pb-2">Reset your password</h3>
         <div class="card p-4">
             <form>
                 <div class="form-group">
                 <label for="email">Email address</label>
                 <input type="email" class="form-control" id="email">
                 </div>
                 <div class="form-group">
                    <label for="confirm-email">Confirm email</label>
                    <input type="email" class="form-control" id="confirm-email">
                    </div>
                 <button type="submit" class="btn btn-primary btn-block">Send me an email</button>
             </form>
        </div>
        </div>
     </div>
</div>
@endsection