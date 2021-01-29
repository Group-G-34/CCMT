<h1>Login</h1>

<form action="users" method="POST">
@csrf
User Name:<input type="text" name="username" placeholder="enter username"/><br>
<span>@error('username'){{$message}}@enderror</span><br>
Password:<input type="text" name="password"placeholder="enter password"/><br>
<span>@error('password'){{$message}}@enderror<br>
<button type="submit">Login</button>
</form>