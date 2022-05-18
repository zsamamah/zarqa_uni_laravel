<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>بوابة المشاريع الالكترونية</title>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://read.opensooq.com/wp-content/uploads/2020/08/%D8%A3%D9%81%D9%83%D8%A7%D8%B1-%D9%85%D8%B4%D8%A7%D8%B1%D9%8A%D8%B9-%D8%AA%D8%AE%D8%B1%D8%AC-%D9%86%D8%B8%D9%85-%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
h1{
color: rgb(0, 0, 0);
}
.box {
  position: relative;
  top: 100px;
  margin: auto;
  width: 20%;
  border: 7px solid #000000;
  padding: 20px;
  color: #000;
  
}
.p1{
  padding-top: 130px;
}
p{
  padding-top: 80px;
}
input[type=email],input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit]:hover {
  background-color: #45a049;
}
button[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
</head>
<body>
  <div class="bg">
<h1 class="box" align="center" >بوابة مشاريع التخرج</h1>
<br>
<p align="center">هذا الموقع مخصص لكلية تكنولوجيا المعلومات</p>

<p class="p1" align="center">ــــــــــــــــــــــــــــــــــــــــــــــــ تسجيــل الدخول ـــــــــــــــــــــــــــــــــــــــــــــ</p>


<form action="{{ route('login') }}" method="POST" align="center">
  @csrf
    {{-- <input type="text" id="id" name="id" placeholder="اسم المستخدم"> --}}
    <input id="email" type="email" placeholder="اسم المستخدم" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
    <br>
    {{-- <input type="text" id="password" name="password" placeholder="كلمة المرور"> --}}
    <input id="password" type="password" placeholder="كلمة المرور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
    <br>
    {{-- <input type="submit" value="تسجيــل الدخول"> --}}
    <button type="submit" class="btn btn-primary" >
      {{ __('Login') }}
    </button>

  
</form>
</div>


</body>
</html>
