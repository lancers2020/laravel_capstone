@extends('menu')
@section('content-2')

@php
    $ap = [
        "Arroz Caldo", "Black Coffee", "CornSilog", "Daing", "Fried egg, hotdog w/ Rice", "Hot Chocolate", "Hot Milo", "Hot Mocha", "HotSilog", "Longganisa", "Silog", "SpamSilog", "TapSilog", "Tocino w/ Rice", "Tortang Talong", "Tuyo w/ Rice", "Waffle Blueberries", "Waffle Strawberry"
    ];
@endphp

<div class="over-flow-display">
    @foreach ($breakfasts as $item)
    <div class="card-container">
            <div class="card-child">
                <div>
                    <img width="200px" height="200px" src="images/breakfast/{{$item->name}}" alt="name"/>
                    <div>{{$ap[$item['id']-1]}}</div>
                </div>
                <div class="card-grandchild">
                  <div>{{$item['price']}}</div>
                  <div>{{$item['description']}}</div>
                </div>
            </div>
    </div>
    @endforeach
</div>
@endsection
