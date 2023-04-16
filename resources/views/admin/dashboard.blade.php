<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset ('img/logo.png') }}">
        <title>Dashboard</title>
        @vite('resources/css/app.css', 'resources/css/admin.css', 'resources/js/charts-bars.js', 'resources/js/charts-lines.js', 'resources/js/charts-pie.js', 'resources/js/focus-trap.js', 'resources/js/init-alpine.js')
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
                            <span class="absolute inset-y-0 left-0 w-1 bg-blue-56A5ED rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E transition-colors duration-150" href="{{ url('/dashboard/') }}">
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
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/galeri') }}">
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
                            <a class="inline-flex items-center w-full text-sm font-semibold text-black-1E1E1E opacity-70 transition-colors duration-150 hover:opacity-100" href="{{ url('/dashboard/artikel') }}">
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
                        <h2 class="my-6 text-2xl font-semibold text-black-1E1E1E">
                            Dashboard
                        </h2>
                        <!-- Cards -->
                        {{-- <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                            <!-- Card 1 -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-orange-400">
                                        Total Pengunjung
                                    </p>
                                    <p class="text-lg font-semibold text-black-1E1E1E">
                                        6389
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-blue-400">
                                        Total Pengunjung
                                    </p>
                                    <p class="text-lg font-semibold text-black-1E1E1E">
                                        6389
                                    </p>
                                </div>
                            </div>
                        </div>
                      <!-- New Table -->
                      <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-black-1E1E1E uppercase border-b">
                                        <th class="px-4 py-3">Client</th>
                                        <th class="px-4 py-3">Amount</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white-fafafa divide-y">
                                    <tr class="text-black-1E1E1E">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                <p class="font-semibold">Hans Burger</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            $ 863.45
                                        </td>
                                        <td class="px-4 py-3 text-xs">
                                            <span class="px-2 py-1 font-semibold">
                                                Approved
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            6/10/2020
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-black-1E1E1E uppercase border-t sm:grid-cols-9">
                            <span class="flex items-center col-span-3">
                                Showing 21-30 of 100
                            </span>
                            <span class="col-span-2"></span>
                            <!-- Pagination -->
                            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                <nav aria-label="Table navigation">
                                    <ul class="inline-flex items-center">
                                        <li>
                                            <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                            </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                1
                                            </button>
                                        </li>
                                        <li>
                                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                2
                                            </button>
                                        </li>                                
                                        <li>
                                            <span class="px-3 py-1">...</span>
                                        </li>
                                        <li>
                                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                6
                                            </button>
                                        </li>
                                         <li>
                                            <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20"\>
                                                    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </nav>
                            </span>
                        </div> --}}
                    </div>
                </main>
            </div>            
        </div>

    </body>

</html>
