<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEE9 - Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="imgs/favicon.png">
    <link crossorigin='anonymous' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css' integrity='sha512-ifsLB5FigXH07aADF1bmVX8B66KrNLZGT6RY9HPN3hTn9eaP+t16azYMAuULHZJyR8zC4O5Vt/76YZG6jNktIA==' referrerpolicy='no-referrer' rel='stylesheet'>
<link href='https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css' rel='stylesheet'>
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
                    <span class="sr-only">Home</span>
                    <img class="w-10 h-10" src="imgs/favicon.png">
                </a> <a href="/">
                <p class="-ml-8 hidden md:block text-white invisible md:visible font-bold text-2xl tracking-wide">MEE9</p></a>
            </div>

            <div class="md:flex md:items-center md:gap-12">
                <nav class="hidden md:block" aria-labelledby="header-navigation">
                    <h2 class="sr-only" id="header-navigation">Header navigation</h2>

                    <ul class="flex items-center gap-6 text-sm">

                        <li>
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
                        </li>

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
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1 hover:fill-neutral-200" fill="#ff3e3e" width="14"
                                    height="12" viewBox="0 0 24 24">
                                    <path
                                        d="M24 5c-3.923 3.265-5.623 4.716-7.15 4.716-2.44 0-3.681-3.675-4.85-7.716-1.165 4.028-2.41 7.715-4.853 7.715-1.513 0-3.168-1.404-7.147-4.715 3.321 7.018 3 14.292 3 17h18c0-1.718-.478-9.65 3-17zm-16.853 6.715c2.295 0 3.787-1.64 4.853-3.761 1.064 2.122 2.556 3.762 4.85 3.762 1.121 0 2.188-.43 3.126-1.042-.432 1.907-.68 3.72-.82 5.326h-14.322c-.138-1.617-.38-3.423-.808-5.324.927.607 2 1.039 3.121 1.039zm-2.14 8.285c-.003-.593-.016-1.267-.047-2h14.065c-.032.745-.046 1.422-.047 2h-13.971z" />
                                </svg>
                                <p class="font-medium hover:text-neutral-300 drop-shadow-xl shadow-mee9-red">Premium</p>
                            </a>

                        </li>

                    </ul>
                </nav>

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

<body class="bg-dark-bg">
<div class="flex items-center justify-center py-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <h2 class="text-center text-3xl font-bold text-gray-300">
        Sign in to your account
      </h2>
      <p class="mt-2 text-center text-sm text-gray-300">Or  <a href="/register" class="font-medium text-mee9-red hover:text-mee9-red-dark">create</a> a new
       account.</p>
    </div>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form class="mt-8 space-y-6" action="{{route('login.post')}}" method="POST">
        @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
       
      <div>
            
          <label for="email" class="sr-only">Email</label>
          <input id="email" name="email" type="email" autocomplete="current-email" required class="appearance-none relative rounded-t-md block w-full  border-gray-300 px-3 py-2 placeholder-neutral-500 text-gray-900 bg-white focus:z-10 sm:text-sm" placeholder="E-Mail">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-b-md border-gray-300 rounded-none relative block w-full px-3 py-2 placeholder-neutral-500 text-gray-900 bg-white focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember-me" name="remember-me" checked type="checkbox" class="h-4 w-4 text-mee9-red focus:ring-mee9-red border-mee9-red rounded">
          <label for="remember-me" class="ml-2 block text-sm text-gray-300 font-medium">
            Remember me
          </label>
        </div>

        <div class="text-sm">
          <span class="text-gray-300">
            Forgot your</span>
            <a href="#" class="text-mee9-red font-medium hover:text-mee9-red-dark">password?</a>
        </div>
      </div>

      <div>
        <button type="submit" class="-mb-4 group bg-discord relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-mee9-red hover:bg-mee9-red-dark">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign in
        </button>
      </div>
 
    <a href="/login/discord" type="button" class="-mb-4 group bg-mee6 relative w-full flex justify-center py-2 pb-2 hover:bg-discordd text-sm font-medium rounded-md text-white">
        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 48 48"><path  d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z"></path></svg>       
         </span>
        Sign in with Discord
    </a>
    <div class="relative flex -my-6 -py-6 items-center">
        <div class="flex-grow border-t border-gray-700"></div>
        <span class="flex-shrink items-center mx-4 font-sm text-gray-600">OR</span>
        <div class="flex-grow border-t border-gray-700"></div>
    </div>
    <div>
    <a href="/login/github" type="button" class="mb-2 group relative w-full flex justify-center py-2 pb-2 border border-gray-700 text-sm font-medium rounded-md text-white hover:text-gray-300  hover:bg-gray-800 hover:border-gray-700 bg-darkligh-bg">
        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
        </span>
        Sign in with GitHub 
    </a>

    <a href="/login/google" type="button" class="group relative w-full flex justify-center py-2 pb-2 border border-gray-700 text-sm font-medium rounded-md text-black  hover:bg-gray-200 hover:border-gray-300 bg-white">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="22" height="22"
                viewBox="0 0 48 48"
                style=" fill:#undefined;"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path></svg>
            </span>
            Sign in with Google
    </a>
    </div>
   </div>
</form>
  </div>
</div>


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
                <a href="https://discord.gg/W8fCg4YdN3" rel="noopener noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Discord</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                    d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm2.784 15.584h-6.804c-.678 0-1.23-.552-1.23-1.236v-8.112c0-.684.552-1.236 1.23-1.236h8.04c.678 0 1.23.552 1.23 1.236v10.764l-1.29-1.14-.726-.672-.768-.714.318 1.11zm-1.08-2.748c1.326-.042 1.836-.912 1.836-.912 0-1.932-.864-3.498-.864-3.498-.864-.648-1.686-.63-1.686-.63l-.084.096c1.02.312 1.494.762 1.494.762-.624-.342-1.236-.51-1.806-.576-.432-.048-.846-.036-1.212.012l-.102.012c-.21.018-.72.096-1.362.378l-.354.174s.498-.474 1.578-.786l-.06-.072s-.822-.018-1.686.63c0 0-.864 1.566-.864 3.498 0 0 .504.87 1.83.912l.402-.498c-.762-.228-1.05-.708-1.05-.708l.168.102.024.018.024.013.006.004.024.013c.15.084.3.15.438.204.246.096.54.192.882.258.45.084.978.114 1.554.006.282-.048.57-.132.87-.258.21-.078.444-.192.69-.354 0 0-.3.492-1.086.714l.396.486zm-2.79-2.802c-.342 0-.612.3-.612.666 0 .366.276.666.612.666.342 0 .612-.3.612-.666.006-.366-.27-.666-.612-.666zm2.19 0c-.342 0-.612.3-.612.666 0 .366.276.666.612.666.342 0 .612-.3.612-.666 0-.366-.27-.666-.612-.666z"
                    -rule="evenodd" /></svg>
                </a>
            </li>
        </ul>
    </div>
</footer>

</html>
