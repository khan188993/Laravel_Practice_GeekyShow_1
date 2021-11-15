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
        Username:<input type="text" value="{{old('username')}}" name="username" id="">
        Password:<input type="password" value="{{old('password')}}" name="password" id="">
        <button type="submit">Submit</button>
    </form>

    {{-- @if(session->has('status'))
        {{session('status')}}
    @endif --}}
</body>
</html>