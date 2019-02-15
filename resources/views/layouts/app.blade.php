{{-- Layout,

    For at få en ensformet struktureret hjemmeside, bruges denne fil til.
    Alle undersider 'extends' fra denne side.

    Herunder vil denne template bruges til at importere assets, i form af js, fonts, etc.

    --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
    {{-- Navigationsbar bliver indlæst --}}
    @include('inc.navbar')

    {{-- Bootstrap container --}}
        <div class="container">

            {{-- Meddelelser (success/errors) vises i toppen af containeren --}}
            @include('inc.messages')

            

            {{-- Yield, leder efter en section med navnet 'content' --}}
            @yield('content')
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>