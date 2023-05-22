<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Slider --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script>document.documentElement.classList.add('js')</script>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>Home - KNPI Solo</title>
</head>

<body class="bg-white-fafafa"> 
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-2 px-5 md:px-10">
                <div class="grid md:grid-cols-2 grid-cols-1">
                    <div class="md:hidden flex delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="400">
                        <img src={{ asset ('img/ilustrasi.png') }} alt="organization" class="w-full h-full object-cover mt-0">    
                    </div> 
                    <div class="grid mx-auto items-center">
                        <div class="delay-[300ms] duration-[600ms] taos:translate-x-[200px] taos:opacity-0" data-taos-offset="400">
                            <h2 class="2xl:text-6xl xl:text-5xl lg:text-4xl md:text-3xl text-4xl md:text-left text-center font-roboto font-extrabold text-black-1E1E1E py-1">
                                KOMITE NASIONAL PEMUDA INDONESIA 
                            </h2>
                            <h2 class="2xl:text-6xl xl:text-5xl lg:text-4xl md:text-3xl text-4xl md:text-left text-center font-roboto font-extrabold text-blue-56A5ED py-1">
                                KOTA SURAKARTA
                            </h2>
                            <p class="font-roboto lg:text-2xl md:text-xl text-2xl md:text-left text-center font-medium capitalize text-black-1E1E1E break-words xl:py-10 py-5">
                                Pemuda Penopang Kreatifitas Pembangunan Kota
                            </p>
                            <div class="md:flex-none md:justify-start flex justify-center xl:py-10 py-5">
                                <a href="#" class="font-roboto inline-flex items-center justify-center rounded-xl w-auto h-auto lg:px-6 lg:py-3 md:px-3 md:py-2 px-3 py-1.5 font-semibold md:text-2xl text-lg tracking-wide text-white-fafafa bg-blue-56A5ED transform duration-200 hover:opacity-50">
                                    <span> Explore </span>
                                </a>
                            </div>      
                        </div>
                    </div>     
                    <div class="hidden md:flex delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="400">
                        <img src={{ asset ('img/ilustrasi.png') }} alt="organization" class="lg:w-full lg:h-full md:w-auto md:h-auto w-full h-full object-cover mt-0">    
                    </div>                
                </div>
            </div>
        </div>
    </header>

    <section id="photo-carousel" class="delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="400">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="xl:h-screen h-auto w-auto overflow-hidden flex flex-nowrap text-center rounded-2xl" id="slider">
                    <div class="flex-none w-full flex flex-col items-center justify-center">
                        <img src={{asset('img/IMG_0970.jpg')}} alt="background" class="w-screen h-full bg-center bg-no-repeat object-cover">
                    </div>
                    <div class="flex-none w-full flex flex-col items-center justify-center">
                        <img src={{asset('img/BIB00042.jpg')}} alt="background" class="w-screen h-full bg-center bg-no-repeat object-cover">
                    </div>
                    <div class="flex-none w-full flex flex-col items-center justify-center">
                        <img src={{asset('img/_MG_1263.jpg')}} alt="background" class="w-screen h-full bg-center bg-no-repeat object-cover">
                    </div>
                    <div class="flex-none w-full flex flex-col items-center justify-center">
                        <img src={{asset('img/_MG_5400.jpg')}} alt="background" class="w-screen h-full bg-center bg-no-repeat object-cover">
                    </div>
                    <div class="flex-none w-full flex flex-col items-center justify-center">
                        <img src={{asset('img/IMG_9922.jpg')}} alt="background" class="w-screen h-full bg-center bg-no-repeat object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="400">
        <div class="container mx-auto py-0">
            <div class="w-full py-0 px-5 md:px-10">
                <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-center font-roboto font-extrabold text-black-1E1E1E">
                    Visi dan Misi 
                </h2>
                <p class="font-roboto lg:text-3xl md:text-2xl text-lg text-center font-medium capitalize text-black-1E1E1E break-words py-3">
                    pemuda berkarakter dan maju, solo berbudaya dan modern
                </p>
            </div>
            <div class="w-full bg-white-fafafa shadow-xl rounded-2xl py-5 px-5 border-t-2">
                <div class="flex lg:flex-row flex-col justify-center items-center gap-5 w-full">
                    <div class="lg:w-1/3 w-full bg-blue-56A5ED rounded-xl items-center px-5 py-5 xl:h-96 lg:h-80 h-auto">
                        <div class="flex justify-center">
                            <img src={{ asset ('img/partners.png') }} alt="misi" class="3xl:w-24 3xl:h-24 xl:w-20 xl:h-20 lg:w-16 lg:h-16 md:w-24 md:h-24 w-16 h-16 object-cover">
                        </div>
                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg text-center font-medium text-black-1E1E1E break-words p-2">
                            Mengembalikan marwah KNPI Kota Surakarta sebagai organisasi komite, yaitu tempat bernaung 
                            Organisasi Kemasyarakatan Pemuda dan wahana kaderisasi nilai-nilai luhur bangsa untuk 
                            mewujudkan Kota Surakarta yang aman dan harmonis.
                        </p>
                    </div>
                    <div class="lg:w-1/3 w-full bg-blue-56A5ED rounded-xl items-center px-5 py-5 xl:h-96 lg:h-80 h-auto">
                        <div class="flex justify-center">
                            <img src={{ asset ('img/employees.png') }} alt="misi" class="3xl:w-24 3xl:h-24 xl:w-20 xl:h-20 lg:w-16 lg:h-16 md:w-24 md:h-24 w-16 h-16 object-cover">
                        </div>
                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg text-center font-medium text-black-1E1E1E break-words p-2">
                            KNPI Surakarta Bersinergi dengan pemerintah kota Surakarta dalam rangka pembinaan dan 
                            pengembagan potesi pemuda di sektor ekonomi, pengembangan IT, pendidikan, budaya, pariwisata, 
                            lingkungan, ketahanan pangan, kesehatan dan pencegahan narkoba di Kota Surakarta
                        </p>
                    </div>
                    <div class="lg:w-1/3 w-full bg-blue-56A5ED rounded-xl items-center px-5 py-5 xl:h-96 lg:h-80 h-auto">
                        <div class="flex justify-center">
                            <img src={{ asset ('img/collaborate.png') }} alt="misi" class="3xl:w-24 3xl:h-24 xl:w-20 xl:h-20 lg:w-16 lg:h-16 md:w-24 md:h-24 w-16 h-16 object-cover">
                        </div>
                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg text-center font-medium text-black-1E1E1E break-words p-2">
                            KNPI Surakarta Berkolaborasi dengan kelompok-kelompok kreatif pemuda kota Surakarta untuk 
                            menjadi penopang kreativitas pembangunan kota
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="infografis" class="duration-[1000ms] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-center font-roboto font-extrabold text-black-1E1E1E">
                    Infografis
                </h2>                
            </div>         
        </div>
        <div class="container mx-auto pt-5">     
            <div class="flex my-16 3xl:px-72 xl:px-40 px-0">
                
                <div class="flex justify-center items-center py-5">
                    <button class="prev-button rounded-full p-3 text-green-d5ff40 transition duration-200 hover:rounded-full hover:bg-green-d5ff40 hover:text-black-252525">
                        <span class="sr-only">Previous Slide</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                
                <div class="swiper">
                    <div class="swiper-wrapper">

                        @foreach ($infografis as $row)

                        <div class="swiper-slide">
                            <button data-modal-target="info" data-modal-toggle="info" type="button" onclick="toggleModal('info')" id="{{ $row->id }}" class="block">
                                <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->kategori }}" class="h-64 w-full object-cover sm:h-80 lg:h-96 hover:opacity-50" />
                                <svg class="w-10 h-10 -rotate-45 -mt-10 opacity-50" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                    <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                </svg>
                            </button>
                        </div>

                        @endforeach

                    </div>
                </div>

                <div class="flex justify-center items-center py-5"> 
                    <button class="next-button rounded-full p-3 text-green-d5ff40 transition duration-200 hover:rounded-full hover:bg-green-d5ff40 hover:text-black-252525">
                        <span class="sr-only">Next Slide</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section id="News" class="py-20 duration-[1000ms] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="grid gap-2">
                    <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">

                        @foreach ($articles as $row)

                        <div class="w-full h-auto">
                            <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden shadow-xl border-t-2 border-blue-1081E8 font-robotoserif text-black-1E1E1E">
                                <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-full h-96 md:h-auto md:w-48">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h2 class="text-2xl font-bold tracking-tight md:text-start text-center">{{ Str::limit($row->judul, 50) }}</h2>
                                    <p class="font-normal py-2 md:text-start text-center">
                                        {{ Str::limit(strip_tags($row->isi, 150)) }}
                                    </p>
                                    <p class="font-bold">
                                        by : {{ $row->penulis }}
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

                        @endforeach

                    </div>
                </div>
            </div>            
        </div>
    </section>

    <section id="Testimonial" class="pb-20 duration-[1000ms] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="swiper-container !overflow-hidden">
                    <div class="swiper-wrapper">

                        @foreach ($testimonial as $row)

                        <div class="swiper-slide bg-white-fafafa p-8 w-1/2 rounded-xl shadow-lg border borde-b-2">
                            <div class="flex flex-col justify-center items-center gap-4">
                                <img src="{{ asset ('storage/'.$row->gambar) }}" alt="people" class="h-24 w-24 rounded-full object-cover"/>
                                <div class="text-sm text-center">
                                <p class="font-semibold font-signika text-blue-1081E8 text-xl">{{ $row->nama }}</p>
                                <p class="font-normal font-signika text-md">{{ $row->email }}</p>
                                </div>
                            </div>              
                            <p class="relative mt-4 font-roboto text-black-1E1E1E text-center">
                                <span class="text-xl">&ldquo;</span>              
                                {{ strip_tags ($row->isi) }}          
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </div>

                        @endforeach
                        
                    </div>
                </div>
                <div class="flex justify-center items-center py-5">
                    <button class="prev-button rounded-full p-3 text-green-d5ff40 transition duration-200 hover:rounded-full hover:bg-green-d5ff40 hover:text-black-252525">
                        <span class="sr-only">Previous Slide</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                    <div class="swiper-pagination !relative"></div>  
                    <button class="next-button rounded-full p-3 text-green-d5ff40 transition duration-200 hover:rounded-full hover:bg-green-d5ff40 hover:text-black-252525">
                        <span class="sr-only">Next Slide</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>            
        </div>
    </section>

    {{ View::make('footer') }}

    {{-- Modal --}}
    <div id="info" tabindex="-1" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <button type="button" onclick="toggleModal('info')" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                    @foreach ($infografis as $row)

                        <img id="{{ $row->id }}" src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->kategori }}" class="h-auto w-auto object-cover" />
                   
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</body>

