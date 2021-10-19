@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container">
        <p class="fs-2 text-center text-white">Que Somos...</p>
    </div>
    <div class="container border-2 border-warning mb-3" style="border: solid;">
        <p class="fs-4 text-justify text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
            voluptatibus, debitis voluptatum ullam, aperiam placeat modi amet omnis ducimus, dolorem explicabo!
            Assumenda non minus explicabo velit eius voluptatem. Iure, maiores!
            Ex officiis nesciunt harum minima, repudiandae excepturi labore dicta amet fuga, esse in blanditiis
            obcaecati magnam quae, delectus est mollitia id alias ipsam. Esse quo cumque at praesentium excepturi odio.
            Incidunt quis nulla voluptates voluptatem, error necessitatibus veritatis tenetur, libero corporis iure
            ipsam voluptatibus vitae sit perferendis dignissimos perspiciatis. Libero nostrum qui velit beatae minima
            ipsam omnis saepe! Necessitatibus, repellat?
            Consectetur aspernatur iure nihil dolorum facere adipisci eveniet voluptatum repudiandae labore consequatur
            in architecto magni provident nam, suscipit sequi fugiat optio! Dolor cupiditate earum possimus doloremque.
            Quae optio velit quasi.</p>
    </div>
    <div class="container d-flex flex-wrap justify-content-around mb-3">
        <div class="imgQsomos">
            <img class="" src="{{url('img/imgQsomos1.jpg')}}" alt="">
        </div>
        <div class="imgQsomos">
            <img class="" src="{{url('img/imgQsomos2.jpg')}}" alt="">
        </div>
        <div class="imgQsomos">
            <img class="" src="{{url('img/imgQsomos3.jpg')}}" alt="">
        </div>
    </div>
</div>

@endsection
