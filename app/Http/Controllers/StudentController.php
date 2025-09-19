<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function store(request $request){
      $students=new Student();
      $students->name=$request->name;
      $students->email=$request->email;
      $students->department=$request->department;
      $students->enrollment_year=$request->enrollment_year;
       if($students->save()){
        return response()->json(['massage' => 'Data successfully Stored']);
       }else{
        return response()->json(['massage' => 'Data not Stored']);
       }

    }
    public function index(){
       $students = Student::all();
       return response()->json(['massage' => 'data successfully get']);
    }

    public function update(request $request ){
         $students=Student::find($request->id);
         $students->name=$request->name;
         $students->email=$request->email;
         $students->department=$request->department;
         $students->enrollment_year=$request->enrollment_year;
        if($students->save()){
         return response()->json(['massage' => 'data successfully updated']);
        }
        else{
         return response()->json(['massage' => 'Sorry try again']);
        }
    }

    public function delete(request $request){
          $students = Student::destroy($request->id);
          return response()->json(['massage' => "data successfully deleted"]);
    }

    public function Getdata(){
           $data = Student::all();
           return view('studentdiplay' , compact('data'))->with('success' , 'data sccessfully geted');

    }
}
