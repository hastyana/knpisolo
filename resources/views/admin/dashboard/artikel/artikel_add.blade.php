<!DOCTYPE html>

<?php

if(old()) {
    $judul = old('judul');
    $slug = old('slug');
    $penulis = old('penulis');
    $kategori = old('kategori');
    $jenis = old('jenis');
    $isi = old('isi');
} else {
    $judul = null;
    $slug = null;
    $penulis = null;
    $kategori = null;
    $jenis = null;
    $isi = null;
}

?>

<html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset ('img/logo.png') }}">
        <title>Dashboard - Artikel</title>
        @vite('resources/css/app.css', 'resources/css/admin.css', 'resources/js/charts-bars.js', 'resources/js/charts-lines.js', 'resources/js/charts-pie.js', 'resources/js/focus-trap.js', 'resources/js/init-alpine.js')
        <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    </head>
    <body class="bg-white-fafafa">
        <div class="flex h-screen bg-white-fafafa" :class="{ 'overflow-hidden': isSideMenuOpen }">
            <aside class="z-20 hidden w-64 overflow-y-auto bg-white-fafafa md:block flex-shrink-0">
                <div class="py-4 text-black-1E1E1E">
                    <a class="ml-6 text-lg font-bold text-blue-56A5ED" href="#">
                        KNPI Surakarta
                    </a>
                    <ul class="mt-6">
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/') }}">
                                <svg class="w-5 h-5 opacity-70 hover:opacity-100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <path d="M256,319.841c-35.346,0-64,28.654-64,64v128h128v-128C320,348.495,291.346,319.841,256,319.841z"/>
                                        <g>
                                            <path d="M362.667,383.841v128H448c35.346,0,64-28.654,64-64V253.26c0.005-11.083-4.302-21.733-12.011-29.696l-181.29-195.99    c-31.988-34.61-85.976-36.735-120.586-4.747c-1.644,1.52-3.228,3.103-4.747,4.747L12.395,223.5    C4.453,231.496-0.003,242.31,0,253.58v194.261c0,35.346,28.654,64,64,64h85.333v-128c0.399-58.172,47.366-105.676,104.073-107.044    C312.01,275.383,362.22,323.696,362.667,383.841z"/>
                                            <path d="M256,319.841c-35.346,0-64,28.654-64,64v128h128v-128C320,348.495,291.346,319.841,256,319.841z"/>
                                        </g>
                                    </g>
                                </svg>
                                <span class="ml-4">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/galeri') }}" >
                                <svg class="w-5 h-5 opacity-70 hover:opacity-100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <path d="M42.667,0h234.667C300.897,0,320,19.103,320,42.667V192c0,23.564-19.103,42.667-42.667,42.667H42.667   C19.103,234.667,0,215.564,0,192V42.667C0,19.103,19.103,0,42.667,0z"/>
                                        <path d="M405.333,0h64C492.898,0,512,19.103,512,42.667V192c0,23.564-19.102,42.667-42.667,42.667h-64   c-23.564,0-42.667-19.103-42.667-42.667V42.667C362.667,19.103,381.769,0,405.333,0z"/>
                                        <path d="M42.667,277.333h64c23.564,0,42.667,19.103,42.667,42.667v149.333c0,23.564-19.103,42.667-42.667,42.667h-64   C19.103,512,0,492.898,0,469.333V320C0,296.436,19.103,277.333,42.667,277.333z"/>
                                        <path d="M234.667,277.333h234.667C492.898,277.333,512,296.436,512,320v149.333C512,492.898,492.898,512,469.333,512H234.667   C211.103,512,192,492.898,192,469.333V320C192,296.436,211.103,277.333,234.667,277.333z"/>
                                    </g>
                                </svg>
                                <span class="ml-4">Galeri</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <span class="absolute inset-y-0 left-0 w-1 bg-blue-56A5ED rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E transition-colors duration-150" href="{{ url('/dashboard/artikel') }}">
                                <svg class="w-5 h-5 opacity-70 hover:opacity-100" xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24">
                                    <path d="M18,19v4.7a4.968,4.968,0,0,0,1.879-1.164l2.656-2.658A4.954,4.954,0,0,0,23.7,18H19A1,1,0,0,0,18,19Z"/><path d="M7.172,13.828A4,4,0,0,0,6,16.657V18H7.343a4,4,0,0,0,2.829-1.172L21.5,5.5a2.121,2.121,0,0,0-3-3Z"/><path d="M24,4.952a4.087,4.087,0,0,1-1.08,1.962L11.586,18.243A5.961,5.961,0,0,1,7.343,20H6a2,2,0,0,1-2-2V16.657a5.957,5.957,0,0,1,1.758-4.242L17.086,1.086A4.078,4.078,0,0,1,19.037,0c-.013,0-.024,0-.037,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16V19a3,3,0,0,1,3-3h5V5C24,4.984,24,4.969,24,4.952Z"/>
                                </svg>
                                <span class="ml-4">Artikel</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/infografis') }}">
                                <svg class="w-5 h-5 opacity-70 hover:opacity-100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path d="M399.211,256H298.667C275.103,256,256,236.897,256,213.333V112.512c0.059-19.89-9.134-38.678-24.875-50.837  c-14.916-11.812-34.474-16.022-52.928-11.392C52.767,81.419-23.674,208.342,7.463,333.773  c21.937,88.372,93.145,155.995,182.532,173.342c122.11,23.373,241.257-52.547,271.659-173.099  c4.647-18.478,0.445-38.066-11.371-53.013C437.984,265.29,419.165,256.076,399.211,256z"/>
                                    <path d="M504.555,158.848c-4.87-18.102-12.123-35.477-21.568-51.669c-28.41-48.738-74.818-84.375-129.237-99.243  C350.165,6.969,342.144,6.4,342.144,6.4c-2.866,0.001-15.21,0-24.981,7.915c-14.361,11.301-16.619,24.149-16.832,25.152  c-0.745,3.146-1.132,6.367-1.152,9.6v100.267c0,35.346,28.654,64,64,64h100.672c13.356,0.038,25.927-6.303,33.835-17.067  c5.848-7.885,8.856-17.517,8.533-27.328C506.049,165.523,505.491,162.137,504.555,158.848z"/>
                                </svg>
                                <span class="ml-4">Infografis</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/team') }}" >
                                <svg class="w-5 h-5 opacity-70 hover:opacity-100" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                    <path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z"/>
                                </svg>
                                <span class="ml-4">Team</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/testimonial') }}">
                                <svg class="w-5 h-5 opacity-70 hover:opacity-100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path d="M256,169.515c17.944,0,32.491-14.547,32.491-32.491S273.944,104.533,256,104.533s-32.491,14.547-32.491,32.491  S238.056,169.515,256,169.515z"/>
                                    <path d="M426.667,0.016H85.333C37.894,0.391-0.284,39.104,0,86.544V346.17c-0.284,47.443,37.891,86.162,85.333,86.549h62.357  l79.957,68.267c15.838,14.474,40.039,14.686,56.128,0.491l82.027-68.779h60.864c47.442-0.387,85.617-39.106,85.333-86.549V86.544  C512.284,39.104,474.106,0.391,426.667,0.016z M256,64.912c98.453,2.603,98.432,148.843,0,151.467  C157.547,213.754,157.568,67.578,256,64.912z M346.645,367.12c-11.416,2.913-23.032-3.981-25.945-15.397  c-0.013-0.052-0.026-0.103-0.039-0.155c-10.919-35.717-48.726-55.82-84.443-44.901c-21.5,6.573-38.328,23.401-44.901,44.901  c-2.981,11.405-14.643,18.234-26.048,15.253c-11.405-2.981-18.234-14.643-15.253-26.048l0,0  c16.496-58.539,77.324-92.622,135.863-76.126c36.895,10.397,65.729,39.231,76.126,76.126  C364.975,352.281,358.123,364.034,346.645,367.12z"/>
                                </svg>
                                <span class="ml-4">Testimoni</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/copywriting') }}">
                                <svg class="w-5 h-5 opacity-70 hover:opacity-100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <path d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z"/>
                                        <path d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z"/>
                                    </g>
                                </svg>
                                <span class="ml-4">Kiriman User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="flex flex-col flex-1 w-full">
                {{ View::make('admin/topbar') }}

                <main class="h-full overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        <div class="flex justify-between items-center">
                            <h2 class="my-6 text-2xl font-semibold text-black-1E1E1E">
                                Tambahkan Artikel
                            </h2>
                            <a href="{{ url('/dashboard/artikel') }}" type="button" href="" class="focus:outline-none text-white-fafafa bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2">
                                < <span class="px-2"> | </span> Kembali
                            </a>
                        </div> 
                        <!-- Form -->
                        <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            
                            @include('errors.message')

                            <form class="py-3 font-roboto px-5" method="POST" action="{{ url('/dashboard/artikel-add') }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                                
                                @csrf

                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="judul" id="judul" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $judul }}" required />
                                    <label for="judul" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="slug" id="slug" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $slug }}" required />
                                    <label for="slug" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="penulis" id="penulis" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $penulis }}" required />
                                    <label for="penulis" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Penulis</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="kategori" id="kategori" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $kategori }}" required />
                                    <label for="kategori" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kategori</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="jenis" id="jenis" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ $jenis }}" required />
                                    <label for="jenis" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jenis</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="isi" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -mt-2 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Isi</label>
                                    <textarea type="text" name="isi" id="isi" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-black-1E1E1E border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer opacity-70"  required > {{ $isi }} </textarea>
                                </div> 
                                <div class="relative z-0 w-full mb-6 group">
                                    <label class="block mb-2 text-sm font-medium text-black-1E1E1E" for="profil">Upload Profile</label>
                                    <input class="block w-full text-sm text-black-1E1E1E border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="profil" name="profil" type="file" required>
                                    <p class="font-normal py-2 md:text-start text-red-600">
                                        *upload dengan format .jpg, .jpeg, .png, .gif, dan .svg <br>
                                        *max file size 2MB
                                    </p>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <label class="block mb-2 text-sm font-medium text-black-1E1E1E" for="gambar">Upload Image</label>
                                    <input class="block w-full text-sm text-black-1E1E1E border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="gambar" name="gambar" type="file" required>
                                    <p class="font-normal py-2 text-start text-red-600">
                                        *upload dengan format .jpg, .jpeg, .png, .gif, dan .svg <br>
                                        *max file size 2MB
                                    </p>
                                </div>
                                <button type="submit" class="focus:outline-none text-white-fafafa bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2">
                                    Upload
                                </button>
                            </form>
                        </div>                        
                    </div>
                </main>
            </div>            
        </div>

    </body>

    {{-- Textarea Editor --}}
    <script>
        ClassicEditor
            .create( document.querySelector( '#isi' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
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
