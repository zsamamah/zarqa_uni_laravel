<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use App\Models\Grade;
use App\Models\Mark;
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
        $mark = Mark::where('project_id',$project['id'])->first();
        $grade = Grade::where('project_id',$project['id'])->first();
        $my_assign = Assign::where('student_id',$student['id'])->first();
        $index=0;
        switch ($my_assign['index']) {
            case '1':
                $index=$mark->a_takamol + $mark->a_seyaghah + $mark->a_wodoh + $mark->a_shareh + $mark->a_ekhraj + $mark->a_holol + $mark->a_ettelah + $mark->a_johod + $mark->a_ebdah + $mark->a_sohola + $mark->a_tasalsol + $mark->a_eltezam + $grade->a_takamol + $grade->a_seyaghah + $grade->a_wodoh + $grade->a_shareh + $grade->a_ekhraj + $grade->a_tasalsol + $grade->a_fekra + $grade->a_mahara + $grade->a_code + $grade->a_ejaba + $grade->a_entebaa;
                break;
            case '2':
                $index=$mark->b_takamol + $mark->b_seyaghah + $mark->b_wodoh + $mark->b_shareh + $mark->b_ekhraj + $mark->b_holol + $mark->b_ettelah + $mark->b_johod + $mark->b_ebdah + $mark->b_sohola + $mark->b_tasalsol + $mark->b_eltezam + $grade->b_takamol + $grade->b_seyaghah + $grade->b_wodoh + $grade->b_shareh + $grade->b_ekhraj + $grade->b_tasalsol + $grade->b_fekra + $grade->b_mahara + $grade->b_code + $grade->b_ejaba + $grade->b_entebaa;
                break;
            case '3':
                $index=$mark->c_takamol + $mark->c_seyaghah + $mark->c_wodoh + $mark->c_shareh + $mark->c_ekhraj + $mark->c_holol + $mark->c_ettelah + $mark->c_johod + $mark->c_ebdah + $mark->c_sohola + $mark->c_tasalsol + $mark->c_eltezam + $grade->c_takamol + $grade->c_seyaghah + $grade->c_wodoh + $grade->c_shareh + $grade->c_ekhraj + $grade->c_tasalsol + $grade->c_fekra + $grade->c_mahara + $grade->c_code + $grade->c_ejaba + $grade->c_entebaa;
                break;
            case '4':
                $index=$mark->d_takamol + $mark->d_seyaghah + $mark->d_wodoh + $mark->d_shareh + $mark->d_ekhraj + $mark->d_holol + $mark->d_ettelah + $mark->d_johod + $mark->d_ebdah + $mark->d_sohola + $mark->d_tasalsol + $mark->d_eltezam + $grade->d_takamol + $grade->d_seyaghah + $grade->d_wodoh + $grade->d_shareh + $grade->d_ekhraj + $grade->d_tasalsol + $grade->d_fekra + $grade->d_mahara + $grade->d_code + $grade->d_ejaba + $grade->d_entebaa;
                break;
            default:
                dd('Error, please contact us');
                break;
        }
        // dd($all_projects);
        return view('student.index',compact('student','details','project','team','presenter','all_projects','index'));
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
