<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MEE9 - {{ucfirst(Auth::user()->username)}}'s Dashboard</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="icon" type="image/x-icon" href="/imgs/favicon.png">
</head>

<style>
  .dropdown:hover .dropdown-menu {
    display: block;
  }

  @media screen and (max-width: 849px) {

    .div-no-mobile {
      visibility: hidden;
    }
  }

  .dark {
    color-scheme: dark;
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

<!-- Dropdown menu -->
<div id="dropdownDivider" class="z-10 hidden abso border border-gray-700 divide-y rounded shadow w-44 bg-dark-bg divide-gray-700">
  <ul class="py-1 text-sm text-gray-700 text-gray-200" aria-labelledby="dropdownDividerButton">
    <li>
      <a href="#" class="block px-4 py-2 font-medium text-gray-300 hover:text-white">Dashboard</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 font-medium text-gray-300 hover:text-white">Settings</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 font-medium text-gray-300 hover:text-white">Earnings</a>
    </li>
  </ul>
  <div class="py-1">
  <a data-modal-toggle="popup-modal" class="block flex flex-1 px-4 py-2 text-sm font-medium text-gray-300 hover:text-white cursor-pointer">Log out
  <svg xmlns="http://www.w3.org/2000/svg"class="flex-1 mt-1 -ml-16 float-left" width="12" height="12" fill="white" viewBox="0 0 24 24"><path d="M14 12h-4v-12h4v12zm4.213-10.246l-1.213 1.599c2.984 1.732 5 4.955 5 8.647 0 5.514-4.486 10-10 10s-10-4.486-10-10c0-3.692 2.016-6.915 5-8.647l-1.213-1.599c-3.465 2.103-5.787 5.897-5.787 10.246 0 6.627 5.373 12 12 12s12-5.373 12-12c0-4.349-2.322-8.143-5.787-10.246z"/></svg>
  </a> 
</div>
</div>
 {{dd(Auth::user()->avatar)}}
<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true">
  <div class="relative p-4 w-full max-w-md h-full md:h-auto">
    <div class="relative rounded-lg shadow bg-dark-bg">
      <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-700 hover:text-gray-300 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="popup-modal">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="p-6 text-center">
       
        @if (isset(Auth::user()->avatar))
         <img class="mx-auto mb-4 w-14 h-14" src="/imgs/favicon.png">
         @else
         <svg class="mx-auto mb-4 w-14 h-14 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
         </svg>
         @endif
        <h3 class="mb-5 text-lg font-medium text-gray-400">Hey <span class="capitalize">{{Auth::user()->username}}</span>,<br> Are you sure you want to log out?</h3>
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="text-white bg-mee9-red hover:bg-mee9-red-dark focus:ring-2 focus:outline-none focus:ring-red-400 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
            Yes, I'm sure
          </button>
            <button data-modal-toggle="popup-modal" class="text-gray-500 bg-white hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-100 rounded-lg text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>

<body class="font-sans">
  <div class="grid grid-cols-12 bg-dark-bg h-screen overflow-hidden">
    <div class="sidebar col-span-2 text-gray-500 row-span-2 fixed z-30 inset-y-0 left-0 transition duration-500 md:overflow-y-auto lg:static lg:inset-0">
      <div class="flex-1 md:flex md:items-center md:gap-12 mb-4">
        <a class="block text-teal-300" href="/">
          <span class="sr-only">Home</span>
          <img class="w-10 h-10 mt-4 ml-4" src="/imgs/favicon.png">
        </a>
        <a href="/">
          <p class="-ml-10 hidden md:mt-4 md:block text-white invisible md:visible font-bold text-2xl tracking-wide">MEE9</p>
        </a>
      </div>
      <hr class="border-darkl-bg">
      <div class="sidebar_nav mt-2 bg-dark-bg text-xs">
        <!--- header -->
        <p class="py-2 px-4 text-gray-400 font-medium uppercase">Main</p>
        <!--- Active link -->
        <a class="flex items-center mt-2 py-2 px-4 bg-darkli-bg text-mee9-red transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-5" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fill="none">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="currentColor"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="currentColor" opacity="0.5"></path>
          </svg>

          <span class="mx-3">Dashboard</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <!--- Regular links -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
          </svg>

          <span class="mx-3">Aplications</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>

        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-all ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
          </svg>

          <span class="mx-3">Pages</span>
          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>

        <!--- header -->
        <p class="py-2 px-4 mt-6 text-gray-400 font-medium uppercase">Layouts</p>
        <!--- Active link -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
          </svg>
          <span class="mx-3">Themes</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <!--- Regular links -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
          </svg>
          <span class="mx-3">Sub-headers</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-all ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
          </svg>
          <span class="mx-3">General</span>
          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>

        <!--- header -->
        <p class="py-2 px-4 mt-6 text-gray-400 font-medium uppercase">Crud</p>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12.173,16.086c0.72,0,1.304-0.584,1.304-1.305V6.089c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v8.692C10.868,15.502,11.452,16.086,12.173,16.086z M11.738,6.089c0-0.24,0.194-0.435,0.435-0.435s0.435,0.194,0.435,0.435v8.692c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V6.089zM16.52,16.086c0.72,0,1.304-0.584,1.304-1.305v-11.3c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v11.3C15.215,15.502,15.799,16.086,16.52,16.086z M16.085,3.481c0-0.24,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v11.3c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V3.481z M3.48,16.086c0.72,0,1.304-0.584,1.304-1.305v-3.477c0-0.72-0.584-1.304-1.304-1.304c-0.72,0-1.304,0.584-1.304,1.304v3.477C2.176,15.502,2.76,16.086,3.48,16.086z M3.045,11.305c0-0.24,0.194-0.435,0.435-0.435c0.24,0,0.435,0.194,0.435,0.435v3.477c0,0.24-0.195,0.436-0.435,0.436c-0.24,0-0.435-0.195-0.435-0.436V11.305z M18.258,16.955H1.741c-0.24,0-0.435,0.194-0.435,0.435s0.194,0.435,0.435,0.435h16.517c0.24,0,0.435-0.194,0.435-0.435S18.498,16.955,18.258,16.955z M7.826,16.086c0.72,0,1.304-0.584,1.304-1.305V8.696c0-0.72-0.584-1.304-1.304-1.304S6.522,7.977,6.522,8.696v6.085C6.522,15.502,7.106,16.086,7.826,16.086z M7.392,8.696c0-0.239,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v6.085c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V8.696z"></path>
          </svg>
          <span class="mx-3">Forms</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <!--- Regular links -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
          </svg>
          <span class="mx-3">Files Upload</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-all ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
          </svg>
          <span class="mx-3">Tables</span>
          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>

        <!--- Features-->
        <!--- header -->
        <p class="py-2 px-4 mt-6 text-gray-400 font-medium uppercase">Features</p>
        <!--- Active link -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
          </svg>
          <span class="mx-3">Themes</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <!--- Regular links -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
          </svg>
          <span class="mx-3">Sub-headers</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-all ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
          </svg>
          <span class="mx-3">General</span>
          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12.173,16.086c0.72,0,1.304-0.584,1.304-1.305V6.089c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v8.692C10.868,15.502,11.452,16.086,12.173,16.086z M11.738,6.089c0-0.24,0.194-0.435,0.435-0.435s0.435,0.194,0.435,0.435v8.692c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V6.089zM16.52,16.086c0.72,0,1.304-0.584,1.304-1.305v-11.3c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v11.3C15.215,15.502,15.799,16.086,16.52,16.086z M16.085,3.481c0-0.24,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v11.3c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V3.481z M3.48,16.086c0.72,0,1.304-0.584,1.304-1.305v-3.477c0-0.72-0.584-1.304-1.304-1.304c-0.72,0-1.304,0.584-1.304,1.304v3.477C2.176,15.502,2.76,16.086,3.48,16.086z M3.045,11.305c0-0.24,0.194-0.435,0.435-0.435c0.24,0,0.435,0.194,0.435,0.435v3.477c0,0.24-0.195,0.436-0.435,0.436c-0.24,0-0.435-0.195-0.435-0.436V11.305z M18.258,16.955H1.741c-0.24,0-0.435,0.194-0.435,0.435s0.194,0.435,0.435,0.435h16.517c0.24,0,0.435-0.194,0.435-0.435S18.498,16.955,18.258,16.955z M7.826,16.086c0.72,0,1.304-0.584,1.304-1.305V8.696c0-0.72-0.584-1.304-1.304-1.304S6.522,7.977,6.522,8.696v6.085C6.522,15.502,7.106,16.086,7.826,16.086z M7.392,8.696c0-0.239,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v6.085c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V8.696z"></path>
          </svg>
          <span class="mx-3">Forms</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <!--- Regular links -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
          </svg>
          <span class="mx-3">Files Upload</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-all ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
          </svg>
          <span class="mx-3">Tables</span>
          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12.173,16.086c0.72,0,1.304-0.584,1.304-1.305V6.089c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v8.692C10.868,15.502,11.452,16.086,12.173,16.086z M11.738,6.089c0-0.24,0.194-0.435,0.435-0.435s0.435,0.194,0.435,0.435v8.692c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V6.089zM16.52,16.086c0.72,0,1.304-0.584,1.304-1.305v-11.3c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v11.3C15.215,15.502,15.799,16.086,16.52,16.086z M16.085,3.481c0-0.24,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v11.3c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V3.481z M3.48,16.086c0.72,0,1.304-0.584,1.304-1.305v-3.477c0-0.72-0.584-1.304-1.304-1.304c-0.72,0-1.304,0.584-1.304,1.304v3.477C2.176,15.502,2.76,16.086,3.48,16.086z M3.045,11.305c0-0.24,0.194-0.435,0.435-0.435c0.24,0,0.435,0.194,0.435,0.435v3.477c0,0.24-0.195,0.436-0.435,0.436c-0.24,0-0.435-0.195-0.435-0.436V11.305z M18.258,16.955H1.741c-0.24,0-0.435,0.194-0.435,0.435s0.194,0.435,0.435,0.435h16.517c0.24,0,0.435-0.194,0.435-0.435S18.498,16.955,18.258,16.955z M7.826,16.086c0.72,0,1.304-0.584,1.304-1.305V8.696c0-0.72-0.584-1.304-1.304-1.304S6.522,7.977,6.522,8.696v6.085C6.522,15.502,7.106,16.086,7.826,16.086z M7.392,8.696c0-0.239,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v6.085c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V8.696z"></path>
          </svg>
          <span class="mx-3">Forms</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <!--- Regular links -->
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-colors ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
          </svg>
          <span class="mx-3">Files Upload</span>

          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <a class="flex items-center py-2 px-4 text-gray-500 hover:text-gray-300 hover:bg-darkligh-bg transition-all ease-in-out duration-100" href="/">
          <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
          </svg>
          <span class="mx-3">Tables</span>
          <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>
    <nav class="bg-dark-bg sticky col-span-10 row-span-1">
      <div class="hidden sm:block sm:ml-6">
        <div class="flex space-x-2 font-medium justify-items-center align-middle p-3">
          <a href="#" class="transition-all ease-in-out duration-300 text-white px-2 py-2.5 rounded-md text-sm">Dashboard</a>
          <a href="#" class="transition-all ease-in-out duration-300 text-gray-500 hover:text-white px-3 py-2.5 rounded-md text-sm">Servers</a>
          <a href="#" class="transition-all ease-in-out duration-300 text-gray-500 hover:text-white px-3 py-2.5 rounded-md text-sm">Plugins</a>
          <a href="#" class="transition-all ease-in-out duration-300 bg-mee9-red rounded-md my-1 mx-1 text-white  hover:text-gray-300  hover:bg-mee9-red-dark px-3 py-2 rounded-md text-sm">Premium</a>
          <div class="flex-1 flex text-blue-600">
            <span class="flex place-items-center hover:bg-darkligh-bg cursor-pointer transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs ml-auto text-mee9-red mr-2 px-3">
              <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </span>
            <span class="relative flex place-items-center hover:bg-darkligh-bg cursor-pointer transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-mee9-red mr-2 px-3">
              <span class="animate-ping absolute inset-0 h-full w-full rounded-full bg-mee9-red opacity-25 hover:animate-none hover:opacity-0 transition-opacity ease-out duration-100"></span>
              <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 80" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M34.999 3.516c-0.828 0-1.5 0.671-1.5 1.499v23.987c0 0.828 0.671 1.499 1.5 1.499h23.986c0.828 0 1.499-0.671 1.499-1.499-0.016-14.069-11.416-25.47-25.485-25.486zM29.002 9.513c-14.075 0-25.486 11.41-25.486 25.485s11.411 25.486 25.486 25.486 25.485-11.41 25.485-25.486c0-0.828-0.671-1.499-1.499-1.499h-22.487v-22.487c0-0.828-0.671-1.499-1.499-1.499zM27.503 12.561v22.437c0 0.828 0.671 1.5 1.499 1.5h22.437c-0.803 11.803-10.606 20.972-22.437 20.987-12.42 0.005-22.491-10.059-22.496-22.479-0.004-11.843 9.179-21.661 20.997-22.445z" />
              </svg>
            </span>
            <span class="flex place-items-center hover:bg-darkligh-bg cursor-pointer transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-mee9-red mr-2 px-3">
              <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
              </svg>
            </span>
            <span class="flex place-items-center hover:bg-darkligh-bg cursor-pointer transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-mee9-red mr-2 px-3">
              <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
              </svg>
            </span>
            <span class="flex place-items-center hover:bg-darkligh-bg cursor-pointer transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-mee9-red mr-2 px-3">
              <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
              </svg>
            </span>
            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="transition-all ease-in-out duration-300 hover:bg-darkligh-bg bg-transparent rounded py-1 px-2 font-bold text-xs text-mee9-red px-3" type="button"><svg xmlns="http://www.w3.org/2000/svg" class="block h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg></button>
          </div>
        </div>
      </div>
      <div id="status" class="flex bg-dark-nav py-2 px-2 font-normal text-xs text-gray-400">
        <div class="div-no-mobile text-sm text-gray-400 font-medium px-4">Welcome back, <span class="capitalize">{{Auth::user()->username}}</span></div>
        <div class="ml-auto flex space-x-2 px-4 mr-6">
          <span class="cursor-pointer transition-all ease-in-out duration-300 text-gray-400 py-1 cursor-text rounded-sm px-2">Status:
            <span class="text-green-600 ml-1.5">
              Running
            </span>
            <strong class="inline-flex items-center rounded relative text-xs font-medium mr-4">
              <span class="animate-ping w-2 h-2 bg-green-600/75 rounded-full float-right items-center "></span>
              <span class="w-2 h-2 bg-green-600 rounded-full absolute float-right items-center"></span>
            </strong>
            <script>
                 var time = null,
                            date = null;
                  var data = null
                    var update = function () {
                        date = moment(new Date())
                        time.html(date.format('h:mm A'));
                        data.html(date.format('MMMM Do, YYYY'))
                        day.html(date.format('dddd'))
                    };

                    $(document).ready(function(){
                        data = $('#data')
                        time = $('#time')
                        day = $('#day')
                        update();
                        setInterval(update, 1000);
                    });
              </script>
                <span class="cursor-pointer transition-all ease-in-out duration-300 text-gray-400 py-1 cursor-text rounded-sm px-2">Day:
              <span class="text-gray-200 font-medium ml-1"><span id="day"></span></span>
            </span>
            <span class="cursor-pointer transition-all ease-in-out duration-300 text-gray-400 py-1 cursor-text rounded-sm px-2">Date:
              <span class="text-gray-200 font-medium ml-1"><span id="data"></span></span>
            </span>
          
            <span class="cursor-pointer transition-all ease-in-out duration-300 text-gray-400 py-1 cursor-text rounded-sm px-2">Current Time:
              <span class="text-gray-200 font-medium relative ml-1"><span id="time"></span></span>
            </span>
            <!-- <span class="cursor-pointer transition-all ease-in-out duration-300 text-gray-400 py-1 cursor-text rounded-sm px-2">Time Elapsed:
              <span  class="text-gray-200 font-medium ml-1">20 Seconds</span>
            </span> -->
        </div>
      </div>
    </nav>
    
    <div class="main_content bg-darklig-bg col-span-10 overflow-y-scroll relative  grid grid-cols-1  ">
      <div class="container px-8 m-auto mt-6">
        <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1">
          <div class="col-span-4 bg-darkligh-bg shadow rounded-2xl grid grid-cols-2 gap-4 p-4">
            <div class="card-header h-52 col-span-2 bg-darkligh-bg rounded-t-2xl -m-4"></div>
            
            <div class="col-span-1 bg-darkl-bg rounded-md px-2 py-5 -mt-6">
              <svg class="block text-gray-300 w-6/12 h-3/6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              <h4 class="text-base font-medium text-gray-300">Weekly sales</h4>
            </div>

            <div class="col-span-1 bg-darkl-bg font-medium rounded-md px-2 py-5 -mt-6">
              <svg class="block text-gray-300 w-6/12 h-3/6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              <h4 class="text-base font-medium text-gray-300 bg-darkl-bg">Total users</h4>
            </div>

            <div class="col-span-1 bg-darkl-bg font-medium rounded-md px-2 py-5">
              <svg xmlns="http://www.w3.org/2000/svg" class="block text-gray-300 w-6/12 h-3/6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
              </svg>

              <h4 class="text-base text-gray-300 font-medium ">Commands</h4>
            </div>
            <div class="col-span-1 bg-darkl-bg rounded-md px-2 py-5">
              <svg class="block text-gray-300 font-medium w-6/12 h-3/6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
              </svg>
              <h4 class="text-base font-medium text-gray-300">Bug reports</h4>
            </div>
          </div>

          <div class="custom-scroll col-span-4 bg-darkligh-bg rounded-2xl text-sm text-gray-400 overflow-x-hidden overflow-y-auto">
            <h3 class="pl-4 flex mb-4">
              <div class="pt-5">
                <span class="block font-semibold text-base text-gray-200">
                  My Activities
                </span>
              </div>
            </h3>
            <hr class="border-darkl-bg">

            <ul class="font-medium mt-4">
              <li class=" grid grid-cols-8 px-4 text-xs mb-6 ">
                <span class=" col-span-2 text-gray-200 font-semibold">12:58 PM</span>
                <span class="block w-3 h-3 bg-darkligh-bg border-2 border-mee9-red mt-2 rounded-full col-span-1 relative z-10">
                  <span class="absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                </span>
                <span class="col-span-5">
                    Created a new command
                </span>
              </li>


              <li class="grid grid-cols-8 px-4 text-xs mb-6 ">
                <span class=" col-span-2 text-gray-200 font-semibold">14:32 PM</span>
                <span class="block w-3 h-3 bg-darkligh-bg border-2 border-mee9-red mt-2  rounded-full col-span-1 relative z-10">
                  <span class="absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                </span>
                <span class="col-span-5">
                  Updated Profile
                </span>
              </li>

              <li class="grid grid-cols-8 px-4 text-xs mb-6 ">
                <span class=" col-span-2 text-gray-200 font-semibold">12:30 PM</span>
                <span class="block w-3 h-3 bg-darkligh-bg border-2 border-mee9-red mt-2  rounded-full col-span-1 relative z-10">
                  <span class="absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                </span>
                <span class="col-span-5">
                  Changed Password
                </span>
              </li>

              <li class="grid grid-cols-8 px-4 text-xs mb-6 ">
                <span class=" col-span-2 text-gray-200 font-semibold">12:30 PM</span>
                <span class="block w-3 h-3 bg-darkligh-bg border-2 border-mee9-red mt-2  rounded-full col-span-1 relative z-10">
                  <span class="absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                </span> 
                <span class="col-span-5">
                  Outlines keep you honest. And keep structure
                </span>
              </li>


              <li class="grid grid-cols-8 px-4 text-xs mb-6 ">
                <span class=" col-span-2 text-gray-200 font-semibold">12:30 PM</span>
                <span class="block w-3 h-3 bg-darkligh-bg border-2 border-mee9-red mt-2  rounded-full col-span-1 relative z-10">
                  <span class="absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                </span>
                <span class="col-span-5">
                  Outlines keep you honest. And keep structure
                </span>
              </li>

              <li class="grid grid-cols-8 px-4 text-xs mb-6 ">
                <span class=" col-span-2 text-gray-200 font-semibold">12:30 PM</span>
                <span class="block w-3 h-3 bg-darkligh-bg border-2 border-mee9-red mt-2  rounded-full col-span-1 relative z-10">
                  <span class="absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                </span>
                <span class="col-span-5">
                  Outlines keep you honest. And keep structure
                </span>
              </li>


            </ul>
          </div>


          <div class="col-span-4  rounded grid">
            <div class="card-header w-full h-60 bg-darkligh-bg rounded-2xl"></div>
            <div class="card-header w-full h-60 bg-darkligh-bg rounded-2xl mt-auto"></div>
          </div>
        </div>


        <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1 mt-6">
          <div class="col-span-4 bg-darkligh-bg shadow rounded-2xl grid grid-cols-2 gap-4 p-4 h-40">

          </div>

          <div class="col-span-8  rounded grid h-40">
            <div class="card-header w-full h-full bg-darkligh-bg rounded-2xl"></div>
          </div>
        </div>



        <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1 mt-6">
          <div class="h-40 col-span-4 bg-darkligh-bg shadow rounded-2xl grid grid-cols-2 gap-4 p-4">
          </div>
          <div class="col-span-4  rounded grid">
            <div class="card-header w-full h-full bg-darkligh-bg rounded-2xl"></div>
          </div>
          <div class="col-span-4  rounded grid">
            <div class="card-header w-full h-full bg-darkligh-bg rounded-2xl"></div>
          </div>
        </div>


        <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1 mt-6 mb-6">
          <div class="h-40 col-span-4 bg-darkligh-bg shadow rounded-2xl grid grid-cols-2 gap-4 p-4">
          </div>
          <div class="col-span-8  rounded grid">
            <div class="card-header w-full h-full bg-darkligh-bg rounded-2xl"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>
