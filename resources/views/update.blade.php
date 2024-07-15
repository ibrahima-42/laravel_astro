<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Modifier Astronaute</h2>
    @if($errors->any() )
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('astro.update', $astros->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nom" placeholder="nom" value="{{$astros->nom}}">
        <input type="text" name="prenom" placeholder="prenom" value="{{$astros->prenom}}">
        <input type="text" name="email" placeholder="email" value="{{$astros->email}}">
        <input type="text" name="navete" placeholder="navete" value="{{$astros->navete}}">
        <button type="submit"> modifier </button>
    </form>
    <li><a href="{{ '/liste' }}">voir liste</a></li>
</body>
</html>
