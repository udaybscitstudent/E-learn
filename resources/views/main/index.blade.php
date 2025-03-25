<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
</head>
<body class="font-serif overflow-x-hidden">
    <!-- Menu section -->
    <div class="w-full border border-x-0 border-t-0 flex justify-between px-5 text-xl sticky top-0 shadow-lg bg-gray-100 z-10">
        <div class="font-bold p-5 px-0 text-purple-500 z-10"><a href="index.html">LearnAnything</a></div>
        <div >
            <ul class="flex font-semibold max-md:grid max-md:-top-85 max-md:absolute" id="check">
                <a href="/"><li class="p-5 hover hover:text-purple-500">Home</li></a>
                <a href="/.#about"><li class="p-5 hover hover:text-purple-500">about</li></a>
                <a href="/.#course"><li class="p-5 hover:text-purple-500">Course</li></a>
                <a href="/contact"><li class="p-5 pr-0 hover:text-purple-500">Contact</li></a>
                <a href="/signin"><li class="p-5 pr-0 text-purple-500"><i class='bx bxs-user'></i></li></a>
            </ul>
        </div>
        <div class="my-3 px-1 border-gray-500 border-1 max-md:visible min-md:hidden"><i class='bx bx-menu text-4xl cursor-pointer menu'></i></div>
    </div>
    {{-- end of menu section --}}
    {{-- main section --}}
    @yield('main')
    {{-- end of main section --}}
    {{-- footer section --}}
    <div class="w-full bg-black h-auto mt-20 pb-10">
        <div class="flex justify-around max-lg:flex-wrap text-white pt-10">
            <div class="max-md:w-[80%] max-sm:justify-center max-md:mb-10">
                <p class="text-2xl text-bold">Quick link</p>
                <ul>
                    <a href="about.html"><li class="mt-3">About Us</li></a>
                    <a href="contact.html"><li class="mt-2">Contact Us</li></a>
                    <a href=""><li class="mt-2">Privacy policy</li></a>
                    <a href=""><li class="mt-2">Terms & condition</li></a>
                    <a href=""><li class="mt-2">FAQs & Help</li></a>
                </ul>
            </div>
            <div class="max-md:w-[80%] max-sm:justify-center max-md:mb-10">
                <p class="text-2xl text-bold">Contact</p>
                <ul>
                    <li class="mt-3"><i class="bi bi-geo-alt-fill mr-2 text-xl"></i>Rajeev nagar , patna</li>
                    <li class="mt-3"><i class='bx bxs-phone mr-2 text-xl'></i>+91 9334612395</li>
                    <li class="mt-3"><i class='bx bx-envelope mr-2 text-xl' ></i>learnanything@gmail.com</li>
                </ul>
                <div class="text-xl flex mt-3">
                    <p data-aos="ease" data-aos-duration="300"
                        class="size-8 m-1 leading-8 text-center border rounded-full bg-purple-500 hover hover:bg-transparent hover:border-purple-500 hover:text-purple-500"><i class='bx bxl-youtube' ></i></p>
                    <p data-aos="ease" data-aos-duration="300" 
                        class="size-8 m-1 leading-8 text-center border rounded-full bg-purple-500 hover hover:bg-transparent hover:border-purple-500 hover:text-purple-500"><i class='bx bxl-instagram-alt' ></i></p>
                    <p data-aos="ease" data-aos-duration="300" 
                        class="size-8 m-1 leading-8 text-center border rounded-full bg-purple-500 hover hover:bg-transparent hover:border-purple-500 hover:text-purple-500"><i class='bx bxl-facebook-circle' ></i></p>
                    <p data-aos="ease" data-aos-duration="300"
                        class="size-8 m-1 leading-8 text-center border rounded-full bg-purple-500 hover hover:bg-transparent hover:border-purple-500 hover:text-purple-500"><i class='bx bxl-linkedin-square' ></i></p>
                </div>
            </div>
            <div class="max-md:w-[80%] max-sm:justify-center">
                <p class="text-2xl text-bold">Subscribers to our newsletter</p>
                <div class="my-3">
                    Subscribe now and join our growing community of <br>learners committed to lifelong education!
                </div>
                <div class="flex relative bg-white h-12 place-items-center border-2 hover:border-purple-500">
                    <input type="email" name="email" placeholder="Your email" class="h-12 w-[100%] absolute left-0 bg-transparent pl-2 text-black" >
                    <button data-aos="ease" data-aos-duration="300" 
                        class="bg-purple-500 p-2 px-3 border font-bold absolute right-1 hover hover:bg-transparent hover:border-purple-500 hover:text-purple-500">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
        <hr class="mt-16 w-[90%] m-auto border-gray-600">
        <div class="text-white w-[90%] mt-5 m-auto">&copy; LearnAnything , All Right Reserve</div>
    </div>
    @vite('resources/js/learn.js')
    <!-- aos script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset:120,
            duration:1000,
        });

    </script>
</body>
</html>