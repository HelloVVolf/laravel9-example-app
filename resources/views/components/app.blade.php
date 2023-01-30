<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  @vite('resources/css/app.css')

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <nav class="flex h-[5vh] items-center justify-between bg-gray-200 px-6">Navbar
    <ul class="flex gap-6">
      <li><a href="{{ route('student') }}">Student</a></li>
      <li><a href="{{ route('student-create') }}">Student Create</a></li>
    </ul>
  </nav>
  <main class="p-6">
    <x-card class="my-2 bg-green-500">
      <x-slot:name class="text-xl">
        Here we go
        {{-- {{ $component }} --}}
      </x-slot:name>
      This is slot!
    </x-card>

    {{ $slot }}
  </main>
</body>

</html>