{{-- Scrool Animate (TAOS) --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
{{-- Photos Swiper --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('#slider');
    setTimeout(function moveSlide() {
    const max = slider.scrollWidth - slider.clientWidth;
    const left = slider.clientWidth;
    if (max === slider.scrollLeft) {
    slider.scrollTo({left: 0, behavior: 'smooth'})
    } else {
    slider.scrollBy({left, behavior: 'smooth'})
    }
    setTimeout(moveSlide, 4000)
    }, 4000)
    })
</script>
{{-- Testimonial Swiper --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 16,
        autoplay: {
          delay: 4000,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
        nextEl: '.next-button',
        prevEl: '.prev-button',
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
          },
          1024: {
            slidesPerView: 2,
          },
        },
      })
    })
</script>
{{-- Infografis Swiper Javasript --}}
<script>
    new Swiper('.swiper', {
        loop: true,
        spaceBetween: 32,
        slidesPerView: 1,
        autoplay: {
            delay: 3000,
        },
        navigation: {
        nextEl: '.next-button',
        prevEl: '.prev-button',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
                centeredSlides: true,
            },
            1024: {
                slidesPerView: 3,
                centeredSlides: false,
            }
        },
    })
</script>

{{-- Modal JS --}}
<script>
    function toggleModal(info){
        document.getElementById(info).classList.toggle("hidden");
        document.getElementById(info + "-backdrop").classList.toggle("hidden");
        document.getElementById(info).classList.toggle("flex");
        document.getElementById(info + "-backdrop").classList.toggle("flex");
    }
</script>

</html>

