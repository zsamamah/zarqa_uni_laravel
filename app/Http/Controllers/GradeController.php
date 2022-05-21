<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use App\Models\Grade;
use App\Models\Project;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function grade_view(Project $project)
    {
        $grade = Grade::where('project_id',$project['id'])->first();
        $team = Assign::where('project_id',$project['id'])->select('assigns.*','users.name','users.username','users.phone','users.id','students.dept')->join('users','assigns.student_id','=','users.id')->join('students','users.id','students.student_id')->get();
        return view('doctor.grade',compact('project','grade','team'));
    }

    public function update_grades(Request $request,Project $project)
    {
        $found = Grade::where('project_id',$project['id'])->first();
        if(!$found){
            Grade::create([
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
                'a_tasalsol'=>$request['a_tasalsol'],
                'b_tasalsol'=>$request['b_tasalsol'],
                'c_tasalsol'=>$request['c_tasalsol'],
                'd_tasalsol'=>$request['d_tasalsol'],
                'a_fekra'=>$request['a_fekra'],
                'b_fekra'=>$request['b_fekra'],
                'c_fekra'=>$request['c_fekra'],
                'd_fekra'=>$request['d_fekra'],
                'a_mahara'=>$request['a_mahara'],
                'b_mahara'=>$request['b_mahara'],
                'c_mahara'=>$request['c_mahara'],
                'd_mahara'=>$request['d_mahara'],
                'a_code'=>$request['a_code'],
                'b_code'=>$request['b_code'],
                'c_code'=>$request['c_code'],
                'd_code'=>$request['d_code'],
                'a_ejaba'=>$request['a_ejaba'],
                'b_ejaba'=>$request['b_ejaba'],
                'c_ejaba'=>$request['c_ejaba'],
                'd_ejaba'=>$request['d_ejaba'],
                'a_entebaa'=>$request['a_entebaa'],
                'b_entebaa'=>$request['b_entebaa'],
                'c_entebaa'=>$request['c_entebaa'],
                'd_entebaa'=>$request['d_entebaa'],
                'mostawa'=>$request['mostawa']
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
                'a_tasalsol'=>$request['a_tasalsol'],
                'b_tasalsol'=>$request['b_tasalsol'],
                'c_tasalsol'=>$request['c_tasalsol'],
                'd_tasalsol'=>$request['d_tasalsol'],
                'a_fekra'=>$request['a_fekra'],
                'b_fekra'=>$request['b_fekra'],
                'c_fekra'=>$request['c_fekra'],
                'd_fekra'=>$request['d_fekra'],
                'a_mahara'=>$request['a_mahara'],
                'b_mahara'=>$request['b_mahara'],
                'c_mahara'=>$request['c_mahara'],
                'd_mahara'=>$request['d_mahara'],
                'a_code'=>$request['a_code'],
                'b_code'=>$request['b_code'],
                'c_code'=>$request['c_code'],
                'd_code'=>$request['d_code'],
                'a_ejaba'=>$request['a_ejaba'],
                'b_ejaba'=>$request['b_ejaba'],
                'c_ejaba'=>$request['c_ejaba'],
                'd_ejaba'=>$request['d_ejaba'],
                'a_entebaa'=>$request['a_entebaa'],
                'b_entebaa'=>$request['b_entebaa'],
                'c_entebaa'=>$request['c_entebaa'],
                'd_entebaa'=>$request['d_entebaa'],
                'mostawa'=>$request['mostawa']
            ]);
        }
        return redirect('/grade/'.$project['id']);
    }
}
