<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Ajouter un astronaute</h2>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <form action="{{ route('astro.create') }}" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="navete" placeholder="navete">
        <button type="submit"> enregistrer</button>
    </form>
    <li><a href="{{ '/liste' }}">voir liste</a></li>
</body>
</html>
