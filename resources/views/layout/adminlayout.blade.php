<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <h3>adminlayout</h3>
    <hr>

    {{-- different access by name --}}
    {{-- @yield('hero')
    @yield('contact') --}}

    {{-- same name access --}}
    @yield('content')


    {{-- show dile section ekhane create o hobe yield o hobe,--}}
    @section('d-section')
        <h2>Default Section</h2>
    @show

    {{-- 
        *)1st layout banabo jta common 
        *)extend korbo jetkhan tkeke section pass korbo,
        *)same name e section banate pari or different o pari,
        *)d-section use korte pari header er khetre,
        *)@parent show korate pari,    
    --}}






</body>

</html>
