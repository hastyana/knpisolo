<!DOCTYPE html>

<?php

if(old()) {
    $nama = old('nama');
    $email = old('email');
    $isi = old('isi');
} else {
    $nama = null;
    $email = null;
    $isi = null;
}

?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>Kontak - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden">
        <div class="relative">
            <img src={{ asset ('img/manahan.png') }} alt="background" class="w-full h-80 object-cover mt-0 bg-center bg-no-repeat">
            <h1 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-center font-roboto font-extrabold text-white-fafafa">
                Kontak</h1>
        </div>        
    </header>

    <section id="Contact" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="grid md:grid-cols-2 grid-rows-1">
                    <div>
                        <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-roboto font-extrabold text-black-1E1E1E">
                            Get In Touch
                        </h2>
                        <div class="flex flex-col py-5">
                            <p class="md:text-3xl text-xl font-roboto font-semibold text-black-1E1E1E pb-3">
                                Contact
                            </p>
                            <ul>
                                <li class="grid grid-cols-2 py-1">
                                    <div>
                                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words">
                                            WhatsApp
                                        </p>
                                    </div>
                                    <div>
                                        <a href="https://api.whatsapp.com/send?phone=6282334200757" class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words hover:opacity-60">
                                            0823-3420-0757
                                        </a>
                                    </div>
                                </li>
                                <li class="grid grid-cols-2 py-1">
                                    <div>
                                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words">
                                            Telephone
                                        </p>
                                    </div>
                                    <div>
                                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words">
                                            (0271)0000
                                        </p>
                                    </div>
                                </li>
                                <li class="grid grid-cols-2 py-1">
                                    <div>
                                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words">
                                            Fax
                                        </p>
                                    </div>
                                    <div>
                                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words">
                                            0000
                                        </p>
                                    </div>
                                </li>
                                <li class="grid grid-cols-2 py-1">
                                    <div>
                                        <p class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words">
                                            Email
                                        </p>
                                    </div>
                                    <div>
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=surakartaknpi@gmail.com" class="font-roboto 4xl:text-2xl 2xl:text-xl xl:text-lg lg:text-base md:text-2xl text-lg font-medium text-black-1E1E1E break-words hover:opacity-60">
                                            surakartaknpi@gmail.com
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h2 class="md:text-3xl text-xl font-roboto font-semibold text-black-1E1E1E pb-3">
                            Social Media
                        </h2>
                        <ul class="flex gap-3">      
                            <li>
                                <a href="https://instagram.com/knpi.surakarta_?igshid=YmMyMTA2M2Y=" rel="noreferrer" target="_blank" class="text-greenfood transition hover:opacity-75">
                                    <span class="sr-only">Instagram</span>
                                    <svg class="w-6 h-6 text-black-1E1E1E" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@solocreativityspace8621" rel="noreferrer" target="_blank" class="text-greenfood transition hover:opacity-75">
                                    <span class="sr-only">Youtube</span>
                                    <svg class="w-6 h-6 text-black-1E1E1E" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="w-full px-4 flex justify-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0977614002686!2d110.83015687397295!3d-7.564319674703245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17aab2991443%3A0xe2192bb606ae9493!2sGedung%20Sekretariat%20Bersama%20Kota%20Surakarta!5e0!3m2!1sid!2sid!4v1684115335014!5m2!1sid!2sid" 
                            width="1000" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <section id="Testimoni" class="pb-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10 bg-white-fafafa shadow-xl">
                <h2 class="md:text-3xl text-2xl text-center font-roboto font-extrabold text-black-1E1E1E">
                    Pesan dan Kesan
                </h2>
                
                @include('errors.message')

                <form class="py-3 font-roboto px-5" method="POST" action="{{ url('/contact') }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                    
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
                        <textarea type="text" name="isi" id="isi" class="block py-2.5 px-0 w-full text-sm text-black-1E1E1E bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-56A5ED peer ckeditor" required > {{ $isi }} </textarea>
                        <label for="isi" class="peer-focus:font-medium absolute text-sm text-black-1E1E1E duration-300 transform -translate-y-6 scale-75 top-3 -mt-2 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label class="block mb-2 text-sm font-medium text-black-1E1E1E" for="gambar">Upload Profil</label>
                        <input class="block w-full text-sm text-black-1E1E1E border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="gambar" name="gambar" type="file" required>
                        <p class="font-normal py-2 md:text-start text-center text-red-600">
                            *max file size 2MB
                        </p>
                    </div>
                    <button type="submit" class="font-roboto inline-flex items-center justify-center rounded-xl w-auto h-auto lg:px-4 lg:py-2 md:px-2 md:py-1 px-1 py-0.5 font-medium text-lg tracking-wide text-white-fafafa bg-blue-56A5ED transform duration-200 hover:opacity-50">
                        Kirim
                    </button>
                </form>
            </div>             
        </div>
    </section>

    {{ View::make('footer') }}
</body>
{{-- Scroll --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
{{-- Textarea Editor --}}
<script>
    CKEDITOR.replace( 'editor' );
</script>
{{-- <script>
    CKEDITOR.replace( 'isi', {
        filebrowserUploadUrl: "{{route('upload/testimonial', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script> --}}

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

