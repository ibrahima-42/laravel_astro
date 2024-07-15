<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="detail">
        <h3>details du mouton</h3>
        <div>
            <div>Nom: {{ $astros->nom }}</div>
            <div>Prenom: {{ $astros->prenom }}</div>
            <div>Email: {{ $astros->email }}</div>
            <div>Navate: {{ $astros->navete }}</div>
        </div>
        <a href="{{ '/liste '}}">retour</a>
    </div>
</body>
</html>
