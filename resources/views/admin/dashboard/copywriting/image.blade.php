<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset ('img/logo.png') }}">
    </head>
    <body>
    
        @foreach ($image as $row)

            <img src="{{ asset ('storage/'.$image->gambar) }}" alt="{{ $image->gambar }}" title="{{ $image->judul }}" class="w-full h-auto object-cover" />

        @endforeach

    </body>

</html>