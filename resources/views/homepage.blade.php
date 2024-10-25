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
<li>{{$result->first_name}}</li>
<li>{{$result->animals[0]->name}}</li>

@endforeach

</html>