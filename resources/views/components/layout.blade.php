<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-body-tertiary">

    <x-navbar />

    <div class="min-vh-100 ">
        {{ $slot }}
    </div>

    <x-footer />

    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/597034f355.js" crossorigin="anonymous"></script>
</body>

</html>
