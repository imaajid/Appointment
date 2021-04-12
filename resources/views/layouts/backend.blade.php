<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Darzi.pk</title>
    @include('backend.partials.styles')
    @yield('styles')
</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
@include('backend.partials.sidebar')
<!-- partial -->

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
    @include('backend.partials.navbar')
    <!-- partial -->

        <div class="page-content">
            @yield('content')
        </div>

        <!-- partial:partials/_footer.html -->
    @include('backend.partials.footer')
    <!-- partial -->

    </div>
</div>

@include('backend.partials.scripts')
@yield('scripts')
</body>
</html>
