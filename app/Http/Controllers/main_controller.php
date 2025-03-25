<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instructor;
use App\Models\student;
use App\Models\course;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Exceptions\PostTooLargeException;
class main_controller extends Controller
{
    // instructor registration 
    public function instructor(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:instructors,Email',
            'mob' => 'required|unique:instructors,Mobile',
            'degree' => 'required|not_in:select your Degree',
            'subject' => 'required|not_in:select subject',
            'address' => 'required',
            'pass' => 'required',
            'cpass' => 'required|same:pass'
        ]);

        $ins = new instructor;
        $ins->First_name = $request->fname;
        $ins->Last_name = $request->lname;
        $ins->Email = $request->email;
        $ins->Mobile = $request->mob;
        $ins->Degree = $request->degree;
        $ins->Department = $request->subject;
        $ins->Address = $request->address;
        $ins->Password = $request->pass;
        $ins->save();
        return redirect('/instructor')->with('success','Instructor added successfully');
    }

    // student registration
    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,Email',
            'mobile' => 'required|unique:students,Mobile',
            'pass' => 'required',
            'cpass' => 'required|same:pass'
        ]);

        $stu = new student;
        $stu->Name = $req->name;
        $stu->Email = $req->email;
        $stu->Mobile = $req->mobile;
        $stu->Password = $req->pass;
        $stu->save();
        return redirect('/signup')->with('success','registration completed successfully');
    }

    // show student record on the admin page
    public function showStudent(){
        // $obj = student::all();
        $obj = DB::table('students')
        ->Paginate(10); //simplePaginate() , cursorPaginate().
        $data = compact('obj');
        return view('admin.student',  $data);
    }

    // show instructor record on the admin page
    function showInstructor(){
        $obj = DB::table('instructors')
        ->Paginate(10); //simplePaginate() , cursorPaginate().
        $data = compact('obj');
        return view('admin.instructor',  $data);
    }

    // show course record on the admin page
    function showCourse(){
        return view('admin.course');
    }

    // course upload page from the admin page
    function courseUpload(Request $req){
        $req->validate([
            'ins_id' => 'required',
            'cname' => 'required',
            'title' => 'required',
            'video' => 'required|file|max:512000',
        ]);

        $course = new course; 

        $filename = $req->file('video');
        $fname = rand().'video.'.$filename->getClientOriginalExtension();
        $filename->storeAs('/public/video', $fname);

        $course->Course_name = $req->cname;
        $course->Title = $req->title;
        $course->Ins_id = $req->ins_id;
        $course->Video_url = $fname;
        $course->Description = $req->desc;

        $course->save();
        return redirect('/courseUpload')->with('success','Course uploaded successfully');
    }

    function deleteStudent($sid){
        $obj = student::find($sid);
        $obj->delete();
        return redirect('/showStudent')->with('success','Student record deleted successfully');
    }

    // delete instructor

    function deleteInstructor($sid){
        $obj = instructor::destroy($sid);
        return redirect('/showInstructor')->with('success','Instructor record deleted successfully');
        
    }

    function admin(){

        $totalStudent = student::count('id');
        $totalInstructor = instructor::count('id');
        $totalCourse = course::count('id');

        return view('admin.index')->with('totalStudent',$totalStudent)->with('totalInstructor',$totalInstructor)->with('totalCourse',$totalCourse);
    }


    function updateStudent($sid){
        $obj = student::find($sid);
        return view('admin.updateStudent')->with('obj',$obj);
    }

    function sendStudentDetail(Request $req ,$sid){

        $obj = student::find($sid);
        $obj->Name = $req->name;
        $obj->Email = $req->email;
        $obj->Mobile = $req->mobile;
        $obj->save();

        return redirect('/showStudent')->with('success','student record updated successfully');
    }

    // update instructor

    function updateInstructor($sid){
        $obj = instructor::find($sid);
        $data = compact('obj');
        return view('admin.updateInstructor')->with($data);
    }

    function sendInstructorDetail(Request $req ,$sid){
        $obj = instructor::find($sid);

        $obj->First_name = $req->fname;
        $obj->Last_name = $req->lname;
        $obj->Email = $req->email;
        $obj->Mobile = $req->mobile;
        $obj->Degree = $req->degree;
        $obj->Department = $req->subject;
        $obj->Address = $req->address;
        $obj->Save();
        return redirect('/showInstructor')->with('success','instructor record updated successfully');
        
    }
}
