<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 hide-scrollbar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body class="h-full hide-scrollbar w-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-screen flex flex-col " x-data="{ isOpen: false }" style="background: linear-gradient(to bottom, #fcf097, #f2adec);">
  <x-navbar>{{ $title }}</x-navbar>

 <x-header>{{ $title }}</x-header>
  <main>
    <div class="py-6 w-screen flex-grow" >
      <!-- Your content -->
      {{ $slot }}
    </div>
  </main>

</div>
  <x-footer>{{ $title }}</x-footer>
</body>
</html>