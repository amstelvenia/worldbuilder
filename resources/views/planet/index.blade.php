<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>
<body>
    @foreach($planet as $planets)
        <p>{{ $planets->name }}</p>
        <p>{{ $planets->mass }}</p>
        <p>{{ $planets->vol_radius }}</p>
    @endforeach
</body>
</html>