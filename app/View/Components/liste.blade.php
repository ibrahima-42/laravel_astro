<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <title>Document</title>
</head>

<body>
    @if (session ('succes'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
    @endif
    <h1>liste Astronautes</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Navete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($astro as $astro)
                <tr>
                    <td>{{ $astro->id }}</td>
                    <td>{{ $astro->nom }}</td>
                    <td>{{ $astro->prenom }}</td>
                    <td>{{ $astro->email }}</td>
                    <td>{{ $astro->navete }}</td>
                    <td>
                    {{--  <form id="dd" action="{{ route('Elevage.destroy', $astro->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                    <a href="{{ route('edit.liste', $farm->id) }}">modifier</a>
                    <a href="{{ route('Elevage.details', $farm->id) }}">details</a>  --}}
                    </>
                </tr>
            @endforeach
        </tbody>
    </table>
    <li><a href="{{ '/new' }}">Ajouter Astronaute</a></li>
</body>

</html>
