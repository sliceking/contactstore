<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ContactStore</title>
</head>

<body>
  <div class="container">
    <div id="app">
      <contacts></contacts>
    </div>
  </div>

  <script src="/js/app.js"></script>
</body>

</html>
