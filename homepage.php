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
	background-color:#FFB6C1	;
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
<a class="nav-link-active" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="product.php">Products</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php">Contacts</a>
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

<div id="con1" class="container">
<h2>ABOUT US <h2>
<div class="row">
<div class="col col-sm-6">
<h5>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</h5>

</div><!-- end of col1-->

<div class="col col-sm-6">

<img src="https://cdn.nohat.cc/thumb/f/720/4566154819403776.jpg" alt="pic" width="500px" height="450px">

</div><!-- end of col1-->

</div><!--end of row -->

<h2>OUR TEAM</h2>
<div class="row">

<div class="col col-sm-4">

<div class="card">
<img src="data:image/jpeg;base64,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" alt="">
<div class="body text-center">
<h5 class="card-title">Owner</h5>
<p class="card-text">She is the owner of this world wide e-commerce site</p>

</div><!--card body  -->
</div><!-- card1 -->
</div><!--col1 -->

<div class="col col-sm-4">


<div class="card">

<img src="https://images.vexels.com/media/users/3/127303/isolated/preview/d2d88005bdd8195bb5930634e712c8de-businessman-profession-cartoon-by-vexels.png" alt="" height="230px">
<div class="body text-center">
<h5 class="card-title">Co-Owner</h5>
<p class="card-text">He is the co-owner of this world wide e-commerce site</p>

</div><!--card body  -->
</div><!-- card2 -->

</div><!--col2 -->

<div class="col col-sm-4">

<div class="card">

<img src="https://i.pinimg.com/736x/50/28/a5/5028a51ccd4c314c04f655c77cb1d3d2.jpg" alt="" height="230px">
<div class="body text-center">
<h5 class="card-title">Co-Owner</h5>
<p class="card-text">Brother and sister,they are also the co-owner of this site</p>

</div><!--card body  -->


</div><!-- card3 -->

</div><!--col3 -->

</div><!--end row -->


</div><!-- container end  -->


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










