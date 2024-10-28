<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Animal details</title>
</head>

<body>



    <form action="{{route('homepage')}}">

        <button type="submit">Go back</button>
    </form>
    <form action="{{ route('dog.edit', ['name' => $details->name]) }}">

        <input type="hidden" name="id" value="{{$details->id}}">
        <button type="submit">Edit</button>
    </form>
    <li>Name: {{$details->name}}</li>
    <li>Breed: {{$details->breed}}</li>
    <li>Age: {{$details->age}}</li>
    <li>Weight: {{$details->weight}}</li>
    <img src="/images/pets/{{ $details->photo->path }}" alt="">

</body>

</html>