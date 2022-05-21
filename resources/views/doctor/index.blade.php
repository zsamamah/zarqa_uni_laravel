<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Doctor Profile Page</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>


    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="doctor_assets/css/demo.css" />
    
	    <link rel="stylesheet" href="doctor_assets/css/style.css">
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
#div1 {
  width: 350px;
  height: 70px;
  padding: 10px;
  border: 1px solid #aaaaaa;
}
/* button*/
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4c70af;} 
      
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

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>ZU GraduatioN Project Gate</h1>
              <br>
              <h1>Doctor page</h1>
                
            </div>
        </div>
    </div>
</header>

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
            <img class="profile_img" src="doctor_assets/img/avatar-02.png" alt="student dp">
            <h3>{{$doctor['name']}}</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">User name :</strong>{{$doctor['username']}}</p>
            <p class="mb-0"><strong class="pr-1">number of projects :</strong>{{$projects->count()}}</p>
            <p class="mb-0"><strong class="pr-1">projects as presenter :</strong>{{$presenters->count()}}</p>
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
            <button class="tablinks" onclick="openCity(event, 'Projects')">Projects</button>
            <button class="tablinks" onclick="openCity(event, 'Projects_presnter')">Project As presnter</button>
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
                <th width="30%"> His specialty</th>
                <td width="2%">:</td>
                <td>Software Engineering</td>
              </tr>
              <tr>
                <th width="30%">Academic degree	</th>
                <td width="2%">:</td>
                <td>Ph.D</td>
              </tr>
              <tr>
                <th width="30%">phone number</th>
                <td width="2%">:</td>
                <td>{{$doctor['phone']}}</td>
              </tr>
              <tr>
                <th width="30%">email</th>
                <td width="2%">:</td>
                <td>{{$doctor['email']}}</td>
              </tr>
          
            </table>
          </div>
        </div>
        </div>   </div>
      
        
<div id="Projects" class="tabcontent">
  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Projects</h3>

  <table class="table table-bordered">
    <tr>
      <th>Project Name</th>
      <th>Discussion date</th>
      <th>Discussion link</th>
      <th>Doctor as presnter</th>
      <th>Details</th>
    </tr>
    @foreach ($projects as $item)
    <tr>
      <td>{{$item->project_name}}</td>
      <td>
        <form method="POST" action="{{ route('update-date',$item->id) }}">
        @csrf
        @if ($item->date)
            <p>{{$item->date}}</p>
        @endif
        <input type="text" id="date" name="date"><br><br>
        <button type="submit">Update</button>
      </form>
    </td>
      <td>
        <form method="POST" action="{{ route('update-link',$item->id) }}">
          @csrf
          @if ($item->link)
              <a href="{{$item->link}}">Here</a>
          @endif
          <input type="text" id="date" name="link"><br><br>
          <button type="submit">Update</button>
        </form>
    </td>
      <td>
        @if (!$item->presenter_id)
        <form method="POST" action="{{ route('select-presenter',$item['id']) }}">
        @csrf
        <select name="presenter">
          <option>select doctor</option>
          @foreach ($doctors as $doctor)
              <option value="{{$doctor['id']}}">{{$doctor['name']}}</option>
          @endforeach
        </select>
        {{-- <input type="text" id="presnter" name="presnter"> --}}
        <br><br>
        <button type="submit">Submit</button>
      </form>
      @else
      <p>{{$item->name}}</p>
      @endif
    </td>
      <td><a href="{{ route('marks',$item->id) }}"><button>Mark</button></a></td>
    </tr>
    @endforeach
  </table></div>
         
<div id="Projects_presnter" class="tabcontent">
  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Projects as presenter</h3>

  <table class="table table-bordered">
    <tr>
      <th>Project Name</th>
      <th>Discussion date</th>
      <th>Discussion link</th>
      <th>Doctor</th>
      <th>Details</th>
    </tr>
    @foreach ($presenters as $item)
    <tr>
      <td>{{$item->project_name}}</td>
      <td>{{$item->date}}</td>
      <td>
        @if ($item->link)
            <a href="{{$item->link}}">Here</a>
        @else
            <p>NULL</p>
        @endif
      </td>
      <td>{{$item->name}}</td>
      <td><a href="{{ url('/grade/'.$item->id) }}"><button>Mark</button></a></td>
    </tr>
    @endforeach
  </table></div>
  <div id="ch_pass" class="tabcontent">

    <div class="card-header bg-transparent border-0">
      <div id="ch_pass" class="tabcontent">
  
      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Change password</h3>
    </div>
    <form method="POST" action="{{ route('doctor-change-password',$doctor['id']) }}" class="card-body pt-0">
      @csrf
      <table class="table table-bordered">
        <tr>
          <th width="30%"> old password</th>
          <td width="2%">:</td>
          <td>  <input type="password" id="o-paa" name="o_pass" required><br><br>
          </td>
        </tr>
        <tr>
          <th 
          
          width="30%">new password	</th>
          <td width="2%">:</td>
          <td>  <input type="password" id="n_pass" name="n_pass" required><br><br>
          </td>
        </tr>
        <tr>
          <th width="30%">password confirmation</th>
          <td width="2%">:</td>
          <td>  <input type="password" id="c_pass" name="c_pass" required><br><br>
          </td>
        </tr>
      
      </table>
      <button type="submit">Submit</button>

    </form>
    </div></div>    
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Add Project </h3>
          </div>
         <a href="/add-project"> <button class="button button1">Add Project </button></a>

      </div>
    </div>
  </div>
</div> 

<div style="height: 26px"></div>
<div class="card shadow-sm">
  <div class="card-header bg-transparent border-0">
    <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Last project 
      {{-- <form class="example" action="/action_page.php" style="margin:auto;max-width:300px"> --}}
        <input type="text" placeholder="Search..." name="search" id="search">
        <button onclick="test()"><i class="fa fa-search"></i></button>
      {{-- </form> --}}
    </h3>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>name of project</th>
        <th>doctour</th>
        <th>description</th>
        <th>date</th>
        <th>Docomuntion</th>
      </tr>
    </thead>
    <tbody id="data_table">

      @foreach ($all_projects as $item)
      <tr>
        <td>{{$item->project_name}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->short_des}}</td>
        <td>{{$item->date}}</td>
        <td>
          @if ($item->doc)
              <a class="badge badge-danger" href="{{ url('/download/'.$item->doc) }}">Download</a>
          @endif
          {{-- <label class="badge badge-danger">dwonlode</label> --}}
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
</div>
</div>
</div> 
<!-- Project details -->
</div>
</div>   </div>

    		</div>
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

async function test(){
  let data = document.getElementById('search').value;
  let x = await fetch(`http://localhost:8000/api/search?search=${data}`);
  let y = await x.json();
  // console.log(y)
  let table = document.getElementById('data_table');
  table.innerHTML='';
  for(let i=0;i<y.length;i++){
    if(y[i].doc)
    table.innerHTML+=`<tr><td>${y[i].project_name}</td><td>${y[i].name}</td><td>${y[i].short_des}</td><td>${y[i].date}</td><td><a class="badge badge-danger" href="http://localhost:8000/download/${y[i].doc}">Download</a></td></tr>`
    else
    table.innerHTML+=`<tr><td>${y[i].project_name}</td><td>${y[i].name}</td><td>${y[i].short_des}</td><td>${y[i].date}</td><td></td></tr>`
  }
}


</script>
	</body>
</html>