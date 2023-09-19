<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/asiaRoyalLogo.png') }}" sizes="16x16" type="image/png">
    <script src="https://kit.fontawesome.com/31104486ca.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>@yield('title')</title>
</head>
    <!-- drawer component -->
    <aside id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu
        </h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="room" data-collapse-toggle="room">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280" d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z"/>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Room</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="room" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/room/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add Room</a>
                        </li>
                        <li>
                            <a href="/room"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Room List</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="message" data-collapse-toggle="message">
                        <svg width="24" height="24" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280" d="M25 8.663A3.5 3.5 0 1 0 20.035 5l-.001.01a3.528 3.528 0 0 0 .11 1.49A3.502 3.502 0 0 0 25 8.663ZM6.25 5h12.275a5.068 5.068 0 0 0 .075 1.5H6.25a1.75 1.75 0 0 0-1.744 1.606L4.5 8.25v.964l9.5 4.94l7.682-3.995c.564.22 1.177.341 1.818.341a4.99 4.99 0 0 0 1.5-.229v9.479a3.25 3.25 0 0 1-3.066 3.245L21.75 23H6.25a3.25 3.25 0 0 1-3.245-3.066L3 19.75V8.25a3.25 3.25 0 0 1 3.066-3.245L6.25 5Zm17.25 5.905l-9.154 4.76a.75.75 0 0 1-.58.047l-.112-.047l-9.154-4.76v8.845a1.75 1.75 0 0 0 1.606 1.744l.144.006h15.5a1.75 1.75 0 0 0 1.744-1.607l.006-.143v-8.845Z"/>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">UnreadMessage</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="message" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/message/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                                Message</a>
                        </li>
                        <li>
                            <a href="/message"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Message
                                List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="drug" data-collapse-toggle="drug">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280" d="M16.2 3.5c-1-1-2.3-1.5-3.5-1.5s-2.6.5-3.5 1.5L3.4 9.1c-2 2-2 5.1 0 7.1s5.1 2 7.1 0l5.7-5.7c1.9-1.9 1.9-5.1 0-7m-1.4 5.6L12 11.9L8.4 8.4L4 12.8c0-.8.2-1.7.9-2.3l5.7-5.7c.5-.5 1.3-.8 2-.8s1.5.3 2.1.8c1.2 1.3 1.2 3.1.1 4.3m4.8-2c0 .8-.2 1.5-.4 2.3c1 1.2 1 3-.1 4.1l-2.8 2.8l-1.5-1.5l-2.8 2.8c-1.3 1.3-3.1 2-4.8 2c.2.3.4.6.7.9c2 2 5.1 2 7.1 0l5.7-5.7c2-2 2-5.1 0-7.1c-.5-.2-.8-.4-1.1-.6Z"/>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Drug</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="drug" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/drug/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add Drug
                            </a>
                        </li>
                        <li>
                            <a href="/drug"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Drug List
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="appointment" data-collapse-toggle="appointment">
                        <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="#6b7280" stroke-width="4">
                                <circle cx="24" cy="11" r="7" stroke-linecap="round" stroke-linejoin="round"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 41c0-8.837 8.059-16 18-16"/>
                                <circle cx="34" cy="34" r="9"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M33 31v4h4"/>
                            </g>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Appointment</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="appointment" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/appointment/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add Appointment</a>
                        </li>
                        <li>
                            <a href="/appointment"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Appointment List</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <nav
        class=" bg-blue-700  dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/dashboard" class="flex items-center">
                <img src="{{ asset('images/asiaRoyalLogo.png') }}" class="h-10 mr-3" alt="SKS Logo">
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">Asia Royal Hopital</span>
            </a>
            <div class="flex md:order-2">
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <div class="text-center">
                                    <button
                                        class="text-white bg-yellow-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        type="button" data-drawer-target="drawer-navigation"
                                        data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                                        Show navigation
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                 <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
           
    </nav>
    <div class="mt-20 mx-5">
        @yield('body')
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>


</html>
