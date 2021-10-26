@extends('layouts.app')

@section('content')
<div class="container text-white">
    <div class="d-flex justify-content-between">
        <div class="fs-2 mb-2">Ayuda!!</div>
        <div class="fs-6 mb-2">Contactanos: <span>2411853099</span></div>
    </div>
    <div class="text-center">
        <p class="fs-4">Esta es la seccion de ayuda</p>
        <p class="fs-5">Aqui podras encontar la solucion a las dudas que tengas sobre los servicios, el sitio web y otra cosas que encuentras aqui.</p>
    </div>
    <div class=" text-warning">
        <p class="fs-3">Preguntas Frecuentes</p>
    </div>
    <div class="container">
        <div class="border border-warning ">
            <p class="fs-4 text-info px-3">¿Como encuentro a un servicio en especifico?</p>
            <p class="fs-5 px-3">Puedes buscarlo por el buscador que se encuentra en la parte derecha de "Servicios Computo"</p>
        </div>
        <div class="border border-warning ">
            <p class="fs-4 text-info px-3">¿Como funciona el buscador?</p>
            <p class="fs-5 px-3">Al escribir en el te saldran 2 cosas, el resultado o un mensaje de que lo que buscas no existe, una ves que veas lo que buscas, dale clic y enter, de lo contrario no te llevara a ninguna parte</p>
        </div>
        <div class="border border-warning ">
            <p class="fs-4 text-info px-3">¿Como puedo especificar el tipo de servicio que busco?</p>
            <p class="fs-5 px-3">En la parte superior derecha hay 2 opciones (software y hardware), selecciona una para especificar el tipo de servicio</p>
        </div>
        <div class="border border-warning ">
            <p class="fs-4 text-info px-3">¿Por que hay servicios que tienen un candado?</p>
            <p class="fs-5 px-3">El candado lo tienen ya que estan deshabilidatos por alguna razon como mantenimiento</p>
        </div>
        <div class="border border-warning ">
            <p class="fs-4 text-info px-3">¿Que hago si quiero añadir mi servicio?</p>
            <p class="fs-5 px-3">----</p>
        </div>
    </div>
</div>
@endsection