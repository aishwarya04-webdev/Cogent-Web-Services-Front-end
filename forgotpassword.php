<?php

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style>
h2{
	margin-top:100px;
}
#div1{
	background-color:#79CDCD;
	padding:2px;
}
#div2{
	background-color:#26C281;
	padding:2px;
	
}
</style>


</head>
<body style="background-color:#EEEEEE">

<h2 class="text-center">PASSWORD Queries!!</h2><br>

<div class="container">

<div class="row">
<div id="div1" class="col col-sm-6">

<h2 class="text-center">
Forgot Password
</h2>
<div class="text-center">
<form class="form-group"> 
<input class="text-center" type="text" placeholder="enter Your Username"><br>
<br><p>Or</p>
<input class="text-center"type="email" placeholder="enter Your Mailid">
<br><br>
<input type="submit" class="btn btn-success" value="Submit">

</form>
</div>
</div>

<div id="div2" class="col col-sm-6">

<h2 class="text-center">
Reset Password
</h2>
<div class="text-center">
<form class="form-group"> 
<input class="text-center" type="password" placeholder="Password"><br>
<br><p>Or</p>
<input class="text-center"type="password" placeholder="Confirm Password">
<br><br>
<input type="submit" class="btn btn-primary" value="Reset Password">

</form>
</div>
</div>



</div>
</div>
</body>

</html>