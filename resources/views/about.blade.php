<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="shortcut icon" href="/img/positron.png">
    <link href="https://fonts.googleapis.com/css2?family=PT+One&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Positron | About</title>
</head>

<body class="h-full font-pt-one">
    <div class="min-h-full">
        <nav class="bg-gradient-to-r from-purple-500 to-violet-500" x-data="{ isOpen: false }">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex h-20 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-15 w-20" src="/img/positron.png" alt="">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                                <a href="#"
                                    class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                    aria-current="page">About</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Group</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Task</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button" @click="isOpen = !isOpen"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" @click="isOpen = !isOpen"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="/img/LOGO HMD TEI 2023 (1) 1.png"
                                            alt="">
                                    </button>
                                </div>

                                <!--
                  Dropdown menu, show/hide based on menu state.
  
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                    <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                        aria-current="page">About</a>
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Group</a>
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Task</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="/img/LOGO HMD TEI 2023 (1) 1.png"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">HMD TEI</div>
                            <div class="text-sm font-medium leading-none text-black">hmjte.ft@um.ac.id</div>
                        </div>
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="bg-cover" style="background-image: url('/img/bg.png');">
            <!-- FILOSOFI LOGO POSITRON Section -->
            <div id="logo" class="relative text-center py-20">
                <p class="text-3xl md:text-7xl font-extrabold">FILOSOFI LOGO POSITRON</p>
                <div class="flex items-center justify-center h-full pt-20 mt-4">
                    <!-- Elemen dengan background garis7.png, disembunyikan pada sm dan md -->
                    <div class="relative hidden lg:block"
                        style="background-image: url('/img/garis7.png'); background-size: contain; background-repeat: no-repeat; width: 1673px; height: 563px;">
                        <div class="relative grid grid-cols-2 gap-4" style="width: 1673px; height: 563px;">
                            <div class="grid grid-rows-3 gap-20">
                                <div class="bg-white shadow-md rounded-lg outline outline-4 outline-offset-2 overflow-y-auto p-2 mt-12 ml-14"
                                    style="width: 300px; height: 100px;">
                                    <div>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
                                </div>
                                <div class="bg-white shadow-md rounded-lg outline outline-4 outline-offset-2 overflow-y-auto p-2 mt-10"
                                    style="width: 300px; height: 100px;">
                                    <div>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
                                </div>
                                <div class="bg-white shadow-md rounded-lg outline outline-4 outline-offset-2 overflow-y-auto p-2 mt-9"
                                    style="width: 300px; height: 100px;">
                                    <div>3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
                                </div>
                            </div>
                            <div class="justify-end grid grid-rows-3 gap-20">
                                <div class="bg-white shadow-md rounded-lg outline outline-4 outline-offset-2 overflow-y-auto p-2 -ml-2"
                                    style="width: 300px; height: 100px;">
                                    <div>4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
                                </div>
                                <div class="bg-white shadow-md rounded-lg outline outline-4 outline-offset-2 overflow-y-auto p-2 ml-16"
                                    style="width: 300px; height: 100px;">
                                    <div>5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
                                </div>
                                <div class="bg-white shadow-md rounded-lg outline outline-4 outline-offset-2 overflow-y-auto p-2 -mt-2 ml-12"
                                    style="width: 300px; height: 100px;">
                                    <div>6. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- mobile --}}
                    <div class="lg:hidden w-full mt-auto">
                        <img src="/img/positron.png" alt="" class="w-full h-auto mx-auto">
                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div
                                class="bg-white shadow-md rounded-lg outline outline-4 outline-offset- overflow-y-auto p-4 h-24">
                                <div>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                                    libero. Sed cursus ante dapibus diam.</div>
                            </div>
                            <div
                                class="bg-white shadow-md rounded-lg outline outline-4 outline-offset- overflow-y-auto p-4 h-24">
                                <div>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                                    libero. Sed cursus ante dapibus diam.</div>
                            </div>
                            <div
                                class="bg-white shadow-md rounded-lg outline outline-4 outline-offset- overflow-y-auto p-4 h-24">
                                <div>3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                                    libero. Sed cursus ante dapibus diam.</div>
                            </div>
                            <div
                                class="bg-white shadow-md rounded-lg outline outline-4 outline-offset- overflow-y-auto p-4 h-24">
                                <div>4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                                    libero. Sed cursus ante dapibus diam.</div>
                            </div>
                            <div
                                class="bg-white shadow-md rounded-lg outline outline-4 outline-offset- overflow-y-auto p-4 h-24">
                                <div>5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                                    libero. Sed cursus ante dapibus diam.</div>
                            </div>
                            <div
                                class="bg-white shadow-md rounded-lg outline outline-4 outline-offset- overflow-y-auto p-4 h-24">
                                <div>6. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                                    libero. Sed cursus ante dapibus diam.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- MANUAL BOOK Section -->
            <div id="manual" class="text-center py-40">
                <p class="text-3xl md:text-7xl font-extrabold">MANUAL BOOK</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 pt-20 px-8">
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <embed src="doc/lorem-ipsum.pdf" width="100%" height="500px"></embed>
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="/img/laptop.png" alt="" class="w-auto h-auto">
                    </div>
                </div>
            </div>
                       
            {{-- <div id="manual" class="text-center py-40">
                <p class="text-7xl font-extrabold">MANUAL BOOK</p>
                <div class="grid grid-cols-2 gap-4 mt-4 pt-20 px-8">
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <p>Content for Column 1</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="/img/laptop.png" alt="" class="w-auto h-auto">
                    </div>
                </div>
            </div> --}}
        
            <!-- TIMELINE POSITRON 2024 Section -->
            <div id="timeline" class="text-center py-40">
                <p class="text-3xl md:text-7xl font-extrabold">TIMELINE POSITRON 2024</p>
                <div class="grid grid-cols-3 gap-4 pt-40 mt-4 px-8">
                    <div class="grid grid-rows-5 gap-4">
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 1</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 2</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 3</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 4</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 5</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="/img/tl.png" alt="" class="w-full h-auto">
                    </div>
                    <div class="grid grid-rows-5 gap-4">
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 1</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 2</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 3</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 4</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg outline outline-offset-2 outline-4 p-4">
                            <p>Row 5</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</body>

</html>
