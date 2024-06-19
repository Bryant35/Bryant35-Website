<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello!!!</title>
    @vite('resources/css/app.css')
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body class="bg-gradient-to-r from-light-lavender via-light-blue to-light-green">
    @include('navbar')
    <div class="container mx-auto">
        <h1 class=" mt-5 text-3xl italic hover:not-italic font-bold underline text-white">
            Portofolio
        </h1>
    </div>
</body>
</html>
