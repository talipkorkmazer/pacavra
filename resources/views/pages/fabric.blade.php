@php use App\Helpers\BladeHelper; @endphp
<script src="{{ asset('public/public/js/3d/3d.js') }}" type="text/javascript"></script>

@extends('layouts.default')
@section('content')
    <section class="page-section pt-0 fabric">
        <div class="container relative p-0 mr-3">

            <div class="row">

                <div id='canvas' class="col-lg-7 mb-md-60 wow fadeScaleIn animated" data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeScaleIn;">

                </div>

                <div class="col-lg-4 offset-lg-1 d-flex align-items-center wow fadeInUpShort animated"
                     style="visibility: visible; animation-name: fadeInUpShort;">
                    <div class='p-2'>
                        <h2 class="section-title mb-50 mb-sm-20">{{ $fabric->name }}</h2>
                        <p>{{ $fabric->description }}</p>
                        @php
                            $images = BladeHelper::getImages($fabric->images)
                        @endphp
                        <div style='display: grid; grid-auto-flow: column; grid-gap: 10px;'>
                            @foreach($images as $image)
                                <div style="display: inline-block; position: relative;">
                                    <i style='position: absolute' class="fas fa-download" aria-hidden="true"
                                       data-download='{{ asset("public/public/$image") }}'></i>
                                    <img class='fabric-texture' style='width: 100px; height: 100px; border: 1px solid black; cursor:pointer;'
                                         src='{{ asset("public/public/$image") }}'
                                         alt='{{ $fabric->name }}'>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
