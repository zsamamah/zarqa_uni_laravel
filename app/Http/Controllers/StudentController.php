<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function home()
    {
        $student = Auth::user();
        
        $details = Student::where('student_id',$student['id'])->first();
        return view('student.index',compact('student','details'));
    }
    public function change_password(Request $request,User $user)
    {
        if(Hash::check($request['o_pass'],$user->password)){
            if($request['n_pass']==$request['c_pass']){
                $user->update([
                    'password'=>Hash::make($request['n_pass'])
                ]);
            }
        }
        return redirect('/student');
    }
}
