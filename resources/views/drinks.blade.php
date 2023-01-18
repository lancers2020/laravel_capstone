@extends('menu')
@section('content-2')

@php
    $ap = [
        "Coca-cola", "Corona", "Heineken", "Lemon Juice", "Melon Juice", "Pineapple Juice", "Red Horse", "Strawberry Juice", "Tiger Beer"
    ];
@endphp

<div class="over-flow-display">
    @foreach ($drinks as $item)
    <div class="card-container">
            <div class="card-child">
                <div>
                    <img width="200px" height="200px" src="images/drink/{{$item->name}}" alt="name"/>
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
