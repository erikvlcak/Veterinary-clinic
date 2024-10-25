<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal details</title>
</head>

<body>
    <form action="{{route('homepage')}}">
        @csrf
        <button type="submit">Go back</button>
        <li>Name: {{$details->name}}</li>
        <li>Breed: {{$details->breed}}</li>
        <li>Age: {{$details->age}}</li>
        <li>Weight: {{$details->weight}}</li>
        <img src="/images/pets/{{ $details->photo->path }}" alt="">
    </form>

</body>

</html>