@extends('admin.index')

@section('main')

@if(session('success'))
        <p class="w-[90%] m-auto mt-10 rounded-sm text-lg bg-green-500 p-2 text-white">{{session('success')}}</p>
@endif

<div class="border-1 w-[90%] m-auto p-2 rounded-t-md bg-white my-10 border-gray-500">
    <div class="my-3 flex justify-between">
        <div>
            Show Record - 
            <select class="border dropdown text-xs rounded-md">
                <option>10</option>
                <option>20</option>
                <option>30</option>
                <option>40</option>
            </select>
        </div>
        <div class="">
            search
            <input type="search" placeholder="search student" class=" border px-2 text-sm h-8 rounded-md">
        </div>
    </div>
    <Table align="Center" class="w-[100%] border-1">
        <thead class="bg-blue-950 h-12 text-white">
            <th class="border border-gray-500 p-2">SI.no</th>
            <th class="border border-gray-500 p-2 min-w-24">Name</th>
            <th class="border border-gray-500 p-2 min-w-24">Email</th>
            <th class="border border-gray-500 p-2 min-w-24">Mobile</th>
            <th class="border border-gray-500 p-2 min-w-20">Action</th>
        </thead>
        @foreach($obj as $val)
        <tbody class="odd:bg-slate-200">
            <td class="border border-gray-500 p-2">{{ $val->id }}</td>
            <td class="border border-gray-500 p-2">{{ $val->Name }}</td>
            <td class="border border-gray-500 p-2">{{ $val->Email }}</td>
            <td class="border border-gray-500 p-2">{{ $val->Mobile }}</td>
            <td class="border border-gray-500 p-2 text-center">
                <a href="" title="user-details"><i class='bx bxs-user-detail text-xl mx-1 text-blue-500'></i></a>
                <a href="updateStudent/{{$val->id}}" title="update"><i class='bx bxs-edit text-lg mx-1 text-yellow-800' ></i></a>
                <a href="#" onclick="myfun({{$val->id}})" title="Delete"><i class="bi bi-trash3 text-lg mx-1 text-red-500"></i></a>
            </td>

        </tbody>
        @endforeach
    </Table>
    <div class="my-2">
    {{$obj->links()}}
    </div>
</div>
</div>

<script>
    function myfun(sid){
        let con = confirm(`Are you sure? You want to delete This Record where id = ${sid}`);
        if(con){
            location.href = `deleteStudent/${sid}`;
        }
    }
</script>

@endsection