<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-green-500 to-green-800 text-white">
    <!-- Sticky container for navbar and profile image -->
    <div class="sticky top-0 z-50">
        <!-- Navigation menu -->
        <nav class="bg-gray-700 py-2 fixed w-full top-0 left-0 z-50 h-20">
            <div class="container flex justify-between items-center my-5">
                <div class="text-xl font-bold ml-40">
                    Bryant's Portfolio
                </div>
                <div class="flex space-x-4">
                    <a class="hover:bg-gray-800 text-white px-4 py-2 
                              no-underline transition duration-300 
                              bg-transparent hover:bg-gray-700"
                        href="#about">About</a>
                    <a class="hover:bg-gray-800 text-white px-4 py-2 
                              no-underline transition duration-300 
                              bg-transparent hover:bg-gray-700"
                        href="#projects">Projects</a>
                    <a class="hover:bg-gray-800 text-white px-4 py-2 
                              no-underline transition duration-300 
                              bg-transparent hover:bg-gray-700"
                        href="#skills">Skills</a>
                    <a class="hover:bg-gray-800 text-white px-4 py-2 
                              no-underline transition duration-300 
                              bg-transparent hover:bg-gray-700"
                        href="#contact">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Profile image -->
        <div class="relative">
            <div
                class="w-36 h-36 rounded-full bg-white absolute top-0 
                        left-1/2 transform -translate-x-1/2 z-50">
                <img alt="imageofProfile" class="w-36 h-36 rounded-full border-4 border-green-600"
                    src=
