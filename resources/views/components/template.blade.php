<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}Sistem Pengelolaan Data Mahasiswa</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/1f302a994f.js" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    <x-navbar />
    <main class="my-5 container flex-grow-1">
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
