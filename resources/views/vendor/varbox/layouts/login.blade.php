<!doctype html>
<html lang="en" dir="ltr">
<head>
    @include('varbox::layouts.partials._head')
</head>
<body>
    <div class="page">
        <div class="page-single">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    @include('varbox::layouts.partials._footer')
</body>
</html>
