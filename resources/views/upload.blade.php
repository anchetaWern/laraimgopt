<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laraimgopt</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <form action="/upload" class="dropzone" id="photosDropzone">
        @csrf
    </form>


    <!-- <script src="{{ asset('js/dropzone.js') }}"></script> -->
</body>
</html>
