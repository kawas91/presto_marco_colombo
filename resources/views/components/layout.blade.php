<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto</title>
    @vite('resources/css/app.css')
</head>

<body>

    <x-navbar />

    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-footer />

    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/597034f355.js" crossorigin="anonymous"></script>
</body>

</html>
