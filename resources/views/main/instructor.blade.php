@extends('main.index')

@section('main')
    <!--start the main section -->
    <div class="h-[30vh] w-full bg-gray-200 grid place-items-center" >
        <div class="text-center" data-aos="zoom-in-down">
            <h2 class="text-4xl text-purple-500 font-bold">Become An instructor</h2>
            <p class="text-lg font-bold mt-2">Home / instructor</p>
        </div>
    </div>

    <!-- become an instructor -->
    <div class="w-[90%] m-auto">
        <h2 class="text-center my-10 text-2xl text-black font-bold" data-aos="fade-up">Apply As instructor</h2>
        <div>
            <h2 class="text-lg font-bold">Welcome to LearnAnything - Where knowledge meets innovation</h2>
            <p>Are you passionate about sharing your expertise and making a real impact on learners worldwide?
                If so, we invite you to become an instructor on our dynamic e-learning platform! Join a community
                of educators dedicated to fostering a love for learning and empowering individuals to achieve their goals.
            </p>
        </div>
        <!-- what we look in our instructor -->
        <div class="my-10 flex justify-between">
            <div class="w-[50%] text-justify">
                <h2 class="text-purple-500 text-2xl font-bold">what we look for in our instructor</h2>
                <div class="my-5">
                    <p class="my-2"><b>Passionate for teaching</b>: A genuine enthusiasm for sharing knowledge and facilitating the learning journey for others.</p>
                    <p class="my-2"><b>Expertise in your field</b>: Demonstrated expertise in your subject matter, backed by relevant qualifications and experience.</p>
                    <p class="my-2"><b>Communication Skills</b>: Clear and effective communication to convey complex concepts and engage learners of various backgrounds.</p>
                    <p class="my-2"><b>Innovation </b>: Willingness to embrace innovative teaching methods and technologies to enhance the learning experience.</p>
                </div>

            </div>
            <div class="w-[40%]">
                <img src="storage/img/instractor.png" class="object-cover">
            </div>
        </div>

        <!-- apply instructor -->
        <div class="flex justify-between my-20">
            <div class="w-[40%]">
                <img src="storage/img/apply.png" class="object-cover">
            </div>
            <div class="w-[50%]">
                <h2 class="text-2xl text-purple-500 font-bold">Ready to join Us?</h2>
                <p class="my-4">Here's How to get started</p>
                <p>Familiarize yourself with Learn Anything and the diverse range of courses we offer.</p>
                <p class="my-2">Craft a compelling application that showcases your passion, expertise, and proposed course offerings.</p>
                <button class="px-5 py-2 border bg-purple-500 text-white font-bold mt-5 hover:bg-white hover:text-purple-500 hover:border-purple-500 rounded-md btn_ins">Apply Now</button>
            </div>
        </div>
        <div>
            <h2 class="font-bold my-2">Join Us in Transforming Lives Through Education!</h2>
            <p>At Learn Anything, we believe that education has the power to transform lives. Join us in creating a world where knowledge knows no bounds, and together, let's inspire, innovate, and educate!</p>
        </div>
    </div>


    <!-- apply form -->
    <div class="w-full place-items-center hidden transition-transform duration-300 ins_div">
        <div class="h-screen w-[600px] m-auto bg-white fixed top-0 z-10 shadow-md overflow-auto">
            <form method="post" action="{{URL::current()}}">
            @csrf
                <h1 class="text-center text-2xl font-bold border-b p-4 mb-5">Apply as instructor</h1>
                <div class="grid grid-cols-2 w-[90%] m-auto justify-between my-4 gap-x-2">
                    <div class="grid">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="enter your first name" class="border p-2">
                        <span class="text-red-500">
                            @error('fname')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="grid">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="enter your last name" class="border p-2">
                        <span class="text-red-500">
                            @error('lname')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="w-[90%] m-auto grid my-4">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" class="border p-2">
                    <span class="text-red-500">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[90%] m-auto grid  my-4">
                    <label for="">Phone no</label>
                    <input type="number" name="mob" placeholder="Enter your mobile number" class="border p-2">
                    <span class="text-red-500">
                        @error('mob')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[90%] m-auto grid  my-4">
                    <label for="">What's Your the Highest degree</label>
                    <select class="border p-2.5" name="degree">
                        <option>select your Degree</option>
                        <option>undergraduate</option>
                        <option>graduate</option>
                        <option>postgraduate</option>
                        <option>High school</option>
                    </select>
                    <span class="text-red-500">
                        @error('degree')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[90%] m-auto grid  my-4">
                    <label for="">What subject would you like to teach</label>
                    <select class="border p-2.5" name="subject">
                        <option>select subject</option>
                        <option>technology</option>
                        <option>marketing</option>
                        <option>business</option>
                        <option>education</option>
                    </select>
                    <span class="text-red-500">
                        @error('subject')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[90%] m-auto grid my-4"
                    <label for="">Address</label>
                    <textarea cols="auto" rows="auto" id="msg" name="address" placeholder="Address" class="border p-2 mt-2"></textarea>
                    <span class="text-red-500">
                        @error('address')
                            {{$message}}
                        @enderror
                    </span>
                </diV>
                <div class="w-[90%] m-auto grid my-4">
                    <label for="">Password</label>
                    <input type="password" name="pass" placeholder="Enter password" class="border p-2">
                    <span class="text-red-500">
                        @error('pass')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[90%] m-auto grid my-4">
                    <label for="">Confirm-Password</label>
                    <input type="password" name="cpass" placeholder="Enter confirm password" class="border p-2">
                    <span class="text-red-500">
                        @error('cpass')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[90%] m-auto flex justify-end my-4">
                    <button class="border px-8 m-1 py-2 cursor-pointer bg-purple-500 text-white hover:bg-transparent font-bold hover:text-purple-500 btn_cancel">cancel</button>
                    <button class="border px-8 m-1 mr-0 py-2 cursor-pointer bg-purple-500 text-white hover:bg-transparent font-bold hover:text-purple-500">Apply</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection