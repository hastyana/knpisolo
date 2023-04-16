@vite('resources/css/app.css')

<section id="struktur" class="py-20">        
    <div class="container mx-auto py-0 flex justify-center">
        <div class="w-full py-0 px-5 md:px-10 flex flex-col justify-center">
            <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-roboto font-extrabold text-black-1E1E1E">
                Struktural Organisasi
            </h2>
        </div>        
    </div>
    <div class="grid grid-rows-2 md:gap-4 gap-0 pt-10">
        <div class="flex justify-center items-center overflow-hidden">
            <img src={{ asset ('img/Frame1.png') }} alt="people" class="hidden md:block md:relative h-96 w-96"/>
            <img src={{ asset ('img/p1.jpg') }} alt="people" class="md:absolute md:block md:h-80 md:w-60 h-64 w-48 object-cover"/>
        </div>
        <div class="grid md:grid-cols-2 grid-rows-1 gap-4 md:mt-0 -mt-20">
            <div class="flex md:justify-start justify-center">
                <img src={{ asset ('img/Rectangle92.png') }} alt="people" class="hidden md:block md:relative h-10 w-80 object-cover mt-72"/>
                <img src={{ asset ('img/p1.jpg') }} alt="people" class="md:absolute md:block md:h-80 md:w-60 h-64 w-48 object-cover md:-mt-3 mt-0"/>
            </div>
            <div class="flex md:justify-end justify-center">
                <img src={{ asset ('img/Rectangle92.png') }} alt="people" class="hidden md:block md:relative h-10 w-80 object-cover rotate-180 mt-72"/>
                <img src={{ asset ('img/p1.jpg') }} alt="people" class="md:absolute md:block md:h-80 md:w-60 h-64 w-48 object-cover md:-mt-3 mt-0"/>
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