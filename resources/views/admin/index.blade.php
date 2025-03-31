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
<body class="overflow-x-hidden bg-gray-200">
    {{-- Menu section --}}
    {{-- left side of menu--}}
    <div class="h-screen bg-white w-[250px] fixed top-0 left-0 shadow-md">
    <h2 class="text-2xl font-bold px-5 py-3 text-purple-500">E-learning</h2>
        <div class="mx-5">
        <div class="flex items-center mt-2">
            <img src="/storage/img/iamuday.jpg" class="size-10 rounded-full border-2 border-purple-500">
            <h2 class="py-5 pl-2">Uday kumar</h2>
        </div>
            <ul class="leading-10">
                <a href="{{Route('admin')}}"><div class="flex justify-between text-purple-500 font-bold"><li>Dashboard</li><i class='bx bx-home mt-3'></i></div></a>
                <a href="{{Route('SStudent')}}"><div class="flex justify-between"><li>Student</li><i class='bx bxs-user mt-3 text-gray-500'></i></div></a>
                <a href="{{route('SInstructor')}}"><div class="flex justify-between"><li>Instructor</li><i class='bx bxs-user-rectangle mt-3 text-gray-500' ></i></div></a>
                <a href="{{route('SCourse')}}"><div class="flex justify-between"><li>course</li><i class='bx bxs-layer mt-3 text-gray-500' ></i></div></a>
                <a href="{{route('CUpload')}}"><div class="flex justify-between"><li>upload course</li><i class='bx bx-upload mt-3 text-gray-500'></i></div></a>
                
                
            </ul>
        </div>
    </div>
    {{-- right side of menu --}}
    <div class="fixed h-screen w-auto left-[250px] overflow-auto right-0 top-0 z-10">
        <div class="h-15 bg-white px-5 flex justify-between leading-15 sticky top-0 shadow-md">
            <div class="w-[50%]"><input type="search" placeholder="search" class="border border-gray-400 h-9 w-[50%] px-2 rounded-md"></div>
            <div class="text-xl leading-15">   
                <i class='bx bx-bell' ></i>
                <i class='bx bx-power-off mx-4' ></i>
                <i class='bx bx-menu' ></i>
            </div>
        </div>

        {{-- right side main area --}}
        {{-- main section --}}
        @hasSection('main')
            @yield('main')
        @else
        <div class="grid grid-cols-3 gap-5 h-48 w-[90%] m-auto my-10 text-white">
            <div class=" rounded-sm grid place-items-center font-bold bg-pink-400">
                <a href="{{route('SStudent')}}"><div class="text-center">
                <p>Total Student</p>
                <i class="bi bi-people-fill text-6xl"></i>
                <p>{{ $totalStudent }}</p>
                </div>
                </a>
            </div>
            <div class="bg-blue-400 rounded-sm grid place-items-center font-bold ">
                <a href="{{route('SInstructor')}}"><div class="text-center">
                <p>Total Instructor</p>
                <i class="bi bi-people-fill text-6xl"></i>
                <p>{{$totalInstructor}}</p>
                </div>
                </a>
            </div>
            <div class="bg-green-400 rounded-sm grid place-items-center font-bold">
                <a href="{{route('SCourse')}}"><div class="text-center">
                <p>Total course</p>
                <i class="bi bi-mortarboard-fill text-6xl"></i>
                <p>{{$totalCourse}}</p>
                </div>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-5 h-[50vh] w-[90%] m-auto">
            <div class="bg-white col-span-2 rounded-sm"></div>
            <div class="bg-white rounded-sm"></div>
        </div>
        @endif
        {{-- end of right side main area --}}
    </div>
</body>
</html>