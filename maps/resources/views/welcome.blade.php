<!DOCTYPE html>
<html>

    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar goes here -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <!-- Website Logo -->
                            <a href="#" class="flex items-center py-4 px-2">
                                <img src="{{asset ('img/smec.png')}}" alt="Logo" class="h-12 w-full mr-2">
                                <!-- <span class="font-semibold text-gray-500 text-lg">Navigation</span> -->
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href=""
                                class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">The Team</a>
                            <a href=""
                                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Tasks</a>
                           <!--  <a href=""
                                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
                            <a href=""
                                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact
                                Us</a> -->
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3 ">
                        <a href=""
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log
                            In</a>
                        <a href=""
                            class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign
                            Up</a>
                    </div>
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="hidden mobile-menu">
                <ul class="">
                    <li class="active"><a href="index.html"
                            class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Dashboard</a></li>
                    <li><a href="#services"
                            class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
                    <li><a href="#about"
                            class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
                    <li><a href="#contact"
                            class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a>
                    </li>
                </ul>
            </div>
            <script>
                const btn = document.querySelector("button.mobile-menu-button");
                const menu = document.querySelector(".mobile-menu");

                btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            </script>
        </nav>


        <section class="text-gray-600 body-font">
            <div class="container px-6 py-12 mx-auto">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">The GIS Team</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon
                        brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't
                        heard of them.</p>
                </div>
                <div class="flex flex-wrap mx-24">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/80x80">
                            <div class="flex-grow">
                                <a href="#"><h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2></a>
                                <p class="text-gray-500">UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/84x84">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
                                <p class="text-gray-500">CTO</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/88x88">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
                                <p class="text-gray-500">Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/90x90">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
                                <p class="text-gray-500">DevOps</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/94x94">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
                                <p class="text-gray-500">Software Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/98x98">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Boris Kitua</h2>
                                <p class="text-gray-500">UX Researcher</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/100x90">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Atticus Finch</h2>
                                <p class="text-gray-500">QA Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/104x94">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Alper Kamu</h2>
                                <p class="text-gray-500">System</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-3 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="https://dummyimage.com/108x98">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Rodrigo Monchi</h2>
                                <p class="text-gray-500">Product Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>

        </div>


    </body>

</html>