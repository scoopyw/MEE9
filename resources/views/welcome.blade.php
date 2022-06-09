<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEE9 - The Discord Bot (Alternative)</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="imgs/favicon.png">
</head>

<style>
       .dark {
  color-scheme: dark;
    }
    .dropdown:hover .dropdown-menu {
        display: block;
    }


  /* custom scrollbar */
  ::-webkit-scrollbar {
    width: 20px;
    cursor: auto;
  }

  ::-webkit-scrollbar-track {
    background-color: transparent;
  }

  ::-webkit-scrollbar-thumb {
    background-color: #ff3e3e;
    border-radius: 20px;
    border: 6px solid transparent;
    background-clip: content-box;
  }

  ::-webkit-scrollbar-thumb:hover {
    background-color: #cf3030;
  }

  .custom-scroll,
  .sidebar,
  .main_content {
    scrollbar-width: thin;
    scrollbar-color: #ff3e3e;
  }
</style>
<section>
    <div class="px-4 py-3 bg-dark-bg">
        <p class="text-sm font-medium text-center text-white">
            Join the official MEE9 Discord server by clicking <a
                class="px-2 hover:bg-mee9-red-dark py-1 text-sm font-medium hover:text-neutral-200 text-white bg-mee9-red rounded-md shadow hover:bg-mee9-red-hover cursor-pointer"
                target="popup"
                onclick="window.open('https:/\/discord.gg/W8fCg4YdN3','popup','height=full'); return false;">here</a>
        </p>
    </div>
</section>
<header class="bg-dark-nav">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <a class="block text-teal-300" href="/">
                    <span class="sr-only">Dashboard</span>
                    <img class="w-10 h-10" src="imgs/favicon.png">
                </a> <a href="/">
                <p class="-ml-8 hidden md:block text-white invisible md:visible font-bold text-2xl tracking-wide">MEE9</p></a>
            </div>

            <div class="md:flex md:items-center md:gap-12">
                <nav class="hidden md:block" aria-labelledby="header-navigation">
                    <h2 class="sr-only" id="header-navigation">Header navigation</h2>

                    <ul class="flex items-center gap-6 text-sm">

                        <!-- <li>
                            <div class="dropdown inline-block relative">
                                <button class="text-neutral-300 font-medium hover:text-white inline-flex">
                                    <span class="mr-1">Plug-ins</span>
                                    <svg class="fill-current h-5 pt-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1" style="width: 10em">
                                    <li class=""><a
                                            class="rounded-t border-b border-dark-nav py-2  px-4 block whitespace-no-wrap"
                                            href="#">One</a></li>
                                    <li class=""><a
                                            class="border-b border-dark-nav py-2  px-4 block whitespace-no-wrap"
                                            href="#">Two</a></li>
                                    <li class=""><a class="rounded-b py-2 px-4 block whitespace-no-wrap"
                                            href="#">Three is the magic number</a></li>
                                </ul>
                            </div>
                        </li> -->

                        <li>
                            <a class="text-neutral-300 font-medium transition hover:text-white" href="/">
                                Subscriptions
                            </a>
                        </li>

                        <li>
                            <a class="text-neutral-300 font-medium transition hover:text-white" href="/">
                                Personalized
                            </a>
                        </li>

                        <li>
                            <a class="text-neutral-300 font-medium transition hover:text-white" href="/">
                                Support Server
                            </a>
                        </li>

                        <li>
                            <a class="text-neutral-300 font-medium transition hover:text-white" href="/">
                                Tutorials
                            </a>
                        </li>

                        <li>

                            <a class=" text-mee9-red hover:red transition hover:text-neutral-200 inline-flex" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1 hover:fill-neutral-200" fill="#ff3e3e" width="12"
                                    height="12" viewBox="0 0 24 24">
                                    <path
                                        d="M24 5c-3.923 3.265-5.623 4.716-7.15 4.716-2.44 0-3.681-3.675-4.85-7.716-1.165 4.028-2.41 7.715-4.853 7.715-1.513 0-3.168-1.404-7.147-4.715 3.321 7.018 3 14.292 3 17h18c0-1.718-.478-9.65 3-17zm-16.853 6.715c2.295 0 3.787-1.64 4.853-3.761 1.064 2.122 2.556 3.762 4.85 3.762 1.121 0 2.188-.43 3.126-1.042-.432 1.907-.68 3.72-.82 5.326h-14.322c-.138-1.617-.38-3.423-.808-5.324.927.607 2 1.039 3.121 1.039zm-2.14 8.285c-.003-.593-.016-1.267-.047-2h14.065c-.032.745-.046 1.422-.047 2h-13.971z" />
                                </svg>
                                <p class="font-medium items-center hover:text-neutral-300 drop-shadow-xl shadow-mee9-red">Premium</p>
                            </a>

                        </li>

                    </ul>
                </nav>
                @if (Auth::user())
                <div class="flex items-center gap-4 text-white">
                    <div class="sm:gap-4 sm:flex">
                        <a class="flex flex-1 px-4 py-2 text-sm font-medium text-white bg-mee9-red rounded-md hover:text-neutral-200 shadow hover:bg-mee9-red-dark -ml-6"
                            href="/dashboard">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>--> Dashboard 
                        </a>
                    <div class="block md:hidden">
                        <button class="p-2 text-white transition bg-gray-800 rounded hover:text-white/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@else
