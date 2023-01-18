@extends('menu')
@section('content-2')

@php
    $ap = [
        "Batchoy", "Bistek-tagalog", "Crispy Pata", "Dinuguan", "Ginataang Manok", "Inihaw na Pusit", "Karekare", "Kinilaw na Isda", "Lechon Kawali", "Menudo", "Palabok", "Pancit Bijon", "Pinakbet", "Pinapaitan", "Pork Sisig", "Pritong Isda", "Sinigang na Hipon", "Sinigang with Bagnet", "Sisig", "Tinola", "Tostadong Pork"
    ];
@endphp

<div class="over-flow-display">
    @foreach ($maindishes as $item)
    <div class="card-container">
            <div class="card-child">
                <div>
                    <img width="200px" height="200px" src="images/main_dish/{{$item->name}}" alt="name"/>
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
