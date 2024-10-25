<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal details</title>
</head>

<body>
    @foreach ($animals as $animal)
    <li>{{$animal->name}}</li>
    @endforeach
    <?php dd($animals) ?>
</body>

</html>