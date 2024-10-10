<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Мой сайт' }}</title>
    <link rel="stylesheet" href="{{ asset('themes/' . session('theme', 'classic') . '/styles.css') }}">
</head>
<body>
    {{ $slot }}
</body>
</html>
