<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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
                <div class="grid xl:grid-cols-2 grid-rows-1 gap-2 pt-5">
                    <div>

                        @foreach ($headline as $row)

                        <div class="overflow-hidden shadow-xl p-5">
                            <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="w-full h-auto" />
                            <div class="px-6 py-4 font-robotoserif text-black-1E1E1E">
                                <h2 class="font-bold text-center text-4xl">{{ $row->judul }}</h2>
                                <p class="text-center text-base py-5">
                                    {{ Str::limit(strip_tags($row->isi, 150)) }}
                                </p>
                                <p class="text-base font-bold">
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
                                    <a href="{{ url ('blog-post', $row->slug) }}" class="hover:opacity-50">
                                        <svg class="w-10 h-10 -rotate-45" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24">
                                            <path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12ZM14.535,6.293l3.586,3.586h0a3,3,0,0,1,0,4.243l-3.586,3.585-.025.024a1,1,0,1,1-1.389-1.438L16.414,13,6,13.007a1,1,0,1,1,0-2L16.413,11,13.121,7.707a1,1,0,1,1,1.414-1.414Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                    <div class="grid xl:grid-rows-2 grid-rows-1 gap-1 items-center">

                        @foreach ($head as $row)

                        <div class="w-full h-auto">
                            <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden shadow-xl  font-robotoserif text-black-1E1E1E">
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
                                        <a href="{{ url ('blog-post', $row->slug) }}" class="hover:opacity-50">
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
    </header>

    <section id="News" class="py-20 duration-[1000ms] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="grid gap-2">
                    <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">

                        @foreach ($all as $row)

                        <div class="w-full h-auto">
                            <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden shadow-xl border-t-2 border-black-1E1E1E font-robotoserif text-black-1E1E1E">
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
                                        <a href="{{ url ('home-post', $row->slug) }}" class="hover:opacity-50">
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

    <section id="blog" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="tab w-full overflow-hidden border-b-2 border-black-1E1E1E">
                    <input class="absolute opacity-0 " id="tab-multi-one" type="radio" name="tabs">
                    <label class="block font-robotoserif text-2xl p-5 leading-normal cursor-pointer" for="tab-multi-one">Artikel</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-white-fafafa border-black-1E1E1E leading-normal">
                        <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">

                            @foreach ($articles as $row)

                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-64 h-40 md:h-auto md:w-48">
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
                                            <a href="{{ url ('blog-post', $row->slug) }}" class="hover:opacity-50">
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
                        <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">

                            @foreach ($news as $row)

                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-64 h-40 md:h-auto md:w-48">
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
                                            <a href="{{ url ('blog-post', $row->slug) }}" class="hover:opacity-50">
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
                        <div class="grid xl:grid-cols-2 grid-rows-1 gap-2">

                            @foreach ($press as $row)

                            <div class="w-full h-auto">
                                <div class="flex md:flex-row flex-col p-5 items-center justify-center overflow-hidden font-robotoserif text-black-1E1E1E">
                                    <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->judul }}" class="object-cover w-64 h-40 md:h-auto md:w-48">
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
                                            <a href="{{ url ('blog-post', $row->slug) }}" class="hover:opacity-50">
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
                    <label class="block font-robotoserif text-2xl p-5 leading-normal cursor-pointer" for="tab-multi-four">Tutorial Unggah Tulisan</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-white-fafafa border-black-1E1E1E leading-normal">
                        <p class="text-base font-roboto font-medium text-black-1E1E1E pb-10 px-10">
                            1. Buat tulisan di dalam file berkestensi .pdf, .doc, dan .docx <br>
                            2. Dalam file tersebut berisi judul, isi tulisan, serta gambar yg diperlukan dalam tulisan (opsional jika ada) dan nama penulis <br>
                            3. Klik link dibawah untuk unggah tulisan <br>
                            4. Isilah form nama dan email <br>
                            5. Unggah foto profil <br>
                            6. Unggah cover tulisan <br>
                            7. Unggah file tulisan <br>
                            8. Klik kirim <br>
                            9. Tunggu beberapa saat, tulisan akan muncul di website <br>
                            10. Pemberitahuan tulisan terunggah diwebsite akan dikirim via email <br>
                        </p>
                        <a href="{{ url('/upload') }}" class="hover:opacity-70">                            
                            <h2 class="md:text-3xl text-2xl text-center font-roboto font-extrabold text-blue-1081E8 hover:text-black-1E1E1E pb-10">
                                Kirim tulisanmu disini 
                            </h2>
                        </a>
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

