@extends('main.index')


@section('main')
    <!-- open main -->
    <div class="h-[30vh] w-full bg-gray-200 grid place-items-center">
        <div class="text-center" data-aos="zoom-in-down">
            <h2 class="text-4xl text-purple-500 font-bold">login</h2>
            <p class="text-lg font-bold mt-2">Home / login</p>
        </div>
    </div>
    <!-- close main -->
    <div class="grid place-items-center h-auto my-10 w-[90%] m-auto">
        <div class="h-auto py-4 w-[450px] max-sm:w-[100%] rounded-md bg-white font-serif shadow-md font-bold" data-aos="fade-up">
            <div class="size-[100px] rounded-full m-auto border-1 border-gray-500 text-center shadow-md">
            <i class='bx bxs-book-reader text-7xl mt-2'></i>
            </div>
            <h2 class="text-center text-xl font-semibold " >Login</h2>
            <form method="post" action="{{URL::current()}}">
            <div class="w-[80%] m-auto mb-3 ">
                <label for="">Email</label><br>
                <div class="flex justify-between border-1 bg-white border-gray-400 rounded-md active:border visited:border-red-300 relative">
                <input type="Text" name="uname" placeholder="Enter email or username " class="w-[100%] bg-transparent text-sm rounded-md border-none p-2 focus:ring-0">
                <i class='bx bxs-user-circle text-2xl mt-1.5 mr-1 absolute right-0 text-purple-500'></i>
                </div>
            </div>
            <div class="w-[80%] m-auto mb-2">
                <label for="">Password</label><br>
                <div class="flex justify-between border-1 border-gray-400 rounded-md relative">
                <input type="password" name="pass" placeholder="Enter password " class="w-[100%] text-sm rounded-md border-none p-2 focus:ring-0">
                <i class='bx bxs-lock text-2xl mt-1.5 mr-1 absolute right-0 text-purple-500'></i>
                </div>
            </div>
            <div class="w-[80%] flex justify-between m-auto mb-3">
                <div class="">
                <input type="checkbox" id="remember" class="focus:ring-0 checked:rounded-md rounded-sm">
                <label for="remember">Remember me</label>
                </div>
                <a href="#">Forget Password</a>
            </div>
            <div class="text-center">
                <button class="p-2 rounded-md text-white px-4 w-[80%] bg-purple-500 hover:bg-purple-600 font-bold cursor-pointer">Login</button>
            </div>
            <p class="text-center my-2">Don't have an account?<a href="signup" class="text-purple-500 font-bold hover:underline">Sign-up</a></p>
            <div class="flex justify-center">
                <hr width="35%" class="m-2">
                <b>OR</b>
                <hr width="35%" class="m-2">
            </div>
            <div class="text-center">
                <b>Sign-in with Social</b>
                <div class="my-2 flex justify-center">
                    <a href=""><div class="size-8 rounded-full border leading-9 bg-purple-500 m-1"><i class='bx bxl-instagram text-xl text-white' ></i></div></a>
                    <a href=""><div class="size-8 rounded-full border leading-9 bg-purple-500 m-1"><i class='bx bxl-google text-xl text-white' ></i></div></a>
                    <a href=""><div class="size-8 rounded-full border leading-9 bg-purple-500 m-1"><i class='bx bxl-facebook text-xl text-white' ></i></div></a>
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection