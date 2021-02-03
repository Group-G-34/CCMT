
<html>
<head>
<meta charset="utf-8"/>
<title>covid case management tool</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="layout.css">
</head>
<body>
<div id="wrapper">
    <div class="overlay"></div>
<navbar class="beck" id="sidebar-wrapper" role="navigation">
<ul class="nav sidebar-nav">
<li class="sidebar-brand">
<a href="home">CCMS</a>
</li>
<li>    
<a href="funds">Funds</a>
</li>
<li>
<a href="register">Register health officers</a>
</li>
<li>
<a href="patient">Patient list</a></li>
<li>
<a href="pay">Payment</a>
</li>
</ul>
</navbar>
</div>

<div>
@yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>