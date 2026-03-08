@props([
    'title' => 'Laravel'
])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-700 p-5 max-w-xl mx-auto">
<main>
    {{ $slot }}
</main>
</body>
</html>
