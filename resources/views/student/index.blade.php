<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Profile Page</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>


    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="student_assets/css/demo.css" />
    
	    <link rel="stylesheet" href="student_assets/css/style.css">
      <style>
        /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
/* drag & drup */
#div1 {
  width: 350px;
  height: 70px;
  padding: 10px;
  border: 1px solid #aaaaaa;
}
* {
        box-sizing: border-box;
      }
      
      form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
      }
      
      form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
      }
      
      form.example button:hover {
        background: #0b7dda;
      }
      
      form.example::after {
        content: "";
        clear: both;
        display: table;
      }
</style>
</head>
<body>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            
        </div>
       
</div>


<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="student_Assets/img/avatar-02.png" alt="student dp">
            <h3>{{$student['name']}}</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID :</strong>{{$student['username']}}</p>
            <p class="mb-0"><strong class="pr-1">Project name :</strong>{{$project->project_name}}</p>
            <p class="mb-0"><strong class="pr-1">Doctor :</strong>{{$project->name}}</p>
            <p class="mb-0"><strong class="pr-1">Logout :</strong>
              {{-- <a href="">   <i style='font-size:24px' class='fas' >&#xf2f5;</i> </a> --}}
              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
               <i style='font-size:24px' class='fas' >&#xf2f5;</i></a> 
             {{-- </a> --}}
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
               </p> 
          </div>
        </div>
      </div>

      
      
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'G_in')">General Information</button>
            <button class="tablinks" onclick="openCity(event, 'Team')">Team</button>
            <button class="tablinks" onclick="openCity(event, 'ch_pass')">Change password</button>
          </div>
          <div id="G_in" class="tabcontent">

          <div class="card-header bg-transparent border-0">
            <div id="G_in" class="tabcontent">

            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%"> completed hours</th>
                <td width="2%">:</td>
                <td>{{$details['hours']}}</td>
              </tr>
              <tr>
                <th width="30%">cumulative avg	</th>
                <td width="2%">:</td>
                <td>{{$details['gpa']}}</td>
              </tr>
              <tr>
                <th width="30%">phone number</th>
                <td width="2%">:</td>
                <td>{{$student['phone']}}</td>
              </tr>
              <tr>
                <th width="30%">email</th>
                <td width="2%">:</td>
                <td>{{$student['email']}}</td>
              </tr>
                        <tr>
                <th width="30%">Doctor as presnter</th>
                <td width="2%">:</td>
                <td>{{$project->presenter}}</td>
              </tr>
              <tr>
                <tr>
                  <th width="30%">Discussion date</th>
                  <td width="2%">:</td>
                  <td>{{$project->date}}</td>
                </tr>
                <tr>
                  <th width="30%">discussion link</th>
                  <td width="2%">:</td>
                  <td><a href="{{$project->link}}">Here</a></td>
                </tr>
                <th width="30%">Mark</th>
                <td width="2%">:</td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
        </div>   </div>
      
        
<div id="Team" class="tabcontent">
  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Team member</h3>

  <table class="table table-bordered">
    <tr>
      <th>Name</th>
      <th>ID </th>
      <th>phone</th>
    </tr>
    @foreach ($team as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->username}}</td>
      <td>{{$item->phone}}</td>
    </tr>
    @endforeach
  
  </table></div>
  <div id="ch_pass" class="tabcontent">

    <div class="card-header bg-transparent border-0">
      <div id="ch_pass" class="tabcontent">
  
      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Change password</h3>
    </div>
    <form method="POST" action="{{ route('student-change-password',$student['id']) }}" class="card-body pt-0">
      @csrf
      <table class="table table-bordered">
        <tr>
          <th width="30%"> old password</th>
          <td width="2%">:</td>
          <td>  <input type="text" id="o-paa" name="o_pass" required><br><br>
          </td>
        </tr>
        <tr>
          <th width="30%">new password	</th>
          <td width="2%">:</td>
          <td>  <input type="text" id="n_pass" name="n_pass" required><br><br>
          </td>
        </tr>
        <tr>
          <th width="30%">password confirmation</th>
          <td width="2%">:</td>
          <td>  <input type="text" id="c_pass" name="c_pass" required><br><br>
          </td>
        </tr>
      
      </table>
      <button type="submit">Submit</button>
    </form></div></div>
        
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>uplode file </h3>
          </div>
          <div class="card-body pt-0">
            <form action="/action_page.php">
              <div id="div1" style="background: #ffffff98;" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
              <input type="file" id="myFile" name="filename">
              <input type="submit" style="background: #6081ef; color: #f1f1f1;">
              
            </form>          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
</div>

<!-- Project details -->
           
    		</div>
		</div></div>
    <div style="height: 26px"></div>
    <div class="card shadow-sm">
      <div class="card-header bg-transparent border-0">
        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Project details </h3>
      </div>
      <div class="card-body pt-0">
<p>Computerization of the graduation projects system in all its stages and making the student can register and upload files electronically. The projects are presented by the doctor, and in the end the student gets a mark based on the mark of the arbitrator and the doctor</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div style="height: 26px"></div>
<div class="card shadow-sm">
  <div class="card-header bg-transparent border-0">
    <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Last project 
      <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form></h3>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>name of project</th>
        <th>doctour</th>
        <th>date desction</th>
        <th>mark</th>
        <th>Docomuntion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><label class="badge badge-danger">dwonlode</label></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><label class="badge badge-danger">dwonlode</label></td>
      </tr>    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><label class="badge badge-danger">dwonlode</label></td>
      </tr>    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><label class="badge badge-danger">dwonlode</label></td>
      </tr>    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><label class="badge badge-danger">dwonlode</label></td>
      </tr>    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><label class="badge badge-danger">dwonlode</label></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>  
       
    </div>
</div>

</div>

    </div>
    
</section>
     


   
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
 src='https://kit.fontawesome.com/a076d05399.js' 

/* darg & drup */

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
	</body>
</html>