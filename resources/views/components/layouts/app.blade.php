<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Discover, connect, and collaborate with skilled professionals offering a wide range of services on Servimity. Your trusted platform to find the expertise you need, all in one place.">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}>
    <link rel="icon"
        type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Servevise' }}</title>
</head>

<body>
    <header class="flex h-0 justify-between items-center p-[3rem] bg-primary">
        <div class="flex-1">
            <a href="/" wire:navigate>
                <img class="w-40" src="{{ asset('logo/servevise_logo_light.png') }}" alt="ServeviseLogo">
            </a>
        </div>
        <nav class="flex flex-[2] justify-around items-center">
            <ul class="flex justify-around gap-10 font-bold text-white">
                <a class="hover:text-secondary hover:delay-150" href="/" wire:navigate>Home</a>
                <a class="hover:text-secondary hover:delay-150" href="/professional" wire:navigate>Find a
                    Professional</a>
                <a class="hover:text-secondary hover:delay-150" href="/contact-us" wire:navigate>Contact Us</a>
                <a class="hover:text-secondary hover:delay-150" href="/blog" wire:navigate>Blog</a>
            </ul>
            <ul class="flex justify-between gap-3">
                <li class="p-3 rounded-[5px] hover:opacity-95 bg-btn-primary text-white font-bold">
                    <a href="/login" wire:navigate>Log In</a>
                </li>
                <li
                    class="p-3 hover:opacity-95 bg-btn-secondary hover:shadow-slate-400 rounded-[5px] text-secondary font-bold">
                    <a href="/register" wire:navigate>Register</a>
                </li>
            </ul>
        </nav>
    </header>
    {{ $slot }}
</body>

</html>
