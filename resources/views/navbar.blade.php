@vite('resources/css/app.css')

<nav id="navbar" class="flex flex-wrap items-center justify-between w-full py-2 px-5 2xl:px-20 md:px-10 md:py-0 text-lg text-black-1E1E1E bg-white-fafafa mt-0 z-10 top-0">
    <div>
        <a class="flex items-center no-underline transform duration-200 hover:no-underline hover:opacity-80" href="{{ url('/') }}">
            <img src={{asset('img/logo.png')}} alt="logo" class="h-20 mx-auto">
            <span class="self-center md:text-4xl text-3xl text-blue-1081E8 font-signika font-bold whitespace-nowrap transition-colors duration-300 transform">KNPI</span>
        </a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block text-black-1E1E1E shadow-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>        
    <div class="hidden bg-white md:bg-transparent w-full md:flex md:items-center md:w-auto" id="menu">
        <ul class="pt-4 md:flex md:justify-between md:pt-0 text-base text-black-1E1E1E font-roboto font-semibold">
            <li>
                <a class="xl:p-4 md:p-2 py-2 block no-underline opacity-50 duration-300 transform hover:opacity-100 hover:text-underline" href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a class="xl:p-4 md:p-2 py-2 block no-underline opacity-50 duration-300 transform hover:opacity-100 hover:text-underline" href="{{ url('/about') }}">About</a>
            </li>
            <li>
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="relative inline-flex items-center xl:p-4 md:p-2 py-2 no-underline opacity-50 duration-300 transform hover:opacity-100 hover:text-underline" type="button">
                    Gallery
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown-menu" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ url('/photos') }}" class="xl:p-4 md:p-2 py-2 block no-underline opacity-50 duration-300 transform hover:opacity-100 hover:text-underline">Photos</a>
                        </li>
                        <li>
                            <a href="{{ url('/videos') }}" class="xl:p-4 md:p-2 py-2 block no-underline opacity-50 duration-300 transform hover:opacity-100 hover:text-underline">Videos</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="xl:p-4 md:p-2 py-2 block no-underline opacity-50 duration-300 transform hover:opacity-100 hover:text-underline" href="{{ url('/blog') }}">Blog</a>
            </li>
            <li>
                <a class="xl:p-4 md:p-2 py-2 block no-underline opacity-50 duration-300 transform hover:opacity-100 hover:text-underline" href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>
{{-- Mobile Menu --}}
<script type="text/javascript">
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');
    button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    });
</script>
{{-- Dropdown Menu --}}
<script type="text/javascript">
    const dropdown = document.querySelector('#dropdown-button');
    const dropmenu = document.querySelector('#dropdown-menu');
    dropdown.addEventListener('click', () => {
    dropmenu.classList.toggle('hidden');
    });
</script>
