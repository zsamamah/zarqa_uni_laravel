<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use App\Models\Project;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $project = Project::where('projects.id',$assign['project_id'])->select('projects.*','u1.name as name')->join('users as u1','projects.owner_dr','=','u1.id')->first();
        $presenter=NULL;
        if($project->presenter_id){
            $presenter = Project::where('projects.id',$assign['project_id'])->select('users.name')->join('users','projects.presenter_id','users.id')->first();
            // dd($presenter);
        }
        $team = Assign::where('project_id',$project['id'])->select('assigns.*','users.name','users.username','users.phone')->join('users','assigns.student_id','=','users.id')->get();
        $all_projects = Project::join('users','owner_dr','users.id')->select('projects.*','users.name')->get();
        // dd($all_projects);
        return view('student.index',compact('student','details','project','team','presenter','all_projects'));
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
        $last = Assign::where('project_id',$project['id'])->max('index');
        // dd($last);
        if(!$last){
            Assign::create([
                'project_id'=>$project['id'],
                'student_id'=>$user['id'],
                'index'=>'1'
            ]);
        }
        else{
            $num = $last+1;
            Assign::create([
                'project_id'=>$project['id'],
                'student_id'=>$user['id'],
                'index'=> $num
            ]);
        }
        return redirect('/');
    }
    public function upload_doc(Request $request,Project $project)
    {
        $filename = time().'.pdf';
        Storage::putFileAs('/assets',$request->file,$filename);
        $project->update([
            'doc'=>$filename
        ]);
        return redirect('/student');
    }
    public function download($file)
    {
        return Storage::download('assets/'.$file,'documentation.pdf');
    }
    public function search(Request $request)
    {
            $data = Project::where('project_name','like','%'.$request->search.'%')->select('projects.*','users.name')->join('users','projects.owner_dr','users.id')->get();
            return response($data);
    }
}
