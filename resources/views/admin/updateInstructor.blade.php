@extends('admin.index')

@section('main')

<div class="w-[90%] border-1 bg-white border-slate-500 text-md font-serif rounded-md m-auto my-10">
    <form method="post" action="{{URL::current()}}" enctype="multipart/form-data">
        @csrf
        <h2 class="p-2 border bg-blue-950 text-white text-lg font-serif font-bold rounded-t-md">Update instructor record</h2>
        <div class="w-[100%] p-3 font-semibold">
            <label for="">First Name</label><br>
            <input type="text" name="fname" id="" placeholder="Enter your first name" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{$obj->First_name}}">
            <span class="text-red-500">
                @error('fname')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="w-[100%] p-3 font-semibold">
            <label for="">Last Name</label><br>
            <input type="text" name="lname" id="" placeholder="Enter your last name" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" value="{{$obj->Last_name}}">
            <span class="text-red-500">
                @error('lname')
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

         

        <div class="w-[100%] p-3 font-semibold">
            <label for="">What's Your the Highest degree</label>
            <select class="w-[100%] text-sm rounded-md border border-gray-500 p-2" name="degree">
                <option>{{$obj->Degree}}</option>
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
        <div class="w-[100%] p-3 font-semibold">
            <label for="">What subject would you like to teach</label>
            <select class="w-[100%] text-sm rounded-md border border-gray-500 p-2" name="subject">
                <option>{{$obj->Department}}</option>
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
        <div class="w-[100%] p-3 font-semibold">
            <label for="">Address</label>
            <textarea cols="auto" rows="auto" id="msg" name="address" placeholder="Address" class="w-[100%] text-sm rounded-md border border-gray-500 p-2" >{{$obj->Address}}</textarea>
            <span class="text-red-500">
                @error('address')
                    {{$message}}
                @enderror
            </span>
        </diV>

        <div class="w-[100%] p-3">
            <button class="font-serif rounded-md text-md border font-semibold px-5 py-2 bg-blue-950 text-white hover:bg-blue-900 cursor-pointer">Update student</button>
        </div>
    </form>
</div>



@endsection