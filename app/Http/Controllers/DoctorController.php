<?php

namespace App\Http\Controllers;

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
        return view('doctor.index',compact('doctor','projects','doctors','presenters'));
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
        Project::create([
            'project_name'=>$request['name'],
            'owner_dr'=>$user['id'],
            'short_des'=>$request['short_des'],
            'langs'=>$request['langs'],
            'full_des'=>$request['full_des']
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
}
