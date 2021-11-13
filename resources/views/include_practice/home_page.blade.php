<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Include Practice</h2>
    {{$data1}}
    {{-- {{$pincode}} can't see this --}}
    @include('include_practice.contact',['pincode'=>234324])
    @includeif('include_practice.contact',['pincode'=>234324])
    @includeWhen($check,'include_practice.contact',['pincode'=>234324])
    @includeUnless(true,'include_practice.contact',['pincode'=>234324])

    {{-- @foreach ($students as $item)
        @include('name')
    @endforeach --}}

    {{-- @each('include_practice.contact', $students, 'stu'); --}}

   {{-- @once
       it will run once,
   @endonce --}}

   
</body>
</html>