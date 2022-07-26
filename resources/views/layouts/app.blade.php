<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    {{-- link css --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    {{-- link js --}}
    <link rel="stylesheet" href="{{asset("js/app.js")}}">
</head>
<body>
    
<header>
    @include('partials.header')
</header>
    

<main>
    @yield('page_content')
</main>


<footer>
    @include('partials.footer')
    @include('partials.socials')
</footer>
    
    
</body>
</html>