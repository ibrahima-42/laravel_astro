<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <style>
        body {
            background-image: url('{{ asset ('images/Cloudy.svg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            {{--  height: 400px;  --}}
        }

        #fly {
            width: 100px;
            object-fit: contain;
        }

        h1,p {
            color: white
        }

        h1 {
            padding-top: 60px;
            padding-bottom: 8px;
            font-size: 50px;
            font-family:'poppins',sans-serif;
            text-align: center;
        }

        p {
            text-align: center;
        }

        .acc {
            display: flex;
            gap: 30px;
            margin-top: 80px;
            align-items: center;
            justify-content: center;
        }

        .acc a {
            color: white;
            text-decoration: none;
        }

        .acc :first-child {
            background-color: white;
            color: rgb(23, 105, 194);
            border: 2px solid rgb(23, 105, 194);
            padding: 11px;
            border-radius: 8px;
        }

        .acc :last-child {
            background-color: rgb(23, 105, 194);
            color: white;
            padding: 11px;
            border-radius: 8px;
            border: 2px solid white;
        }


    </style>

    <title>Document</title>
</head>
<body>
    <marquee behavior="" direction="right">
        <img id="fly" src="{{ asset('images/Anne_De_Angelis_Illustration-removebg-preview.png') }}" alt="">
    </marquee>
    <h1>A la découverte de  latmosphére  </h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit, qui.</p>

    <div class="acc">
        <a href="{{'/login'}}">Se connecter</a>
        <a href="{{'/register'}}">Creer un compte</a>
    </div>

    <marquee behavior="" direction="">
        <img id="fly" src="{{ asset('images/2d131efc-0f0b-49ff-b38d-f826b396d110-removebg-preview.png') }}" alt="">
    </marquee>
</body>
</html>
