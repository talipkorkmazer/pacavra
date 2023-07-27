@php use App\Helpers\BladeHelper; @endphp
@extends('layouts.default')
@section('content')
    <!-- Home Section -->
    <section class="small-section bg-dark-alfa-50 bg-scroll light-content"
             data-background="{{ asset("/public/public/$category->image") }}" id="home"
             style="background-image: url({{ asset("/public/public/$category->image") }});">
        <div class="container relative">

            <div class="row">

                <div class="col-md-8">
                    <div class="wow fadeInUpShort animated" data-wow-delay=".1s"
                         style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUpShort;">
                        <h1 class="hs-line-7 mb-20 mb-xs-10">{{$category->name}}</h1>
                    </div>
                    <div class="wow fadeInUpShort animated" data-wow-delay=".2s"
                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpShort;">
                        <p class="hs-line-6 opacity-075 mb-20 mb-xs-0">
                            {{$category->description}}
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mt-30 wow fadeInUpShort animated"
                     style="visibility: visible; animation-name: fadeInUpShort;">
                    <div class="mod-breadcrumbs text-end">
                        <a href="#">{{ __('all.home') }}</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<a
                                href="#">{{ __('all.categories') }}</a>&nbsp;<span
                                class="mod-breadcrumbs-slash">•</span>&nbsp;<span>{{ $category->name }}</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Home Section -->

    <!-- Section -->
    <section class="page-section pt-0">
        <div style="margin-top: 3%;" class="container relative">
            <!-- Photo Grid -->
            <div class="row mb-30 mb-xs-10">
                <div class="col-3">
                    <h4>Collections</h4>
                    @foreach ($collections as $collection)
                        <div class="form-check">
                            <input class="form-check-input"
                                   @if(array_key_exists('collection', $params) &&(int) $params['collection'] === (int) $collection['id']) checked
                                   @endif type="checkbox" value="{{ $collection['id'] }}"
                                   id="{{ $collection['name'] }}">
                            <label class="form-check-label" for="{{ $collection['name'] }}">
                                {{ $collection['name'] }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="col-9">
                    <div class="row">
                        @foreach ($fabrics->items() as $fabric)
                            <div class="col-md-3">
                                @php
                                    $image = BladeHelper::getImages($fabric->images)[0];
                                @endphp
                                <div class="post-prev-img mb-10 wow fadeScaleIn" data-wow-duration="1s">
                                    <a href="/fabric/{{ $fabric->slug }}" class="">
                                        <img src="{{ asset("public/public/$image") }}" alt="{{ $fabric->name }}"/></a>
                                </div>
                                <h4 class="text-center">{{ $fabric->name }}</h4>
                            </div>
                            <!-- End Photo Item -->
                        @endforeach
                    </div>
                </div>


                {{ $fabrics->links() }}
            </div>
            <!-- End Photo Grid -->
        </div>
    </section>
    <!-- End Section -->
@endsection
