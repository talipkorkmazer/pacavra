@php use App\Helpers\BladeHelper; @endphp
        <!--<script src="{{ asset('public/public/js/3d/3d.js') }}" type="text/javascript"></script>-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
@extends('layouts.default')
@section('content')
    @php
        $images = BladeHelper::getImages($fabric->images)
    @endphp
    <section class="page-section pt-0 fabric">
        <div class="container relative mr-3">

            <div class="row">
                <!--<div id='canvas' class="col-lg-7 mb-md-60 wow fadeScaleIn animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeScaleIn;"></div>-->

                <div class="col-lg-7 mb-md-60 wow fadeScaleIn animated" data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeScaleIn;">
                    <a href="{{ asset("public/public/$images[0]") }}" data-fancybox>
                        <img src="{{ asset("public/public/$images[0]") }}" alt="{{ $fabric->name }}">
                        <div style="background-color: white;position: absolute;top: 90%;right: 91%;width: 40px;border-radius: 20px;height: 40px;display: flex;align-items: center;justify-items: center;justify-content: center;">
                            <i class="fa-solid fa-maximize"></i>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 offset-lg-1 d-flex align-items-center wow fadeInUpShort animated"
                     style="visibility: visible; animation-name: fadeInUpShort;">
                    <div class='p-2'>
                        <h2 class="section-title mb-50 mb-sm-20">{{ $fabric->name }}</h2>
                        <p>{{ $fabric->description }}</p>

                        <div style='display: grid; grid-auto-flow: column; grid-gap: 10px;'>
                            @foreach($images as $image)
                                <div style="display: inline-block; position: relative;">
                                    <i style='position: absolute' class="fas fa-download" aria-hidden="true"
                                       data-download='{{ asset("public/public/$image") }}'></i>
                                    <img class='fabric-texture'
                                         style='width: 100px; height: 100px; border: 1px solid black; cursor:pointer;'
                                         src='{{ asset("public/public/$image") }}'
                                         alt='{{ $fabric->name }}'>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="fabric-specifications">
                <h4 style="position: relative;line-height: 1.2em;">Specifications</h4>
                {!! $fabric->specifications !!}
            </div>
        </div>
    </section>
@endsection
