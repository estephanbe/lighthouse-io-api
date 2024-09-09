<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Belight Community') }}</title>

    <meta name="description" content="أول منصة تفاعلية للبرامج المسيحية باللغة العربية">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @if (isset($includeMetaReference))

        @if ($media->type === 'creator')
            <meta property="al:ios:url" content="belightcommunity://creator/{{ $media->uuid }}" />
        @else
            <meta property="al:ios:url"
                content="belightcommunity://media/{{ $media->uuid }}/type/{{ $media->type }}" />
        @endif

        <meta property="al:android:url" content="belight-community://{{ $media->type }}/{{ $media->uuid }}" />
        <meta property="al:ios:app_store_id" content="1613518960" />
        <meta property="al:ios:app_name" content="Belight" />

        <meta property="al:android:app_name" content="Belight" />
        <meta property="al:android:package" content="tv.belight.mobile.android" />
        <meta property="al:web:url" content="{{ url()->current() }}" />

        <meta property="og:title" content="{{ $media->title }}" />
        <meta property="og:type" content="video.movie" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:image" content="{{ $media->full_image_url }}" />

        <meta name="twitter:title" content="{{ $media->title }}" />
        <meta name="twitter:description" content="Available on Belight Application">
        <meta name="twitter:image" content="{{ $media->full_image_url }}" />
        <meta name="twitter:card" content="summary_large_image">
        <meta property="al:web:should_fallback" content="false" />
    @else
    @endif

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
