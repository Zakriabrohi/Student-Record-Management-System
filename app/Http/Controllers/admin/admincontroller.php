<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
   public function Getstudents(){
    $student = Student::get();
    return view('admin.getstudents' , compact('student'));
   }

   public function delete($id){
       Student::destroy($id);
       return redirect('Getstudents');
   }

   public function totalstudents(){
    // $total = Student::count();
    $totalStudents = Student::count();
    $studentsPerDepartment = Student::select('department')
    ->selectRaw('count(*) as total')
    ->groupBy('department')
    ->get();
    $recentStudents = Student::latest()->take(5)->get();

    return response()->json([
            'total_students' => $totalStudents,
            'students_per_department' => $studentsPerDepartment,
            'recent_students' => $recentStudents
        ]);

        // return view('admin.totalstudents' , compact('totalStudents' , 'studentsPerDepartment'));
    }
}
