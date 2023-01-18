@extends('layout')
@section('content')

<div class='menu-wrapper'>
    <section id='section-2'>
      <div>

        <div class="menu-display-container">
            {{-- <h3>{category}</h3> --}}
            <div class="mini-navbar-menu">
                <a href="/menu">Appetizer</a>
                <a href="/breakfast">Breakfast</a>
                <a href="/dessert">Dessert</a>
                <a href="/drink">Drink</a>
                <a href="/maindish">Main Dish</a>
            </div>
            <div class="menu-display-child">
                @yield('content-2')
            </div>
        </div>
      </div>
    </section>
</div>

@endsection
