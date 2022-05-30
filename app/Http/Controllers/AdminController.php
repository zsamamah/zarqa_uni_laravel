<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function home()
    {
        $projects = Project::all();
        $doctors = User::where('role','doctor')->get();
        $students = User::where('role','student')->get();
        return view('admin.index',compact('projects','doctors','students'));
    }
    public function create_user()
    {
        return view('admin.create_user');
    }
    public function add_doctor(Request $request)
    {
        if($request['pass'] && $request['pass']==$request['pass2']){
            User::create([
                'name'=>$request['name'],
                'username'=>$request['username'],
                'email'=>$request['email'],
                'phone'=>$request['phone'],
                'role'=>'doctor',
                'password'=>Hash::make($request['pass'])
            ]);
        }
        return redirect('/add-user');
    }
    public function add_student(Request $request)
    {
        if($request['password'] && $request['password']==$request['repassword']){
            $user = User::create([
                'name'=>$request['name'],
                'username'=>$request['id'],
                'email'=>$request['email'],
                'phone'=>$request['phone'],
                'role'=>'student',
                'password'=>Hash::make($request['password'])
            ]);
            Student::create([
                'student_id'=>$user['id'],
                'dept'=>'NULL',
                'hours'=>'NULL',
                'gpa'=>'NULL',
                'grad_year'=>'0'
            ]);
        }
        return redirect('/add-user');
    }
    public function users()
    {
        $doctors = User::where('role','doctor')->get();
        $students = User::where('role','student')->get();
        $all_projects = Project::select('projects.*','users.name')->join('users','projects.owner_dr','users.id')->get();
        return view('admin.users',compact('doctors','students','all_projects'));
    }
    public function delete_user(User $user)
    {
        $user->deleteOrFail();
        return redirect('/users');
    }
}
