<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1>Welcome to St. Hector's Veterinary Clinic</h1>
</body>

<ul>List of owners and their pets</ul>
@foreach ($results as $result)


@csrf
<li>Owner: {{$result->first_name}} {{$result->surname}}</li>

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

for

</html>