<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
</head>
<body>
    


<li><a href="{{ route('wezens.show', 'draak') }}">Draak</a></li>


    <nav>
        <ul>
            <li><a href="{{ route('films.show', 'terminator') }}">Terminator</a></li>
            <li><a href="{{ route('films.show', 'robocop') }}">Robocop</a></li>
            <li><a href="{{ route('films.show', 'diehard') }}">DrDie Hardak</a></li>
        </ul>
    </nav>


</body>
</html>