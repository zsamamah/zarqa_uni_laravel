<!DOCTYPE html>
<html  dir="rtl" lang="ar">
<head>
<title>Mark</title>
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
  <label><h1>name project</h1></label>
  
<table class="table2" align='center'>
    <tr>
      <th>اسم الطالب</th>
      <th>الرقم الجامعي</th>
      <th>القسم</th>
      <th>حذف</th>
    </tr>
    <tr>
      <td><label>s1</label></td>
      <td><label>20....</label></td>
      <td><label>......</label></td>

      <td>        <input type="submit" value="Submit">
       </td>
    </tr>
    <tr>
        <td><label>s2</label></td>
        <td><label>20....</label></td>
        <td><label>......</label></td>
        <td>        <input type="submit" value="Submit">
        </td>
    </tr>
    <tr>
        <td><label>s3</label></td>
        <td><label>20....</label></td>
        <td><label>......</label></td>
        <td>        <input type="submit" value="Submit">
        </td>
    </tr>
    <tr>
        <td><label>s4</label></td>
      <td><label>20....</label></td>
      <td><label>......</label></td>
      <td>        <input type="submit" value="Submit">
      </td>
  </tr>
  </table>
</div>

<form method="POST" action="{{ route('update-marks',$project['id']) }}">
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
          <td>  <input type="number" id="" name="a_takamol" value="{{$mark->a_takamol}}" ><br>
          </td>
          <td>  <input type="number" id="" name="b_takamol" value="{{$mark->b_takamol}}" ><br>
          </td>
          <td>  <input type="number" id="" name="c_takamol" value="{{$mark->c_takamol}}" ><br>
          </td>
          <td>  <input type="number" id="" name="d_takamol" value="{{$mark->d_takamol}}" ><br>
          </td>
          </td>
        </tr>
        <tr>
            <td>الصياغة اللغوية ودقتها </td>
            <td>4</td>
                <td>  <input type="number" id="" name="a_seyaghah" value="{{$mark->a_seyaghah}}" ><br>
                </td>
                <td>  <input type="number" id="" name="b_seyaghah" value="{{$mark->b_seyaghah}}" ><br>
                </td>
                <td>  <input type="number" id="" name="c_seyaghah" value="{{$mark->c_seyaghah}}" ><br>
                </td>
                <td>  <input type="number" id="" name="d_seyaghah" value="{{$mark->d_seyaghah}}" ><br>
                </td>
                </td>
              </tr>
        </tr>
        <tr>
            <td>وضوح منهجية العمل</td>
            <td>4</td>
                <td>  <input type="number" id="" name="a_wodoh" value="{{$mark->a_wodoh}}" ><br>
                </td>
                <td>  <input type="number" id="" name="b_wodoh" value="{{$mark->b_wodoh}}" ><br>
                </td>
                <td>  <input type="number" id="" name="c_wodoh" value="{{$mark->c_wodoh}}" ><br>
                </td>
                <td>  <input type="number" id="" name="d_wodoh" value="{{$mark->d_wodoh}}" ><br>
                </td>
                </td>
              </tr>
        </tr>
        <tr>
            <td>شرح الية عمل النظام لمستخدي النظام </td>
            <td>4</td>
                <td>  <input type="number" id="" name="a_shareh" value="{{$mark->a_shareh}}" ><br>
                </td>
                <td>  <input type="number" id="" name="b_shareh" value="{{$mark->b_shareh}}" ><br>
                </td>
                <td>  <input type="number" id="" name="c_shareh" value="{{$mark->c_shareh}}" ><br>
                </td>
                <td>  <input type="number" id="" name="d_shareh" value="{{$mark->d_shareh}}" ><br>
                </td>
                </td>
              </tr>
              <tr>
                <td>الاخراج الفني و الالتزام بنموذج كتابة التقرير المعتمد </td>
                <td>4</td>
                    <td>  <input type="number" id="" name="a_ekhraj" value="{{$mark->a_ekhraj}}" ><br>
                    </td>
                    <td>  <input type="number" id="" name="b_ekhraj" value="{{$mark->b_ekhraj}}" ><br>
                    </td>
                    <td>  <input type="number" id="" name="c_ekhraj" value="{{$mark->c_ekhraj}}" ><br>
                    </td>
                    <td>  <input type="number" id="" name="d_ekhraj" value="{{$mark->d_ekhraj}}" ><br>
                    </td>
                    </td>
                  </tr>
                  <tr>
                    <td>المجموع </td>
                    <td>20</td>
                    <td>    <label for="">{{$mark->a_takamol + $mark->a_seyaghah + $mark->a_wodoh + $mark->a_shareh + $mark->a_ekhraj}}</label><br>
                        <br>
                    </td> <td>    <label for="">{{$mark->b_takamol + $mark->b_seyaghah + $mark->b_wodoh + $mark->b_shareh + $mark->b_ekhraj}}</label><br>
                        <br>
                    </td> <td>    <label for="">{{$mark->c_takamol + $mark->c_seyaghah + $mark->c_wodoh + $mark->c_shareh + $mark->c_ekhraj}}</label><br>
                        <br>
                    </td> <td>    <label for="">{{$mark->d_takamol + $mark->d_seyaghah + $mark->d_wodoh + $mark->d_shareh + $mark->d_ekhraj}}</label><br>
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
                <th>	الأداء العام خلال انجاز المشروع</th>
                <th>العلامة</th>
                <th>الطالب الاول</th>
                <th>الطالب الثاني</th>
                <th>الطالب الثالث</th>
                <th>الطالب الرابع</th>
              </tr>
              <tr>
            <td>ايجاد الحلول للمشاكل التي اعترضت المشروع</td>
            <td>5</td>
                <td>  <input type="number" id="" name="a_holol" value="{{$mark->a_holol}}" ><br>
                </td>
                <td>  <input type="number" id="" name="b_holol" value="{{$mark->b_holol}}" ><br>
                </td>
                <td>  <input type="number" id="" name="c_holol" value="{{$mark->c_holol}}" ><br>
                </td>
                <td>  <input type="number" id="" name="d_holol" value="{{$mark->d_holol}}" ><br>
                </td>
                </td>
              </tr>
              <tr>
                  <td>الاطلاع على المصادر العلمية والمطالعة</td>
                  <td>4</td>
                      <td>  <input type="number" id="" name="a_ettelah" value="{{$mark->a_ettelah}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="b_ettelah" value="{{$mark->b_ettelah}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="c_ettelah" value="{{$mark->c_ettelah}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="d_ettelah" value="{{$mark->d_ettelah}}" ><br>
                      </td>
                      </td>
                    </tr>
              </tr>
              <tr>
                  <td>الجهد المبذول</td>
                  <td>4</td>
                      <td>  <input type="number" id="" name="a_johod" value="{{$mark->a_johod}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="b_johod" value="{{$mark->b_johod}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="c_johod" value="{{$mark->c_johod}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="d_johod" value="{{$mark->d_johod}}" ><br>
                      </td>
                      </td>
                    </tr>
              </tr>
              <tr>
                  <td>الابداع في اخراج المشروع للواقع</td>
                  <td>4</td>
                      <td>  <input type="number" id="" name="a_ebdah" value="{{$mark->a_ebdah}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="b_ebdah" value="{{$mark->b_ebdah}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="c_ebdah" value="{{$mark->c_ebdah}}" ><br>
                      </td>
                      <td>  <input type="number" id="" name="d_ebdah" value="{{$mark->d_ebdah}}" ><br>
                      </td>
                      </td>
                    </tr>
                    <tr>
                      <td>	سهولة الاستخدام </td>
                      <td>4</td>
                          <td>  <input type="number" id="" name="a_sohola" value="{{$mark->a_sohola}}" ><br>
                          </td>
                          <td>  <input type="number" id="" name="b_sohola" value="{{$mark->b_sohola}}" ><br>
                          </td>
                          <td>  <input type="number" id="" name="c_sohola" value="{{$mark->c_sohola}}" ><br>
                          </td>
                          <td>  <input type="number" id="" name="d_sohola" value="{{$mark->d_sohola}}" ><br>
                          </td>
                          </td>
                        </tr>
                        <tr>
                            <td>التسلسل في شرح فكرة المشروع</td>
                            <td>4</td>
                                <td>  <input type="number" id="" name="a_tasalsol" value="{{$mark->a_tasalsol}}" ><br>
                                </td>
                                <td>  <input type="number" id="" name="b_tasalsol" value="{{$mark->b_tasalsol}}" ><br>
                                </td>
                                <td>  <input type="number" id="" name="c_tasalsol" value="{{$mark->c_tasalsol}}" ><br>
                                </td>
                                <td>  <input type="number" id="" name="d_tasalsol" value="{{$mark->d_tasalsol}}" ><br>
                                </td>
                                </td>
                              </tr>
                              
                    <tr>
                        <td>			الالتزام باللقاءات الاسبوعية </td>
                        <td>5</td>
                            <td>  <input type="number" id="" name="a_eltezam" value="{{$mark->a_eltezam}}" ><br>
                            </td>
                            <td>  <input type="number" id="" name="b_eltezam" value="{{$mark->b_eltezam}}" ><br>
                            </td>
                            <td>  <input type="number" id="" name="c_eltezam" value="{{$mark->c_eltezam}}" ><br>
                            </td>
                            <td>  <input type="number" id="" name="d_eltezam" value="{{$mark->d_eltezam}}" ><br>
                            </td>
                            </td>
                          </tr>
                        <tr>
                          <td>المجموع </td>
                          <td>30</td>
                          <td>    <label for="">{{$mark->a_holol + $mark->a_ettelah + $mark->a_johod + $mark->a_ebdah + $mark->a_sohola + $mark->a_tasalsol + $mark->a_eltezam}}</label><br>
                              <br>
                          </td> <td>    <label for="">{{$mark->b_holol + $mark->b_ettelah + $mark->b_johod + $mark->b_ebdah + $mark->b_sohola + $mark->b_tasalsol + $mark->b_eltezam}}</label><br>
                              <br>
                          </td> <td>    <label for="">{{$mark->c_holol + $mark->c_ettelah + $mark->c_johod + $mark->c_ebdah + $mark->c_sohola + $mark->c_tasalsol + $mark->c_eltezam}}</label><br>
                              <br>
                          </td> <td>    <label for="">{{$mark->d_holol + $mark->d_ettelah + $mark->d_johod + $mark->d_ebdah + $mark->d_sohola + $mark->d_tasalsol + $mark->d_eltezam}}</label><br>
                              <br>
                          </td>
                              </td>
                            </tr>
            </tr>
            </table>  </div>
  
<div class="row">
                <div class="column2">
                  <h4>هل المشروع مؤهل للمناقشة</h4>
                  <label class="container">نعم
                    <input type="radio" name="monakasha" value="yes" @if($mark->monakasha=='yes')@checked(true)@endif >
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">لا
                    <input type="radio" name="monakasha" value="no" @if($mark->monakasha=='no')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>                </div>
                
                <div class="column2">
                  <h4>هل ترشح المشروع للمنافسة ونيل الجوائز وذلك على مستوى الكلية</h4>
                  <label class="container">نعم
                    <input type="radio" name="k_jawayez" value="yes" @if($mark->k_jawayez=='yes')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">لا
                    <input type="radio" name="k_jawayez" value="no" @if($mark->k_jawayez=='no')@checked(true)@endif>
                    <span class="checkmark"></span>
                  </label>                </div>
                
                <div class="column2">
<h4>هل ترشح المشروع للمنافسة ونيل الجوائز وذلك على مستوى الجامعه</h4>
<label class="container">نعم
  <input type="radio" name="j_jawayez" value="yes" @if($mark->j_jawayez=='yes')@checked(true)@endif>
  <span class="checkmark"></span>
</label>
<label class="container">لا
  <input type="radio" name="j_jawayez" value="no" @if($mark->j_jawayez=='no')@checked(true)@endif>
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


