@extends('layouts.app')

@section('content')
<div class="titulo w-100 d-flex justify-content-center align-items-center">
    <p class="text-center text-white position-absolute">SERVICIOS DE COMPUTO</p>
</div>
<div class="container">
    <div class="container mb-4">
        <p class="text-center bg-dark"></p>
        <p class="text-justify bg-secondary"></p> 
    </div> 
    <div class="container mb-4 text-center">
        <div class="row ">
            <div class="col">
                <a href="" class="btn btn-primary"> </a>
                <a href="" class="fs-3 text-white">SOFTWARE</a>
            </div>
            <div class="col">
                <a href="" class="btn btn-success"> </a>
                <a href="" class="fs-3 text-white">HARDWARE</a>
            </div>
        </div>
    </div>
    <div class="container-lg bg-warning">
        <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive"> 
            <div class="post my-2 mx-1 h-25 border-2 border-success" style="border: solid;">
                <a href=""><p class="fs-2 text-center">Reparacion de computadoras</p></a>
                <a href=""><img src="https://cursoseducativos.site/wp-content/uploads/2021/01/repas.png" alt="" class="w-100 h-50"></a>
                <p class="fs-5 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </div>
    </div>
</div>
@endsection
