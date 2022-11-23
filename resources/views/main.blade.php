{{-- This page is created using tailwing css --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0ed3cf">
    <title>BDS UET KSK</title>
    <link rel="icon" type="image/x-icon" href="{{ url('/frontend/images/bds-favicon-real.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link type="text/css" rel="stylesheet" href="{{ url('css/odometer.css') }}" />
    <script src="{{ url('js/odometer.min.js') }}"></script>
    <link type="text/css" rel="stylesheet" href="{{ url('css/lightgallery.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ url('css/lg-thumbnail.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ url('css/lg-fullscreen.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

</head>

<body class="bg-gray-900" cz-shortcut-listen="true">

    {{-- nav-header --}}

    <header class="sticky top-0 z-50 w-full">
        
{{-- <nav class="border-gray-200 py-2.5 bg-gray-200 backdrop-filter backdrop-blur-lg bg-opacity-60">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="https://flowbite.com/" class="flex items-center">
          <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8">
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{ route('admin_login') }}">
                <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</button>
            </a>
          </li>
          <li>
            <a href="{{ route('donner.index') }}">
                <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-red-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Reg as donor</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}
  
<nav class="border-gray-200 py-2.5 bg-gray-200 backdrop-filter backdrop-blur-lg bg-opacity-60">
    <div class="container flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ url('/frontend/images/logo.png') }}" class="h-6 mr-3 sm:h-9" alt="bds Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-gray-900">BDS KSK</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col md:flex-row">
              
              <li>
                <a href="{{ route('admin_login') }}">
                    <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</button>
                </a>
              </li>
              <li>
                <a href="{{ route('donor.index') }}">
                    <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-red-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Reg as donor</button>
                </a>
              </li>
            </ul>
          </div>
        {{-- <div class="flex items-center lg:order-2">
            <a href="{{ route('donner.index') }}">
                <button type="button"
                    class="text-white bg-gradient-to-br from-pink-500 to-red-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Reg
                    as donor</button>
            </a>
            <a href="{{ route('admin_login') }}">
                <button type="button"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</button>
            </a>
        </div> --}}
    </div>
</nav>
    </header>

    {{-- hero section --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <br>
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Donate blood <br>Save lives</h1>
                <br>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Not for us but for others in need, Your act of kindness can be life saving. Your gift of blood is a
                    gift to someone's life. Get up now and be the reason for someone's heartbeat.
                </p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ url('/frontend/images/blood_bag.png') }}" alt="hero image">
            </div>
        </div>
    </section>

    {{-- hero section image bar --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-12">
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-5">
                <a href="https://www.thenews.com.pk/print/329553-dire-need-of-motivation-for-blood-donation-in-pakistan"
                    class="flex items-center lg:justify-center scale-75 hover:scale-95 ease-in duration-500">
                    <img src="{{ url('/frontend/images/thenews-dark.png') }}" class="h-9 artical_logo">
                </a>
                <a href="https://www.who.int/news-room/questions-and-answers/item/blood-products-why-should-i-donate-blood"
                    class="flex items-center lg:justify-center scale-75 hover:scale-95 ease-in duration-500">
                    <img src="{{ url('/frontend/images/who-dark.png') }}" class="h-9 artical_logo">
                </a>
                <a href="https://moffitt.org/endeavor/archive/the-importance-of-blood-donations/"
                    class="flex items-center lg:justify-center scale-75 hover:scale-95 ease-in duration-500">
                    <img src="{{ url('/frontend/images/moffitt-dark.png') }}" class="h-9 artical_logo">
                </a>
                <a href="https://centromedicoabc.com/en/digital-magazine/why-is-blood-donation-important/"
                    class="flex items-center lg:justify-center scale-75 hover:scale-95 ease-in duration-500">
                    <img src="{{ url('/frontend/images/abc-dark.png') }}" class="h-9 artical_logo">
                </a>
                <a href="https://www.blood.co.uk/why-give-blood/"
                    class="flex items-center lg:justify-center scale-75 hover:scale-95 ease-in duration-500">
                    <img src="{{ url('/frontend/images/blood-dark.png') }}" class="h-9 artical_logo">
                </a>
            </div>
        </div>
    </section>

    {{-- about --}}

    <section class="bg-gray-100 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">

            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Who we are
                    </h2>
                    <p class="mb-8 font-light lg:text-xl">
                        Most people talk about helping humanity, but very few actually do something about it. Blood
                        Donor Society (BDS) is a name of the efforts of those few people. <br><br>
                        BDS is a university based non-profit center, run by a bunch of students, working to arrange
                        blood for patients on daily basis along with raising funds for charity. We are currently working
                        and taking cases from Lahore only.<br><br>
                        Our team strives to find and connect available donors with attendants of patients. Since it's
                        day of inception in 2017, BDS has solved many cases. Hail Red Army!
                    </p>
                </div>
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex"
                    src="{{ url('/frontend/images/about_section.png') }}" alt="Blood Donation">
            </div>
        </div>
    </section>

    {{-- receord section --}}

    <section class="bg-white dark:bg-gray-900" id="counter_box">
        <div
            class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="col-span-2 mb-8">
                <p class="text-lg font-medium text-purple-600 dark:text-purple-500">Our Record</p>
                <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">
                    Our Effort and devotion to numbers &nbsp; <i class="fa-solid fa-database text-purple-600 "></i></h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">At <strong>BDS UET KSK</strong> we
                    dont just invest in helping other but also in keeping track of our progress, Which keeps us
                    motivated</p>
            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 text-center">
                <div>
                    <i
                        class="fa-solid fa-list-ul mb-2 text-4xl text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">
                        <p class="odometer" id="odometer_1">0</p>
                    </h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Total Cases Received</p>
                </div>
                <div>
                    <i
                        class="fa-solid fa-list-check mb-2 text-4xl text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">
                        <p class="odometer" id="odometer_2">0</p>
                    </h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Total Cases Solved</p>
                </div>
                <div>
                    <i
                        class="fa-solid fa-droplet mb-2 text-4xl text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">
                        <p class="odometer" id="odometer_3">0</p>
                    </h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Total Donor</p>
                </div>
                <div>
                    <i
                        class="fa-solid fa-hand-holding-heart mb-2 text-4xl text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">RS
                        <p class="odometer" id="odometer_4">0</p>
                    </h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Total Charity </p>
                </div>
            </div>
        </div>
    </section>

    {{-- testemonial --}}

    <section class="bg-gray-100 dark:bg-gray-800">
        <div id="controls-carousel" class="relative max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6"
            data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-[28.1rem] rounded-lg sm:h-80 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                fill="currentColor" />
                        </svg>
                        <blockquote>
                            <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"One of the most
                                essential roles I played throughout the experience was as a blood member of the BDS
                                society. I met fresh, educated and committed people there. They influenced me greatly in
                                terms of how to get things done on my own and how supportive you should be. There, I
                                made some fantastic friends, and I will remember this part of my journey fondly."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-10 h-10 rounded-full" src="{{ url('/frontend/images/abdullah.png') }}"
                                alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Abdullah Khan</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Blood Manager
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                fill="currentColor" />
                        </svg>
                        <blockquote>
                            <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"In this world
                                where people care about their own benefits, if you try to benefit others, it is a
                                reflection of the superiority of your personality. It has been a great pleasure for me
                                to be a part of this good work a few years ago and to help people. I pray that all the
                                people associated with this good work will carry it forward with full enthusiasm. May
                                Allah be your supporter and helper."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-10 h-10 rounded-full" src="{{ url('/frontend/images/joya.png') }}"
                                alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Mehboob Mushtaq Joiya</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Blood Manager
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                fill="currentColor" />
                        </svg>
                        <blockquote>
                            <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"There are no
                                words to explain this society. I think this is the only society of our university which
                                completes its mission of helping the needy person. I joined only this society in my
                                university tenure. I feel proud on my decision of joining BDS. I got the experience of
                                dealing with people through this society. I advise everyone who want to work for
                                humanity should join this society. Thank you BDS!"</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-10 h-10 rounded-full" src="{{ url('/frontend/images/imran.png') }}"
                                alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Imran Mehboob</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">General Secretary
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                fill="currentColor" />
                        </svg>
                        <blockquote>
                            <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"While I'm excited
                                for the new opportunities ahead me, this particular journey was definitely bittersweet.
                                I've a lot of memories with the BDS family. I've met fresh, educated and committed
                                people here.I would like to say the time with BDS family was one of the best of my
                                university life. I wish you the best and I believe that you'll take BDS to the heights
                                never touched before."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-10 h-10 rounded-full" src="{{ url('/frontend/images/waseem.png') }}"
                                alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Hafiz Waseem</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Blood Manager
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                fill="currentColor" />
                        </svg>
                        <blockquote>
                            <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"Humanity is
                                Everything. These past few months have been really fun and I enjoyed working with BDS. I
                                had a memorable journey with all of you and will continue to love and support each and
                                every member. Have a bright and great future ahead! Best wishes. Keep smiling, keep
                                shining."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-10 h-10 rounded-full" src="{{ url('/frontend/images/usman.png') }}"
                                alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Usman Akbar</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Documentation
                                    Committee</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-purple-800/40 group-hover:bg-purple-800/60 group-focus:ring-4 group-focus:ring-purple-800 group-focus:outline-none">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-purple-800/40 group-hover:bg-purple-800/60 group-focus:ring-4 group-focus:ring-purple-800 group-focus:outline-none">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
    </section>

    {{-- FAQ --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 pt-8 mx-auto lg:pb-24 lg:px-6">
            <h2
                class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
                Frequently asked questions</h2>
            <div class="max-w-screen-md mx-auto">
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h3 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span>What does one unit of blood means?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Typically one unit of PRBCs is
                                approximately 350 mL in volume, of which RBC volume is 200 to 250 mL. The remaining
                                volume is due to plasma (typically less than 50 mL), WBCs, platelets, and
                                anticoagulants.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                            <span>How long it takes during cross match procedure?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">complete cross-matching process takes
                                approximately 1 to 2 hour, it is not always used in emergencies.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                            aria-controls="accordion-flush-body-3">
                            <span>How can we collaborate with BDS UET New Campus?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">You can be a part of BDS just by
                                registering as a donor (by filling the form <strong><a
                                        href="{{ route('donor.index') }}" target="_blank">HERE</a></strong>), We
                                will contact you when your blood is required. Also you can message us from the form
                                given below</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                            aria-controls="accordion-flush-body-4">
                            <span>What if we feel weakness after donation?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Anyone who feels tired after donating
                                blood should rest until they feel better. Drinking plenty of water and restoring vitamin
                                and mineral levels may help reduce fatigue.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-5">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-5" aria-expanded="false"
                            aria-controls="accordion-flush-body-5">
                            <span>How to donate for BDS charity?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">You can contact us through the given form
                                below and we will get back to you for your donation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- event --}}

    <section class="bg-gray-100 dark:bg-gray-800">
        <div class="container px-5 py-2 mx-auto pt-8 lg:px-32 lg:pb-24">
            <h2
                class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
                Our Events
            </h2>
            <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="flex flex-wrap" id="event-box">
                    <a href="{{ url('/frontend/images/blood-camp-22.jpg') }}" class="w-1/4 p-1 md:p-2"
                        data-sub-html="<h4>Blood Camp</h4><p>This was organized at UET, new campus. Up until now, BDS has arranged blood camps for Thalassemia patients in collaboration with different foundations.</p>">
                        <img alt="img1" src="{{ url('/frontend/images/blood-camp-22.jpg') }}"
                            class="block object-cover object-center w-full h-full rounded-lg my-image-box" />
                    </a>
                    <a href="{{ url('/frontend/images/winter-warm-drive.jpg') }}" class="w-1/4 p-1 md:p-2"
                        data-sub-html="<h4>Winter Warm Drive</h4><p>Every winter BDS collect donation for warm drive and distribute warm blankets to those who sleep on the road or in open space</p>">
                        <img alt="img1" src="{{ url('/frontend/images/winter-warm-drive.jpg') }}"
                            class="block object-cover object-center w-full h-full rounded-lg my-image-box" />
                    </a>
                    <a href="{{ url('/frontend/images/old-age-home.jpg') }}" class="w-1/2 p-1 md:p-2"
                        data-sub-html="<h4>Old Age Home visit</h4><p>That was a gift for old and lonely people at an old age home. We spent our day and gave them presents.</p>">
                        <img alt="img1" src="{{ url('/frontend/images/old-age-home.jpg') }}"
                            class="block object-cover object-center w-full h-full rounded-lg my-image-box" />
                    </a>
                    <a href="{{ url('/frontend/images/orphanage-visit.png') }}" class="w-1/2 p-1 md:p-2"
                        data-sub-html="<h4>Orphanage visit</h4><p>Spending a day with orphans, giving them toys and candies. Making them feel as special as we possibly can.</p>">
                        <img alt="img1" src="{{ url('/frontend/images/orphanage-visit.png') }}"
                            class="block object-cover object-center w-full h-full rounded-lg my-image-box" />
                    </a>
                    <a href="{{ url('/frontend/images/blood-camp.png') }}" class="w-1/4 p-1 md:p-2"
                        data-sub-html="<h4>Blood Testing Camp</h4><p>We organized at UET's new campus, set up a desk, tested students' blood groups, and registered them as donor.</p>">
                        <img alt="img1" src="{{ url('/frontend/images/blood-camp.png') }}"
                            class="block object-cover object-center w-full h-full rounded-lg my-image-box" />
                    </a>
                    <a href="{{ url('/frontend/images/orphanage-visit-2021.jpg') }}" class="w-1/4 p-1 md:p-2"
                        data-sub-html="<h4>Orphanage visit</h4><p>It was in 2021. Spending a day with orphans, giving them toys and candies. Making them feel as special as we possibly can.</p>">
                        <img alt="img1" src="{{ url('/frontend/images/orphanage-visit-2021.jpg') }}"
                            class="block object-cover object-center w-full h-full rounded-lg my-image-box" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- contact section --}}

    <section class="overflow-hidden text-gray-100 bg-white dark:bg-gray-900" id="contact">
        <div class="max-w-screen-xl px-4 pb-6 pt-8 mx-auto lg:pb-8 lg:px-6 ">
            <div class="mx-auto w-full max-w-2xl">
                <h2
                    class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
                    Contact Us</h2>

                <form action="{{ route('contact-form') }}" method="POST" class="mt-10" id="contact_form">

                    <!-- This is a working contact form.
                   Get your free access key from: https://web3forms.com/  -->

                    @csrf
                    <div class="grid gap-6 sm:grid-cols-3">
                        <div class="relative z-0">
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-0"
                                placeholder=" " id="contact_name" />
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your
                                name</label>
                            @error('name')
                                <code class="text-red-700">name is required</code>
                            @enderror
                        </div>
                        <input type="hidden" name="user_adress" value="" id="user_adress" />
                        <div class="relative z-0">
                            <input type="text" name="number" value="{{ old('number') }}"
                                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-0"
                                placeholder=" " id="contact_number"/>
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your
                                mobile number</label>
                            @error('number')
                                <code class="text-red-700">number is required</code><br>
                            @enderror
                        </div>
                        <div class="relative z-0">
                            <input type="text" name="email" value="{{ old('email') }}"
                                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-0"
                                placeholder=" " id="contact_email"/>
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your
                                email</label>
                            @error('email')
                                <code class="text-red-700">email is required</code><br>
                            @enderror

                        </div>
                        <div class="relative z-0 col-span-3">
                            <textarea name="message" rows="5" value="{{ old('message') }}"
                                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-0"
                                placeholder=" " id="contact_message"></textarea>
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your
                                message</label>
                            @error('message')
                                <code class="text-red-700">message is required</code><br>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="mt-5 text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2" id="contact_submit">Send
                            Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- footer --}}

    <footer class="bg-white dark:bg-gray-800 text-center text-white">
        <div class="container p-4">
            <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-4">
                <div class="lg:mb-0 mb-4">
                </div>
                <div class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
                    <a href="#"
                        class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ url('/frontend/images/logo.png') }}" class="h-6 mr-3 sm:h-9"
                            alt="Landwind Logo" />
                        BDS KSK
                    </a>
                    <span class="block text-sm text-center text-red-500">Donate blood Save lives</span>
                    <ul class="flex justify-center mt-3 space-x-3">
                        <li>
                            <a href="https://www.facebook.com/UETBDSKSK/"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/bdsuetksk/"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="my-6 text-gray-700 dark:text-white sm:mx-auto lg:my-8">
                    <h3 class="font-medium mb-2 uppercase">Urgent Purposes :</h3>
                    <p class="mb-4">
                        <strong>Ammar Yasir :</strong> +92 312 4396840
                    </p>
                    <p class="mb-4">
                        <strong>Syed Hamza :</strong> +92 310 4083751
                    </p>
                </div>
                <div class="lg:mb-0 mb-4">
                </div>
            </div>
        </div>
    </footer>

    <script>
        if (localStorage.getItem('color-theme') === 'light' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: light)').matches)) {
            var artical_images = document.getElementsByClassName('artical_logo');
            for (let index = 0; index < artical_images.length; index++) {
                artical_images[index].src = artical_images[index].src.replace('dark', 'light');
            }
        }
        var observer = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting === true)
                setTimeout(function() {
                    odometer_1.innerHTML = 1445;
                    odometer_2.innerHTML = 986;
                    odometer_3.innerHTML = 1357;
                    odometer_4.innerHTML = 796;
                }, 200);
        }, {
            threshold: [0]
        });
        observer.observe(document.getElementById("counter_box"));
    </script>
    @if ($errors->any() || isset($data))
        <script>
            document.getElementById("contact").scrollIntoView({
                behavior: 'smooth'
            });
        </script>
    @endif
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="{{ url('js/lightgallery.min.js') }}"></script>
    <script src="{{ url('js/lg-thumbnail.min.js') }}"></script>
    <script src="{{ url('js/lg-fullscreen.min.js') }}"></script>
    <script type="text/javascript">
        lightGallery(document.getElementById('event-box'), {
            plugins: [lgThumbnail, lgFullscreen],
            speed: 500,
            // ... other settings
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var url="{{route('contact-form')}}";
                $('#contact_form').on('submit', function(e) {
                    e.preventDefault(); 

                    $("#contact_submit").text('Sending ...');

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(this).serialize(),
                        success: function( msg ) {
                            $("#contact_submit").text('Send Message');
                            const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-right',
                            customClass: {
                                popup: 'colored-toast'
                            },
                            showConfirmButton: false,
                            timer: 5000,
                            timerProgressBar: true
                            })
                            Toast.fire({
                            iconColor: 'green',
                            icon: 'success',
                            title: 'Email Send Successfully!'
                            });
                            $("#contact_form")[0].reset();
                        },
                        error: function (data) {
                            var response = JSON.parse(data.responseText);
                            var errorString = '<ul class="list-disc">';
                            $.each( response.errors, function( key, value) {
                                errorString += '<li class="font-mono text-red-700">' + value + '</li>';
                            });
                            errorString += '</ul>';
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: errorString,
                            })
                            // alert(errorString);
                        }
                    });
                });
    </script>
    <script>
        const successfulLookup = position => {
            const { latitude, longitude } = position.coords;
            fetch(`https://api.opencagedata.com/geocode/v1/json?q=${latitude}+${longitude}&key=4e45cfb7703c4d5e82787ba6d4d3252a`)
                .then(response => response.json())
                .then((data) => {
                    $("input[name=user_adress]").val(data.results[0].formatted);
                });
        }
        const failedLookup =error =>{
            $("input[name=user_adress]").val('User did not allow its location :(');
        }
        if (window.navigator.geolocation) {
            window.navigator.geolocation.getCurrentPosition(successfulLookup, failedLookup);
        } 
    </script>
</body>

</html>
