<?php

namespace App\Http\Controllers;

use App\Models\Assign;
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
        $assign = Assign::where('student_id',$student['id'])->first();
        if(!$assign){
            $projects = Project::where('students','<','4')->select('projects.*','users.name')->join('users','projects.owner_dr','=','users.id')->get();
            return view('student.projects',compact('projects','student'));
        }
        $details = Student::where('student_id',$student['id'])->first();
        $project = Project::where('projects.id',$assign['project_id'])->select('projects.*','u1.name as name','u2.name as presenter')->join('users as u1','projects.owner_dr','=','u1.id')->join('users as u2','projects.presenter_id','=','u2.id')->first();
        $team = Assign::where('project_id',$project['id'])->select('users.name','users.username','users.phone')->join('users','assigns.student_id','=','users.id')->get();
        // dd($project);
        return view('student.index',compact('student','details','project','team'));
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
    public function assign(Project $project,User $user)
    {
        $num = $project['students']+1;
        $project->update([
            'students'=>$num
        ]);
        Assign::create([
            'project_id'=>$project['id'],
            'student_id'=>$user['id']
        ]);
        return redirect('/student');
    }
}
