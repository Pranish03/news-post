<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://unpkg.com/lucide-static@latest/font/lucide.css" />
</head>

<body class="font-serif">
    <x-header />

    <main class="max-w-300 mx-auto">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
