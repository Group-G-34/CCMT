<x-header data/>
<html>
<head>
<meta charset="UTF-8">
</head>
<body >
<div style="text-align:center">
<form>
<h1>Officer Details</h1>
Name:<input type="text" name="fname"  placeholder="Firstname" maxlength="10"><br><br>
       <input type="text" name="lname" placeholder="Lastname" maxlength="10"><br><br>
Gender:<select>
<option>male</option>
<option>female</option>
</select><br><br>         
NIN:<input type="text" value="NIN" name="NIN"><br><br>
Contact:<input type="text" value="phone" name="phone_number" pattern="0-9"{10} maxlength="10"><br><br>
District:<input type="text"  value="district" name="origin"><br><br>
<input type="submit" value="register" name="register">
</form>
</div>
</body>

</html>