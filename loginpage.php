<?php 
?>
<!DOCTYPE html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
body{
	
	background-color:white;
	overflow-x:hidden;
}
input{
	
	border-radius:5px;
}
form{
	
	margin-left:450px;
	margin-top:100px;
}
h2{
	margin-left:400px;
	margin-top:200px;
}
#para{
	margin-left:400px;
	
}
img{
	margin-top:100px;
}
#col1{
	
	background-image:url("https://image.freepik.com/free-vector/fruit-vegetables-background_23-2148488960.jpg");
	background-size:cover;
}
#para1{
	font-size:20px;
	color:black;
	
	
}
</style>




</head>

<body>

<div class="row">
<div id="col1" class="col col-sm-6">

<h2> <i>WELCOME TO THE LOGIN PAGE</i></h2>
<p id="para">Please! Create an account if you are not a registered user :)</p>
<form method="post" action="">

Username<br>
<input type="text" placeholder="ENTER THE USERNAME" name="u_name">
<br><br>

Password<br>
<input type="password" placeholder="ENTER YOUR PASSWORD" name="pass_name">
<br><br>

<a href="createacount.php"><input type="button" class="bg-primary" value="Create an account"></a>
<br><br>
<a href="forgotpassword.php"><input type="button" class="bg-primary" value="Forgot Password"></a>
<br><br>
<input class="bg-success"type="submit" value="Login">
</form>

</div>

<div id="col2" class="col offset-sm-1 col-sm-5">

<p id="para1" ><i>No more getting stuck in traffic jams, paying for parking, standing in long queues and carrying heavy bags – get everything you need, when you need, right at your doorstep.</i></p>
<hr>
<img src="https://thumbs.dreamstime.com/b/online-grocery-store-online-grocery-store-shopping-people-cart-supermarket-baskets-online-market-app-vector-concept-157461867.jpg" alt="" width="550px" height="500px">

</div>

</div>



</body>

</html>






