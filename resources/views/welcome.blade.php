<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>

    {{-- 
    *)class base component property define korte hoi and function pass korte parbo,
    *)anonymous component functions pass krte parbo na,    
    --}}

    @php
        $desc = 'card desction 1';
    @endphp
    <x-card title='Title of card' sub-title='sub title of card' :desc=$desc class='myclass servieClass'/>
    <x-card title='Title of card' sub-title='sub title of card' :desc=$desc/>

    <x-slider_ano class='sliderClass'/>
    <x-slider_ano />
    
    
</body>
</html>