@extends('main.index')

@section('main')
    <!-- <div class=" max-md:object-fill max-sm:bg-contain max-sm:bg-no-repeat" style="background-image:url('img/image0.png');"> -->
    <div class="h-[92vh] w-full  object-cover grid place-items-center" style="background: url(/storage/img/image1.png);" >
        <!-- <img src="img/image1.png" class="h-[100%] w-full object-cover"> -->
        <div class="absolute text-2xl max-lg:w-[90%] max-lg:m-auto">
            <h2 class="text-purple-500 font-bold" data-aos="fade-down">Welcome to LearnAnything</h2>
            <h1 class="text-4xl font-bold my-5" data-aos="fade-down">Interactive Learning  Experience</h1>
            <p>Engage with interactive lessons, quizzes, and projects. experience hands-on<br> learning that keeps you motivated and inspired.</p>
            <div class="mt-5 font-bold">
                <a href="/about"><button class="border p-2 px-5 mr-2 text-lg cursor-pointer text-white bg-purple-500 hover:text-purple-500 hover:bg-white" data-aos="fade-right">Read More</button></a>
                <a href="/signup"><button class="border p-2 px-5 ml-2 cursor-pointer text-lg cursor-pointe bg-white text-purple-500 hover:bg-purple-500 hover:text-white" data-aos="fade-left">Join Now</button></a>
            </div>

        </div>

    </div>  
    <!-- professional goal -->
    <div class="w-[90%] m-auto mt-10">
        <div class="my-6 text-center" data-aos="fade-up">
        <h2 class="text-2xl font-semibold text-purple-600">Invest in Your Professional goals with LearnAnything</h2>
        <p class="text-lg m-2 ">Get unlimited access to over 90% of courses , Projects, Specializations, and Professional Certificates on LearnAnything taught by top instructors.</p>
        </div>
    </div>
    <div class="w-[90%] m-auto mb-20 overflow-x-auto overflow-y-hidden snap-x snap-mandatory" style="scrollbar-width: none;">
        <div class="flex grid-cols-4 justify-center w-auto h-64 mt-10  snap-x max-xl:inline-flex" data-aos="fade-up">
            <!-- learn anything -->
            <div data-aos="ease" data-aos-duration="400" 
                class="w-[330px] snap-center snap-always border mr-2 hover hover:bg-purple-400 hover:text-white shadow-md shadow-gray-300 rounded-md hover:transition hover:ease-in hover:rounded-none hover:duration-100 ">
                <div class="text-center">
                    <img class="m-auto" src="/storage/img/learn.png">
                    <h2 class="font-semibold text-lg mb-2">Learn Anything</h2>
                    <p class="mx-2">Explore any interest or trending topic, take prerequisites, and advance your skills</p>
                </div>
            </div>
            <!-- save money -->
            <div data-aos="ease" data-aos-duration="400" 
                class="w-[330px] snap-center snap-always border mx-2 hover hover:bg-purple-400 hover:text-white shadow-md shadow-gray-300 rounded-md hover:transition hover:duration-100 hover:ease-in hover:rounded-none">
                <div class="text-center">
                    <img class="m-auto mt-4" src="/storage/img/savemoney.png">
                    <h2 class="font-semibold text-lg my-2">Save Money</h2>
                    <p class="mx-2">Spend less money on your learning if you plan to take multiple courses this year</p>
                </div>
            </div>
            <!-- flexible learning -->
            <div data-aos="ease" data-aos-duration="400"
                class="w-[330px] snap-center snap-always border mx-2 hover hover:bg-purple-400 hover:text-white shadow-md shadow-gray-300 rounded-md hover:transition hover:duration-100 hover:ease-in hover:rounded-none">
                <div class="text-center">
                    <img class="m-auto mt-6" src="/storage/img/flexible.png">
                    <h2 class="font-semibold text-lg mt-3 mb-2">Flexible learning</h2>
                    <p class="mx-2">Learn at your own pace, move between multiple courses, or switch to a different course</p>
                </div>
            </div>
            <!-- unlimited certificate -->
            <div data-aos="ease" data-aos-duration="400" 
                class="w-[330px] snap-center snap-always border ml-2 hover hover:bg-purple-400 hover:text-white shadow-md shadow-gray-300 rounded-md hover:transition hover:duration-100 hover:ease-in hover:rounded-none">
                <div class="text-center">
                    <img class="m-auto mt-4" src="/storage/img/certificate.png">
                    <h2 class="font-semibold text-lg my-2">Unlimited certificate</h2>
                    <p class="mx-2">Earn a certificate for every learning program that you complete at no additional cost</p>
                </div>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="flex w-[90%] m-auto mt-10 max-lg:flex-wrap" id="about">
        <div class="w-[50%] border max-lg:w-[100%]" data-aos="zoom-in">
            <img class="h-[100%] w-[100%] object-cover" src="/storage/img/aboutgirl.png">
        </div>
        <div class="w-[50%] max-lg:w-[100%] ml-5 text-justify max-lg:mt-5 max-lg:ml-0" data-aos="fade-up">
            <h2 class="text-xl font-bold">ABOUT US</h2>
            <p class="text-2xl font-semibold text-purple-500 my-2">Welcome to LearnAnything</p>
            <p class="mt-3 text-lg">At LearnAnything, we believe in accessible,innovative learning experiences 
            that adapt to your schedule and learning style. Join us in embracing the future
            of education and unlock your potential with our immersive online courses.</p><br>
            <p class="text-lg">Welcome to LearnAnything, your gateway to boundless learning opportunities.
            We're dedicated to democratizing education, offering a diverse range of courses
            taught by industry experts. Our mission is to empower learners worldwide, fostering
            a community-driven platform where knowledge knows no limits.</p><br>
            <div class="flex justify-between max-sm:flex-col">
                <div>
                        <li class="m-1">Expert Instructors</li>
                        <li class="m-1">Expert Instructors</li>
                        <li class="m-1">Personalized Learning Paths</li>
                </div>
                <div>
                    <li class="m-1">Live Interactive Sessions</li>
                    <li class="m-1">Community Engagement</li>
                    <li class="m-1">Certification and Recognition</li>
                </div>
            </div>
            <div>
                <a href="/about"><button data-aos="ease" data-aos-duration="300"
                    class="p-2 bg-purple-500 cursor-pointer rounded-sm text-white px-5 mt-3 hover hover:bg-white hover:text-purple-500 hover:border hover:border-purple-500 font-bold border">
                    Read More
                </button></a>
            </div>
        </div>
    </div>

    <!-- explore courses -->
    <div class="w-[90%] bg-green-50 m-auto mt-12" id="course">
        <div class="flex p-10 max-lg:flex-wrap">
            <div class="w-[50%] mr-10 max-lg:w-[100%]" data-aos="zoom-out-up" data-aos-duration="800">
                <div class="m-10 max-lg:mb-10 max-lg:m-0 ">
                    <h2 class="text-purple-500 text-3xl font-semibold">Explore free courses</h2>
                    <p class="mt-5 text-xl">Start your online learning journey at Great Learning Academy for free with 
                        our short-term basic courses across various in-demand domains.</p>
                    
                    <a href="/course"><button data-aos="ease" data-aos-duration="300"
                        class="p-2 bg-purple-500 rounded-sm cursor-pointer text-white px-5 mt-5 hover hover:bg-white hover:text-purple-500 hover:border hover:border-purple-500 font-bold border">
                        Start for free
                    </button></a>
                </div>
            </div>
            <div class="w-[50%] max-lg:w-[100%]" data-aos="fade-up" data-aos-duration="1200"> 
                <img class="h-[100%] w-[100%] object-cover" src="/storage/img/coursegirl.png">
            </div>
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
        <!-- all courses button -->
        <div class="justify-center w-full grid mt-10">
            <a href="/course"><button data-aos="ease" data-aos-duration="300"
                class="p-3 bg-purple-500 text-white text-lg px-8 cursor-pointer hover hover:bg-transparent hover:text-purple-500 hover:border hover:border-purple-500 font-bold border">
                All courses
            </button></a>
        </div>
    </div>
    
    <!-- become an instructor -->
    <div class="w-[90%] m-auto">
        <div class="flex w-[100%] max-lg:flex-wrap bg-red-100">
            <div class="w-[50%] max-lg:w-[90%] max-md:w-[80%]" data-aos="zoom-in">
                <img class="m-10 max-lg:mb-0 w-[100%] object-cover bg-white" src="/storage/img/instructor.png">
            </div>
            <div class="w-[50%] max-lg:w-[100%]" data-aos="fade-up" >
                <div class="m-20 max-lg:m-10 text-black text-lg">
                    <h2 class="text-purple-500 text-3xl font-semibold">Become an instructor</h2>
                    <p class="my-5">Instructors from around the world teach millions of learners on Udemy.
                        We provide the tools and skills to teach what you love.</p>
                    <a href="instructor"><button data-aos="ease" data-aos-duration="300"
                        class="py-2 px-5 bg-purple-500 text-white hover hover:bg-transparent hover:text-purple-500 hover:border hover:border-purple-500 font-bold border cursor-pointer">
                        Start Teaching Today
                    </button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- frequently asked question -->
    <div class="w-[90%] m-auto my-10" data-aos="fade-up">
        <div class="text-center my-10 text-purple-500 text-3xl font-semibold">Frequently Asked Questions </div>
        <div class="">
            <p class="border border-b-0 p-4">What is the Learn Anything?</p>
            <p class="border border-b-0 p-4">Why should I choose Great Learning Academy for free courses with certificates ?</p>
            <p class="border border-b-0 p-4">How many free courses can I enroll in at the same time?</p>
            <p class="border border-b-0 p-4">How can I enroll in these free online courses?</p>
            <p class="border p-4">What are the most popular free courses offered by LearnAnything ?</p>
        </div>
    </div>
@endsection