<div class="flex items-center gap-4 text-white">
                    <div class="sm:gap-4 sm:flex">
                        <a class="px-4 py-2 text-sm font-medium text-white bg-mee9-red rounded-md hover:text-neutral-200 shadow hover:bg-mee9-red-dark"
                            href="/login">
                            Login
                        </a>

                        <div class="hidden sm:flex">
                            <a class="px-5 py-2 text-sm font-medium text-black bg-white rounded-md hover:bg-neutral-200"
                                href="/register">
                                Register
                            </a>
                        </div>
                    </div>

                    <div class="block md:hidden">
                        <button class="p-2 text-white transition bg-gray-800 rounded hover:text-white/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endif


<body class="bg-dark-bg">
    <section>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:gap-16 lg:grid-cols-2">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-last">
                    <img class="absolute inset-0 object-cover w-full h-full" src="imgs/MEE9BOT.png"
                        alt="Woman and her robot" />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl text-white font-bold sm:text-4xl">Build the best Discord Server!</h2>

                    <p class="mt-4 text-gray-500">
                        Configure moderations, notifications and more using our user-friendly dashboard.
                    </p>
                    <a class="inline-flex ml-2 items-center shadow px-6 py-3 text-sm cursor-pointer mt-8 hover:text-neutral-200 text-white font-medium bg-mee9-red rounded  hover:bg-mee9-red-dark focus:outline-none focus:ring"
                  
                target="popup"
                onclick="window.open('https:/\/discord.com/api/oauth2/authorize?client_id=981462165536014338&permissions=8&scope=bot%20applications.commands','popup','height=full'); return false;">Add to Discord</a>
                  
                </a>
                    <a class="inline-flex ml-2 items-center shadow px-6 py-3 mt-8 text-black font-medium bg-white rounded hover:bg-neutral-200 focus:outline-none focus:ring"
                        href="/get-started">
                        <span class="text-sm bg-font-medium"> More info </span>

                        <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="relative flex py-5 items-center">
        <div class="flex-grow border-t border-gray-700"></div>
        <span class="flex-shrink mx-4 text-gray-600">Information</span>
        <div class="flex-grow border-t border-gray-700"></div>
    </div>
    <section class="text-white">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Kickstart your marketing</h2>

                <p class="mt-4 text-gray-300">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur
                    aliquam doloribus nesciunt eos fugiat. Vitae aperiam fugit consequuntur
                    saepe laborum.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                <a class="block p-8 transition border border-gray-700 shadow-md rounded-xl hover:shadow-mee9-red hover:border-mee9-red"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-mee9-red" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    <h3 class="mt-4 text-xl font-bold text-white">User-friendly Dashboard</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Manage and control your commands, services and everything else using the online dashboard.
                    </p>
                </a>

                <a class="block p-8 transition border border-gray-700 shadow-md rounded-xl hover:shadow-mee9-red hover:border-mee9-red"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-mee9-red" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                        possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a class="block p-8 transition border border-gray-700 shadow-md rounded-xl hover:shadow-mee9-red hover:border-mee9-red"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-mee9-red" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold text-white">Welcome Messages</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Customizable welcome messages just as you want them. Fully customizable with alot of templates
                        to choose from.
                    </p>
                </a>

                <a class="block p-8 transition border border-gray-700 shadow-md rounded-xl hover:shadow-mee9-red hover:border-mee9-red"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-mee9-red" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                        possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a class="block p-8 transition border border-gray-700 shadow-md rounded-xl hover:shadow-mee9-red hover:border-mee9-red"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-mee9-red" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                        possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a class="block p-8 transition border border-gray-700 shadow-md rounded-xl hover:shadow-mee9-red hover:border-mee9-red"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-mee9-red" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                        possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>
            </div>

            {{-- <div class="mt-12 text-center">
                <a class="inline-flex items-center hover:bg-mee9-red-dark px-8 py-3 mt-8 text-white bg-mee9-red border border-mee9-red rounded  active:text-mee9-red focus:outline-none focus:ring"
                    href="/get-started">
                    <span class="text-sm font-medium"> Get Started </span>

                    <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div> --}}
        </div>
    </section>

