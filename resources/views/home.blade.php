@extends('layout')
@section('content')

@php
    use Carbon\Carbon;
    $time = "2023-01-01 00:00:00";
    $date = new Carbon( $time );
@endphp

{{-- <div class="home-container">Home</div> --}}
<div>
    <div class="hero">
        <img src="images/logo/loginbanner.jpg" width="100%" height="100%" alt="bwst">
    </div>
  <div class='sale'>
    <div class='home-h2'>50% OFF EVERY WEEKEND</div>
  </div>

  <div class='row'>
    <div class='column'>
      <div class='home-content'>
        <img width="350px" height="250px" src="images/logo/promo.jpg" alt="promo" />
        <img width="350px" height="250px" src="images/dessert/halo_halo.jpg" alt="halo halo" />
        <img width="350px" height="250px" src="images/main_dish/kinilaw_na_isda.jpg" alt="kinilaw na isda" />
      </div>
    </div>
        <h1>Bring your family and friends and try our delicious food!<br/>
            Nakakasigurong MALINIS at SWAK sa bulsa!</h1>

    <div class='promo-sale-2'>
      <figure class='position-relative'>
          <img src="images/main_dish/batchoy.jpg" alt="batchoy" />
          <figcaption>
            Monday Promo 10% OFF!
          </figcaption>
      </figure>

      <figure class='position-relative'>
          <img src="images/breakfast/spam_silog.jpg" alt="spam silog" />
          <figcaption>
            Every Wednesday 15% OFF!
          </figcaption>
      </figure>

      <figure class='position-relative'>
          <img src="images/main_dish/menudo.jpg" alt="menudo" />
          <figcaption>
            Try our NEW recipe!
          </figcaption>
      </figure>
    </div>

    <div class='info'>
      <p>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.
        Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.
        incididunt ut labore et dolore magna aliqua.</p>
      <button>ORDER NOW</button>
    </div>
  </div>

  <div class='customer'>
    <div class='home-h2'>WHAT CUSTOMERS SAY</div>

    <div class='parent'>
       <div class='home-child'>
        <img width="300px" height="200px" src="images/logo/costumer1.jpg" alt="costumer1" />
          <div>
            <h3>Tom Jones</h3>
            <p>Lorem ipsum dolor sit amet, conseciscing<br/>
            Lorem ipsum dolor sit amet, conseciscing</p>
          </div>
        </div>
        <div class='home-child'>
        <img width="300px" height="200px" src="images/logo/costumer3.jpg" alt="costumer3" />
          <div>
            <h3>Cathy Gomez</h3>
            <p>Lorem ipsum dolor sit amet, conseciscing<br/>
            Lorem ipsum dolor sit amet, conseciscing</p>
          </div>
        </div>
    </div>
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
