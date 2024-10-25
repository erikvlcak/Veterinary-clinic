<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="resources/css/app.css">
</head>

<body>
    <main>
        <h1>Welcome to St. Hector's Veterinary Clinic</h1>

        <h2>List of owners and their pets</h2>
        <div class="details">
            @foreach ($results as $result)

            @csrf
            <li>Owner: {{$result->first_name}} {{$result->surname}}</li>

            <form action="{{route('owner.details')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$result->id}}">
                <button type="submit">See details about {{$result->first_name}}</button>
            </form>

            @foreach ($result->animals as $key => $animal)

            <li>#{{$key+1}} - {{$animal->name}} ({{$animal->breed}} )</li>
            <form action="{{route('dog.details')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$animal->id}}">
                <button type="submit">See details about {{$animal->name}}</button>
            </form>

            @endforeach

            <div>---</div>
            @endforeach
        </div>
    </main>
</body>

</html>