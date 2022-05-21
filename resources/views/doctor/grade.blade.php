<!DOCTYPE html>
<html  dir="rtl" lang="ar">
<head>
<title>Marks</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Create three equal columns that floats next to each other */
.column {
  float: right;
  width: 80.33%;
  padding: 30px;
}
.column2 {
  float: right;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
/*table*/

table {
  border-collapse: collapse;
  width: 120%;
}
.table2 {
  border-collapse: collapse;
  width: 60%;
  padding: 30px;
}
th, td {
  text-align: center;
  padding: 12px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #3563a9;
  color: white;
}
/*radio button */
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
/*button*/
.button {
    background-color: #2196F3;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>

  <div class="header">
    <label><h1>{{$project->project_name}}</h1></label>
    <a href="{{ url('/') }}">Home</a>
    
  <table class="table2" align='center'>
      <tr>
        <th>ترتيب الطالب</th>
        <th>اسم الطالب</th>
        <th>الرقم الجامعي</th>
        <th>القسم</th>
      </tr>
      @foreach ($team as $item)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->dept}}</td>
      </tr>
      @endforeach
    </table>
  </div>

<form method="POST" action="">
  @csrf
<div class="row">
  <div class="column">
    <table>
        <tr>
          <th>التقييم</th>
          <th>العلامة</th>
          <th>الطالب الاول</th>
          <th>الطالب الثاني</th>
          <th>الطالب الثالث</th>
          <th>الطالب الرابع</th>
        </tr>
        <tr>
          <td>تكامل العوامل الرئيسية للتقرير</td>
          <td>4</td>
              <td>  <input type="number" id="" name="a_takamol" value="{{$grade->a_takamol}}" ><br>
              </td>
              <td>  <input type="number" id="" name="b_takamol" value="{{$grade->b_takamol}}" ><br>
              </td>
              <td>  <input type="number" id="" name="c_takamol" value="{{$grade->c_takamol}}" ><br>
              </td>
              <td>  <input type="number" id="" name="d_takamol" value="{{$grade->d_takamol}}" ><br>
              </td>
              </td>
            </tr>
            <tr>
              <td>الصياغة اللغوية ودقتها </td>
              <td>4</td>
                  <td>  <input type="number" id="" name="a_seyaghah" value="{{$grade->a_seyaghah}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="b_seyaghah" value="{{$grade->b_seyaghah}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="c_seyaghah" value="{{$grade->c_seyaghah}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="d_seyaghah" value="{{$grade->d_seyaghah}}" ><br>
                  </td>
                  </td>
                </tr>
        </tr>
        <tr>
          <td>وضوح منهجية العمل</td>
          <td>4</td>
              <td>  <input type="number" id="" name="a_wodoh" value="{{$grade->a_wodoh}}" ><br>
              </td>
              <td>  <input type="number" id="" name="b_wodoh" value="{{$grade->b_wodoh}}" ><br>
              </td>
              <td>  <input type="number" id="" name="c_wodoh" value="{{$grade->c_wodoh}}" ><br>
              </td>
              <td>  <input type="number" id="" name="d_wodoh" value="{{$grade->d_wodoh}}" ><br>
              </td>
              </td>
            </tr>
        </tr>
        <tr>
          <td>شرح الية عمل النظام لمستخدي النظام </td>
          <td>4</td>
              <td>  <input type="number" id="" name="a_shareh" value="{{$grade->a_shareh}}" ><br>
              </td>
              <td>  <input type="number" id="" name="b_shareh" value="{{$grade->b_shareh}}" ><br>
              </td>
              <td>  <input type="number" id="" name="c_shareh" value="{{$grade->c_shareh}}" ><br>
              </td>
              <td>  <input type="number" id="" name="d_shareh" value="{{$grade->d_shareh}}" ><br>
              </td>
              </td>
            </tr>
            <tr>
              <td>الاخراج الفني و الالتزام بنموذج كتابة التقرير المعتمد </td>
              <td>4</td>
                  <td>  <input type="number" id="" name="a_ekhraj" value="{{$grade->a_ekhraj}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="b_ekhraj" value="{{$grade->b_ekhraj}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="c_ekhraj" value="{{$grade->c_ekhraj}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="d_ekhraj" value="{{$grade->d_ekhraj}}" ><br>
                  </td>
                  </td>
                </tr>
                <tr>
                  <td>المجموع </td>
                  <td>20</td>
                  <td>    <label for="">{{$grade->a_takamol + $grade->a_seyaghah + $grade->a_wodoh + $grade->a_shareh + $grade->a_ekhraj}}</label><br>
                      <br>
                  </td> <td>    <label for="">{{$grade->b_takamol + $grade->b_seyaghah + $grade->b_wodoh + $grade->b_shareh + $grade->b_ekhraj}}</label><br>
                      <br>
                  </td> <td>    <label for="">{{$grade->c_takamol + $grade->c_seyaghah + $grade->c_wodoh + $grade->c_shareh + $grade->c_ekhraj}}</label><br>
                      <br>
                  </td> <td>    <label for="">{{$grade->d_takamol + $grade->d_seyaghah + $grade->d_wodoh + $grade->d_shareh + $grade->d_ekhraj}}</label><br>
                      <br>
                  </td>
                      </td>
                    </tr>
      </tr>
      </table>  </div>

    <div class="row">
        <div class="column">
   
          <table>
              <tr>
                <th>	المناقشة</th>
                <th>العلامة</th>
                <th>الطالب الاول</th>
                <th>الطالب الثاني</th>
                <th>الطالب الثالث</th>
                <th>الطالب الرابع</th>
              </tr>
              <tr>
            <td>	التسلسل في شرح فكرة المشروع </td>
            <td>6</td>
            <td>  <input type="number" id="" name="a_tasalsol" value="{{$grade->a_tasalsol}}" ><br>
            </td>
            <td>  <input type="number" id="" name="b_tasalsol" value="{{$grade->b_tasalsol}}" ><br>
            </td>
            <td>  <input type="number" id="" name="c_tasalsol" value="{{$grade->c_tasalsol}}" ><br>
            </td>
            <td>  <input type="number" id="" name="d_tasalsol" value="{{$grade->d_tasalsol}}" ><br>
            </td>
            </td>
              </tr>
              <tr>
                  <td>	فكرة المشروع (تقليدي، غير تقليدي)</td>
                  <td>6</td>
                  <td>  <input type="number" id="" name="a_fekra" value="{{$grade->a_fekra}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="b_fekra" value="{{$grade->b_fekra}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="c_fekra" value="{{$grade->c_fekra}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="d_fekra" value="{{$grade->d_fekra}}" ><br>
                  </td>
                  </td>
                    </tr>
              </tr>
              <tr>
                  <td>			مهارة التعامل مع النظام(المشروع)</td>
                  <td>6</td>
                  <td>  <input type="number" id="" name="a_mahara" value="{{$grade->a_mahara}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="b_mahara" value="{{$grade->b_mahara}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="c_mahara" value="{{$grade->c_mahara}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="d_mahara" value="{{$grade->d_mahara}}" ><br>
                  </td>
                  </td>
                    </tr>
              </tr>
              <tr>
                  <td>التعامل مع الكود</td>
                  <td>8</td>
                  <td>  <input type="number" id="" name="a_code" value="{{$grade->a_code}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="b_code" value="{{$grade->b_code}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="c_code" value="{{$grade->c_code}}" ><br>
                  </td>
                  <td>  <input type="number" id="" name="d_code" value="{{$grade->d_code}}" ><br>
                  </td>
                  </td>
                    </tr>
                    <tr>
                      <td>		التمكن من الاجابة على الاسئلة  </td>
                      <td>2</td>
                      <td>  <input type="number" id="" name="a_ejaba" value="{{$grade->a_ejaba}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="b_ejaba" value="{{$grade->b_ejaba}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="c_ejaba" value="{{$grade->c_ejaba}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="d_ejaba" value="{{$grade->d_ejaba}}" ><br>
                      </td>
                      </td>
                        </tr>
                        <tr>
                            <td>	الانطباع العام </td>
                            <td>2</td>
                            <td>  <input type="number" id="" name="a_entebaa" value="{{$grade->a_entebaa}}" ><br>
                            </td>
                            <td>  <input type="number" id="" name="b_entebaa" value="{{$grade->b_entebaa}}" ><br>
                            </td>
                            <td>  <input type="number" id="" name="c_entebaa" value="{{$grade->c_entebaa}}" ><br>
                            </td>
                            <td>  <input type="number" id="" name="d_entebaa" value="{{$grade->d_entebaa}}" ><br>
                            </td>
                            </td>
                              </tr>
                              
                    <tr>
                      
                          <td>المجموع </td>
                          <td>30</td>
                          <td>    <label for="">{{$grade->a_tasalsol + $grade->a_fekra + $grade->a_mahara + $grade->a_code + $grade->a_ejaba + $grade->a_entebaa}}</label><br>
                            <br>
                        </td> <td>    <label for="">{{$grade->b_tasalsol + $grade->b_fekra + $grade->b_mahara + $grade->b_code + $grade->b_ejaba + $grade->b_entebaa}}</label><br>
                            <br>
                        </td> <td>    <label for="">{{$grade->c_tasalsol + $grade->c_fekra + $grade->c_mahara + $grade->c_code + $grade->c_ejaba + $grade->c_entebaa}}</label><br>
                            <br>
                        </td> <td>    <label for="">{{$grade->d_tasalsol + $grade->d_fekra + $grade->d_mahara + $grade->d_code + $grade->d_ejaba + $grade->d_entebaa}}</label><br>
                            <br>
                        </td>
                            </td>
                            </tr>
            </tr>
            </table>  </div>
  
            <div class="row">
                <div class="column">
                  <h4>المستوى العام للمشروع</h4>
                  <label class="container">ممتاز
                    <input type="radio" checked="checked" name="mostawa" value="excellent" @if($grade->mostawa=='excellent')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">جيد جدا
                    <input type="radio" name="mostawa" value="vgood" @if($grade->mostawa=='vgood')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>                
                  <label class="container">جيد
                    <input type="radio" name="mostawa" value="good" @if($grade->mostawa=='good')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">متوسط
                    <input type="radio" name="mostawa" value="mid" @if($grade->mostawa=='mid')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>      
                  <label class="container">ضعيف
                    <input type="radio" name="mostawa" value="low" @if($grade->mostawa=='low')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>                </div>
            
              </div>
              <br>
              <button type="submit" class="button button2">Save</button>
              <button type="reset" class="button button2">Clear</button>
              <br>
              <h1 style="color: rgb(255, 255, 255);"></h1>
            </form>      

</body>
</html>


