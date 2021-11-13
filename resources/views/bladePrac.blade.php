<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Practice</title>
</head>

<body>

       {{-- Blade Template Crash Course 
            00:00:00 Introduction to Blade
            00:01:37 Theory
            00:12:01 Creating Project
 --}}

    {{-- 00:15:17 Displaying Data --}}
    {{ $name }}

    {{-- 00:24:04 Calling Function --}}
    {{ time() }}
    {{ print_r(['arfad']) }}

    <br><br>

    {{-- 00:25:22 If Directive --}}

    @if (true)
        <h1>If Declarative Run</h1>
    @endif

    {{-- 00:27:04 If Else Directive --}}

    @if (true)
        <h2>If else run</h2>
    @else
        <h3>else part</h3>
    @endif

    {{-- 00:30:17 If Elseif Else directive --}}

    @if (false)
        if run
    @elseif(true)
        elseif run
    @else
        else run
    @endif

    {{-- 00:32:18 Unless directive --}}

    @unless(false)
        <br>unless run by false
    @endunless

    {{-- 00:34:02 isset directive --}}

    @isset($name)
        <br> isset
    @endisset

    {{-- 00:37:49 empty directive --}}

    @empty($name1)
        <br> can't run
    @endempty

    {{-- 00:39:40 production directive --}}
    @production
        production run
    @endproduction

    {{-- 00:40:23 specific env directive --}}
    @env('local')

    @endenv
    {{-- 00:41:03 multiple env directive --}}
    @env(['local', 'staging'])

    @endenv

    {{-- 00:41:52 switch directive --}}
    @switch($name = 'arfan')
        @case('arfan')
            arfan swith call <br>
        @break
        @case('adnan')
            adnan switch call <br>
        @break
        @default
            <br> default run
    @endswitch

    {{-- 00:45:25 for loop --}}

    @for ($i = 0; $i <= 10; $i++)
        {{ $i }} <br>
    @endfor

    {{-- 00:47:42 foreach loop --}}

    @foreach (range(1, 10) as $item)
        {{ $item }}
    @endforeach

    {{-- php code write --}}
    @php
        $collection = [];
        $i = 0;
    @endphp

    {{-- 00:49:46 forelse empty loop --}}
    @forelse ($collection as $item)

    @empty
        <br> no data found
    @endforelse

    {{-- 00:51:37 while loop --}}

    @while (false)

    @endwhile

    {{-- 00:52:35 break and continue directives --}}
    <br>
    @for ($i = 0; $i < 5; $i++)
        {{-- @if ($i == 3)
            @break;
        @endif --}}

    @break($i ==3)

    {{ $i }}
    @endfor

    {{-- 00:56:40 loop variables --}}
    @php
        $collection = [2, 3, 4, 5, 6];
    @endphp

    @foreach ($collection as $item)
        {{ $item }}
        @if ($loop->first)
            first loop run
        @endif

    @endforeach

</body>

</html>
