@extends('layouts.app')

@section('content')
<style>
    @media screen and (max-width: 570px) {
        .post {
            width: 85% !important;
        }
    }

</style>
<div class="container-lg bg-warning py-2">
    <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive align-items-center">
        <div class="post my-2 mx-1 h-auto border-3 rounded-3 border-danger px-1 pt-1"
            style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/zWRZ07RyeaQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive align-items-center">
        <div class="post my-2 mx-1 h-auto border-3 rounded-3 border-success px-1 pt-1"
            style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/hWbIlYzkls4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="post my-2 mx-1 h-auto border-3 rounded-3 border-success px-1 pt-1"
            style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/m5hazM-SgMg"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="post my-2 mx-1 h-auto border-3 rounded-3 border-success px-1 pt-1"
            style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/6fz1Mjv_VHc"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            </iframe>
        </div>
    </div>

    <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive align-items-center">
        <div class="post my-2 mx-1 h-auto border-3 rounded-3 border-primary px-1 pt-1"
            style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/B5AN_MmndlQ" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
        <div class="post my-2 mx-1 h-auto border-3 rounded-3 border-primary px-1 pt-1"
            style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/Q3aXKM7M0fA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="post my-2 mx-1 h-auto border-3 rounded-3 border-primary px-1 pt-1"
            style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/6UQcVcf_wdE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            </iframe>
        </div>
    </div>
</div>
@endsection
