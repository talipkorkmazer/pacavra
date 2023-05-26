@php use App\Helpers\BladeHelper; @endphp
@extends('layouts.default')
@section('content')
    <section class="page-section">
        <div class="container relative">
            <div class="row">
                <!-- Content -->
                <div class="col-md-12 mb-sm-80 order-first order-md-last">
                    <!-- Post -->
                    <div class="blog-item mb-80 mb-xs-40">

                        <!-- Text -->
                        <div class="blog-item-body">

                            <div class="lead mt-0">
                                <h1>
                                    PAÇAVRA Interior Design
                                </h1>
                                <p>
                                    {{ __('all.about_patch_work') }}
                                </p>
                            </div>
                            <!-- End Text -->
                        </div>
                        <!-- End Text -->

                    </div>
                    <!-- End Post -->
                </div>
                <!-- End Content -->
            </div>

        </div>
    </section>
@endsection
