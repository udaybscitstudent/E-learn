@extends('admin.index')

@section('main')

<div class="w-[90%] border-1 bg-white border-slate-500 text-md font-serif rounded-md m-auto my-10">
    <form method="post" action="{{URL::current()}}" enctype="multipart/form-data">
        @csrf
        <h2 class="p-2 border bg-blue-950 text-white text-lg font-serif font-bold rounded-t-md">Update student record</h2>
        <div class="w-[100%] p-3 font-semibold">
            <label for="">Name</label><br>
            <input type="text" name="name" id="" placeholder="Enter your name" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{$obj->Name}}">
            <span class="text-red-500">
                @error('name')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3 font-semibold">
            <label for="">Email</label><br>
            <input type="email" name="email" id="" placeholder="Enter your email" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{$obj->Email}}">
            <span class="text-red-500">
                @error('email')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3 font-semibold">
            <label for="">Mobile</label><br>
            <input type="number" name="mobile" id="" placeholder="Enter your mobile number" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{$obj->Mobile}}">
            <span class="text-red-500">
                @error('mobile')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3">
            <button class="font-serif rounded-md text-md border font-semibold px-5 py-2 bg-blue-950 text-white hover:bg-blue-900 cursor-pointer">Update student</button>
        </div>
    </form>
</div>



@endsection