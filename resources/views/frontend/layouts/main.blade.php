<!DOCTYPE html>
<html lang="en">

<head>
    <title>MotoNepal</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.layouts.style')
</head>

<body>

    <div class="super_container">

        <!-- Header -->
        @include('frontend.layouts.header')

        <!-- Home -->
        @yield('main-content')

        <!-- Footer -->
        @include('frontend.layouts.footer')
    </div>
    @include('frontend.layouts.script')

</body>

</html>
