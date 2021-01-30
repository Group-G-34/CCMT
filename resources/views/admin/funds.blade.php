@extends('layouts')

@section('content')
<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<div class="fund" style="text-align:center">
<h1>REGISTER FUNDS</h1>
<form action="funds" method="POST">
@csrf
Donated BY:<input type="text" name="donated_by" placeholder="donation"></br></br>
Amount:<input type="text" name="amount" placeholder="amount"></br></br>
date:<input type="text" name="date_of_donation" placeholder="Date of donation"></br></br>
<input type="submit" value="submit" name="submit">
</form>
@if(session('donated_by'))
<h3 style="text-align:center;color:green">{{session('donated_by')}} funds have been registered</h3>
@endif
</div>
</body>
</html>
@stop