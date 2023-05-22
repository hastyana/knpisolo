<!DOCTYPE html>

<?php

if(old()) {
    $nama = old('nama');
    $email = old('email');
    $alamat = old('alamat');
    $link_maps = old('link_maps');
    $website = old('website');
    $link_web = old('link_web');
} else {
    $nama = null;
    $email = null;
    $alamat = null;
    $link_maps = null;
    $website = null;
    $link_web = null;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/app2.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>Add OKP - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden py-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="border-b-2 border-black-1E1E1E">
                    <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-robotoserif font-extrabold text-black-1E1E1E text-center">
                        Form OKP
                    </h2>
                </div>   
                
                @include('errors.message')

                <form class="py-10 font-robotoserif px-5" method="POST" action="{{ url('/okp_add ') }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">

                    @csrf
                    
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $nama }}" required />
                        <label for="nama" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-black-1E1E1E bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-56A5ED peer" value="{{ $email }}" required />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email Address</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="alamat" id="alamat" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $alamat }}" required />
                        <label for="alamat" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="link_maps" id="link_maps" class="block py-2.5 px-0 w-full text-sm text-black-1E1E1E bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-56A5ED peer" value="{{ $link_maps }}" required />
                        <label for="link_maps" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Google Maps Link</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="website" id="website" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $website }}" required />
                        <label for="website" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Website</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="link_web" id="link_web" class="block py-2.5 px-0 w-full text-sm text-black-1E1E1E bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-56A5ED peer" value="{{ $link_web }}" required />
                        <label for="link_web" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Website Link</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label class="block mb-2 text-sm font-medium text-black-1E1E1E" for="gambar">Unggah Logo OKP</label>
                        <input class="block w-full text-sm text-black-1E1E1E border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="gambar" name="gambar" type="file" required>
                        <p class="font-normal py-2 md:text-start text-center text-red-600">
                            *upload dengan format .jpg, .jpeg, .png, .gif, dan .svg
                            *max file size 2MB
                        </p>
                    </div>
                    <button type="submit" class="font-roboto inline-flex items-center justify-center rounded-xl w-auto h-auto lg:px-4 lg:py-2 md:px-2 md:py-1 px-1 py-0.5 font-medium text-lg tracking-wide text-white-fafafa bg-blue-56A5ED transform duration-200 hover:opacity-50">
                        Kirim
                    </button>
                </form>

            </div>            
        </div>
    </header>

    {{ View::make('footer') }}
</body>
{{-- Scroll --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
{{-- confirmsubmit --}}
<script>
    function confirmSubmit () {
        var r = confirm ('lanjutkan penyimpanan data ?');
        if (r) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>

