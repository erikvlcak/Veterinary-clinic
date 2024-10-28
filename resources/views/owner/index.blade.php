<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Owner details</title>
</head>

<body>

    <form action="{{route('owner.update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$owner->id}}">
        First name: <input type="text" name="first_name" value="{{$owner->first_name}}">
        Surname: <input type="text" name="surname" value="{{$owner->surname}}">
        Email: <input type="text" name="email" value="{{$owner->email}}">
        Phone: <input type="text" name="phone" value="{{$owner->phone}}">
        Address: <input type="text" name="address" value="{{$owner->address}}">
        <button type="submit">Save changes</button>
    </form>

</body>

</html>