</body>
<div class="relative flex py-5 items-center">
    <div class="flex-grow border-t border-gray-700"></div>
    <div class="flex-grow border-t border-gray-700"></div>
</div>
<footer class="bg-nav-dark">
    <div class="max-w-5xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center text-teal-300">
            <img src="imgs/favicon.png" class="w-14 h-14">
        </div>

        <p class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-400">
            Create the best Discord Server today!
        <div class="text-center mt-4">
            <a class="px-3 py-2 text-sm hover:text-neutral-200 font-medium text-white bg-mee9-red rounded-md shadow hover:bg-mee9-red-dark cursor-pointer"
                target="popup"
                onclick="window.open('https:/\/discord.com/api/oauth2/authorize?client_id=981462165536014338&permissions=8&scope=bot%20applications.commands','popup','height=full'); return false;">Add to Discord</a>
        </div>
        </p>

        <nav class="mt-12" aria-labelledby="footer-navigation">
            <h2 class="sr-only" id="footer-navigation">Footer navigation</h2>

            <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                <li>
                    <a class="text-white transition hover:text-white/75" href="/">
                        About
                    </a>
                </li>

                <li>
                    <a class="text-white transition hover:text-white/75" href="/">
                        Careers
                    </a>
                </li>

                <li>
                    <a class="text-white transition hover:text-white/75" href="/">
                        History
                    </a>
                </li>

                <li>
                    <a class="text-white transition hover:text-white/75" href="/">
                        Services
                    </a>
                </li>

                <li>
                    <a class="text-white transition hover:text-white/75" href="/">
                        Projects
                    </a>
                </li>

                <li>
                    <a class="text-white transition hover:text-white/75" href="/">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>

        <ul class="flex justify-center gap-6 mt-12 md:gap-8">
            <li>
                <a href="/" rel="noopener noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>

            <li>
                <a href="/" rel="noopener noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>

            <li>
                <a href="/" rel="noopener noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
            </li>

            <li>
                <a href="/" rel="noopener noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>

            <li>
                <a href="/" rel="noopener noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Dribbble</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>

</html>
