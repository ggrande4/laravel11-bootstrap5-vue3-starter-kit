<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Laravel-bootstrap-vue starter kit</title>

    <meta name="description" content="Tools Platform">
    <meta name="robots" content="index, follow">

    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">

    <!-- To avoid the FOUC (Flash of Unstyled Content) in development -->
    @if (app()->environment('local') && file_exists(public_path('build/manifest.json')))
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssFile = $manifest['resources/js/app_vue.js']['css'][0];
        @endphp
        <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
    @endif

    @vite('resources/js/app_vue.js')
</head>

<body>

<div id="page-container">
    <main id="main-container">
        {{ $slot }}
    </main>
</div>
</body>
</html>
