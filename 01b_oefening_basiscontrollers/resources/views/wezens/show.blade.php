<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wezens</title>
</head>
<body>
<p><a href="{{ route('home') }}">Home</a></p>
    <h1>wezens: {{ $wezen }}</h1>
    <p>Als er geen OPTIONELE parameter wordt megegevens (bvb: 'draak') dan komt de STANDAARD 'wilde hond' in beeld</p>
</body>
</html>