<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/app2.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>Artikel - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden py-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="border-b-2 border-black-1E1E1E">
                    <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-robotoserif font-extrabold text-black-1E1E1E">
                        Artikel
                    </h2>
                </div>
                <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">
                    <div>

                        @foreach ($article as $row)

                        <div class="overflow-hidden p-5">
                            <img class="w-full h-auto" src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}">
                            <div class="px-6 py-4 font-robotoserif text-black-1E1E1E">
                                <h2 class="font-bold text-center text-4xl">{{ $row->judul }}</h2>
                                <p class="text-center text-base py-5">
                                    {{ Str::limit($row->isi, 150) }}
                                </p>
                                <p class="text-base font-bold">
                                    by : {{ $row->penulis }}
                                </p> 
                                <div class="flex items-end">
                                    <p class="text-base opacity-70">
                                        {{ $row->created_at }}
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

                        @endforeach

                    </div>
                    <div class="grid xl:grid-rows-2 grid-rows-1 gap-2">
                        <div class="w-full h-auto">
                            <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                                <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                </div>
            </div>            
        </div>
    </header>

    <section id="list-artikel" class="py-40 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center border-t-2 border-black-1E1E1E ">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">
                    <div class="w-full h-auto">
                        <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                            <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                            <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                            <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                            <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                            <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                            <img src={{ asset ('img/andrei-j-castanha-eOsY4sO0bD8-unsplash.jpg') }} alt="news" class="object-cover w-full h-96 md:h-auto md:w-48">
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
                <div class="flex justify-center pt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="list-style-none flex">
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"  href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="#">
                                    1
                                </a>
                            </li>
                            <li aria-current="page">
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="#">
                                    2
                                </a>
                            </li>
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="#">
                                    3
                                </a>
                            </li>
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>            
        </div>
    </section>

    {{ View::make('footer') }}
</body>
{{-- Scroll --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>

</html>

