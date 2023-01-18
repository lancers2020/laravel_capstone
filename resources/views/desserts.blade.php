@extends('menu')
@section('content-2')

@php
    $ap = [
        "Bibingka", "Biko", "Buko Pandan", "Buko Pie", "Buko Salad", "Ginataang Halohalo", "Halohalo", "Kutsinta", "Lecheflan", "Maiz con Yelo", "Minatamis na Saging", "Pichi-pichi", "Puto Bumbong", "Puto", "Sapin-sapin", "Suman-latik", "Taho", "Turon"
    ];
@endphp

<div class="over-flow-display">
    @foreach ($desserts as $item)
    <div class="card-container">
            <div class="card-child">
                <div>
                    <img width="200px" height="200px" src="images/dessert/{{$item->name}}" alt="name"/>
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
