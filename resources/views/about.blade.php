@extends('layout')
@section('content')

@php
    use Carbon\Carbon;
    $time = "2023-01-01 00:00:00";
    $date = new Carbon( $time );
@endphp

<div>
    <div class="container">
        <img src="images/logo/nimels.jpg" alt="menu" />
        <div class="about_details">
          <span>About Our Restaurant</span>
          <h2>We Provice Good Quality Food to Your Family!</h2>

          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

          <br></br>

          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

          <button class="btn">Learn More</button>
        </div>
    </div>

    <div class="container">
        <img src="images/logo/why.jpeg" alt="menu" />
        <div class="box">
            <div class="icon"><i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="about-content">
                <h3> Why do we help?</h3>
                <p>This pandemic required the suspension of classes, temporary closure of non-essential businesses and enterprises, setting up of checkpoints at every entry and exit points, and for people to stay home.
                These are the things that people need to adjust to and cope with to prevent the spread of Coronavirus or COVID-19.

                It's hard to go to the market and grocery stores during this pandemic as there are no public transportation going around the locality,
                unless one has a private vehicle.
                Fortunately, DARS INC. promote good nutrition by including fresh varieties of menu in their local areas. </p>


            </div>
        </div>
    </div>

    <div class="container">
        <img src="images/logo/sheryl_chef.jpg" alt="menu" />
        <div class="box">
            <div class="icon"><i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="about-content">
                <h3> How we help</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            </div>
        </div>
    </div>
    <br/>


    <div class="about-h3"><h3>Browse Through Some of Our Videos</h3>
    </div>
    <div class="parent">
        <div class="child">
            <div><iframe width="560" height="315" src="https://www.youtube.com/embed/2wN5qpMV5-g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            <div><iframe width="560" height="315" src="https://www.youtube.com/embed/i20HWCThzzw" title="YouTube video player" border="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe></div>
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
