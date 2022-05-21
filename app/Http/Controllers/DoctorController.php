<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use App\Models\Mark;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function home()
    {
        $doctor = Auth::user();
        $projects = Project::where('owner_dr',$doctor['id'])->select('projects.*','users.name')->leftJoin('users','users.id','=','projects.presenter_id')->get();
        $presenters = Project::where('presenter_id',$doctor['id'])->select('projects.*','users.name')->join('users','users.id','=','projects.owner_dr')->get();
        $doctors = User::where('role','doctor')->where('id','!=',$doctor['id'])->get();
        $all_projects = Project::join('users','owner_dr','users.id')->select('projects.*','users.name')->get();
        return view('doctor.index',compact('doctor','projects','doctors','presenters','all_projects'));
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
        return redirect('/doctor');
    }
    public function add_project()
    {
        $doctor = Auth::user();
        return view('doctor.add_project',compact('doctor'));
    }
    public function save_project(Request $request,User $user)
    {
        $project = Project::create([
            'project_name'=>$request['name'],
            'owner_dr'=>$user['id'],
            'short_des'=>$request['short_des'],
            'langs'=>$request['langs'],
            'full_des'=>$request['full_des']
        ]);
        Mark::create([
            'project_id'=>$project['id']
        ]);
        return redirect('/doctor');
    }
    public function select_presenter(Request $request,Project $project)
    {
        $project->update([
            'presenter_id'=>$request['presenter']
        ]);
        return redirect('/doctor');
    }
    public function update_date(Request $request,Project $project)
    {
        $project->update([
            'date'=>$request['date']
        ]);
        return redirect('/doctor');
    }
    public function update_link(Request $request,Project $project)
    {
        $project->update([
            'link'=>$request['link']
        ]);
        return redirect('/doctor');
    }
    public function marks(Project $project)
    {
        $mark = Mark::where('project_id',$project['id'])->first();
        $team = Assign::where('project_id',$project['id'])->select('assigns.*','users.name','users.username','users.phone','users.id','students.dept')->join('users','assigns.student_id','=','users.id')->join('students','users.id','students.student_id')->get();
        return view('doctor.mark',compact('project','mark','team'));
    }
    public function delete_member(Project $project,User $user)
    {
        // dd($project,$user);
        $assign = Assign::where('project_id',$project['id'])->where('student_id',$user['id'])->first();
        $assign->deleteOrFail();
        $num = $project['students']-1;
        $project->update([
            'students'=>$num
        ]);
        $all_assigns = Assign::where('project_id',$project['id'])->get();
        if($all_assigns){
            foreach ($all_assigns as $key => $value) {
                $value->update([
                    'index'=>$key+1
                ]);
            }
        }
        return redirect('/marks/'.$project['id']);
    }
    public function update_marks(Request $request,Project $project)
    {
        $found = Mark::where('project_id',$project['id'])->first();
        if(!$found){
            Mark::create([
                'project_id'=>$project['id'],
                'a_takamol'=>$request['a_takamol'],
                'b_takamol'=>$request['b_takamol'],
                'c_takamol'=>$request['c_takamol'],
                'd_takamol'=>$request['d_takamol'],
                'a_seyaghah'=>$request['a_seyaghah'],
                'b_seyaghah'=>$request['b_seyaghah'],
                'c_seyaghah'=>$request['c_seyaghah'],
                'd_seyaghah'=>$request['d_seyaghah'],
                'a_wodoh'=>$request['a_wodoh'],
                'b_wodoh'=>$request['b_wodoh'],
                'c_wodoh'=>$request['c_wodoh'],
                'd_wodoh'=>$request['d_wodoh'],
                'a_shareh'=>$request['a_shareh'],
                'b_shareh'=>$request['b_shareh'],
                'c_shareh'=>$request['c_shareh'],
                'd_shareh'=>$request['d_shareh'],
                'a_ekhraj'=>$request['a_ekhraj'],
                'b_ekhraj'=>$request['b_ekhraj'],
                'c_ekhraj'=>$request['c_ekhraj'],
                'd_ekhraj'=>$request['d_ekhraj'],
                'a_holol'=>$request['a_holol'],
                'b_holol'=>$request['b_holol'],
                'c_holol'=>$request['c_holol'],
                'd_holol'=>$request['d_holol'],
                'a_ettelah'=>$request['a_ettelah'],
                'b_ettelah'=>$request['b_ettelah'],
                'c_ettelah'=>$request['c_ettelah'],
                'd_ettelah'=>$request['d_ettelah'],
                'a_johod'=>$request['a_johod'],
                'b_johod'=>$request['b_johod'],
                'c_johod'=>$request['c_johod'],
                'd_johod'=>$request['d_johod'],
                'a_ebdah'=>$request['a_ebdah'],
                'b_ebdah'=>$request['b_ebdah'],
                'c_ebdah'=>$request['c_ebdah'],
                'd_ebdah'=>$request['d_ebdah'],
                'a_sohola'=>$request['a_sohola'],
                'b_sohola'=>$request['b_sohola'],
                'c_sohola'=>$request['c_sohola'],
                'd_sohola'=>$request['d_sohola'],
                'a_tasalsol'=>$request['a_tasalsol'],
                'b_tasalsol'=>$request['b_tasalsol'],
                'c_tasalsol'=>$request['c_tasalsol'],
                'd_tasalsol'=>$request['d_tasalsol'],
                'a_eltezam'=>$request['a_eltezam'],
                'b_eltezam'=>$request['b_eltezam'],
                'c_eltezam'=>$request['c_eltezam'],
                'd_eltezam'=>$request['d_eltezam'],
                'monakasha'=>$request['monakasha'],
                'k_jawayez'=>$request['k_jawayez'],
                'j_jawayez'=>$request['j_jawayez']
            ]);
        }
        else{
            $found->update([
                'project_id'=>$project['id'],
                'a_takamol'=>$request['a_takamol'],
                'b_takamol'=>$request['b_takamol'],
                'c_takamol'=>$request['c_takamol'],
                'd_takamol'=>$request['d_takamol'],
                'a_seyaghah'=>$request['a_seyaghah'],
                'b_seyaghah'=>$request['b_seyaghah'],
                'c_seyaghah'=>$request['c_seyaghah'],
                'd_seyaghah'=>$request['d_seyaghah'],
                'a_wodoh'=>$request['a_wodoh'],
                'b_wodoh'=>$request['b_wodoh'],
                'c_wodoh'=>$request['c_wodoh'],
                'd_wodoh'=>$request['d_wodoh'],
                'a_shareh'=>$request['a_shareh'],
                'b_shareh'=>$request['b_shareh'],
                'c_shareh'=>$request['c_shareh'],
                'd_shareh'=>$request['d_shareh'],
                'a_ekhraj'=>$request['a_ekhraj'],
                'b_ekhraj'=>$request['b_ekhraj'],
                'c_ekhraj'=>$request['c_ekhraj'],
                'd_ekhraj'=>$request['d_ekhraj'],
                'a_holol'=>$request['a_holol'],
                'b_holol'=>$request['b_holol'],
                'c_holol'=>$request['c_holol'],
                'd_holol'=>$request['d_holol'],
                'a_ettelah'=>$request['a_ettelah'],
                'b_ettelah'=>$request['b_ettelah'],
                'c_ettelah'=>$request['c_ettelah'],
                'd_ettelah'=>$request['d_ettelah'],
                'a_johod'=>$request['a_johod'],
                'b_johod'=>$request['b_johod'],
                'c_johod'=>$request['c_johod'],
                'd_johod'=>$request['d_johod'],
                'a_ebdah'=>$request['a_ebdah'],
                'b_ebdah'=>$request['b_ebdah'],
                'c_ebdah'=>$request['c_ebdah'],
                'd_ebdah'=>$request['d_ebdah'],
                'a_sohola'=>$request['a_sohola'],
                'b_sohola'=>$request['b_sohola'],
                'c_sohola'=>$request['c_sohola'],
                'd_sohola'=>$request['d_sohola'],
                'a_tasalsol'=>$request['a_tasalsol'],
                'b_tasalsol'=>$request['b_tasalsol'],
                'c_tasalsol'=>$request['c_tasalsol'],
                'd_tasalsol'=>$request['d_tasalsol'],
                'a_eltezam'=>$request['a_eltezam'],
                'b_eltezam'=>$request['b_eltezam'],
                'c_eltezam'=>$request['c_eltezam'],
                'd_eltezam'=>$request['d_eltezam'],
                'monakasha'=>$request['monakasha'],
                'k_jawayez'=>$request['k_jawayez'],
                'j_jawayez'=>$request['j_jawayez']
            ]);
        }
        return redirect('/marks/'.$project['id']);
    }
}
