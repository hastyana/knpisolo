<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>Photos - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="header" class="overflow-hidden">
        <div class="relative">
            <img src={{ asset ('img/manahan.png') }} alt="background" class="w-full h-80 object-cover mt-0 bg-center bg-no-repeat">
            <h1 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-center font-roboto font-extrabold text-white-fafafa">
                Galeri Foto</h1>
        </div>        
    </header>

    <section id="photos" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 justify-center">
            
            @foreach ($photos as $row)

            <div class="w-full py-2 px-2">
                <div class="flex relative">
                    <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" title="{{ $row->kategori }}" class="absolute inset-0 object-cover object-center w-full h-full" />
                    <div class="px-5 md:py-16 sm:py-24 py-16 relative z-10 w-full h-full border-gray-200 bg-black opacity-0 hover:opacity-80">
                        <h1 class="text-2xl font-bold text-white-fafafa m-2 text-center uppercase">{{ $row->judul }}</h1>
                        <p class="relative mt-4 font-roboto text-white-fafafa text-center font-light text-sm">            
                            {{ Str::limit(strip_tags($row->isi, 150)) }}
                        </p>
                    </div>
                </div>
            </div>

            @endforeach
            
        </div>
        @if($photos->hasPages())
            {{ $photos->links() }}
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

</html>

