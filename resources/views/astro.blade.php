<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>

    <style>
        body {
            background-image: url('{{ asset ('images/Cloudy.svg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
        }

        #list {
            color: white;
        }

        table {
            background-color: white;
            padding: 20px
            
        }
    </style>
</head>

<body>
    @if (session('succes'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
    @endif
    <h1 id="list">liste Astronautes</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Navete</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($astros as $astro)
                <tr>
                    <td>{{ $astro->id }}</td>
                    <td>{{ $astro->nom }}</td>
                    <td>{{ $astro->prenom }}</td>
                    <td>{{ $astro->email }}</td>
                    <td>{{ $astro->navete }}</td>
                    <td class="act">

                        @if (Auth::check() && Auth::user()->role ==='admin')
                        <form id="dd" action="{{ route('astro.destroy', $astro->id) }}" method="DELETE">
                            @csrf
                            @method('DELETE')
                            <button id="del" type="submit"
                                onclick="return confirm('Are you sure you want to delete this post?')"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="34" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trash">
                                    <path d="M3 6h18" />
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                </svg></button>
                        </form>
                        <a id="mod" href="{{ route('astro.edit', $astro->id) }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="34" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-notebook-pen">
                                <path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4" />
                                <path d="M2 6h4" />
                                <path d="M2 10h4" />
                                <path d="M2 14h4" />
                                <path d="M2 18h4" />
                                <path
                                    d="M21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                            </svg></a>
                        @endif
                        <a id="det" href="{{ route('astro.detail', $astro->id) }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="34" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-info">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 16v-4" />
                                <path d="M12 8h.01" />
                            </svg></a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (Auth::check() && Auth::user()->role ==='admin')
    <li id="ajout"><a href="{{ '/create' }}">Ajouter Astronaute</a></li>
    @endif
    <li id="back"><a href="{{ '/welcome' }}">acceuil </a></li>
</body>

</html>
