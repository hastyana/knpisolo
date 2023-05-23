<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Photos - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="header" class="overflow-hidden pt-10">
        <div class="container mx-auto py-0">
            <div class="w-full py-0 px-5 md:px-10">
                <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-roboto font-extrabold text-black-1E1E1E">
                    Galeri Foto
                </h2>
                <p class="font-roboto text-lg font-medium capitalize text-black-1E1E1E break-words py-3">
                    Dokumentasi kegiatan yang dilaksanakan oleh DPD KNPI Kota Surakarta selama satu periode
                </p>
            </div>
        </div>
    </header>

    <section id="photo-carousel" class="py-20 duration-[1000ms] taos:opacity-0">        
        <div class="container mx-auto py-0">     
            <div class="w-full py-0 px-5 md:px-10 flex justify-between">
                
                <div class="flex items-center py-5">
                    <button class="prev-button rounded-full p-3 text-green-d5ff40 transition duration-200 hover:rounded-full hover:bg-green-d5ff40 hover:text-black-252525">
                        <span class="sr-only">Previous Slide</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                
                <div class="swiper xl:h-614p h-auto w-full overflow-hidden flex flex-nowrap text-center">
                    <div class="swiper-wrapper">

                        @foreach ($photos as $row)

                        <div class="flex-none w-full flex flex-col items-center justify-center swiper-slide">
                            <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->kategori }}" class="w-screen h-full bg-center bg-no-repeat object-cover" />
                        </div>

                        @endforeach

                    </div>
                </div>

                <div class="flex justify-end items-center py-5"> 
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

    <section id="photos" class="pb-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 ">
                
            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 justify-center">
    
                <article class="group px-2 py-4">
                    <img src="{{ asset ('storage/'.$kategoris->gambar) }}" alt="{{ $kategoris->gambar }}" title={{ $kategoris->judul }} class="h-56 w-full object-cover" >
                    <div class="p-4 bg-gray-100 border-b-2 border-black-1E1E1E">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{  $kategoris->judul  }}
                        </h3>              
                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            {!! $kategoris->isi !!}
                        </p>
                    </div>
                </article>
                
            </div>
        </div>        
        @if($all->hasPages())
            {{ $all->links() }}
        @endif
    </section>

    {{ View::make('footer') }}
</body>
{{-- Scrool Animate (TAOS) --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
<script>
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-te-toggle="popover"]'));
    popoverTriggerList.map((popoverTriggerEl) => new te.Popover(popoverTriggerEl));
</script>
{{-- Filter Swiper --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 16,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 3.5,
          },
          1024: {
            slidesPerView: 7.5,
          },
        },
      })
    })
</script>

</html>

