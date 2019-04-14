<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laraimgopt</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="flexbox">
        @foreach($photos as $p)
          <div class="item">
            <img src="{{ $base_url . $p['url'] }}" />
          </div>
        @endforeach
    </div>
</body>
</html>
