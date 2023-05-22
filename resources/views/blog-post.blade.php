<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/app2.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">

    <title>{{ $post->judul }}</title>

</head>
<body class="bg-white-fafafa"> 
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden py-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="grid gap-2">
                    <div>

                        <div class="overflow-hidden p-5 flex flex-col justify-center items-center">
                            <div class="px-6 py-4 font-robotoserif text-black-1E1E1E">
                                <h2 class="font-bold text-center text-4xl">{{ $post->judul }}</h2>
                            </div>
                            <img class="md:w-auto md:h-480p w-full h-auto items-center justify-center" src="{{ asset ('storage/'.$post->gambar) }}" alt="{{ $post->gambar }}" title="{{ $post->judul }}">
                            <div class="px-6 py-4 font-robotoserif text-black-1E1E1E">
                                <p class="text-lg py-5">
                                    {{ strip_tags($post->isi) }}
                                </p>
                                <div class="flex justify-between">
                                    <p class="text-base font-bold">
                                        by : {{ $post->penulis }}
                                    </p> 
                                    <p class="text-base opacity-70">
                                        {{ $post->created_at }}
                                    </p>
                                </div> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>            
        </div>
    </header>

    {{-- <section id="list_news" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center border-t-2 border-black-1E1E1E ">
            <div class="w-full py-0 px-5 md:px-10">
                <h2 class="text-xl font-robotoserif font-extrabold text-black-1E1E1E">
                    Berita
                </h2>
                <div class="grid xl:grid-cols-3 grid-rows-1 gap-2">

                    @foreach ($news as $row)

                    <a href="{{ url ('post', $row->slug) }}" class="w-full h-auto">
                        <div class="flex flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                            <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-64 h-40 md:h-auto md:w-48">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">{{ $row->judul }}</h2>
                                <p class="font-bold">
                                    by : {{ $row->penulis }}
                                </p>
                            </div>
                        </div>
                    </a>

                    @endforeach

                </div>
            </div>            
        </div>
    </section>

    <section id="list_artikel" class="py-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center border-t-2 border-black-1E1E1E ">
            <div class="w-full py-0 px-5 md:px-10">
                <h2 class="text-xl font-robotoserif font-extrabold text-black-1E1E1E">
                    Artikel
                </h2>
                <div class="grid xl:grid-cols-3 grid-rows-1 gap-2">

                    @foreach ($articles as $row)

                    <a href="{{ url ('post', $row->slug) }}" class="w-full h-auto">
                        <div class="flex flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                            <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-64 h-40 md:h-auto md:w-48">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">{{ $row->judul }}</h2>
                                <p class="font-bold">
                                    by : {{ $row->penulis }}
                                </p>
                            </div>
                        </div>
                    </a>

                    @endforeach

                </div>
            </div>            
        </div>
    </section>

    <section id="list_pers" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center border-t-2 border-black-1E1E1E ">
            <div class="w-full py-0 px-5 md:px-10">
                <h2 class="text-xl font-robotoserif font-extrabold text-black-1E1E1E">
                    Pers Rilis
                </h2>
                <div class="grid xl:grid-cols-3 grid-rows-1 gap-2">

                    @foreach ($press as $row)

                    <a href="{{ url ('post', $row->slug) }}" class="w-full h-auto">
                        <div class="flex flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                            <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-64 h-40 md:h-auto md:w-48">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">{{ $row->judul }}</h2>
                                <p class="font-bold">
                                    by : {{ $row->penulis }}
                                </p>
                            </div>
                        </div>
                    </a>

                    @endforeach

                </div>
            </div>            
        </div>
    </section> --}}

    {{ View::make('footer') }}
</body>
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>

</html>

