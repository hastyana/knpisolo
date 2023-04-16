<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <title>About - KNPI Solo</title>
</head>
<body class="bg-white-fafafa">
    {{ View::make('navbar') }}

    <header id="Header" class="overflow-hidden">
        <div class="relative">
            <img src={{ asset ('img/manahan.png') }} alt="background" class="w-full h-80 object-cover mt-0 bg-center bg-no-repeat">
            <h1 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-center font-roboto font-extrabold text-white-fafafa">
                About</h1>
        </div>        
    </header>

    <section id="visi" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-roboto font-extrabold text-black-1E1E1E">
                    KNPI Kota Surakarta
                </h2>
                <p class="md:text-xl text-lg font-roboto font-medium text-black-1E1E1E py-3">
                    Kota Surakarta atau juga disebut Kota Sala, adalah kota dengan warisan budaya yang kental dan 
                    tumbuh pesat di era modern. Kota Solo diibaratkan dengan kota yang tak pernah tidur. Berjalannya 
                    aktivitas sosial, ekonomi, dan budaya masyarakatnya yang membuat kota ini selalu hidup dan dinamis. 
                    Terletak di Provinsi Jawa Tengah, berbatasan dengan Kabupaten Karanganyar, Boyolali, Klaten, Sukoharjo, 
                    Sragen. Secara administratif, wilayah Surakarta terbagi menjadi 5 kecamatan dan 54 kelurahan, dengan luas 
                    wilayah 44 km.2 Berdasarkan data Dinas Kependudukan dan Catatan Sipil Kota Surakarta pada Semester I Tahun 
                    2019, jumlah penduduk Surakarta sebesar 575.230 jiwa, dengan jumlah laki-laki 283.296 dan perempuan 291.934. 
                    Sementara usia produktif 15 sampai 54 tahun sejumlah 344.734 jiwa. Surakarta juga dikenal sebagai kota 
                    warisan budaya. Warisan ini mewarnai kehidupan kota sehingga Surakarta dijuluki “The Spirit of Java”. 
                    Kota Surakarta terus tumbuh dan berkembang dengan tidak meninggalkan jati diri dan karakternya sebagai 
                    Kota Budaya.
                </p>
            </div>           
        </div>
        <div class="grid xl:grid-cols-2 grid-rows-1 gap-4 py-10">
            <div class="w-full bg-blue-56A5ED rounded-r-2xl">
                <div class="container mx-auto py-0 flex justify-center">
                    <div class="w-full py-5 px-10 md:px-20">                    
                        <h2 class="lg:text-2xl md:text-xl text-2xl font-roboto font-extrabold uppercase text-white-fafafa">
                            Visi
                        </h2>
                        <h2 class="xl:text-4xl text-3xl font-roboto font-extrabold text-white-fafafa py-3">
                            PEMUDA BERKARAKTER DAN MAJU, SOLO BERBUDAYA DAN MODERN
                        </h2>
                        <p class="md:text-xl text-lg font-roboto font-medium text-white-fafafa">
                            Pemuda dalam perjalanan bangsa telah terbukti peranan pentingya dalam kehidupan berbangsa dan bernegara. 
                            Pada era Kolonial, sejarah telah mencatat lahirnya kesadaraan nasional 1908. Kesadaran berbangsa 
                            mengkristal dengan kebulatan tekat Berbangsa, Berbahasa dan Bertanah Air satu yaitu Indonesia melalui 
                            sumpah pemuda pada 28 Oktober 1928. Dalam moment bersejarah proklamasi pada 17 Agustus 1945 juga 
                            merupakan andil besar dari kalangan pemuda yang mendesak Presiden Ir. Sukarno dan Muhammad Hatta untuk 
                            segera mendeklarasikan kemerdekaan Indonesia. Desakan ini lahir dari kaum muda karena melihat situasi 
                            kekalahan Jepang atas sekutu. Pemuda adalah energi potensial yang memiliki karakter Inovatif, idealis, 
                            pantang menyerah, semangat dan kreatif. Karakter tersebut merupakan modal yang harus dikembangkan secara 
                            terarah untuk menghadapi tangantangan bonus demografi 2045.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-blue-56A5ED rounded-l-2xl">
                <div class="container mx-auto py-0 flex justify-center">
                    <div class="w-full py-5 px-10 md:px-20">                    
                        <h2 class="lg:text-2xl md:text-xl text-2xl font-roboto font-extrabold uppercase text-white-fafafa">
                            Misi
                        </h2>
                        <ul class="md:text-xl text-lg font-roboto font-medium text-white-fafafa pt-3">
                            <li class="flex py-1">
                                <span>
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                        <path d="M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5,5-2.24,5-5-2.24-5-5-5Zm0,9c-2.21,0-4-1.79-4-4s1.79-4,4-4,4,1.79,4,4-1.79,4-4,4Z"/>
                                    </svg>
                                </span>
                                Mengembalikan marwah KNPI Kota Surakarta sebagai organisasi komite, yaitu tempat bernaung 
                                Organisasi Kemasyarakatan Pemuda dan wahana kaderisasi nilai-nilai luhur bangsa untuk 
                                mewujudkan Kota Surakarta yang aman dan harmonis
                            </li>
                            <li class="flex py-1">
                                <span>
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                        <path d="M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5,5-2.24,5-5-2.24-5-5-5Zm0,9c-2.21,0-4-1.79-4-4s1.79-4,4-4,4,1.79,4,4-1.79,4-4,4Z"/>
                                    </svg>
                                </span>
                                KNPI Surakarta Bersinergi dengan pemerintah kota Surakarta dalam rangka pembinaan dan 
                                pengembagan potesi pemuda di sektor ekonomi, pengembangan IT, pendidikan, budaya, pariwisata, 
                                lingkungan, ketahanan pangan, kesehatan dan pencegahan narkoba di Kota Surakarta
                            </li>
                            <li class="flex py-1">
                                <span>
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                        <path d="M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5,5-2.24,5-5-2.24-5-5-5Zm0,9c-2.21,0-4-1.79-4-4s1.79-4,4-4,4,1.79,4,4-1.79,4-4,4Z"/>
                                    </svg>
                                </span>
                                KNPI Surakarta Berkolaborasi dengan kelompok-kelompok kreatif pemuda kota Surakarta untuk 
                                menjadi penopang kreativitas pembangunan kota
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    
    <section id="struktur" class="py-20 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10 flex flex-col justify-center">
                <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-roboto font-extrabold text-black-1E1E1E">
                    Struktural Organisasi
                </h2>
            </div>        
        </div>
        <div class="grid grid-rows-2 md:gap-4 gap-0 pt-10">
            <div class="flex justify-center items-center overflow-hidden">
                <img src={{ asset ('img/Ketum.jpg') }} alt="people" class="absolute md:h-80 md:w-60 h-64 w-48 object-cover object-center"/>
                <div class="px-5 md:py-16 py-8 relative md:h-80 md:w-60 h-64 w-48 border-gray-200 bg-black opacity-0 hover:opacity-70 object-center">
                    <h1 class="md:text-2xl text-lg font-bold text-white-fafafa m-2 text-center uppercase">Agus Riyanto, S. Pd.</h1>
                    <p class="relative mt-4 font-roboto text-white-fafafa text-center font-light text-sm">            
                        Ketua Umum DPD KNPI Kota Surakarta
                    </p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 grid-rows-1 gap-4 md:mt-0 -mt-20">
                <div class="flex md:justify-start justify-center">
                    <img src={{ asset ('img/sekum.jpg') }} alt="people" class="absolute md:h-80 md:w-60 h-64 w-48 object-cover object-center"/>
                    <div class="px-5 md:py-16 py-8 relative md:h-80 md:w-60 h-64 w-48 border-gray-200 bg-black opacity-0 hover:opacity-70 object-center">
                        <h1 class="md:text-2xl text-lg font-bold text-white-fafafa m-2 text-center uppercase">Setyo Puji Santoso, S. Sos.</h1>
                        <p class="relative mt-4 font-roboto text-white-fafafa text-center font-light text-sm">            
                            Sekretaris Jenderal DPD KNPI Kota Surakarta
                        </p>
                    </div>
                </div>
                <div class="flex md:justify-end justify-center">
                    <img src={{ asset ('img/Bendum.jpg') }} alt="people" class="absolute md:h-80 md:w-60 h-64 w-48 object-cover object-center"/>
                    <div class="px-5 md:py-16 py-8 relative md:h-80 md:w-60 h-64 w-48 border-gray-200 bg-black opacity-0 hover:opacity-70 object-center">
                        <h1 class="md:text-2xl text-lg font-bold text-white-fafafa m-2 text-center uppercase">Abdul Afif Amrulloh, S. Psi.</h1>
                        <p class="relative mt-4 font-roboto text-white-fafafa text-center font-light text-sm">            
                            Bendahara Umum DPD KNPI Kota Surakarta
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto pt-10 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10 flex flex-col justify-center">
                <div class="flex justify-center w-full md:mt-0 mt-10">
                    <div class="overflow-x-auto">
                        <table class="divide-y-2 divide-black-1E1E1E text-sm">
                            <thead>
                                <tr class="odd:bg-gray-200">
                                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-black-1E1E1E ">
                                        Divisi
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-black-1E1E1E ">
                                        Nama
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-black-1E1E1E ">                                    
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">
                                {{-- OKK --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi OKK</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        SITI AMINAH, S.Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        SELVIANA VEBIANTI, S.E.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MUHAMMAD NUR
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        ABID ISMAIL ABDULHAKKAM, S. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DANIA WAHYU SETYAWATI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        NANANG PRABOWO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        RIVALDY NUR GHUFRON
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- Parekraf --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi PAREKRAF</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        H. ARIF SARIFUDIN, S.E.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        JOKO TRIYANTO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        ANTOK BONI TRISNANTO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        LAURENSIA LIONA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        ABDULLAH ZEIN SYARIF
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DESHTIAN YOGA PERMANA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        BRAMANTYA YUDISTIRA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- Advokasi --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi ADVOKASI</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        REDY GILES TIRANO, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        BAYU AJI KUSUMA WIJAYA, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DITA INDAH SARI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        UMAR JANUARDI HARAHAP, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        KUSUMO ANINDITO, S. H., M. Kn.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DENNY SAMAWYAN YOWNAS, S. Pk., S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        YUSTINUS ARYA ARTHESWARA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- Litbang --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi LITBANG</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        FAJAR ARI MUSTOFA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MUSTAQ ZABIDI, S. E.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        RIZUL FIRDAUS MUCHSONI, S. Pd. I
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DAWAM RIZAWAN TAUFIK, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        YUDHA MAHARDIKA, S. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        YUSUF ERWANSYAH, A. Md.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- Pendidikan dan kebudayaan --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi PENDIDIKAN DAN KEBUDAYAAN</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        EDO JOHAN PRATAMA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DIMAS SURO AJI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        BAGUS WISNU YULIAN, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        BINTANG AJI PARMANA, S. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        BAHAR ELFUDLLATSANI, S. H., M. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        BAYU AJI WIJAYA KUSUMA, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- Kominfo --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi KOMINFO</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DWI WISNU WARDANA, S. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        HASTYANA RAHIRDANESWARA, S. Kom.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        HABIBI ROHIM
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        AZIZ CHABIBURAHMAN, S. Pd. I
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        IDA AYU PUTRI ASTITI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MARDON
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        TRI SANJAYA, S. E.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- Kesehatan --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi KESEHATAN</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MUHAMMAD ZEIN, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        DAMAR ILHAM NINSETA, S. Ked.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        IKHSANUDIN FAJAR UTOMO, S.E
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        LUKAS SURYANTORO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        GANDHI YUDA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MAHARANI KUSUMA DARUWATI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        ANWAR, S. Psi.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- LH, Energi dan Pertanian --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi LINGKUNGAN HIDUP,ENERGI DAN PERTANIAN</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        YONATHAN SURYO PAMBUDI, S. T., M. Si.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        SRI HARI NUGROHO, S. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        FACO BARULITA PUTRIPAMULA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        GOGOR SATYA JOHAN
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        ROYAN NAUFAL
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MUHAMMAD ARIEF OKSYA, S. H.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        RAVIZAL AFFAN CANDRA SENO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- Keperempuanan --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi PEMBERDAYAAN PEREMPUAN DAN ANAK</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        LEILY HIDAYATI, S. E.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        SILVIA HANIM, S. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        PUTRI LESTARI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        RATNA TRI UTAMI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        NISIA SAHANA MULIAWATI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        OKTAVIANA WULANDARI, S. Mpt.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        SITA AL HUDA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- PEMUDA dan OLAHRAGA --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi PEMUDA dan OLAHRAGA</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MARYONO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MUHAMMAD SYAMSUL ARIFIN, S. Pd, M. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        KEVIN FEBIANO, M. Or, AIFO. P.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        RAFANDA, S. Pd.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        JALU AJI DARMA SUSENO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        IMAM ROYANI
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        THOMAS ADITYA PRAKOSO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                {{-- SOSIAL KEMANUSIAAN --}}
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 col-span-7">Komisi SOSIAL KEMANUSIAAN</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        : MUHAMMAD MARHENDRA KAMAJAYA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Ketua</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        HARTONO, S. Sos.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Sekretaris</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        WIPRA NUR ANANDA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Wakil Bendahara</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        NARENDRA JATI PRATIKNO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        MUHAMMAD DWI ARIYANTO
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        RISAL ARDI PRATAMA
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                                <tr class="">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-black-1E1E1E">
                                        ELI SUNARSO, S. E.
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Anggota</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>        
        </div>
    </section>

    {{-- <section id="list_menu" class="py-20">        
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div id="menu" class="flex justify-center">
                    <div class="flex justify-center py-2 px-2">
                        <a href="{{ url('about_all') }}" class="font-roboto inline-flex items-center justify-center rounded-xl w-auto h-auto lg:px-6 lg:py-3 md:px-3 md:py-2 px-3 py-1.5 font-semibold md:text-2xl text-lg tracking-wide text-white-fafafa bg-blue-56A5ED transform duration-200 hover:opacity-50">
                            <span> Semua </span>
                        </a>
                    </div>
                    <div class="flex justify-center py-2 px-2">
                        <a href="{{ url('about_visi') }}" class="font-roboto inline-flex items-center justify-center rounded-xl w-auto h-auto lg:px-6 lg:py-3 md:px-3 md:py-2 px-3 py-1.5 font-semibold md:text-2xl text-lg tracking-wide text-white-fafafa bg-blue-56A5ED transform duration-200 hover:opacity-50">
                            <span> Visi Misi </span>
                        </a>
                    </div>
                    <div class="flex justify-center py-2 px-2">
                        <a href="{{ url('about_struktur') }}" class="font-roboto inline-flex items-center justify-center rounded-xl w-auto h-auto lg:px-6 lg:py-3 md:px-3 md:py-2 px-3 py-1.5 font-semibold md:text-2xl text-lg tracking-wide text-white-fafafa bg-blue-56A5ED transform duration-200 hover:opacity-50">
                            <span> Struktural </span>
                        </a>
                    </div>
                </div>              
                <div id="konten">

                </div>
            </div>            
        </div>
    </section> --}}

    {{ View::make('footer') }}
</body>
{{-- Scrool Animate (TAOS) --}}
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
{{-- Ajax Web --}}
{{-- <script>
    $(document).ready(function(){
        $('#konten').load('{{ url('about_all') }}');
        $('#menu a').click(function(){
            var hal = $(this).attr('href');
            $('#konten').load(hal+'.php');
            return false;
        });
    });
</script> --}}

</html>

