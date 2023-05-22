<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>Videos - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="header" class="overflow-hidden">
        <div class="relative">
            <img src={{ asset ('img/manahan.png') }} alt="background" class="w-full h-80 object-cover mt-0 bg-center bg-no-repeat">
            <h1 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-center font-roboto font-extrabold text-white-fafafa">
                Video</h1>
        </div>        
    </header>

    <section id="Videos" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 flex flex-col justify-center">
            <div class="w-full px-5 md:px-10 flex flex-col justify-center items-center">
                
                @foreach ($video as $row)
                <div class="py-10">
                    
                    <iframe class="w-720p h-480p" src="{{ $row->link }}">
                    </iframe>
                    <h1 class="text-2xl font-bold text-black-1E1E1E m-2 text-center uppercase">{{ $row->judul }}</h1>

                </div>
                @endforeach

            </div>
            @if($video->hasPages())
                {{ $video->links() }}
            @endif
        </div>
    </section>

    {{ View::make('footer') }}
</body>
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>

</html>

