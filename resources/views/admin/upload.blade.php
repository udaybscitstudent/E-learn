@extends('admin.index')

@section('main')

@if (session('success'))
    {{-- <p class="text-center text-green-500 mt-10">{{session('success')}}</p> --}}
    <script>
    alert("{{session('success')}}");
    </script>
@endif

<div class="w-[90%] border-1 bg-white border-slate-500 text-md font-serif rounded-md m-auto my-10">
    <form method="post" action="{{URL::current()}}" enctype="multipart/form-data">
        @csrf
        <h2 class="p-2 border bg-blue-950 text-white text-lg font-serif font-bold rounded-t-md">Upload a new course</h2>
        
        <div class="w-[100%] p-3 font-semibold mt-5">
            <label for="">Instructor Id</label><br>
            <input type="text" name="ins_id" id="" placeholder="Enter instructor id" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{old('ins_id')}}">
            <span class="text-red-500">
                @error('ins_id')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3 font-semibold">
            <label for="">Course Name</label><br>
            <input type="text" name="cname" id="" placeholder="Enter course name" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{old('cname')}}">
            <span class="text-red-500">
                @error('cname')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3 font-semibold">
            <label for="">Title</label><br>
            <input type="text" name="title" id="" placeholder="Enter course Title" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{old('title')}}">
            <span class="text-red-500">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3 font-semibold">
            <label for="">Select video</label><br>
            <input type="file" name="video" id="" class="w-[100%] text-sm rounded-md border border-gray-500 p-2">
            <span class="text-red-500">
                @error('video')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3 font-semibold">
            <label for="">Description</label><br>
            <textarea name="desc" id="" rows="3" placeholder="Description" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{old('desc')}}"></textarea>
            <span class="text-red-500">
                @error('desc')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3">
            <button class="font-serif rounded-md text-md border font-semibold px-5 py-2 bg-blue-950 text-white hover:bg-blue-900 cursor-pointer">Upload course</button>
        </div>
    </form>
</div>


@endsection
