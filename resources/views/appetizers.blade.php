@extends('menu')
@section('content-2')

@php
    $ap = [
        "Atchara", "Baked Tahong", "Beef Empanada", "Camaron Rebosado", "Cheese Stick", "Chicharon Bulaklak", "Crispy Chicken", "Crispy Tenga", "Dynamite Lumpia", "Fishball", "Lianas Banana", "Lumpiang Shanghai", "Lumpiang Ubod", "Onion Rings", "Rellenong Hipon"
    ];
@endphp

<div class="over-flow-display">
    @foreach ($appetizers as $item)
    <div class="card-container">
            <div class="card-child">
                <div>
                    <img width="200px" height="200px" src="images/appetizer/{{$item->name}}" alt="name"/>
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
