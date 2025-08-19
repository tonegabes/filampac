<head>
  <meta charset="utf-8">

  <meta name="application-name" content="{{ config('app.name') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts -->
  <x-head.fonts />

  <!-- Icon Library -->
  {{-- <script src="https://unpkg.com/@phosphor-icons/web"></script> --}}

  <title>{{ config('app.name') }}</title>

  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>

  @filamentStyles

  @vite('resources/css/app.css')

</head>
