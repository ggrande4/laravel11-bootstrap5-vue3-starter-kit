<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Laravel11-bootstrap5-vue3 starter kit</title>

    <meta name="description" content="Laravel 11 + Bootstrap 5 + Vue.js 3 ">
    <meta name="robots" content="index, follow">

    <link rel="shortcut icon" href="{{ asset('/assets/media/favicons/favicon.png') }}">

    <!-- To avoid the FOUC (Flash of Unstyled Content) in development -->
    @if (app()->environment('local') && file_exists(public_path('build/manifest.json')))
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssFile = $manifest['resources/js/app_vue.js']['css'][0];
        @endphp
        <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
    @endif

    @routes
    @vite('resources/js/app_vue.js')
</head>

<body>
    <div id="app"></div>
</body>

</html>
