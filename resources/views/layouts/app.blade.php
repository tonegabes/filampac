<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head.index />

<body class="antialiased">

  @livewire('notifications')

  @yield('content')

  @filamentScripts

  @vite('resources/js/app.js')

</body>

</html>
