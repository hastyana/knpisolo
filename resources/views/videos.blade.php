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

    <header id="header" class="overflow-hidden pt-10">
        <div class="container mx-auto py-0">
            <div class="w-full py-0 px-5 md:px-10 border-b-2 border-black-1E1E1E">
                <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-roboto font-extrabold text-black-1E1E1E">
                    Galeri Video
                </h2>
                <p class="font-roboto text-lg font-medium capitalize text-black-1E1E1E break-words py-3">
                    Dokumentasi kegiatan audio visual yang dilaksanakan oleh DPD KNPI Kota Surakarta selama satu periode, dapat juga ditonton di kanal youtube
                    <a href="https://www.youtube.com/@solocreativityspace8621" target="_blank" class="hover:text-blue-600 duration-200 font-bold">
                        Solo Creativity Space
                    </a>
                </p>
            </div> 
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

