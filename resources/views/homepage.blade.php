<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Homepage</title>
</head>

<body>
    <h1>Welcome to St. Hector's Veterinary Clinic</h1>


    @if(Session::has('success_message'))

    <div class="alert alert-success">

        {{ Session::get('success_message') }}

    </div>

    @endif

    <h3>List of owners and their pets</h3>
    @foreach ($results as $result)
    <div class="item">
        <li>Owner: {{$result->first_name}} {{$result->surname}}</li>

        <form action="{{route('owner.details')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$result->id}}">
            <button class="human" type="submit">See details about {{$result->first_name}}</button>
        </form>


        @foreach ($result->animals as $key => $animal)

        <li>Dog {{$key+1}} - {{$animal->name}} ({{$animal->breed}} )</li>
        <form action="{{route('dog.details', ['name' => $animal->name])}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$animal->id}}">
            <button type="submit">See details about {{$animal->name}}</button>
        </form>

        @endforeach

    </div>

    @endforeach

</body>

</html>