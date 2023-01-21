@extends('layout')
@section('content')

@php
    use Carbon\Carbon;
    $time = "2023-01-01 00:00:00";
    $date = new Carbon( $time );
@endphp

<style>
    .login-form{
        background-image: url({{asset('images/logo/restobar1.jpg')}});
    }
</style>

<div class="app">
    <div class="login-form">
      <div class="title">Sign In</div>
      {{-- <div className="form"> --}}
        <form onSubmit={handleSubmit}>
          <div className="input-container">
            <label>Username </label>
            <input type="text" name="uname" required />
          </div>
          <div className="input-container">
            <label>Password </label>
            <input type="password" name="pass" required />
          </div>
          <div className="button-container">
            <input type="submit" />
          </div>
        </form>
      {{-- </div> --}}
      <button>Don't have an account? Register here.</button>
    </div>
    <footer>
        <div class='footer-content'>
            <h3>Dars Restobar</h3>
            <h4>GOOD FOOD, GOOD MOOD!!<br/></h4>
            <p>Lorem ipsum lorem ipsum lorem<br/>
               Lorem ipsum lorem ipsum lorem ipsum lorem <br/>
               Lorem ipsum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum</p>
          </div>
            <ul class='socials'>
              <li><a target="blank" href="https://web.facebook.com/profile.php?id=100088167403550&_rdc=1&_rdr"><i class="fa fa-facebook">Facebook</i></a></li>
              <li><a href="#"><i class="fa fa-instagram">Instagram</i></a></li>
              <li><a href="#"><i class="fa fa-Twitter">Twitter</i></a></li>
              <li><a href="#"><i class="fa fa-google">Google</i></a></li>
              <li><a href="#"><i class="fa fa-github">Github</i></a></li>
              <li><a href="#"><i class="fa fa-linkedin">Linkedin</i></a></li>
            </ul>
          <div class='footer-bottom'>
           <p class="m-2">All rights reserved {{$date->year;}} Copyright @ <a target="blank" href="https://web.facebook.com/profile.php?id=100088167403550&_rdc=1&_rdr">Dars Restobar</a> </p>
        </div>
      </footer>

</div>

@endsection
