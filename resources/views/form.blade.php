<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form tutorials</title>
</head>

<body>
    <h1>Form Submission:</h1>
    <form action="form" method="post">
        @csrf
        Username:<input type="text" value="{{ old('username') }}" name="username" id="">
        Password:<input type="password" value="{{ old('password') }}" name="password" id="">
        country:<input type="text" value="{{ old('country') }}" name="country" id="">
        <button type="submit">Submit</button>
    </form>
    
    {{-- errors array show here --}}
    {{-- {{ $errors }} --}}

    {{-- looping all errors --}}

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $message)
            {{ $message }}
        @endforeach
    @endif --}}

    {{-- SINGLE message SHOW BY IT --}}
    {{-- @if ($errors->any())
        @foreach ($errors->get('username') as $message)
            {{ $message }}
        @endforeach
    @endif --}}

    {{-- @if ($errors->has('password'))
    {{$errors->first('password')}}
    @endif --}}


    {{-- basic error will show here most used --}}
    @error('password')
        {{ $message }}
    @enderror

    @error('username')
        {{ $message }}
    @enderror

    <h2>Form Data:</h2>

    @if (!empty($requestData))
        @foreach ($requestData as $item)
            {{ print_r($item) }}
        @endforeach
    @endif


</body>

</html>
