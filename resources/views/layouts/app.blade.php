<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/svg+xml"  href="{{ asset('svgs/logo.svg') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{ $description ?? 'Rental mobil di Solo dengan berbagai macam pilihan mobil, booking online, bayar online.' }}">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:title" content="{{ $title ?? 'Vrom - Tempat Rental Mobil Di Solo' }}">
        <meta property="og:description" content="{{ $description ?? 'Rental mobil di Solo dengan berbagai macam pilihan mobil, booking online, bayar online.' }}">
        <meta property="og:image" content="{{ $ogImage ?? asset('img/thumbnail-02.webp') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        
        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen  ">
           <x-navbar/>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        @livewireScripts
        @stack('script')
        
    </body>
</html>
