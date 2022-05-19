<!DOCTYPE html>
<html>
<head>
  <title>Add Project</title>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

button[type=submit] {
  background-color: #457aa0;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: #457aa0;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
p {
  width: 300px;
  border: 0px solid rgb(201, 202, 201);
  padding: 50px;
  margin: 20}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
  <p>
<h2 style="align='center'">Add Project</h2>

<div class="container">
  <form method="POST" action="{{ route('save-project',$doctor->id) }}">
    @csrf
  <div class="row">
    <div class="col-25">
      <label for="">Project name</label>
    </div>
    <div class="col-75">
      <input type="text" id="" name="name" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="">short description</label>
    </div>
    <div class="col-75">
      <input type="text" id="" name="short_des" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="">programming languages</label>
    </div>
    <div class="col-75">
      <input type="text" id="" name="langs" placeholder="">
    </div>
  </div>
  
  {{-- <div class="row">
    <div class="col-25">
      <label for="">year</label>
    </div>
    <div class="col-75">
      <input type="text" id="" name="" placeholder="">
    </div>
  </div> --}}
    <div class="row">
    <div class="col-25">
      <label for="">full description</label>
    </div>
    
    <div class="col-75">
      <textarea id="" name="full_des" placeholder="" style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <button type="submit">Add</button>
  </div>
  </form>
</div></p>


</body>
</html>


