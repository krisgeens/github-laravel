<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>01a - basisrouting</title>


    </head>
    <body>

    <h1>Welkom in de fantasy adventure world</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('wezens.show') }}">Wezens</a></li>
            <li><a href="{{ route('wezens.show', 'draak') }}">Draak</a></li>
            <li><a href="{{ route('koninkrijk.noord') }}">Noordelijk Koninkrijk</a></li>
            <li><a href="{{ route('koninkrijk.zuid') }}">Zuidelijk Koninkrijk</a></li>
        </ul>
    </nav>

</body>
</html>
 