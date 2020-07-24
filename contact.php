<?php

?>
<!DOCTYPE html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
a{
	text-decoration:none;
	color:white;
	font-size:20px;
	font-family: 'Ranchers', cursive;
	
}
#head{
	background-color:orange;
}
#con1{
	background-image:url("https://i.pinimg.com/736x/fe/c2/b3/fec2b35a09e3218420122f4475a28ada.jpg");
}
#jumbo{
	background-color:orange;
}
</style>

</head>
<body >

<div id="head">
<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="homepage.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="product.php">Products</a>
</li>
<li class="nav-item">
<a class="nav-link-active" href="#">Contacts</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Order</a>
</li>

<li class="nav-item sm-2 " style="padding-left:620px">
<a class="nav-link" href="loginpage.php">Login</a>
</li>
<li class="nav-item sm-2">
<a class="nav-link" href="createacount.php">Create account</a>
</li>


</ul>
</div><!-- finish head -->

<div class="container" style="background-color:#FFB6C1	">

<h2>Don't be a Stranger</h2>
<pre><h3>   Just say a hello</h3></pre>

<div class="row">

<div class="col offset-sm-1 col-sm-5">
<p>Have some queries?</p>
<h4>Feel free to contact us,we feel happy to provide our service for you :)</h4>
<br><hr><br>
<p>Need help ?</p>
<p><b> abcpurchase@gmail.com</b></p>
<br><hr><br>
<p>To make a call</p>
<p><b>+91 1234567801     </b></p>



</div><!-- end col1-->

<div class="col offset-sm-1 col-sm-5">
<form>
<div class="form-group">

<label for="username">Name</label>
<input type="text" id="username" class="form-control" placeholder="enter your name"><br>

<label for="useremail">Email Address</label>
<input type="email" id="useremail" class="form-control" placeholder="enter your email address"><br>

<label for="userphone">Contact</label>
<input type="tel" id="userphone" class="form-control" placeholder="enter your contact number"><br>

<label for="userquery">Query</label>
<textarea id="userquery" class="form-control" placeholder="enter your query here!!" rows="4" cols="6"></textarea><br>

<input type="submit" class="btn btn-success" value="Send">
</div>
</form>


</div><!-- end col2-->

</div><!-- end row-->
</div><!-- container end -->
<div class="footer">
<div id="jumbo" class="jumbotron">
<div class="row">
<div class="col">

<div class="text-center">

<h2>For Queries!</h2>
<p><span><i class="fa fa-envelope" style="font-size:25px"></i></span> ecommercesit@gmail.com</p>
<p><span><i class="fa fa-phone" style="font-size:25px"></i></span> +91 1238569474</p>
<p><span><i class="fa fa-instagram" style="font-size:25px"></i></span> For product delivery</p>
</div>
</div ><!--end of class -->
</div><!--row end -->

<div class="row">
<div class="col">
<p class="text-center" >&copy; copyrights <?php echo date("Y"); ?></p>
</div ><!--end of class -->
</div>



</div><!-- jumbo end-->
</div><!-- footer end-->

</body>




</html>










