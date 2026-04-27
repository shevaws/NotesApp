<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="background: linear-gradient(to right, #eef2f3, #dfe9f3); min-height:100vh;">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
<div class="container">

<a class="navbar-brand fw-bold" href="/notes">
📝 NoteSpace
</a>

<div class="ms-auto d-flex align-items-center gap-3">

<span class="text-white">
Hi, {{ Auth::user()->name }}
</span>

<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-light btn-sm">
Logout
</button>
</form>

</div>
</div>
</nav>

<div class="container mt-5">
{{ $slot }}
</div>

</body>
</html>
