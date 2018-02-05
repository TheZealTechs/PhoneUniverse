<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Home.css" type="text/Css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $("btn-nav").click(function(){
        $("p").slideDown();
    });
    $("#mobile_drop").mouseenter(function () {
        $("#mobile_dropdown").css("display","block");
    });
    $("#mobile_drop").click(function () {
        $("#mobile_dropdown").css("display","none");
    });
});
</script>

    <style>
        #mobile_dropdown {
            background-color: #222;
            border: 2px solid;
            border-color: #080808;
            height: 501px;
            display: none;
        }
        table{
            text-align: center;
        }
        .t1{
            margin-right: 10px;
        }

        .bot_nav_bar_content{
            margin-left: 250px;
        }

        .img-thumbnail{
            max-width: 21%;
        }

        .bottom{
            background-color: #080808;
            border-color:#222;
            height: 150px;
            clear: left;
        }

        .ad{
            width: 210px;
            height: 421px;
        }

        .dropdown_a{
            text-decoration: none;
        }

        .p_dropdown_text{
            color: white;
        }

    </style>
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Mobile Shopping</a>
    </div>
    <ul class="nav navbar-nav nav-tabs">
      <li class="active"><a href="#">Home</a></li>
	  <li id="mobile_drop"><a href="#">Mobile</a></li>
	  <li><a href="#">Repair</a></li>
	  <li><a href="#">Accessories</a></li>
	  <li><a href="#">Sell</a></li>
	  <li><a href="#">Buy Used</a></li>
    </ul>
	<form class="navbar-form navbar-left" action="/action_page.php">
      <div class="center_Search_Bar">
	  <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
	  </div>
    </form>
	<button class="btn btn-success navbar-btn"  data-toggle="modal" data-target="#myModal">Sign up</button>
	
	<div id="myModal" class="modal fade" role="dialog" id="demo" id="demo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
	<div class="modal-dialog"> 
	<!-- modals content -->
	
	<div class="image_contanier"> <!-- for add a image in modals --> 
	<div class="modal-header"> <!-- header of the Modals -->
	<img src="ManSYmbol.png" class="img_avator"/>
	<div class="close" data-dismiss="modal"> <!-- this div is used for closing a Sign up form -->
	<i class="fa fa-times" aria-hidden="true"></i> <!-- Icon for close a Signup form -->
	
	</div> <!-- close a data-dismiss div" -->
	
	</div> <!-- header a div -->
	
	 <form class="form-vertical" action="/action_page.php">
    <div class="form-group">
      <label for="Firt Name">First Name:</label>
      <input type="text" class="form-control" id="First Name" placeholder="First Name " name="First Name">
    </div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>
      <input type="text" class="form-control" id="Last Name" placeholder="Last Name" name="Last Name">
    
	
	</div>
	
	 <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	  <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
	<div class="form-group">
      <label for="pwd"> Confirm Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Confirm Password" name="pwd">
    </div>
	<button type="button" class="btn btn-success btn-lg">Submit</button>
	</div> <!-- close a container div -->
	
	</div> <!-- close a modal-dialog div -->
	
	
	</div> <!-- close  a my modals div -->
	
<button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#demo">
  Login
</button>

  
<div class="modal fade" id="demo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
 	 <form class="form-vertical" action="/action_page.php">
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
	
      <div class="modal-footer">
	  <p class="text-center">
	  <button type="button" class="btn btn-success btn-lg">Continue</button>
        </p>
		
		<span class="toggle-forgot-pwd rf">
                <a class="js-btn-forgotpw" href="/reset_password" rel="nofollow">Forgot Password</a>
           
			</span>
      </div>
    </div>
	
	</div>
	
</div>
</div>
</div>
</nav>
<!-- mobile dropdown div-->
<div class="row">
    <div  id="mobile_dropdown" class="mobile_dropdown col-sm-12 ">
        <div class="col-sm-2 iphone-panel">
            <div class="row">
                <img src="https://images.cellphonerepair.com/wp-content/uploads/2016/10/iphone-drop@2x.png" alt="">
                <div class="phone-list1">
                    <p class="p_dropdown_text"><a class="dropdown_a" href="#">IPhone X</a></p>
                    <p class="p_dropdown_text"><a class="dropdown_a" href="#">IPhone 8 PLUS</a></p>
                    <p class="p_dropdown_text"><a href="#">IPhone 8</a></p>
                    <p class="p_dropdown_text"><a href="#">IPhone 7 PLUS</a></p>
                    <p class="p_dropdown_text"><a href="#">IPhone 7</a></p>
                    <p class="p_dropdown_text"><a href="#">IPhone SE</a></p>
                    <p class="p_dropdown_text"><a href="#">IPhone 6s PLUS</a></p>
                    <p class="p_dropdown_text"><a href="#">IPhone 6s</a></p>
                    <p class="p_dropdown_text"><a href="#">All Iphones</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile dropdown div-->
