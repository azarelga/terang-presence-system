<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$slot}}</title>
    <link rel='icon' href='sun.png' >
  @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <x-header>{{$title}}</x-header>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
