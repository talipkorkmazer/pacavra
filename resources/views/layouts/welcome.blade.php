<!DOCTYPE html>
<html lang="tr">
<head>
    @include('includes.head')
</head>
<body class="appear-animate">
<!-- Page Wrap -->
<div class="page" id="top">
    <main id="main">
        @yield('content')
    </main>
</div>
<!-- End Page Wrap -->

@include('includes.scripts')
</body>
</html>
