

@extends('layouts.app')

@section('content')

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
                        <img class="h-10 w-10 rounded-full" src="/img/LOGO HMD TEI 2023 (1) 1.png" alt="">
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
    <!-- Home Section -->
    <section class="home show-animate" id="home">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                <div class="home-content">
                    <div class="container animate__animated animate__fadeInDown">
                        <h1>WELCOME TO</h1>
                        <div class="text-animate">
                            <h3>POSITRON 2024</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tenetur, non ut nulla et sit
                            earum. Atque consequatur, ea aliquid animi sed provident totam ipsam sunt, deserunt
                            repudiandae excepturi aspernatur!</p>
                    </div>
                    <div class="container2">
                        <div class="pt-4 animate__animated animate__fadeInRight">
                            <a href="#"><img src="img/group15.png" alt=""> </a>
                        </div>
                        <div class="pt-4 animate__animated animate__fadeInLeft">
                            <a href="#"><img src="img/group16.png" alt=""> </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 text-center">
                <div class="image-home animate__animated animate__fadeInUp"
                    style="justify-items: center; display: grid;">
                    <img src="img/positron copy.png" class="img-fluid" alt="png image">
                </div>
            </div>
        </div>
    </section>

    <!-- Video Carousel Section -->
    <section>
        <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="video-container">
                        <div class="video-caption">COMING SOON</div>
                        <video controls class="myvid" id="player">
                            <source
                                src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="video-container">
                        <div class="video-caption">SAMBUTAN</div>
                        <video controls class="myvid" id="player2">
                            <source
                                src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="video-container">
                        <div class="video-caption">SAMBUTAN</div>
                        <video controls class="myvid" id="player3">
                            <source
                                src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
    </section>

@endsection




