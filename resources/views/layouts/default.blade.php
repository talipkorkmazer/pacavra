<!DOCTYPE html>
<html lang="tr">
<head>
    @include('includes.head')
</head>
<body class="appear-animate">

    @include('includes.page-loader')

    @include('includes.skip-to-content')

<!-- Page Wrap -->
<div class="page" id="top">

    @include('includes.navbar')

    <main id="main">

        @yield('content')

    </main>

    @include('includes.footer')

</div>
<!-- End Page Wrap -->

@include('includes.scripts')
</body>
</html>
