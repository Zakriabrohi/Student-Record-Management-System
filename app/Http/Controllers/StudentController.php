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

    public function Getdata(request $request){
           $data = Student::all();
           return view('studentdiplay' , compact('data'))->with('success' , 'data sccessfully geted');

    }

    public function PostSearch(request $request){
        // $name = $request->search;
        //  $data = Student::where('name' , 'like' , '%'.$name.'%')->get();

        //  return view('studentdiplay' , compact('data'));

        $query = Student::query();

        // 🔍 Search by name (partial match)
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        // 🎓 Filter by department
        if ($request->filled('department')) {
            $query->where('department', $request->department);
        }

        // 📅 Filter by enrollment year
        if ($request->filled('enrollment_year')) {
            $query->where('enrollment_year', $request->enrollment_year);
        }

        // 📄 Pagination (10 results per page)
        $data = $query->paginate(0);

        // 🔙 Return JSON for API
        if ($request->wantsJson()) {
                return response()->json($data);
            }

        // 🔙 Or return Blade view
        // return view('studentdiplay', compact('data'));
         return view('studentdiplay' , compact('data'));

    }
}
