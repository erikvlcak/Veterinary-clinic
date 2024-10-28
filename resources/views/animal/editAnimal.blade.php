<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Animal details</title>
</head>

<body>

    @if (count($errors) > 0)

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif


    <form action="{{ route('dog.edit.save')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$details->id}}">

        <input type="hidden" name="id" value="{{$details->id}}">
        <label for="name">Change name: </label>
        <input type="text" name="new_name" id="name" value="{{old('new_name' ?? '')}}">
        <label for="breed">Change breed: </label>
        <input type="text" name="new_breed" id="breed" value="{{old('new_breed' ?? '')}}">
        <label for="age">Change age: </label>
        <input type="text" name="new_age" id="age" value="{{old('new_age' ?? '')}}">
        <label for="weight">Change weight: </label>
        <input type="text" name="new_weight" id="weight" value="{{old('new_weight' ?? '')}}">

        <button type="submit">Save changes</button>

    </form>
    <form action="{{route('homepage')}}">

        <button type="submit">Go back</button>
    </form>
    <!-- <img src="/images/pets/{{ $details->photo->path }}" alt=""> -->

</body>

</html>