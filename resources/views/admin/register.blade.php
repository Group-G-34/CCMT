@extends('layouts')
@section('content')
<html>
<head>
<meta charset="UTF-8">
</head>
<body >
<div style="text-align:center" action="reg" method="POST">
<form>
@csrf
<h1>Officer Details</h1>
Name:<input type="text" name="fname"  placeholder="Firstname" maxlength="10"><br><br>
       <input type="text" name="lname" placeholder="Lastname" maxlength="10"><br><br>
Gender:<select>
<option>male</option>
<option>female</option>
</select><br><br>         
NIN:<input type="text"  name="NIN" placeholder="NIN"><br><br>
Contact:<input type="text" name="phone_number" placeholder="phone number" maxlength="10"><br><br>
District:<input type="text"  name="origin" placeholder="district"><br><br>
<input type="submit" value="register" name="register">
</form>
</div>
@if(session('fname'))
<h3 style="text-align:center;color:green"><script>var message=function alert(){ {{session('fname')}}Has been registered succesfully;}alert();
console.log("message");
</script></h3>
@endif
</body>

</html>
@stop