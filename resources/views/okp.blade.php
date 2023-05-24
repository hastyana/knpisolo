<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/app2.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>OKP - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden pt-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="border-b-2 border-black-1E1E1E">
                    <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-roboto font-extrabold text-black-1E1E1E">
                        OKP Kota Surakarta
                    </h2> 
                </div>                
                <p class="text-base font-roboto font-medium text-black-1E1E1E py-3">
                    OKP adalah singkatan dari Organisasi Kemasyarakatan dan Pemuda yaitu sebuah organisasi 
                    beranggotakan pemuda pemuda sebagai wadah pembinaan calon pemimpin masa depan melalui 
                    pembentukan mental dan karakter yang berkualitas serta turut ikut dalam mengusahakan 
                    sebuah pembangunan bagi bangsa ini. KNPI Kota Surakarta sebuah organisasi kepemudaan yang
                    mengoordinir OKP terkhusus di area Kota Surakarta, dalam hal ini KNPI juga membantu stake holder
                    pemerintah Kota Surakarta dalam mengumpulkan data data OKP yang ada di Kota Surakarta. <br>
                    Klik link dibawah ini
                </p>
                <a href={{ url('/okp_add') }} class="hover:opacity-70">                            
                    <h2 class="md:text-3xl text-2xl text-center font-roboto font-extrabold text-blue-1081E8 hover:text-black-1E1E1E">
                        Daftarkan OKP Kalian Sekarang 
                    </h2>
                </a>
            </div>            
        </div>
    </header>

    <section id="list-okp" class="overflow-hidden py-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="grid gap-10">

                    @foreach ($all as $row)
                    
                    <div class="flex flex-row w-full"> 
                        <div class="w-1/3">
                            <img src="{{ asset ('storage/'.$row->gambar) }}" alt="{{ $row->nama }}" class="object-cover object-center item-center w-360p h-auto rounded aspect-square" />
                        </div>
                        <div class="w-2/3 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-blue-900 sm:text-3xl">
                                {{ $row->nama }}
                            </h2>
                            <div class="flex flex-row">
                                <p class="mt-4 text-black-1E1E1E text-lg">
                                    Email Organisasi :
                                </p>
                                <p class="mt-4 text-black-1E1E1E text-lg px-2">
                                    {{ $row->email }}
                                </p>
                            </div>
                            <div class="flex flex-row">
                                <p class="mt-4 text-black-1E1E1E text-lg">
                                    Alamat Organisasi : 
                                </p>
                                <a href="{{ $row->link_maps }}" class="hover:opacity-70 px-2">
                                    <p class="mt-4 text-blue-900 text-lg">
                                        {{ $row->alamat }}
                                    </p>
                                </a>
                            </div>
                            <div class="flex flex-row">
                                <p class="mt-4 text-black-1E1E1E text-lg">
                                    Website Organisasi : 
                                </p>
                                <a href="{{ $row->link_web }}" class="hover:opacity-70 px-2">
                                    <p class="mt-4 text-blue-900 text-lg">
                                        {{ $row->website }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>            
        </div>
    </section>

    {{ View::make('footer') }}
</body>
{{-- Scroll --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>

</html>