<div class="row">
  <div class="col-sm-2">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <!--<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>-->
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
		  <li style="background-color:green;"><a href="#">CATERIOES</a></li>
            <li><a href="#">spare Part</a></li>
            <li><a href="#">New In Store</a></li>
            <li><a href="#"> On Discount</a></li>
            <li><a href="#">Our Branch</a></li>
            <li><a href="#">Compare Phone</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-8">
  <div class="row">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner carousel-zoom">
        <div class="active item"><img class="img-responsive" src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
        <div class="item"><img class="img-responsive" src="https://images.unsplash.com/photo-1445280471656-618bf9abcfe0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
        <div class="item"><img class="img-responsive" src="https://images.unsplash.com/photo-1445462657202-a0893228a1e1?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
       </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
    <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
</div>
  
 </div>
</div>

<div class="col-sm-11">
<div class="row">

<ul class="list-inline gallery" style="margin-left:220px; margin-top:20px;">    
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/1"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/2"></li>    
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/3"></li>    

<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>  
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
<li><img class="thumbnail zoom" src="https://placeimg.com/110/110/abstract/4"></li>
</ul>
</div>
</div>
</div>

 <nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav nav-tabs ">
      <li ><a class="bot_nav_bar_content" href="#"><span class="glyphicon glyphicon-wrench"></span>  Specs & price </a></li>
      <li ><a class="bot_nav_bar_content" href="#">Reviews</a></li>
      <li ><a class="bot_nav_bar_content" href="#">news & Gossip</a></li>
  </ul>
 </nav>
<!-- ad -->
<div class="col-sm-2">
    <div class="row">
        <img class="img-rounded ad" id="ad" src="https://1673965826.rsc.cdn77.org/userfiles/products/n_962-3.jpg">
    </div>
</div>
<!-- ad -->
<div class="col-sm-2 t1" id="t1">
    <div class="row ">
<table class="table table-hover table-bordered">
    <tr style="background-color: #222222;color: #9d9d9d"><td>Specs & price</td></tr>
    <tr><td><a href="#">Iphone</a></td></tr>
    <tr><td><a href="#">Samsung</a></td></tr>
    <tr><td><a href="#">OnePlus</a></td></tr>
    <tr><td><a href="#">Motorolla</a></td></tr>
    <tr><td><a href="#">Xaiomi</a></td></tr>
    <tr><td><a href="#">Essentail Phone</a></td></tr>
    <tr><td><a href="#">HTC</a></td></tr>
    <tr><td><a href="#">LG</a></td></tr>
    <tr><td><a href="#">Google</a></td></tr>
    <tr><td><a href="#">Razer Phones</a></td></tr>
</table>
    </div>
</div>

<div class="col-sm-2 t1">
    <div class="row">
        <table class="table table-hover table-bordered">
            <tr style="background-color: #222222;color: #9d9d9d"><td>Reviews</td></tr>
            <tr><td><a href="#">Iphone</a></td></tr>
            <tr><td><a href="#">Samsung</a></td></tr>
            <tr><td><a href="#">OnePlus</a></td></tr>
            <tr><td><a href="#">Motorolla</a></td></tr>
            <tr><td><a href="#">Xaiomi</a></td></tr>
            <tr><td><a href="#">Essentail Phone</a></td></tr>
            <tr><td><a href="#">HTC</a></td></tr>
            <tr><td><a href="#">LG</a></td></tr>
            <tr><td><a href="#">Google</a></td></tr>
            <tr><td><a href="#">Razer Phones</a></td></tr>
        </table>
    </div>
</div>

<div class="col-sm-4">
    <div class="row">
        <table class="table table-hover table-bordered">
            <tr style="background-color: #222222;color: #9d9d9d"><td>New & Gossips</td></tr>
            <tr><td><a href="#"><img class="img-thumbnail" src="https://i.ytimg.com/vi/IpodV0kti1M/maxresdefault.jpg">OnePlus 6 Concept 2018 Full Phone</a></td></tr>
            <tr><td><a href="#"><img class="img-thumbnail" src="https://i.ytimg.com/vi/IpodV0kti1M/maxresdefault.jpg">OnePlus 6 Concept 2018 Full Phone</a></td></tr>
            <tr><td><a href="#"><img class="img-thumbnail" src="https://i.ytimg.com/vi/IpodV0kti1M/maxresdefault.jpg">OnePlus 6 Concept 2018 Full Phone</a></td></tr>
            <tr><td><a href="#"><img class="img-thumbnail" src="https://i.ytimg.com/vi/IpodV0kti1M/maxresdefault.jpg">OnePlus 6 Concept 2018 Full Phone</a></td></tr>
            <tr><td><a href="#"><img class="img-thumbnail" src="https://i.ytimg.com/vi/IpodV0kti1M/maxresdefault.jpg">OnePlus 6 Concept 2018 Full Phone</a></td></tr>
        </table>
    </div>
</div>
<!-- ad -->



<div class="row">
<div class="col=sm-11 bottom">


    </div>
</div>
</body>
 </html>
