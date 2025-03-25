@extends('main.index')

@section('main')
    <!-- main -->
    <div class="h-[30vh] w-full bg-gray-200 grid place-items-center">
        <div class="text-center" data-aos="zoom-in-down">
            <h2 class="text-4xl text-purple-500 font-bold">sign-up</h2>
            <p class="text-lg font-bold mt-2">Home / sign-up</p>
        </div>
    </div>
    <!-- end menu -->
    <div class="grid place-items-center h-auto mt-10 w-[90%] m-auto">
        <div class="h-auto py-4 w-[450px] max-sm:w-[100%] rounded-md bg-white font-serif shadow-md font-bold" data-aos="fade-up">
            <div class="w-[100px] h-[100px] rounded-full m-auto border-1 border-gray-500 text-center shadow-md">
            <i class='bx bxs-book-reader text-7xl mt-2'></i>
            </div>
            <h2 class="text-center text-xl font-semibold " >signup form</h2>
            <form method="post" action="{{URL::current()}}">
            @csrf
                <div class="w-[80%] m-auto mb-3 ">
                    <label for="">Name</label><br>
                    <div class="flex justify-between border-1 bg-white border-gray-400 rounded-md active:border visited:border-red-300 relative">
                    <input type="Text" name="name" placeholder="Enter your name " class="w-[100%] bg-transparent text-sm rounded-md border-none p-2 focus:ring-0">
                    <!-- <i class='bx bxs-user-circle text-2xl mt-1.5 mr-1 absolute right-0 text-purple-500'></i> -->
                    </div>
                    <span class="text-red-500">
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[80%] m-auto mb-3 ">
                    <label for="">Email</label><br>
                    <div class="flex justify-between border-1 bg-white border-gray-400 rounded-md active:border visited:border-red-300 relative">
                    <input type="Text" name="email" placeholder="Enter email or username " class="w-[100%] bg-transparent text-sm rounded-md border-none p-2 focus:ring-0">
                    <!-- <i class='bx bxs-user-circle text-2xl mt-1.5 mr-1 absolute right-0 text-purple-500'></i> -->
                    </div>
                    <span class="text-red-500">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[80%] m-auto mb-3 ">
                    <label for="">Mobile</label><br>
                    <div class="flex justify-between border-1 bg-white border-gray-400 rounded-md active:border visited:border-red-300 relative">
                    <input type="number" name="mobile" placeholder="Enter mobile number " class="w-[100%] bg-transparent text-sm rounded-md border-none p-2 focus:ring-0">
                    <!-- <i class='bx bxs-user-circle text-2xl mt-1.5 mr-1 absolute right-0 text-purple-500'></i> -->
                    </div>
                    <span class="text-red-500">
                        @error('mobile')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[80%] m-auto mb-2">
                    <label for="">Password</label><br>
                    <div class="flex justify-between border-1 border-gray-400 rounded-md relative">
                    <input type="password" name="pass" placeholder="Enter password " class="w-[100%] text-sm rounded-md border-none p-2 focus:ring-0">
                    <!-- <i class='bx bxs-lock text-2xl mt-1.5 mr-1 absolute right-0 text-purple-500'></i> -->
                    </div>
                    <span class="text-red-500">
                        @error('pass')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="w-[80%] m-auto my-3">
                    <label for="">Confirm-Password</label><br>
                    <div class="flex justify-between border-1 border-gray-400 rounded-md relative">
                    <input type="password" name="cpass" placeholder="Enter confirm password " class="w-[100%] text-sm rounded-md border-none p-2 focus:ring-0">
                    <!-- <i class='bx bxs-lock text-2xl mt-1.5 mr-1 absolute right-0 text-purple-500'></i> -->
                    </div>
                    <span class="text-red-500">
                        @error('cpass')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="text-center mt-5">
                    <button class="p-2 rounded-md text-white px-4 w-[80%] bg-purple-500 hover:bg-purple-600 font-bold cursor-pointer">sign-up</button>
                </div>
                @if (session('success'))
                    <p class="text-center text-green-500">{{session('success')}}</p>
                    
                @endif
                <p class="text-center my-2 mb-5">Already have an account?<a href="signin" class="text-purple-500 font-bold hover:underline">login</a></p>
            </form>
        </div>
    </div>

@endsection