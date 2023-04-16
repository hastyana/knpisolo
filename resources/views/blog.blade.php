<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/app2.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>Blog - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden py-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="border-b-2 border-black-1E1E1E">
                    <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-robotoserif font-extrabold text-black-1E1E1E">
                        Headline
                    </h2>
                </div> 
                <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">
                    <div>

                        @foreach ($article as $row)

                        <div class="overflow-hidden shadow-xl p-5">
                            <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="w-full h-auto" />
                            <div class="px-6 py-4 font-robotoserif text-black-1E1E1E">
                                <h2 class="font-bold text-center text-4xl">{{ $row->judul }}</h2>
                                <p class="text-center text-base py-5">
                                    {{ Str::limit($row->isi, 150) }}
                                </p>
                                <p class="text-base font-bold">
                                    by : {{ Str::limit($row->isi, 150) }}
                                </p>
                                <div class="flex items-end">
                                    <p class="text-base opacity-70">
                                        {{ $row->created_at }}
                                    </p>
                                    <p class="text-base opacity-70 px-5">
                                        
                                    </p>
                                </div>                                
                                <div class="flex justify-end -mt-12">
                                    <a href="" class="hover:opacity-50">
                                        <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                            <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="grid xl:grid-rows-2 grid-rows-1 gap-2">
                        <div class="w-full h-auto">

                            <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E shadow-xl">
                                <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-full h-96 md:h-auto md:w-48">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">{{ $row->judul }}</h2>
                                    <p class="font-normal py-2 md:text-start text-center">
                                        {{ Str::limit($row->isi, 150) }}
                                    </p>
                                    <p class="font-bold">
                                        by : {{ $row->penulis }}
                                    </p>
                                    <div class="flex items-end">
                                        <p class="text-base opacity-70">
                                            Jan 1st, 2023
                                        </p>
                                        <p class="text-base opacity-70 px-5">
                                            {{ $row->created_at }}
                                        </p>
                                    </div>                                
                                    <div class="flex justify-end -mt-12">
                                        <a href="" class="hover:opacity-50">
                                            <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                                <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </header>

    <section id="Copywrite" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="tab w-full overflow-hidden border-b-2 border-black-1E1E1E">
                    <input class="absolute opacity-0 " id="tab-multi-one" type="radio" name="tabs">
                    <label class="block font-robotoserif text-2xl p-5 leading-normal cursor-pointer" for="tab-multi-one">Artikel</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-white-fafafa border-black-1E1E1E leading-normal">
                        <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">
                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-64 h-40 md:h-auto md:w-48">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">Lorem Ipsum Dolor Sit Amet</h2>
                                        <p class="font-normal py-2 md:text-start text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                        </p>
                                        <p class="font-bold">
                                            by : Unknown
                                        </p>
                                        <div class="flex items-end">
                                            <p class="text-base opacity-70">
                                                Jan 1st, 2023
                                            </p>
                                            <p class="text-base opacity-70 px-5">
                                                120K Views
                                            </p>
                                        </div>                                
                                        <div class="flex justify-end -mt-12">
                                            <a href="" class="hover:opacity-50">
                                                <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                                    <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-64 h-40 md:h-auto md:w-48">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">Lorem Ipsum Dolor Sit Amet</h2>
                                        <p class="font-normal py-2 md:text-start text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                        </p>
                                        <p class="font-bold">
                                            by : Unknown
                                        </p>
                                        <div class="flex items-end">
                                            <p class="text-base opacity-70">
                                                Jan 1st, 2023
                                            </p>
                                            <p class="text-base opacity-70 px-5">
                                                120K Views
                                            </p>
                                        </div>                                
                                        <div class="flex justify-end -mt-12">
                                            <a href="" class="hover:opacity-50">
                                                <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                                    <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>                    
                        <div class="flex justify-end items-end py-5">
                            <a href="{{ url('/article') }}" class="flex font-normal font-robotoserif text-xl text-black-1E1E1E hover:opacity-50">
                                <span class="pr-3"> Lihat Semua Artikel </span>
                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                                    <path d="M23.12,9.91,19.25,6a1,1,0,0,0-1.42,0h0a1,1,0,0,0,0,1.41L21.39,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.45l-3.62,3.61a1,1,0,0,0,0,1.42h0a1,1,0,0,0,1.42,0l3.87-3.88A3,3,0,0,0,23.12,9.91Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-b-2 border-black-1E1E1E">
                    <input class="absolute opacity-0 " id="tab-multi-two" type="radio" name="tabs">
                    <label class="block font-robotoserif text-2xl p-5 leading-normal cursor-pointer" for="tab-multi-two">Berita</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-white-fafafa border-black-1E1E1E leading-normal">
                        <div class="grid lg:grid-cols-2 grid-rows-1 gap-2">
                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-64 h-40 md:h-auto md:w-48">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">Lorem Ipsum Dolor Sit Amet</h2>
                                        <p class="font-normal py-2 md:text-start text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                        </p>
                                        <p class="font-bold">
                                            by : Unknown
                                        </p>
                                        <div class="flex items-end">
                                            <p class="text-base opacity-70">
                                                Jan 1st, 2023
                                            </p>
                                            <p class="text-base opacity-70 px-5">
                                                120K Views
                                            </p>
                                        </div>                                
                                        <div class="flex justify-end -mt-12">
                                            <a href="" class="hover:opacity-50">
                                                <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                                    <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-64 h-40 md:h-auto md:w-48">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">Lorem Ipsum Dolor Sit Amet</h2>
                                        <p class="font-normal py-2 md:text-start text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                        </p>
                                        <p class="font-bold">
                                            by : Unknown
                                        </p>
                                        <div class="flex items-end">
                                            <p class="text-base opacity-70">
                                                Jan 1st, 2023
                                            </p>
                                            <p class="text-base opacity-70 px-5">
                                                120K Views
                                            </p>
                                        </div>                                
                                        <div class="flex justify-end -mt-12">
                                            <a href="" class="hover:opacity-50">
                                                <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                                    <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>                    
                        <div class="flex justify-end items-end py-5">
                            <a href="{{ url('/news') }}" class="flex font-normal font-robotoserif text-xl text-black-1E1E1E hover:opacity-50">
                                <span class="pr-3"> Lihat Semua Berita </span>
                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                                    <path d="M23.12,9.91,19.25,6a1,1,0,0,0-1.42,0h0a1,1,0,0,0,0,1.41L21.39,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.45l-3.62,3.61a1,1,0,0,0,0,1.42h0a1,1,0,0,0,1.42,0l3.87-3.88A3,3,0,0,0,23.12,9.91Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-b-2 border-black-1E1E1E">
                    <input class="absolute opacity-0 " id="tab-multi-three" type="radio" name="tabs">
                    <label class="block font-robotoserif text-2xl p-5 leading-normal cursor-pointer" for="tab-multi-three">Pers</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-white-fafafa border-black-1E1E1E leading-normal">
                        <div class="grid lg:grid-cols-2 grid-rows-1 gap-2">
                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-64 h-40 md:h-auto md:w-48">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">Lorem Ipsum Dolor Sit Amet</h2>
                                        <p class="font-normal py-2 md:text-start text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                        </p>
                                        <p class="font-bold">
                                            by : Unknown
                                        </p>
                                        <div class="flex items-end">
                                            <p class="text-base opacity-70">
                                                Jan 1st, 2023
                                            </p>
                                            <p class="text-base opacity-70 px-5">
                                                120K Views
                                            </p>
                                        </div>                                
                                        <div class="flex justify-end -mt-12">
                                            <a href="" class="hover:opacity-50">
                                                <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                                    <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-64 h-40 md:h-auto md:w-48">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">Lorem Ipsum Dolor Sit Amet</h2>
                                        <p class="font-normal py-2 md:text-start text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                                            nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                        </p>
                                        <p class="font-bold">
                                            by : Unknown
                                        </p>
                                        <div class="flex items-end">
                                            <p class="text-base opacity-70">
                                                Jan 1st, 2023
                                            </p>
                                            <p class="text-base opacity-70 px-5">
                                                120K Views
                                            </p>
                                        </div>                                
                                        <div class="flex justify-end -mt-12">
                                            <a href="" class="hover:opacity-50">
                                                <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                                    <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>                    
                        <div class="flex justify-end items-end py-5">
                            <a href="{{ url('/pers') }}" class="flex font-normal font-robotoserif text-xl text-black-1E1E1E hover:opacity-50">
                                <span class="pr-3"> Lihat Semua Pers Rilis </span>
                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                                    <path d="M23.12,9.91,19.25,6a1,1,0,0,0-1.42,0h0a1,1,0,0,0,0,1.41L21.39,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.45l-3.62,3.61a1,1,0,0,0,0,1.42h0a1,1,0,0,0,1.42,0l3.87-3.88A3,3,0,0,0,23.12,9.91Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-b-2 border-black-1E1E1E">
                    <input class="absolute opacity-0 " id="tab-multi-four" type="radio" name="tabs">
                    <label class="block font-robotoserif text-2xl p-5 leading-normal cursor-pointer" for="tab-multi-four">Upload</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-white-fafafa border-black-1E1E1E leading-normal">
                        <h2 class="md:text-3xl text-2xl text-center font-roboto font-extrabold text-black-1E1E1E">
                            Kirim tulisanmu disini
                        </h2>
                        <form class="py-3 font-robotoserif px-5">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" placeholder=" " required />
                                <label for="name" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-black-1E1E1E bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-56A5ED peer" placeholder=" " required />
                                <label for="email" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email Address</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <label class="block mb-2 text-sm font-medium text-black-1E1E1E" for="multiple_files">Upload Image</label>
                                <input class="block w-full text-sm text-black-1E1E1E border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="multiple_files" type="file" multiple>
                                <p class="font-normal py-2 md:text-start text-center text-red-600">
                                    *max file size 1MB
                                </p>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <label class="block mb-2 text-sm font-medium text-black-1E1E1E" for="multiple_files">Upload File</label>
                                <input class="block w-full text-sm text-black-1E1E1E border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="multiple_files" type="file" multiple>
                                <p class="font-normal py-2 md:text-start text-center text-red-600">
                                    *upload dengan format .pdf dan .doc <br>
                                    *max file size 1MB
                                </p>
                            </div>
                            <button type="submit" class="font-roboto inline-flex items-center justify-center rounded-xl w-auto h-auto lg:px-4 lg:py-2 md:px-2 md:py-1 px-1 py-0.5 font-medium text-lg tracking-wide text-white-fafafa bg-blue-56A5ED transform duration-200 hover:opacity-50">
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    {{ View::make('footer') }}
</body>
{{-- Scroll --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
{{-- Tab --}}
<script>
    /* Optional Javascript to close the radio button version by clicking it again */
    var myRadios = document.getElementsByName('tabs2');
    var setCheck;
    var x = 0;
    for(x = 0; x < myRadios.length; x++){
        myRadios[x].onclick = function(){
            if(setCheck != this){
                 setCheck = this;
            }else{
                this.checked = false;
                setCheck = null;
        }
        };
    }
</script>

</html>

