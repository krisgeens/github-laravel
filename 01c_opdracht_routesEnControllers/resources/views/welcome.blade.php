<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>krisgeens 01c opdracht: Routes En Controllers</title>
</head>
<body>
    <h1>Welkom!</h1>
    <nav>
        <ul>
            <li><a href="/films/actie">Actie Films</a></li>
            <li><a href="/films/komedie">Komedie Films</a></li>
            <li><A href="/films/drama">Drama Films</a></li>

            <li><a href="{{ route('films.index') }}">Actie Films</a></li>
            <li><a href="{{ route('films.index') }}">Komedie Films</a></li>
            <li><A href="{{ route('films.index') }}">Drama Films</a></li>
        </ul>
    </nav>
</body>
</html>
