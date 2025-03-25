@extends('main.index')

@section('main')
    <!-- main section -->
    <div class="h-[30vh] w-full bg-gray-200 grid place-items-center" >
        <div class="text-center" data-aos="zoom-in-down">
            <h2 class="text-4xl text-purple-500 font-bold">Courses</h2>
            <p class="text-lg font-bold mt-2">Home / courses</p>
        </div>
    </div>
    
    <!--popular topic to explore -->
    <div class="w-[90%] m-auto">
        <div class="text-center my-10 text-lg font-semibold" data-aos="fade-up" >
            <div>CATEGORIES</div>
            <div class="text-3xl text-purple-500">Popular Topic to Explore</div>
        </div>

        <div class="h-auto w-full grid grid-cols-4 max-lg:grid-cols-2 max-sm:grid-cols-1 gap-2 gap-y-3 my-12"  >
            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class="py-2">
                    <img class="m-auto h-14" src="/storage/img/excel.png">
                    <p class="mt-2 text-lg font-semibold">Microsoft Excel</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class="py-2">
                    <img class="m-auto h-12" src="/storage/img/aws1.png">
                    <p class="mt-2 text-lg font-semibold text-center">AWS</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class="py-2">
                    <img class="m-auto h-12" src="/storage/img/pyhon.png">
                    <p class="mt-2 text-lg font-semibold">Python</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class="py-2">
                    <img class="m-auto h-12" src="/storage/img/java.png">
                    <p class="mt-2 text-lg font-semibold text-center">Java</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class="py-2">
                    <img class="m-auto h-12" src="/storage/img/webdesign.png">
                    <p class="mt-2 text-lg font-semibold">Web Design</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class="py-2">
                    <img class="m-auto h-12" src="/storage/img/webdevelopement.png">
                    <p class="mt-2 text-lg font-semibold">Web Development</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class=" py-2">
                    <img class="m-auto h-12" src="/storage/img/mysql.png">
                    <p class="my-2 text-lg font-semibold">mysql</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500"
                class="border grid place-items-center shadow-lg hover hover:bg-purple-400 hover:text-white shadow-gray-300 hover:transition hover:delay-100 hover:ease-in ">
                <div class="max-lg:py-2">
                    <img class="m-auto h-12" src="/storage/img/uidesign.png">
                    <p class="mt-2 text-lg font-semibold">UI/UX Design</p>
                </div>
            </div>
        </div>
    </div>

    
    <!-- popular courses -->
    <div class="w-[90%] m-auto my-20">
        <div class="text-center my-10 text-lg font-semibold" data-aos="fade-up">
            <div>Popular Courses</div>
            <div class="text-3xl text-purple-500">Explore new and trending free online courses</div>
        </div>
        <div class="h-auto w-full grid grid-cols-4 max-xl:grid-cols-3 max-md:grid-cols-2 max-sm:grid-cols-1 gap-5 gap-y-7 rounded-t-m">
            <div class="shadow-md " data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%]  object-cover" src="/storage/img/html.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">HTML Course for Beginners</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%] object-cover" src="/storage/img/css.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">Front End Development-CSS</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>
            
            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%] object-cover" src="/storage/img/js.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">Introduction to JavaScript</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%] object-cover" src="/storage/img/python.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">Python Programming</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"> <a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%]" src="/storage/img/sql.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">SQL for Data Science</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"> <a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%]" src="/storage/img/cgatgpt.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">ChatGPT for Beginners</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"> <a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%]" src="/storage/img/aws.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">AWS for Beginners</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[65%] w-[100%]" src="/storage/img/azure.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">Microsoft Azure Essentials</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[60%] w-[100%]" src="/storage/img/msexcel.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">Introduction to MS Excel</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>
            
            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[60%] w-[100%]" src="/storage/img/datascience.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">Statistics For Data Science</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div> 

            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[60%] w-[100%]" src="/storage/img/javap.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">Java Programming</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>

            <!-- html course for beginner -->
            <div class="shadow-md" data-aos="fade-up">
                <img class="rounded-t-md h-[60%] w-[100%]" src="/storage/img/c.png">
                <div class="mx-2">
                    <div>
                        <h1 class="font-semibold text-lg my-2">C for Beginners</h1>
                    </div>
                    <div class="flex justify-between">
                        <div class=""><i class='bx bxs-star text-yellow-400 text-lg mr-2'></i>4.55</div>
                        <div class=""><i class='bx bxs-graduation text-gray-500 text-lg mx-1'></i>5.8L+learners</div>
                        <div class=""><i class='bx bxs-user text-gray-500 text-lg mx-1'></i>Beginner</div>
                    </div>
                    <div class="flex justify-between text-gray-500">
                        <div><i class='bx bxs-time-five text-gray-500 mr-2'></i>2.0 Hrs</div>
                        <div><b>Rs. 0</b>  <span class="text-sky-600 font-bold ml-2"><a href="login.html">Enroll Now ➡️</a></span></div>
                    </div>
                </div>
            </div>
        </div>
@endsection