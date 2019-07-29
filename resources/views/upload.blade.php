<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Laraimgopt</title>
    <link rel="stylesheet" href="{{ asset('css/uploads.css') }}" />
    <script src="{{ asset('js/uploads.js') }}"></script>
  </head>
  <body>
    <form action="/upload" class="dropzone" id="photosDropzone">
      @csrf
    </form>
  </body>
</html>
