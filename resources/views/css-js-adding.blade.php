<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Js adding</title>

    {{-- External CSS adding By CDN Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- External CSS by Public Folder --}}
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    {{-- Internal CSS --}}
    <style>
        h2 {
            color: red;
        }

        img {
            width: 100px;
        }

    </style>

</head>

<body>
    <h2>CSS JS Adding</h2>
    {{-- Inline CSS --}}
    <h5 style='color:green;'>CSS JS Adding</h5>

    {{-- img link by simple,assets,url, --}}
    <img src="assets/img/arfan.jpg" alt="">
    <img src="{{ asset('assets/img/arfan.jpg') }}" alt="">
    <img src="{{ url('assets/img/arfan.jpg') }}" alt="">
    <img src="{{ asset('assets') }}/img/arfan.jpg" alt="">
    <img src="{{ url('assets') }}/img/arfan.jpg" alt="">

    {{-- External JS by cdn link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    {{-- External CSS by Public Folder --}}
    <link rel="stylesheet" href="assets/js/app.js">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/app.js">
    <link rel="stylesheet" href="{{ url('assets') }}/js/app.js">
    <link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">
    <link rel="stylesheet" href="{{ url('assets/js/app.js') }}">

    {{-- Inline JS --}}
    <script>
        alert('Coming from Inline-js');
    </script>
</body>

</html>