"https://media.licdn.com/dms/image/D5603AQHFjJVhaQiH2A/profile-displayphoto-shrink_200_200/0/1691646533029?e=2147483647&v=beta&t=8lEToPNHItHzFcpxbjMLV_TvNzwJ_4_ZmJkZmNs8dVU" />
            </div>
        </div> <!-- White circle for profile image -->
    </div>

    <!-- Main content -->
    <div class="mb-16 container mx-auto pt-20">
        <!-- About section -->
        <section id="about"
            class="m-20 justi-center text-center mt-20 relative 
                   my-5 mb-16 px-4 py-4 rounded-lg shadow-md relative 
                   overflow-hidden bg-gradient-to-b from-gray-600 to-gray-800">
            <h2 class="text-2xl font-bold mb-4 text-center">
                About Me
            </h2>
            <p class="text-base">
                Saya adalah mahasiswa semester 8 di Universitas Ciputra Surabaya, Fakultas School of Information
                Technology, Jurusan Sistem Informasi. Selama perkuliahan, saya telah mendalami berbagai aspek
                pengembangan website, khususnya dengan menggunakan Framework Laravel, serta mengelola database dengan
                MySQL. <br> <br>
                Sebagai bagian dari pengalaman praktis saya, saya telah menyelesaikan magang selama 10 bulan di Apple
                Developer Academy@UC, dari bulan Maret hingga Desember. Dalam program magang ini, saya mempelajari
                bahasa pemrograman Swift dan memperdalam pengetahuan saya tentang desain aplikasi iOS menggunakan Human
                Interface Guideline (HIG). <br> <br>
                Pengalaman dan pendidikan saya telah membekali saya dengan keterampilan teknis dan pengetahuan praktis
                yang kuat dalam pengembangan aplikasi web dan mobile. Saya antusias untuk terus belajar dan
                mengembangkan kemampuan saya dalam industri teknologi informasi.
            </p>
            <a
                class="inline-block mt-5 px-4 py-2 rounded-md bg-green-500 
                       text-white hover:bg-blue-600 transition duration-300">
                Resume
            </a>
        </section>

        <!-- Projects section -->
        <section id="projects"
            class="m-20 rounded mb-16 bg-gradient-to-b from-gray-600 
                   to-gray-800 text-white mb-8 px-4 py-10">
            <h2 class="text-4xl font-bold mb-10 text-center">
                Projects
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                <!-- Project  -->
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="w-full h-auto">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.
                    </p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
                <div
                    class="bg-gray-800 p-4 shadow rounded overflow-hidden 
                           transition-transform duration-300 transform 
                           scale-100 hover:scale-110">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240327093718/img.jpg"
                        alt="Travel Website" class="project-image">
                    <h3 class="font-bold mt-4">Travel Website</h3>
                    <p class="text-sm leading-relaxed">
                        A travel booking website that allows users to search for
                        destinations, book flights, hotels, and plan their itinerary.</p>
                </div>
            </div>
        </section>

        <!-- Skills section -->
        <section id="skills"
            class="m-20 p-10 mb-16 rounded-lg shadow-md text-white relative 
                   overflow-hidden rounded mb-16 bg-gradient-to-b 
                   from-gray-600 to-gray-800 text-white mb-8 px-4 py-10">
            <h2 class="text-2xl font-bold mb-4">Skills</h2>
            <!-- Skill progress bars -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <p class="font-bold">HTML</p>
                    <div class="bg-gray-600 h-4 w-full rounded-full">
                        <div class="bg-green-400 h-full rounded-full w-4/5"></div>
                    </div>
                </div>
                <div>
                    <p class="font-bold">CSS</p>
                    <div class="bg-gray-600 h-4 w-full rounded-full">
                        <div class="bg-green-400 h-full rounded-full w-3/5"></div>
                    </div>
                </div>
                <div>
                    <p class="font-bold">JavaScript</p>
                    <div class="bg-gray-600 h-4 w-full rounded-full">
                        <div class="bg-green-400 h-full rounded-full w-2/5"></div>
                    </div>
                </div>
                <div>
                    <p class="font-bold">PHP</p>
                    <div class="bg-gray-600 h-4 w-full rounded-full">
                        <div class="bg-green-400 h-full rounded-full w-4/5">
                        </div>
                    </div>
                </div>
                <div>
                    <p class="font-bold">Node.js</p>
                    <div class="bg-gray-600 h-4 w-full rounded-full">
                        <div class="bg-green-400 h-full rounded-full w-1/5"></div>
                    </div>
                </div>
                <div>
                    <p class="font-bold">Express.js</p>
                    <div class="bg-gray-600 h-4 w-full rounded-full">
                        <div class="bg-green-400 h-full rounded-full" style="width: 65%;"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section -->
        <section id="contact"
            class="m-20 p-10 rounded-lg shadow-md text-white relative 
                   overflow-hidden rounded mb-16 bg-gradient-to-b 
                   from-gray-600 to-gray-800 flex">
            <div class="w-1/2">
                <h2 class="mb-20 text-2xl leading-6 font-bold mb-4">
                    Contact Me
                </h2>
                <!-- Contact details -->
                <p>Email: bryantthauwrisan7@gmail.com</p>
                <p>Phone: (+62)813-8687-8778</p>
                <!-- Hire Me button -->
                <a href="#"
                    class="inline-block px-4 my-5 py-2 rounded-md bg-green-500 
                           text-white hover:bg-blue-600 transition duration-300">
                    Hire Me</a>
                <!-- Social media links -->
                <div class="flex items-center space-x-4 mt-5">
                    <!-- LinkedIn -->
                    <a href="https://id.linkedin.com/in/bryantthauw"
                        class="inline-block px-4 py-2 rounded-md bg-green-500 
                               text-white hover:bg-blue-600 transition duration-300" target="_blank">
                        LinkedIn</a>
                    <!-- GitHub -->
                    <a href="https://github.com/Bryant35"
                        class="inline-block px-4 py-2 rounded-md bg-green-500 
                               text-white hover:bg-blue-600 transition duration-300" target="_blank">
                        GitHub</a>
                    <!-- Twitter -->
                    <a href="https://www.instagram.com/bryantthauwrisan35/"
                        class="inline-block px-4 py-2 rounded-md bg-green-500 
                               text-white hover:bg-blue-600 transition duration-300" target="_blank">
                        Instagram</a>
                </div>
            </div>
            <div class="w-1/2">
                <!-- Image section -->
                <img src=
"https://media.licdn.com/dms/image/D5603AQHFjJVhaQiH2A/profile-displayphoto-shrink_200_200/0/1691646533029?e=2147483647&v=beta&t=8lEToPNHItHzFcpxbjMLV_TvNzwJ_4_ZmJkZmNs8dVU" alt="Your Image"
                    class="w-72 h-72 mx-auto">
            </div>
        </section>
    </div>
</body>

</html>
