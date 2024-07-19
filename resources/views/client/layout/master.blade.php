<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Long News')</title>
    @include('client.layout.partials.link')
</head>

<body>
    <div class="container">
        <div class="row">
            @include('client.layout.partials.head')
        </div>
        <div class="row p-5">
            @include('client.layout.partials.nav')
        </div>
        <div class="row">
            @yield('content')
        </div>
        <div class="row bg-primary">
            @include('client.layout.partials.nav')
        </div>
    </div>
</body>

</html>