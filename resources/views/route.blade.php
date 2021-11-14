<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route Name Practice</title>
</head>

<body>

    {{-- url change will not effect --}}
    <a href="{{ route('route_blade') }}">route blade</a>
    {{-- <a href="{{ route('css-js-adding') }}">css js adding</a> --}}

    {{-- passing parameter in url  --}} 
    <a href="{{ route('css-js-adding', ['cat' => 'mobile','n'=>3]) }}">css js adding</a>
    {{-- <a href="{{route('include')}}">include</a> --}}
</body>

</html>
