<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @session('success')
    <div class="alert alert-success" role="alert">{!!$value!!}</div>
    @endsession

    @session('error')
     <div class="alert alert-danger" role="alert">{!!$value!!}</div>
    @endsession

    @session('errorMessage')
     <div class="alert alert-danger" role="alert">{!!$value!!}</div>
    @endsession

<div class="grid grid-cols-3 gap-4 h-full p-10">
    <div>
        <a
        button class="bg-yellow-600 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80" href="{{ route('rHook') }}">
            Receive webHook
        </button>
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Queue</th>
                <th scope="col">Payload</th>
              </tr>
        </thead>
        <tbody>
            @forelse ($jobs as $job)
                <tr>
                    <th>{{ $job->id }}</th>
                    <td>{{ $job->queue }}</td>
                    <td>{{ $job->payload }}</td>
              </tr>
            @empty
                <span style="color: #f00;">Nenhum job cadastrado!</span><br>
                <a href="{{ route('rHook') }}" class="btn btn-warning btn-sm me-1">Contactar administrador</a>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
