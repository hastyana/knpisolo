<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset ('img/logo.png') }}">
    </head>
    <body>
    
        @foreach ($file as $row)

            <iframe src="{{ asset ('storage/'.$file->file) }}" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>

        @endforeach

    </body>

</html>